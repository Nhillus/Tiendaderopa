<?php

namespace App\Http\Controllers\Paypal;

use Illuminate\Support\Facades\Auth;
use Cart;
use App\Product;
use App\Models\Compra;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use PayPal\Api\PaymentExecution;



class PaymentController extends Controller
{
    private $Itemsid;
    private $apiContext;

    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );

        $this->apiContext->setConfig($payPalConfig['settings']);
    }

    // ...

    public function payWithPayPal(request $Request)
    {
        
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $amount = new Amount();
        $amount->setTotal($Request->Subtotal);
        $amount->setCurrency('CHF');

        $transaction = new Transaction();
        $transaction->setAmount($amount);
        // $transaction->setDescription('See your IQ results');

        $callbackUrl = url('/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }
     public function saveCompra(Request $request) {
        //dd($request->Subtotal);
        $float_value_of_Subtotal = floatval($request->Subtotal);
        //echo $float_value_of_var; // 122.34343
        $cartItems = $request->cartItems;
        foreach($cartItems as $item) {
            $Compra = Compra::create([
                'monto' => $float_value_of_Subtotal,
                'tipoDePago' => 'P',
                'status' => 'por enviar',
                'user_id' => Auth::user()->id,
                'products_id'=> $item,
            ]);
            

        }
        index();
        
    }

    public function payPalStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
            return view('/PayPal/result')->with('status',$status);
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() === 'approved') {
            $cartItems = Cart::session(Auth::user()->id)->getContent();
            //dd($cartItems);
            $Subtotal=Cart::getSubTotal();
            foreach($cartItems as $item) {
                //dd($item->id);  
                $Compra = Compra::create([
                    'monto' => $Subtotal,
                    'tipoDePago' => 'P',
                    'status' => 'por enviar',
                    'user_id' => Auth::user()->id,
                    'products_id'=> $item->id,
                ]);
            }
            //dd($Compra);
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            return view('/PayPal/result')->with('status',$status);
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        return view('/PayPal/result')->with('status',$status);
    }
}

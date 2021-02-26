<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SecurionPay\SecurionPayGateway;
use SecurionPay\Exception\SecurionPayException;
use App\Product;

class SecurionPayController extends Controller
{
    //
    public function pagar(Request $request) {
        $gateway = new SecurionPayGateway('sk_test_bNKTo9L5eIrN2avF2B4J6SfK');
        //dd($request);
        //dd($request->Objecto);
        $Product = Product::findOrFail($request->Objecto);
        //dd($Product);
        //dd($Product->offer_price*100);
        $request = array(
            'amount' => $Product->offer_price*100,
            'currency' => 'EUR',
            'card' => array(
                'number' => '4242424242424242',
                'expMonth' => 11,
                'expYear' => 2022
            )
        );

        //dd($request);
        //dd($gateway);

        try {
            $charge = $gateway->createCharge($request);
            //dd($charge);

            // do something with charge object - see https://securionpay.com/docs/api#charge-object
            $chargeId = $charge->getId();
            

        } catch (SecurionPayException $e) {
            // handle error response - see https://securionpay.com/docs/api#error-object
            $errorType = $e->getType();
            $errorCode = $e->getCode();
            $errorMessage = $e->getMessage();
        }
    }
}

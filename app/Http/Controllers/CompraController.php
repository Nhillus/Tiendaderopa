<?php

namespace App\Http\Controllers;


use App\Models\Compra;
use App\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class CompraController extends Controller
{
    //
    public function index() {
        $Products = Compra::buysFromUser();
        return view('orders')->with('Products', $Products);
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

   
}

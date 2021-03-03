<?php

namespace App\Http\Controllers\klikandpay;

use App\Http\Controllers\Controller;
use Local\Modules\Klikandpay\Klikandpay;
use Illuminate\Http\Request;

class klikandpaycontroller extends Controller
{
    //
    public function index() {
        return view("Klik\klikandpay");
    }

    public function pagar(Request $request) {
        //dd($request);

        $Klik = new Klikandpay;
        $Klik->pay($request);
        return $Klik;



    }
}

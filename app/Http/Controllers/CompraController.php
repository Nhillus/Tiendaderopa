<?php

namespace App\Http\Controllers;


use App\Models\Compra;
use App\Product;
use App\Models\User;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    //
    public function index() {
        $Products = Compra::buysFromUser();
        return view('orders')->with('Products', $Products);
    }

   
}

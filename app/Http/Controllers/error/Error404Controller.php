<?php

namespace App\Http\Controllers\error;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Error404Controller extends Controller
{
    //
    public function redireccion() {
        return view('errors.404');
        
    }
}

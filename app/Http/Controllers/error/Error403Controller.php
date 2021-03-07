<?php

namespace App\Http\Controllers\error;

use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Error403Controller extends Controller
{
    //
    public function redireccion() {
        $exepction = collect(['message' => 'No puede acceder a este servicio']);
        return view('errors.403')->with('exception',$exepction);
        
    }
}

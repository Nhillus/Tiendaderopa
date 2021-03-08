<?php

namespace App\Http\Controllers;


use App\Models\UserDetails;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;


class UserDetailsController extends Controller
{
    public function index()
    {
        
        if(Auth::check())$UserDetails = UserDetails::findOrFail(Auth::user()->id);
        else  $UserDetails = null;

        return view('details')->with('UserDetail', $UserDetails);
    }




    public function store(Request $request)
    {
        $data = request()->all();

        UserDetails::create([
            'saludo' => $data['saludo'],
            'primer_nombre' => $data['primer_nombre'],
            'primer_apellido' => $data['primer_apellido'],
            'correo_eletronico' => $data['correo_eletronico'],
            'idioma' => $data['idioma'],
            'pueblo_favorito' => $data['pueblo_favorito'],
        ]);

    }

    public function update(Request $request)
    {
        $array=$request->request->all();

        $UserDetails = UserDetails::findOrFail(Auth::user()->id);
        $UserDetails->saludo = $request->user_prefix;
        $UserDetails->primer_nombre = $request->user_first_name;
        $UserDetails->primer_apellido = $request->user_last_name;
        $UserDetails->correo_eletronico = $request->user_email;
        $UserDetails->idioma = $request->user_language;
        $UserDetails->pueblo_favorito = $request->user_favorite_city;
        $UserDetails->save();

        return redirect()->action([HomeController::class, 'index']);
;    }
}

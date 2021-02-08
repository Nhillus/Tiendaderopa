<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
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
        $user_id = User::findOrFail($request->user_id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $user->password;
        $user->id_rol = $request->id_rol;

        $user->save();

        return $user;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }
}

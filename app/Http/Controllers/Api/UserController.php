<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;

class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        $user = User::all();
        return $user;
        //Esta función nos devolvera todas las tareas que tenemos en nuestra BD
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        $iduser=$user->id;
        dd($iduser);

        $UserDetails = new UserDetails;
        $UserDetails->name = Input::get('name');
        
        $UserDetails->save();
        
        //Esta función guardará las tareas que enviaremos mediante vuejs
    }
    public function show(Request $request)
    {
        $user = User::findOrFail($request->id);
        return $user;
        //Esta función devolverá los datos de una tarea que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function update(Request $request)
    {
        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $user->password;
        $user->id_rol = $request->id_rol;

        $user->save();

        return $user;
        //Esta función actualizará la tarea que hayamos seleccionado
       
    }

    public function destroy(Request $request)
    {
        $user = User::destroy($request->id);
        return $user;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}

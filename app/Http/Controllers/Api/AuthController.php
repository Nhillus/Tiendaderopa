<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;

class AuthController extends Controller
{
    //
    public function login(UserLoginRequest $request)
    {
        $passWordGrantClient = Client::where('password_client', 1)->first();
        

        $data = [
                'grant_type' => 'password',
                'client_id' => $passWordGrantClient->id,
                'client_secret' => $passWordGrantClient->secret,
                'username' => $request->email,
                'password' => $request->password,
                'scope' => '*',
        ];
        $tokenRequest = Request::create('/oauth/token','post',$data);
        return app()->handle($tokenRequest);
    }

    public function register(UserRegisterRequest $request)
    {
        $user = User::create([
        'email' => $request->email,
        'password' => Hash::Make($request->password)
        ]);

        if(!$user)
        {
            return response()->json(['succes'=>false, "message" => 'Registration Failed']);
        }
        return response()->json(['succes'=>true, "message"=> 'Registration Succeeded']);
    }
}
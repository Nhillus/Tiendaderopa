<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\Client;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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
        
        $tokenResponse = app()->handle($tokenRequest);
        $contentString = $tokenResponse->content();
        $tokenContent = json_decode($contentString, true);

        $credentials = $request->only(['email','password']);
        Auth::attempt($credentials);
        
        if(!empty($tokenContent['access_token'])) {
            return [
                "response" => $tokenResponse,
                "content" => json_decode($contentString, true)
            ];
        }
        return response()->json([
            'message' => 'Unauthenthicated'
        ]);
        
    }

    public function register(UserRegisterRequest $request)
    {
        $user = User::create([
        'email' => $request->email,
        'password' => Hash::Make($request->password)
        ]);
        $iduser=$user->id;

        $UserDetails = new UserDetails;
        $UserDetails->id = $iduser;
        $UserDetails->user_id = $iduser;
        $UserDetails->correo_eletronico = $request->email; 
        $UserDetails->save();

        if(!$user)
        {
            return response()->json(['succes'=>false, "message" => 'Registration Failed']);
        }
        return response()->json(['succes'=>true, "message"=> 'Registration Succeeded']);
    }

    public function logout()
    {
        Auth::logout();
        Session()->flush();

        return redirect()->action([HomeController::class, 'index']);
    }
}

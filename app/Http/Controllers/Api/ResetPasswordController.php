<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;




class ResetPasswordController extends Controller
{
    //
    public function showResetForm(Request $request)
    {
        //dd($request);   
        return view('resetpassword')->with(
            ["token" => $request->token]
        );
        
    }
    public function reset(request $request)
    {
        //dd($request);
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                
            $this->resetPassword($user, $password);
        }
        );
        dd($response);
        

        return $response == Password::PASSWORD_RESET
            ? $this->sendResetResponse($request, $response)
            : $this->sendResetFailedResponse($request, $response);
    }

    protected function credentials(Request $request)
    {
        //dd($request);
        return $request->only(
            'password', 'password_confirmation', 'token'
        );
    }


     protected function resetPassword($user, $password)
    {
        $user->password = Hash::make($password);

        $user->setRememberToken(Str::random(60));

        $user->save();

        //dd($user);
//        event(new PasswordReset($user));
    }

    public function broker()
    {
        return Password::broker();
    }

    protected function sendResetResponse(Request $request, $response)
    {
        return response()->json([
            "message" => 'Password reset succeeded',
            "response" => $response
        ], 200);
    }


    protected function sendResetFailedResponse(Request $request, $response)
    {
       
        return response()->json([
            "message" => 'Password reset failed',
            "response" => $response
        ], 500);
    }   
}

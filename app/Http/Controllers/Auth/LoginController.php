<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($redSocial)
    {
        $redSociales = ['facebook','google'];
        console.log("Entre en redirect");

        if(in_array($redSocial, $redSociales)){
            # code...
            $usersocial= Socialite::driver($redSocial)->stateless()->user();
            console.log("Entre en redirect");
        }else
            return redirect()->route('login');
    }



    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($redSocial)
    {
        try {
            //code...

                $socialUser = Socialite::driver($redSocial)->stateless()->user();
                //dd($socialUser);


                //return $user->getEmail();

            } catch (\exception $e ) {

                return redirect('/ ');
            }
        $user = User::where('email',$socialUser->getEmail())->first();

        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())
                                        ->where('provider',$redSocial)->first();

        if (!$socialProvider) {
            # code...
            if(!$user)
            {
                $user = User::firstOrCreate(
                    ['email'=> $socialUser->getEmail()],
                    ['name'=> $socialUser->getName()],
                );


            }
            $user->SocialProvider()->Create(
                ['provider_id'=>$socialUser->getId(), 'provider' =>$redSocial,'user_id'=>$user->id,'avatar'=>$socialUser->getAvatar()]
            );
        };

        auth()->login($user);

        return redirect('/home');
    }

}

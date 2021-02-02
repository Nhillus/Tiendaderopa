<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    private const REDIRECT_DASHBOARD = '/#/';
    private const REDIRECT_LOGIN = '/#/login';
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
        dd($redSociales);
        

        if(in_array($redSocial, $redSociales)){
            # code...
            //$usersocial= Socialite::driver($redSocial)->stateless()->user();
            console.log("entre a array");
            $prueba = Socialite::driver($provider)->stateless()->redirect()->getTargetUrl();
            console.log($prueba);
            return response()->json([
                'redirectUrl' => Socialite::driver($provider)->stateless()->redirect()->getTargetUrl()
            ]);
           
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
        console.log('entre en handle');
        $userSocial = Socialite::driver($provider)->stateless()->user();
        if ($userSocial && isset($userSocial->email) && isset($userSocial->id)) {
            $findUser = User::where('email', $userSocial->email)->first();
            if ($findUser) {
                if (Hash::check($userSocial->email . $userSocial->id, $findUser->password)) {
                    $findUser->api_token = str_random(60);
                    $findUser->save();
                    return redirect('/#/')->withCookie(cookie('authentication',
                        json_encode([
                            'api_token' => $findUser->api_token,
                            'user_id' => $findUser->id
                        ]), 8000, null, null, false, false));
                } else {
                    return redirect('/#/login')->withCookie(cookie('authentication', json_encode([
                            'error' => 'User is unavailable. Try another social account!',
                            'redirect' => '/login'
                        ]), 8000, null, null, false, false));
                }
            } else {
                $user = New User;
                $user->name = $userSocial->name;
                $user->email = $userSocial->email;
                $user->password = Hash::make($userSocial->email . $userSocial->id);
                $user->api_token = str_random(60);
                $user->save();
                return redirect('/#/')->withCookie(cookie('authentication',
                    json_encode([
                        'api_token' => $user->api_token,
                        'user_id' => $user->id
                    ]), 8000, null, null, false, false));
            }
        } else {
            return redirect('/#/login')->withCookie('authentication',
                json_encode([
                    'error' => 'User is unavailable or email field is empty. Try another social account!',
                    'redirect' => '/login'
                ]), 8000, null, null, false, false);
        }
       /* try {
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
        */
    }

}

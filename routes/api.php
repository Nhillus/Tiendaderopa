<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->get('/athenticated', function () {
    return true;
});

//Route::post('register', 'RegisterController@register');
//Route::post('login', 'LoginController@login');
//gitRoute::post('logout', 'LoginController@logout');

Route::post('social/{redSocial}', 'Auth\LoginController@redirectToProvider');
Route::get('social/{redSocial}/callback', 'Auth\LoginController@handleProviderCallback');

//Route::post('oauth/{driver}', [OAuthController::class, 'redirect']);
//Route::get('oauth/{driver}/callback', [OAuthController::class, 'handleCallback'])->name('oauth.callback');

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

Route::get('/usuarios', 'Api\UserController@index');

Route::put('/usuarios/actualizar', 'Api\UserController@update');

Route::post('/usuarios/guardar', 'Api\UserController@store');

Route::delete('/usuarios/borrar/{id}', 'Api\UserController@destroy');

Route::get('/usuarios/buscar', 'Api\UserController@show');

/*--------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

Route::get('/productos', 'Api\ProductController@index');

Route::put('/productos/actualizar', 'Api\ProductController@update');

Route::post('/productos/guardar', 'Api\ProductController@store');

Route::delete('/productos/borrar/{id}', 'Api\ProductController@destroy');

Route::get('/productos/buscar', 'Api\ProductController@show');

/*----------------------------------------------------------del backend-separado--------------------------------------------------------------------------------------*/
Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function(){
    Route::get('/user', function( Request $request ){
          return $request->user();
   
        });

});


  Route::post('/home','Api\RedirectController@index')->name('api.redirect');
 
  
  Route::post('/forgot-password', 'Api\ForgotPasswordController@sendResetLinkEmail')->name('api.forgot-password');
  Route::post('/reset-password', 'Api\ResetPasswordController@reset')->name('api.reset-password');

  

  Route::group(["middleware" => "auth:api" ], function () {
  
    });
  /*|-------------------------------------------------------------------------------
  | Register a User in the app.
  |-------------------------------------------------------------------------------
  | URL:            /api/register
  | Controller:     API\AuthController@register
  | Method:         POST
  | Description:    Creates a user after its validated by UserRegisterRequest
  |
  */
  Route::post('/register', 'Api\AuthController@register')->name('api.register');
  /*|-------------------------------------------------------------------------------
    | Login a User in the app.
    |-------------------------------------------------------------------------------
    | URL:            /api/login
    | Controller:     API\AuthController@login
    | Method:         POST
    | Description:    Login a user after its create a passWordGrantClient provided for passport API, validate by UserLoginRequest  and return the token
    */
  Route::post('/login', 'Api\AuthController@loginC')->name('api.login');



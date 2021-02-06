<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function(){
    Route::get('/user', function( Request $request ){
          return $request->user();
        });
          

  




});
/*|-------------------------------------------------------------------------------
  | Register a User in the app.
  |-------------------------------------------------------------------------------
  | URL:            /api/register
  | Controller:     API\AuthController@register
  | Method:         POST
  | Description:    Creates a user after its validated by UserRegisterRequest
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
      
  Route::post('/login', 'Api\AuthController@login')->name('api.login');


  
//Route::middleware('auth:api')->get('/user', function (Request $request) {
    //return $request->user();
//});

/*Route::get('/user', function (Request $request) { //prueba de conexion comentar en el front
    return response()->json(['success'=>true]);
});
*/

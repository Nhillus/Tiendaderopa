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

Route::post('register', 'RegisterController@register');
Route::post('login', 'LoginController@login');
Route::post('logout', 'LoginController@logout');

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


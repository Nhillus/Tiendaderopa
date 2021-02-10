<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('Login', function() {
    return view('auth/login');
});

/**Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
*/
//Route::get('login/{redSocial}', 'Auth\LoginController@redirectToProvider');
//Route::get('login/{redSocial}/callback', 'Auth\LoginController@handleProviderCallback');
 

    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Route::get('/micuenta', 'UserDetailsController@index')->name('web.details');

Route::patch('/userDetailsUpdated','UserDetailsController@update')->name('web.details.update');

Route::get('/logout', 'LoginController@logout')->name('logout');


Route::get('/send-reset-password', 'Api\ResetPasswordController@showResetForm')->name('password.request');


Route::get('/login', 'Api\AuthController@index')->name('web.login');

/**Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
*/
//Route::get('login/{redSocial}', 'Auth\LoginController@redirectToProvider');
//Route::get('login/{redSocial}/callback', 'Auth\LoginController@handleProviderCallback');

//Auth::routes();


Route::prefix('panel')->group(function () {
    Route::get('', 'Panel\DashboardController@index');

    Route::resources([
        'promotions' => Panel\PromotionsController::class,
        'categories' => Panel\CategoriesController::class,
        'subcategories' => Panel\SubcategoriesController::class,
        'products' => Panel\ProductsController::class
    ]);
});


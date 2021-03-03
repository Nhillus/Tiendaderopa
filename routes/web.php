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

Route::get('/send-reset-password', 'Api\ResetPasswordController@showResetForm')->name('password.request');

Route::get('/micuenta', 'UserDetailsController@index')->name('web.details');

Route::patch('/userDetailsUpdated','UserDetailsController@update')->name('web.details.update');

Route::get('/send-reset-password', 'Api\ResetPasswordController@showResetForm')->name('password.request');

Route::get('/product', 'ProductController@index')->name('show.product');

Route::get('{id}/product/list', 'ProductListController@index')->name('find.brand.product');

Route::get('/product/list', 'ProductListController@index')->name('show.list.product');

Route::post('/secure-pay', 'Api\SecurionPayController@pagar')->name('api.securepay');

Route::get('/error404', 'error\Error404Controller@redireccion')->name('error.404');

Route::get('/paypal/pay', 'Paypal\PaymentController@payWithPayPal')->name('web.payPaypal');

Route::get('/paypal/status', 'Paypal\PaymentController@payPalStatus');

Route::get('/klikandpay','klikandpay\klikandpaycontroller@index');

Route::post('/klikandpaypay','klikandpay\klikandpaycontroller@pagar')->name('web.klikandpay.pay');

Route::get('/address', 'AddresssController@index')->name('web.address');


Route::prefix('panel')->group(function () {
    Route::get('', 'Panel\DashboardController@index')->name("web.panel");

    Route::resources([
        'promotions' => Panel\PromotionsController::class,
        'categories' => Panel\CategoriesController::class,
        'subcategories' => Panel\SubcategoriesController::class,
        'products' => Panel\ProductsController::class
    ]);
});


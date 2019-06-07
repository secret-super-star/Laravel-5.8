<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/payment/add-funds/paypal', 'PaymentController@payWithpaypal')->name('paywithpaypal');

Route::get('/payment/add-funds/paypal/status', 'PaymentController@getPaymentStatus')->name('status');

Route::get('/checkip' , 'CheckIpController@index')->name('checkip');

Route::get('/send_mail' , 'SendmailController@send_mail')->name('send_mail');

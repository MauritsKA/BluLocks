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

Route::get('/', 'HomeController@index')->name('home');

//Route::get('/tech', 'HomeController@tech');

Route::get('/team', 'HomeController@team');

Route::get('/tech', 'HomeController@tech');

Route::get('/shop', 'ProductController@shop');

Route::get('/order', 'OrderController@place');

Route::post('/webhooks/mollie', 'MollieWebhookController@handle')->name('webhooks.mollie');

//$url = 'http://855a2c45.ngrok.io/blulocks/public/webhooks/mollie';
//Route::name('webhooks.mollie')->post('/webhooks/mollie', 'MollieWebhookController@handle');


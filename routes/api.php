<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/welcome/api','Frontend\ProductController@welcome_index')->name('welcome')->middleware('cors');

Route::post('/product/post','Backend\PostsController@store');

Route::post('/orders/detail','Backend\OrdersController@storeCustomerData');

Route::get('/orders/detail/user','Backend\OrdersController@user');




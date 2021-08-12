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
})->name('welcome');

// Route::get('/','Frontend\ProductController@welcome_index')->name('welcome');

Auth::routes();


Route::get('login/locked', 'Auth\LoginController@locked')->middleware('auth')->name('login.locked');
Route::post('login/locked', 'Auth\LoginController@unlock')->name('login.unlock');


Route::middleware('check-roles')->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
});

//users
Route::get('/home/user','Backend\UsersController@users')->name('home.users');

//backoffice managemet users
Route::get('/management/users','Backend\ManagementUserController@index')->name('management.index');
Route::get('/management/users/view','Backend\ManagementUserController@create')->name('management.view');
Route::post('/management/users/create','Backend\ManagementUserController@store_management_users')->name('management.users.create');


//product posts controller
Route::get('/product','Backend\PostsController@index')->name('product.index');
Route::get('/product/new','Backend\PostsController@create')->name('product.create');
Route::get('/product/show/{uuid}','Backend\PostsController@show')->name('product.show');
Route::post('/product/post','Backend\PostsController@store')->name('product.store');

//cart controller
Route::post('/cart','Backend\CartController@storeCart')->name('product.cart');
Route::get('/cart/detail','Backend\CartController@cartDetail')->name('cart.detail');
Route::delete('/cart/{product}','Backend\CartController@destroyCart')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}','Backend\CartController@switchToSaveForLater')->name('cart.switchToSaveForLater');

//switch for later
Route::delete('/saveForLater/{product}','Backend\SaveForLaterController@destroy')->name('saveForLater.destroy');
Route::post('/saveForLater/switchToCart/{product}','Backend\SaveForLaterController@switchToCart')->name('saveForLater.switchToCart');
Route::get('/product-list','Frontend\ProductController@index')->name('frontend-product.index');

//checkout storeCheckout
Route::get('/checkout/product','Backend\CheckoutController@checkout')->name('checkout.checkout');
Route::post('/checkout/product/store','Backend\CheckoutController@storeCheckout')->name('checkout.store');
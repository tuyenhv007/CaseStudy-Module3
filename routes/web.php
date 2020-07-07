<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/admin/login', 'LoginController@formLogin')->name('login');
Route::post('/admin/login', 'LoginController@login')->name('admin.login');
Route::get('/', 'ShopController@index')->name('shop-home');
Route::get('/{idProduct}/add-to-cart', 'CartController@addToCart')->name('add-to-cart');
Route::prefix('cart')->group(function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::get('/{idProduct}/remove','CartController@remove')->name('cart.remove');
    Route::post('/{idProduct}/update','CartController@update')->name('cart.update');
    Route::get('checkout','CartController@checkOut')->name('cart.checkout');
    Route::post('checkout','CartController@payment')->name('cart.payment');
});

Route::prefix('user')->group(function () {
    Route::get('/bill', 'BillController@show')->name('bill.show');
});


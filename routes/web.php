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

Route::get('/login', 'LoginController@formLogin')->name('login');
Route::post('/login', 'LoginController@login')->name('admin.login');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'LoginController@dashboard')->name('admin.dashboard');
    Route::get('/logout', 'LoginController@logout')->name('admin.logout');

    Route::prefix('bills')->group(function () {
        Route::get('/', 'BillController@index')->name('bills.index');
        Route::get('/{id}/detail', 'BillController@billDetail')->name('bill.detail');
        Route::post('/{id}/update', 'BillController@updateStatusBill')->name('bill.update');
    });

    Route::prefix('products')->group(function () {
        Route::get('/', 'ProductController@index')->name('product.index');
        Route::get('/add', 'ProductController@add')->name('product.add');
        Route::post('/add', 'ProductController@store')->name('product.store');
        Route::get('/{id}/delete', 'ProductController@delete')->name('product.delete');
        Route::get('/{id}/edit', 'ProductController@edit')->name('product.edit');
        Route::post('/{id}/edit', 'ProductController@update')->name('product.update');
    });

    Route::prefix('customers')->group(function () {
        Route::get('/', 'CustomerController@index')->name('customer.index');
        Route::get('/{id}/edit', 'CustomerController@edit')->name('customer.edit');
        Route::post('/{id}/edit', 'CustomerController@update')->name('customer.update');
    });

});

Route::get('/', 'ShopController@index')->name('shop-home');
Route::get('/{idProduct}/add-to-cart', 'CartController@addToCart')->name('add-to-cart');
Route::get('/{id}/product-detail', 'ProductController@viewProduct')->name('product.view');
Route::get('/category', 'ProductController@show')->name('product-productlist');

Route::prefix('carts')->group(function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::get('/{idProduct}/remove', 'CartController@remove')->name('cart.remove');
    Route::post('/update-to-cart/{id}', 'CartController@update')->name('cart.update');
    Route::get('checkout', 'CartController@checkOut')->name('cart.checkout');
    Route::post('checkout', 'CartController@payment')->name('cart.payment');
});





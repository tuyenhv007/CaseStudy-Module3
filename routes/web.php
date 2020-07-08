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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'LoginController@dashboard')->name('admin.dashboard');
    Route::get('/login', 'LoginController@formLogin')->name('login');
    Route::post('/login', 'LoginController@login')->name('admin.login');
    Route::get('/bills', 'BillController@index')->name('bills.index');
    Route::get('/bills/{id}/detail', 'BillController@billDetail')->name('bill.detail');
    Route::post('/bills/{id}/update', 'BillController@updateStatusBill')->name('bill.update');
});

//Route::get('/admin/bill', 'BillController@getCustomerByBill');
//Route::get('/admin/bill', 'BillController@getProductByBill');
Route::get('/', 'ShopController@index')->name('shop-home');
Route::get('/{idProduct}/add-to-cart', 'CartController@addToCart')->name('add-to-cart');
Route::prefix('cart')->group(function () {
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::get('/{idProduct}/remove','CartController@remove')->name('cart.remove');
    Route::post('/update-to-cart/{id}','CartController@update')->name('cart.update');
    Route::get('checkout','CartController@checkOut')->name('cart.checkout');
    Route::post('checkout','CartController@payment')->name('cart.payment');
});


Route::prefix('user')->group(function () {
    Route::get('/bill', 'BillController@show')->name('bill.show');
    Route::get('/product','ProductController@index')->name('product.index');
    Route::get('/add-product','ProductController@add')->name('product.add');
    Route::post('/add-product','ProductController@store')->name('product.store');
    Route::get('/{id}/delete','ProductController@delete')->name('product.delete');
    Route::get('/{id}/edit','ProductController@edit')->name('product.edit');
    Route::post('/{id}/edit','ProductController@update')->name('product.update');
    Route::get('/customer','CustomerController@index')->name('customer.index');
    Route::get('/{id}/customer','CustomerController@edit')->name('customer.edit');
    Route::post('/{id}/customer','CustomerController@update')->name('customer.update');

});




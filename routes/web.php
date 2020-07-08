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

Route::get('/admin', function () {
    return view('admin.layouts.master');
});
Route::get('/', function () {
    return view('user.home');
});

Route::prefix('admin')->group(function(){
    Route::get('product','ProductController@index')->name('products.index');
    Route::get('addproduct','ProductController@create')->name('products.create');
    Route::post('addproduct','ProductController@store')->name('products.store');
});

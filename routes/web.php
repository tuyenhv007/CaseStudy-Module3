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

    Route::prefix('products')->group(function (){
        Route::get('/','ProductController@index')->name('products.index');
        Route::get('/create','ProductController@create')->name('products.create');
        Route::post('/create','ProductController@store')->name('products.store');
        Route::get('/{id}/update','ProductController@edit')->name('products.update');
        Route::post('/{id}/update','ProductController@update')->name('products.update');
        Route::get('/{id}/delete','ProductController@delete')->name('products.delete');
    });
});

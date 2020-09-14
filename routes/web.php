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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product','ProductController@allProduct')->name('product.all');
Route::get('/showproduct','ProductController@showProduct')->name('product.one');
Route::get('/Customer','CustomerController@allCustomer')->name('customer.all');
Route::get('/showCustomer','CustomerController@showCustomer')->name('customer.one');



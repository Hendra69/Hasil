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
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/customer', 'CustomerController@index');
Route::post('/customer/create', 'CustomerController@create');
Route::get('customer/edit/{id}', 'CustomerController@edit');
Route::get('/destroy/{id}', 'CustomerController@destroy');
Route::get('/transaksi', 'TransaksiController@index');
Route::post('/update/{id}', 'CustomerController@update');
// Route::get('/customer', 'SalesController@index');
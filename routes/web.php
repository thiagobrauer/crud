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
});

Route::get('/', 'CustomerController@index')->name('customers');
Route::get('customer/create', 'CustomerController@create');
Route::post('customer/store', 'CustomerController@store');
Route::get('customer/edit/{id}', 'CustomerController@edit');
Route::post('customer/update/{id}', 'CustomerController@update');
Route::get('customer/delete/{id}', 'CustomerController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

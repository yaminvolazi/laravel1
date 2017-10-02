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

Route::get('/home', 'HomeController@get_produits');

Route::get('/stores', 'StoreController@get_stores');

Route::get('/stores/{name}', 'StoreController@get_store');

Route::get('/stores/add_store/data', 'StoreController@add_store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

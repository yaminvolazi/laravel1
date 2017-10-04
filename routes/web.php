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

/*-------------------- Store ------------------ */

// CITYSHOP

Route::get('/stores', 'StoreController@index');

Route::get('/stores/{name}', 'StoreController@index');

// CITYSHOP ADMIN

Route::get('/admin/stores', 'StoreController@index_admin');

Route::get('/stores/create/form', 'StoreController@create_store');

Route::post('/stores', 'StoreController@save_store');

Route::post('/stores/{name}/edite/form', 'StoreController@edit_store');

Route::put('/stores/{name}', 'StoreController@update_store');

Route::delete('/stores/{name}', 'StoreController@delete_store');

/*-------------------- ... ------------------ */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories', 'CategorieController@get_categories');

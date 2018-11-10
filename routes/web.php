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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/store', 'StoreController@index')->name('store');
Route::post('/store/store_filter', 'StoreController@show')->name('store.filter');
Route::get('/store/store_search','StoreController@update')->name('store.search');


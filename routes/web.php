<?php

use App\Category;
use App\Brand;
use App\Product;


Route::get('/', 'HomeController@index')->name('home');

Route::post('/', 'SubscribeController@store')->name('subscribe');

Route::get('/store', 'StoreController@index')->name('store');
Route::post('/store/store_filter', 'StoreController@show')->name('store.filter');
Route::get('/store/store_search','StoreController@update')->name('store.search');

Route::get('/category/{category}', 'StoreController@category')->name('category');
Route::get('/brand/{brand}', 'StoreController@brand')->name('brand');

Route::get('/product/{product}', 'ProductController@show')->name('product.show');
Route::resource('review','ReviewController');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/{cart}/{id}', 'CartController@store')->name('cart.store.product');


Route::resource('cart', 'CartController', ['only' => ['index', 'store', 'destroy', 'edit']]);
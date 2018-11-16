<?php

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
Route::post('/cart/save','CartController@store')->name('cart.store');
Route::post('/cart/add/{product}', 'CartController@add')->name('cart.add');
Route::post('/cart/minus/{product}', 'CartController@minus')->name('cart.minus');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');



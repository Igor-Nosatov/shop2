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
Route::post('/cart/product', 'CartController@store')->name('cart.store');
Route::post('/cart/product/{id}/edit', 'CartController@edit')->name('cart.edit');
Route::delete('/cart/product/{id}', 'CartController@destroy')->name('cart.destroy');

Route::post('/checkout', 'CheckoutController@store')->name('check.store');
Route::get('/checkout/create', 'CheckoutController@create')->name('check.create');
Route::get('/checkout/{id}', 'CheckoutController@show')->('check.show');
Route::put('/checkout/{id}','CheckoutController@update')->name('check.update');

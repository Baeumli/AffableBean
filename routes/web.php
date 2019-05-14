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

Route::get('/admin', 'AdminController@dashboard');
Route::get('/', 'PageController@index');
Route::post('/categories/{category}', 'AppController@addToCart');
Route::get('/cart', 'PageController@cart');
Route::post('/cart', 'AppController@clearCart');
Route::post('/cart/{id}', 'AppController@removeFromCart');
Route::get('/categories', 'PageController@categories');
Route::get('/categories/{category}', 'PageController@showCategory');
Route::get('/products/{product}', 'PageController@showProduct');
Route::post('/', 'AppController@changeLocale');
Route::post('/checkout', 'PageController@checkout');
Auth::routes();

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('orders', 'OrderController');
    Route::resource('users', 'UserController');
    Route::get('/admins', 'AdminController@index')->name('admins.index');
    Route::get('/admins/create', 'AdminController@create')->name('admins.create');
    Route::get('/admins/{id}/edit', 'AdminController@edit')->name('admins.edit');
    Route::get('/admins/{id}', 'AdminController@show')->name('admins.show');
    Route::post('/admins', 'AdminController@store')->name('admins.store');
    Route::put('/admins/{id}', 'AdminController@update')->name('admins.update');
    Route::put('/admins/orders/{id}', 'OrderController@complete')->name('orders.complete');

});



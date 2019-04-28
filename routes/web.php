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
Route::get('/categories', 'PageController@categories');
Route::get('/categories/{category}', 'PageController@showCategory');
Route::get('/products/{product}', 'PageController@showProduct');
Route::post('/', 'AppController@changeLocale');
Auth::routes();

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('categories', 'CategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController');
    Route::resource('admins', 'UserController')->except(['index']);
    Route::get('/admins', 'AdminController@index')->name('admins.index');
});



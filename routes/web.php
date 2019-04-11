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

Route::get('/admin', 'AdminController@index');
Route::get('/', 'HomeController@index');
Auth::routes();

Route::resource('categories', 'CategoryController', ['names' => [
    'index' => 'admin.categories',
    'create' => 'admin.categories.create',
    'edit' => 'admin.categories.edit',
    'show' => 'admin.categories.show',
]]);
Route::resource('products', 'ProductController', ['names' => [
    'index' => 'admin.products',
    'create' => 'admin.products.create',
    'edit' => 'admin.products.edit',
    'show' => 'admin.products.show',
]]);

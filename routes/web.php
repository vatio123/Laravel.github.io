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


Route::get('/', 'ProductController@index');

Route::get('deals', 'DealController@index');

// Login and register
Route::get('/users', 'UserController@index');
Route::post('/testLogin', 'UserController@testLogin');
Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::post('/registrar', 'UserController@registrar');

// List product
Route::get('/products', 'ProductController@index');
Route::get('/cars', 'ProductController@cars');
Route::get('/motorbikes', 'ProductController@motorbikes');
Route::get('/productsDetail{id}', 'ProductController@productsDetail');
Route::post('/reservation', 'ProductController@reservation');


// CRUD Product
Route::get('/create', 'ProductController@toInsertProductForm');
Route::post('/create', 'ProductController@create');

Route::get('products/update/{id}', 'ProductController@updateForm');
Route::post('products/update', 'ProductController@update');

Route::get('delete/{id}', 'ProductController@delete');
Route::post('products/delete', 'ProductController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

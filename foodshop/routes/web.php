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

//Route::get('/', function () {
//    return view('welcome');
//});

// 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'R\RController@index');
Route::get('/index.html', 'R\RController@index');
Route::get('/Cuisine.html', 'R\DishesController@index');
Route::get('/cart', 'R\DishesController@index');
Route::get('/Contacts.html', 'R\RController@contact');
Route::get('/controller', 'PagesController@controller');

Route::post('/cart', 'R\RController@cart');
Route::post('/order', 'R\RController@order');

Route::resource('dishes', 'R\DishesController');
Auth::routes();


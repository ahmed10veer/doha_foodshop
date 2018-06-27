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


Route::get('/',                 'R\RController@index');
Route::get('/index.html',       'R\RController@index');
//Route::get('/Cuisine.html', 'R\DishesController@index');
Route::get('/Cuisine.html',     'R\RController@cuisine');
Route::get('/cart',             'R\DishesController@index');
Route::get('/Contacts.html',    'R\RController@contact');

Route::post('/cart',            'R\RController@cart');
Route::post('/order',           'R\RController@order');
Route::get('/order',            'R\RController@index');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/homepageconfig', 'HomeController@homepageconfig');
Route::get('/cuisine_edit', 'HomeController@cuisine_edit');
Route::get('/article_edit', 'HomeController@article_edit');






Route::get('/controller',       'PagesController@controller');

Route::resource('dishes',       'R\DishesController');
Auth::routes();


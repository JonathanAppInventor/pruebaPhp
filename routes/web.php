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

Route::get('/', 'PagesController@index')->name('home');

Route::get('/supplier', 'PagesController@supplier')->name('sForm');

Route::get('/client/{name?}', 'PagesController@client')->name('cForm');

Route::post('/supplier', 'PagesController@add')->name('products.add');
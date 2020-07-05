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

Route::get('/', 'FrontController@index');
Route::get('/content-details/{id}', 'FrontController@details')->name('content.details');
Route::get('/create-cms', 'AdminController@create')->name('create.cms');
Route::post('/store-cms', 'AdminController@store')->name('store.cms');
Route::get('/index-cms', 'AdminController@index')->name('index.cms');
Route::get('/content-status/{id}', 'AdminController@status')->name('status.cms');
Route::get('/delete-content/{id}', 'AdminController@destroy')->name('delete.content');



Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

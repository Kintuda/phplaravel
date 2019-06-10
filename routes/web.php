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

Route::get('/', 'UserController@index');
Route::get('/user', 'UserController@savePage');
Route::get('/user/edit/{id}', 'UserController@editPage');
Route::post('/user/save', 'UserController@create');
Route::put('/user/update/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@delete');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admins', 'AdminController@index');//untuk table admin
Route::get('/admins/create','AdminController@create');
Route::get('/admins/store','AdminController@store');
Route::get('/admins/{id}/edit','AdminController@edit');
Route::get('/admins/{id}/update','AdminController@update');
Route::get('/admins/{id}/hapus','AdminController@destroy');

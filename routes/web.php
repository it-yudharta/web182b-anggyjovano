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

Route::get('/stok', 'StokController@index'); //untuk table Stok Handphone
Route::get('/stok/tambah', 'StokController@tambah');
Route::get('/stok/store', 'StokController@store');
Route::get('/stok/{id}/edit', 'StokController@edit');
Route::get('/stok/{id}/update', 'StokController@update');
Route::get('/stok/{id}/hapus', 'StokController@destroy');

Route::get('/perdana', 'KuotaController@index'); //untuk table Kuota Internet
Route::get('/perdana/tambah', 'KuotaController@tambah');
Route::get('/perdana/store', 'KuotaController@store');
Route::get('/perdana/{id}/edit', 'KuotaController@edit');
Route::get('/perdana/{id}/update', 'KuotaController@update');
Route::get('/perdana/{id}/hapus', 'KuotaController@destroy');
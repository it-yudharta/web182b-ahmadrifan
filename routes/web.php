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

Route::get('/admins', 'AdminController@index'); //untuk tabel admin
Route::get('/admins/create', 'AdminController@create');
Route::get('/admins/store', 'AdminController@store');
Route::get('/admins/{admin}/edit', 'AdminController@edit');
Route::get('/admins/{admin}/update', 'AdminController@update');
Route::get('/admins/{admin}/delete', 'AdminController@destroy');

Route::get('/peminjams', 'PeminjamController@index');
Route::get('/peminjams/create', 'PeminjamController@tambah');
Route::get('/peminjams/store', 'PeminjamController@store');
Route::get('/peminjams/{peminjam}/edit', 'peminjamController@edit');
Route::get('/peminjams/{peminjam}/update', 'peminjamController@update');
Route::get('/peminjams/{peminjam}/delete', 'PeminjamController@destroy');
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
Route::get('/home/profile', 'HomeController@indexProfile')->name('profile');
Route::get('/home/layanan-kami', 'HomeController@indexLayananKami')->name('layanan-kami');
Route::get('/home/undangan/buat', 'HomeController@indexUndanganBuat')->name('undangan-buat');
Route::get('/home/undangan/2/buat', 'HomeController@indexUndanganDetail')->name('undangan-detail');
Route::get('/home/undangan/3/daftar-tamu', 'HomeController@indexTambahTamu')->name('tamu-daftar');


Route::get('/admin', 'AdminController@index')->name('admin');

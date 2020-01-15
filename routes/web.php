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
Route::get('/home/undangan/{id}/detail', 'HomeController@indexUndanganDetail')->name('undangan-detail');
Route::get('/home/undangan/{id}/buku-tamu', 'HomeController@indexBukuTamuDetail')->name('buku-tamu');
Route::get('/home/undangan/3/daftar-tamu', 'HomeController@indexTambahTamu')->name('tamu-daftar');
Route::get('/home/pembayaran/{id}', 'HomeController@pembayaranDetail')->name('pembayaran');


Route::post('/home/undangan/buat', 'UndanganController@createUndangan')->name('create-undangan');
Route::post('/home/undangan/update/desain', 'UndanganController@updateUndanganDesain')->name('update-undangan-desain');
Route::post('/home/undangan/tamu/tambah', 'TamuController@createTamu')->name('create-tamu');
Route::post('/home/undangan/tamu/hapus', 'TamuController@deleteTamu')->name('delete-tamu');
Route::post('/home/undangan/pembayaran', 'HomeController@updatePembayaran')->name('update-pembayaran');
Route::post('/home/undangan/hapus', 'HomeController@userDeleteUndangan')->name('user-delete-undangan');

Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/admin/undangan/{id}/detail', 'AdminHomeController@indexUndanganDetail')->name('admin-undangan-detail');
Route::post('/admin/undangan/hapus', 'AdminHomeController@deleteUndangan')->name('delete-undangan');
Route::post('/admin/undangan/status', 'AdminHomeController@updateStatus')->name('update-status');
Route::get('/admin/undangan/tamu/{id}/edit', 'AdminHomeController@editStatus')->name('edit-status');
Route::get('/admin/pembayaran/{id}', 'AdminHomeController@pembayaranDetail')->name('admin-pembayaran');
Route::post('/admin/undangan/verifikasi', 'AdminHomeController@verifikasiPembayaran')->name('verifikasi-pembayaran');

Route::get('/playground', 'TamuController@confirmTamu')->name('confirm-tamu');
Route::post('/playground', 'TamuController@confirmTamu')->name('confirm-tamu');
Route::get('/watermarker', 'UndanganWatermarkerController@watermarker')->name('watermarker');
Route::get('/scanner', function () {
    return view('scanner');
});

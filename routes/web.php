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

Route::resource('kategori', 'KategoriController');
Route::resource('pengajuan', 'PengajuanController');
Route::resource('dokumen', 'DokumenController');
Route::resource('kontributor', 'KontributorController');
Route::resource('premeeting', 'PremeetingController');
Route::resource('pertemuan', 'PertemuanController');
Route::resource('prameeting', 'PrameetingController');
Route::resource('persetujuan', 'PersetujuanController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

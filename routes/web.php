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

Route::get('/dashboard', function (){
	return view('backend.layouts.app');
});

Route::get('/kader', function (){
	return view('backend.kader.index');
});

Route::resource('/statuspekerjaan', 'Kader\StatusPekerjaanController');
Route::resource('/statuspernikahan', 'Kader\StatusPernikahanController');
Route::resource('/daftarkeahlian', 'Kader\DaftarKeahlianController');
Route::resource('/amaljamai', 'Kader\AmalJamaiController');
Route::resource('/jenjangtarbiyah', 'Kader\JenjangTarbiyahController');
Route::resource('/jenisusaha', 'Kader\JenisUsahaController');
Route::resource('/daftarkitab', 'Kader\DaftarKitabController');
Route::resource('/kader', 'Kader\KaderController');
Route::resource('/kader/{id}/kontak', 'Kader\KontakController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

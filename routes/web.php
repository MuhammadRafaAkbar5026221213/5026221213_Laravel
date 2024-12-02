<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BluerayController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('dosen', function () {
	return view('dosen');
});

Route::get('dosen', 'DosenController@index');
Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

// Routes for Pegawai
Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController:: class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController:: class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);

// Routes for Blueray
Route::get('/blueray', [BluerayController::class, 'index']);
Route::get('/blueray/tambah', [BluerayController::class, 'tambah']);
Route::post('/blueray/store', [BluerayController::class, 'store']);
Route::get('/blueray/edit/{id}', [BluerayController::class, 'edit']);
Route::post('/blueray/update', [BluerayController::class, 'update']);
Route::get('/blueray/hapus/{id}', [BluerayController::class, 'hapus']);
Route::get('/blueray/cari', [BluerayController::class, 'cari']);

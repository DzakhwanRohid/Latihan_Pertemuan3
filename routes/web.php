<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilMahasiswaController;

Route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);
Route::resource('matakuliah', MatakuliahController::class);

Route::get('/', function () {
    return view('welcome-mahasiswa');
});

#Basic Route
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

#Route Param
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});

Route::get('/nim/{param1?}', function ($param1 = '') {
    return 'NIM saya: '.$param1;
});

#named Route
#Route::get('/mahasiswa', function () {
  #  return 'Halo Mahasiswa';
#})->name('mahasiswa.show');


Route::get('/about', function () {
    return view('halaman-about');
});

#Untuk HomeController
Route::get('/home', [HomeController::class, 'index']);


//latihan
Route::get('/profil-mahasiswa', [ProfilMahasiswaController::class, 'index']);

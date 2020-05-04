<?php

use Illuminate\Support\Facades\Route;

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
    $nama = 'Selamat Datang Di Web SMP Yayasan Budi Bakti';
    return view('welcome', ['nama' => $nama]);
});

Route::get('/ekskul', function () {
    $nama = 'EKSTRAKULIKULER';
    return view('ekskul', ['nama' => $nama]);
});

Route::get('/pengajar', function () {
    $nama = 'TENAGA KEPENDIDIKAN';
    return view('pengajar', ['nama' => $nama]);
});

Route::get('/galeri', function () {
    $nama = 'GALERI SMP YBB';
    return view('galeri', ['nama' => $nama]);
});
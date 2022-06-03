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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home', [
        "judul" => "Home"
    ]);
});


Route::get('/penjualan', function () {
    return view('penjualan', [
        "judul" => "Data Penjualan"
    ]);
});

Route::get('/databarang', function () {
    return view('databarang', [
        "judul" => "Data Barang"
    ]);
});

Route::get('/gantilogo', function () {
    return view('gantilogo', [
        "judul" => "Ganti Logo"
    ]);
});

Route::get('/gantipass', function () {
    return view('gantipassword', [
        "judul" => "Ganti Password"
    ]);
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/team', function () {
    return view('team');
});

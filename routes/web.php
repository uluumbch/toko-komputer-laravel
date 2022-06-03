<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', function () {
    return view('home', [
        "judul" => "Home"
    ]);
})->middleware('auth');


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

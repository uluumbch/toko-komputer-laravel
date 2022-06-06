<?php

use Illuminate\Support\Facades\Route;
use App\Models\Penjualan;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PenjualanController;

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


Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('barang', BarangController::class)->middleware('auth');
Route::resource('penjualan', PenjualanController::class)->middleware('auth');
Route::resource('kategori', CategoryController::class)->middleware('auth');

Route::post('/editpasswd', [LoginController::class, 'gantiPassword'])->middleware('auth');


Route::get('/home', function () {
    return view('home', [
        "judul" => "Home",
        "penjualan" => Penjualan::all(),
        "user" => User::all()
    ]);
})->middleware("auth");

Route::post('image-upload', [ImageUploadController::class, 'imageUploadPost'])->name('image.upload.post');


Route::get('/gantilogo', function () {
    return view('gantilogo', [
        "judul" => "Ganti Logo",
        "user" => User::all()
    ]);
});

Route::get('/gantipass', function () {
    return view('gantipassword', [
        "judul" => "Ganti Password",
        "user" => User::all()
    ]);
})->middleware('auth');

Route::get('/team', function () {
    return view('team');
});

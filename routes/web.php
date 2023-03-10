<?php

use Illuminate\Support\Facades\Route;
use App\Models\Penjualan;
use App\Models\User;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DatawebController;

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
Route::resource('web', DatawebController::class)->middleware('auth');

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

Route::get('/kategori/ubah/{id}', [CategoryController::class, 'ubahkategori'])->middleware('auth');

Route::get('/gantipass', function () {
    return view('gantipassword', [
        "judul" => "Ganti Password",
        "user" => User::all()
    ]);
})->middleware('auth');

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

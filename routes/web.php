<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [Controller::class, "index"])->name("index");
Route::get("login", [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'PostLogin'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'PostRegister'])->name('register');
Route::middleware(['auth'])->group(function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('dashboard', [Controller::class, 'dashboard'])->name('dashboard');
    Route::get('admin-produk', [ProductsController::class, 'getAdmin'])->name('admin-produk');
    Route::post('admin-produk', [ProductsController::class, 'postAdmin'])->name('admin-produk');
    Route::get('lihat-produk/{id}', [ProductsController::class, 'findProduk'])->name('lihat-produk');
    Route::put('lihat-produk/{id}', [ProductsController::class, 'putProduk'])->name('lihat-produk');
    Route::delete('hapus-produk/{id}', [ProductsController::class, 'deleteProduk'])->name('hapus-produk');
    Route::get('riwayat-penjualan',[PembelianController::class,'getPenjualan'])->name('riwayat-penjualan');
    Route::get('user-produk',[PembelianController::class,'getProduk'])->name('user-produk');
    Route::get('beli/{id}',[PembelianController::class,'getBeli'])->name('beli');
});

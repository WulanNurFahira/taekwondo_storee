<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class,'showLogin'])->name('login');
Route::post('/actionlogin', [LoginController::class,'actionLogin'])->name('actionLogin');

Route::middleware('auth')->group(function () {

    Route::get('/logout', [LoginController::class,'actionLogout'])->name('actionLogout');
Route::get('/', function () {
    return view('home.dashboard');

});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);

Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/tambah', [ProdukController::class, 'create']);
Route::post('/produk/simpan', [ProdukController::class, 'store']);
Route::get('/produk/{id}/show', [ProdukController::class, 'show']);
Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
Route::get('/produk/{id}/delete', [ProdukController::class, 'destroy']);

Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/tambah', [SupplierController::class, 'create']);
Route::post('/supplier/simpan', [SupplierController::class, 'store']);
Route::get('/supplier/{id}/show', [SupplierController::class, 'show']);
Route::post('/supplier/{id}/update', [SupplierController::class, 'update']);
Route::get('/supplier/{id}/delete', [SupplierController::class, 'destroy']);

Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
Route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/{id}/delete', [PenjualanController::class, 'destroy']);

Route::get('/detailpenjualan', [DetailPenjualanController::class, 'index']);
Route::get('/detailpenjualan/tambah', [DetailPenjualanController::class, 'create']);
Route::post('/detailpenjualan/simpan', [DetailPenjualanController::class, 'store']);
Route::get('/detailpenjualan/{id}/edit', [DetailPenjualanController::class, 'edit']);
Route::post('/detailpenjualan/{id}/update', [DetailPenjualanController::class, 'update']);
Route::get('/detailpenjualan/{id}/delete', [DetailPenjualanController::class, 'destroy']);

});
<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\KategoriBarangController;
use App\Http\Controllers\Auth\AuthController;
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

Route::get('/', [AuthController::class, 'login'])->name('index');
Route::prefix('auth/')->name('auth.')->group(function(){
    Route::get('',[AuthController::class, 'index'])->name('index');
    Route::post('login',[AuthController::class, 'do_login'])->name('do_login'); 
    Route::get('logout',[AuthController::class, 'do_logout'])->name('logout');
});

// Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/tambah', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::patch('/barang/ubah/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::post('/barang/delete/{id}', [BarangController::class, 'delete'])->name('barang.delete');


// Kategori
Route::get('/kategori', [KategoriBarangController::class, 'index'])->name('kategori');
Route::get('/kategori/tambah', [KategoriBarangController::class, 'create'])->name('kategori.create');
Route::post('/kategori/store', [KategoriBarangController::class, 'store'])->name('kategori.store');
Route::get('/kategori/edit/{id}', [KategoriBarangController::class, 'edit'])->name('kategori.edit');
Route::patch('/kategori/ubah/{id}', [KategoriBarangController::class, 'update'])->name('kategori.update');
Route::post('/kategori/delete/{id}', [KategoriBarangController::class, 'delete'])->name('kategori.delete');



Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/add', [AdminController::class, 'add'])->name('add'); 
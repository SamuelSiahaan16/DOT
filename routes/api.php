<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('barang/')->group(function(){
    Route::get('', [ApiController::class,'index']); 
    Route::get('{barang_id}',[ApiController::class,'show']);
});

Route::prefix('kategori/')->group(function(){
    Route::get('', [ApiController::class,'indexKategori']); 
    Route::get('{kategori_id}',[ApiController::class,'showKategori']);
});
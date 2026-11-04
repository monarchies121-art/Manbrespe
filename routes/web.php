<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\LanggananController;

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/cerita', [PageController::class, 'cerita'])->name('cerita');
Route::get('/kedai', [PageController::class, 'kedai'])->name('kedai');
Route::get('/kopi', [ProdukController::class, 'index'])->name('produk.index');
Route::get('/kopi/{slug}', [ProdukController::class, 'show'])->name('produk.show');
Route::post('/langganan-kabar', [LanggananController::class, 'store'])->name('langganan.store');

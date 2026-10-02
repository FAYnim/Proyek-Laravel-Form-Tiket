<?php

use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TiketController::class, 'index'])->name('home');
Route::get('/pembeli', [TiketController::class, 'daftar'])->name('pembeli.daftar');
Route::post('/tiket', [TiketController::class, 'store'])->name('tiket.store');

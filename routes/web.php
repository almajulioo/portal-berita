<?php

use App\Http\Controllers\FrontEnd\BerandaController;
use App\Http\Controllers\FrontEnd\BeritaController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BerandaController::class, 'index'])->name('home');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

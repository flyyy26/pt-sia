<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// Route Index Artikel
Route::get('/news-articles', [ArtikelController::class, 'index'])->name('news-articles.index');

// Route Detail Artikel (menggunakan slug)
Route::get('/news-articles/{artikel:slug}', [ArtikelController::class, 'show'])->name('news-articles.show');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Index Artikel
Route::get('/news-articles', [ArtikelController::class, 'index'])->name('news-articles.index');

// Route Detail Artikel (menggunakan slug)
Route::get('/news-articles/{artikel:slug}', [ArtikelController::class, 'show'])->name('news-articles.show');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');

Route::get('/product', [ProductController::class, 'index'])->name('product');
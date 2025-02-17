<?php

use App\Models\Artikel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CorporateController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\TermsConditionController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route Index Artikel
Route::get('/news-articles', [ArtikelController::class, 'index'])->name('news-articles.index');

// Route Detail Artikel (menggunakan slug)
Route::get('/news-articles/{artikel:slug}', [ArtikelController::class, 'show'])->name('news-articles.show');

Route::get('/faq', [FaqController::class, 'index'])->name('faq');
Route::get('/terms-condition', [TermsConditionController::class, 'index'])->name('terms-condition');
Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('privacy-policy');

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/corporate', [CorporateController::class, 'index'])->name('corporate');

Route::get('/product/wim-sensor-fiber-optic', function () {
    return view('product.wim');
});
Route::get('/product/laser-scanner', function () {
    return view('product.laser');
});

Route::get('/sitemap.xml', function () {
    $articles = Artikel::latest()->get();

    $staticPages = [
        ['url' => config('app.url') . '/', 'priority' => '1.0', 'changefreq' => 'daily'],
        ['url' => config('app.url') . '/corporate', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => config('app.url') . '/contact', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => config('app.url') . '/news-articles', 'priority' => '0.9', 'changefreq' => 'monthly'],
        ['url' => config('app.url') . '/product/laser-scanner', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => config('app.url') . '/product/wim-sensor-fiber-optic', 'priority' => '0.8', 'changefreq' => 'monthly'],
        ['url' => config('app.url') . '/faq', 'priority' => '0.7', 'changefreq' => 'yearly'],
    ];

    $content = '<?xml version="1.0" encoding="UTF-8"?>';
    $content .= "\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

    // Tambahkan URL untuk halaman statis
    foreach ($staticPages as $page) {
        $content .= "<url>\n";
        $content .= "<loc>{$page['url']}</loc>\n";
        $content .= "<priority>{$page['priority']}</priority>\n";
        $content .= "<changefreq>{$page['changefreq']}</changefreq>\n";
        $content .= "</url>\n";
    }

    // Tambahkan URL untuk artikel
    foreach ($articles as $artikel) {
        $content .= "<url>\n";
        $content .= "<loc>" . config('app.url') . "/news-articles/" . $artikel->slug . "</loc>\n";
        $content .= "<lastmod>" . $artikel->updated_at->toAtomString() . "</lastmod>\n";
        $content .= "<changefreq>weekly</changefreq>\n";
        $content .= "<priority>0.8</priority>\n";
        $content .= "</url>\n";
    }

    $content .= "</urlset>";

    return response($content, 200)->header('Content-Type', 'application/xml');
});
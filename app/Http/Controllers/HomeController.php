<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua banner yang aktif
        $banners = Banner::where('status', 'show')->get();

        // Ambil 3 artikel terbaru dengan status 'published'
        $artikels = Artikel::where('status', 'published')
            ->latest()
            ->take(5)
            ->get();

        return view('home', compact('banners', 'artikels'));
    }
}

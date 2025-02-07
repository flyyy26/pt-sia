<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        // Ambil data banner (asumsi hanya satu banner yang diambil, bisa disesuaikan)
        $banners = Banner::all();

        return view('home', compact('banners'));
    }
}

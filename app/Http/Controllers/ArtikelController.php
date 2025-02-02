<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $kategoris = Kategori::all();
        
        // Ambil hanya artikel dengan status 'published'
        $query = Artikel::where('status', 'published');

        // Filter berdasarkan kategori jika dipilih
        if ($request->filled('kategori_id')) {
            $query->where('kategori_id', $request->kategori_id);
        }

        $artikels = $query->latest()->paginate(6);

        return view('news-articles.index', compact('artikels', 'kategoris'));
    }

    public function show(Artikel $artikel)
    {
        $kategori = $artikel->kategori;  // Asumsikan hubungan antara Artikel dan Kategori adalah `belongsTo`
    
        return view('news-articles.show', compact('artikel', 'kategori'));
    }
}

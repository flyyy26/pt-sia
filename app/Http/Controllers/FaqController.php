<?php

namespace App\Http\Controllers;

use App\Models\FaQs;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        // Ambil semua banner yang aktif
        $faqs = FaQs::all();

        return view('faq', compact('faqs'));
    }
}

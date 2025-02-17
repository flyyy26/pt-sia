<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TermsCondition;

class TermsConditionController extends Controller
{
    public function index()
    {
        // Ambil hanya satu data Terms & Condition yang aktif
        $terms = TermsCondition::where('status', 'active')->first();

        // Kirim ke view
        return view('terms-condition', compact('terms'));
    }
}


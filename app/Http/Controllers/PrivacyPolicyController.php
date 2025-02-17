<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        // Ambil hanya satu data Terms & Condition yang aktif
        $privacy = PrivacyPolicy::where('status', 'active')->first();

        // Kirim ke view
        return view('privacy-policy', compact('privacy'));
    }
}

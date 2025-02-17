<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $contactMessage = ContactMessage::create($request->all());

        // Ambil setting dari database (misalnya record pertama)
        $appSetting = Setting::first();
        
        // Jika setting tidak ditemukan, kamu bisa menetapkan alamat default
        $destinationEmail = $appSetting->email ?? 'default@example.com';

        // Kirim email ke alamat provider yang diambil dari database
        Mail::to($destinationEmail)->send(new ContactMessageMail($contactMessage));

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }
}

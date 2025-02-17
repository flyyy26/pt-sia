@extends('layouts.app')

@push('meta')
    <meta property="og:title" content="Contact" />
    <meta property="og:description" content="Hubungi PT. Sistem Akurasi Inovasi untuk informasi lebih lanjut" />
    <meta property="og:image" content="{{ config('app.url') . '/images/logo.svg' }}" />
    <meta property="og:url" content="{{ config('app.url') }}/contact" />
    <meta property="og:type" content="contact" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Contact" />
    <meta name="twitter:description" content="Hubungi PT. Sistem Akurasi Inovasi untuk informasi lebih lanjut" />
    <meta name="twitter:image" content="{{ config('app.url') . '/images/logo.svg' }}" />
    <meta name="twitter:site" content="@username_twitter" />
@endpush

@section('content')

<style>
    .alert p{
        font-size:1vw;
        color:green;
    }
    @media (max-width:768px) {
        .alert p{
            font-size:3vw;
            color:green;
        }
    }
</style>

<div class="contact_page_banner">
    <h1>Contact Us</h1>
</div>
<div class="contact_page_container">
    <div class="contact_page_container_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9532629121236!2d106.85105627603666!3d-6.136981910167688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f57d438e6ddb%3A0xe2a1d875f472352e!2sGriya%20Inti%20Sentosa!5e0!3m2!1sen!2sid!4v1738917086934!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact_page_container_content">
        <h1>Hubungi Kami</h1>
        <p>Lorem ipsum dolor sit amet consectetur. Elementum sed nunc egestas amet et proin gravida. Diam cras massa sed tempor ullamcorper leo interdum turpis in. Leo tempor arcu cursus lacus phasellus amet porttitor. Eu varius risus tortor semper sed sit.</p>
        <ul>
            <li><iconify-icon icon="ic:baseline-phone"></iconify-icon> 021-6516318</li>
            <li><iconify-icon icon="mdi:envelope"></iconify-icon> info@sisteminovasi.co.id</li>
            <li><iconify-icon icon="oi:map-marker"></iconify-icon> Komp Griya Inti Sentosa Jl. Griya Agung Blok 0 88-89, Sunter Jakarta.</li>
            <li><iconify-icon icon="mingcute:instagram-fill"></iconify-icon> @ptsisteminovasiakurasi</li>
            <li><iconify-icon icon="line-md:youtube-filled"></iconify-icon> pt sistem inovasi akurasi</li>
            <li><iconify-icon icon="mynaui:globe"></iconify-icon> www.sistemakurasi.com</li>
        </ul>
        <div class="form_layout">
        <h2>Tulis pesan dan kami akan segera menghubungi anda!</h2>
            <form id="contactForm" method="POST" action="/contact">
                <!-- Token CSRF disertakan secara otomatis oleh Blade -->
                @csrf

                <div class="double_field">
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email" name="email" required>
                </div>
                <div class="double_field">
                <input type="number" placeholder="Phone" name="phone">
                <input type="text" placeholder="Subject" name="subject">
                </div>
                <textarea name="message" placeholder="Comment or Message" required></textarea>
                <button type="submit">Send</button>
                @if (session('success'))
                    <div class="alert alert-success">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
            </form>
        </div>


    </div>
</div>
<div class="section_7 section_7_sc">
    <div class="contact_section">
        <a href="mailto:{{ $appSetting->email ?? 'info@sisteminovasi.co.id' }}">
            <iconify-icon icon="basil:gmail-solid"></iconify-icon>
        </a>
        <a href="tel:{{ $appSetting->phone_number ?? '021-6516318' }}" target="_blank">
            <iconify-icon icon="solar:phone-bold"></iconify-icon>
        </a>
        <a href="https://api.whatsapp.com/send?phone={{ $appSetting->whatsapp ?? 'https://api.whatsapp.com/send?phone=' }}" target="_blank">
            <iconify-icon icon="mingcute:whatsapp-fill"></iconify-icon>
        </a>
        <a href="{{ $appSetting->instagram ?? 'https://www.youtube.com/@sisteminovasiakurasi123' }}" target="_blank">
            <iconify-icon icon="mingcute:instagram-fill"></iconify-icon>
        </a>
    </div>
    <img src="images/bubble_chat.png" alt="" class="bubble_chat">
    <div class="section_7_box">
        <div class="content_section_7">
            <h1><span>Need Help?</span> <br/>Contact Us In :</h1>
        </div>
        <img src="images/women_contact.png" alt="SIA Contact" class="women_contact">
        <div class="content_section_7">
            <h1>Klik This</h1>
        </div>
    </div>
</div>


@endsection
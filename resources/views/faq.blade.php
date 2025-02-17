@extends('layouts.app')

@push('meta')
    <meta property="og:title" content="Faq" />
    <meta property="og:description" content="Temukan jawaban atas pertanyaan yang sering <br/>diajukan tentang layanan dan produk kami." />
    <meta property="og:image" content="{{ config('app.url') . '/images/faq_banner.png' }}" />
    <meta property="og:url" content="{{ config('app.url') }}/faq" />
    <meta property="og:type" content="faq" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Faq" />
    <meta name="twitter:description" content="Temukan jawaban atas pertanyaan yang sering <br/>diajukan tentang layanan dan produk kami." />
    <meta name="twitter:image" content="{{ config('app.url') . '/images/faq_banner.png' }}" />
    <meta name="twitter:site" content="@username_twitter" />
@endpush

@section('content')

<div class="banner_page" style="background-image: url(../images/faq_banner.png);">
    <div class="heading_page">
        <h1>FAQS</h1>
        <h2>FAQS</h2>
    </div>
    <p>Temukan jawaban atas pertanyaan yang sering <br/>diajukan tentang layanan dan produk kami.</p>
    <div class="divider_bottom_normal"></div>
</div>
<div class="faq-wrapper">
    <div class="faq-container">
        <div class="faq_layout">
            @foreach($faqs as $index => $faq)
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleAnswer({{ $index }})">
                        {{ $faq->question }} <span class="arrow"><iconify-icon icon="majesticons:chevron-down-line"></iconify-icon></span>
                    </button>
                    <div class="faq-answer" id="answer-{{ $index }}">
                        <p>{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
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
</div>


@endsection
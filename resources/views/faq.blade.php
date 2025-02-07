@extends('layouts.app')

@section('content')

<div class="banner_page" style="background-image: url(../images/faq_banner.png);">
    <div class="heading_page">
        <h1>FAQS</h1>
        <h2>FAQS</h2>
    </div>
    <p>Temukan jawaban atas pertanyaan yang sering <br/>diajukan tentang layanan dan produk kami.</p>
    <div class="divider_bottom_normal"></div>
</div>
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
<div class="faq_contact">
    <div class="faq_contact_layout">
        
    </div>
</div>

@endsection
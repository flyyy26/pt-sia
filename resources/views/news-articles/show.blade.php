@extends('layouts.app')

@push('meta')
    <meta property="og:title" content="{{ $artikel->title }}" />
    <meta property="og:description" content="{{ implode(' ', array_slice(explode(' ', strip_tags($artikel->description)), 0, 100)) }} ..." />
    <meta property="og:image" content="{{ config('app.url') . '/storage/' . $artikel->image }}" />
    <meta property="og:url" content="{{ config('app.url') }}/news-articles/{{ $artikel->slug }}" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="id_ID" />
    
    <!-- Meta untuk Artikel -->
    <meta property="article:author" content="{{ $artikel->author->name }}" />
    <meta property="article:published_time" content="{{ $artikel->created_at }}" />
    <meta property="article:modified_time" content="{{ $artikel->updated_at }}" />
    <meta property="article:section" content="{{ $kategori->name }}" />
    <meta property="article:tag" content="{{ implode(', ', explode(',', $artikel->tags)) }}" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="{{ $artikel->title }}" />
    <meta name="twitter:description" content="{{ implode(' ', array_slice(explode(' ', strip_tags($artikel->description)), 0, 100)) }} ..." />
    <meta name="twitter:image" content="{{ config('app.url') . '/storage/' . $artikel->image }}" />
    <meta name="twitter:site" content="@username_twitter" />

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Article",
            "headline": "{{ $artikel->title }}",
            "description": "{{ implode(' ', array_slice(explode(' ', strip_tags($artikel->description)), 0, 100)) }}...",
            "image": "{{ config('app.url') . '/storage/' . $artikel->image }}",
            "author": {
                "@type": "Person",
                "name": "{{ $artikel->author->name }}"
            },
            "publisher": {
                "@type": "Organization",
                "name": "{{ config('app.name') }}",
                "logo": {
                    "@type": "ImageObject",
                    "url": "{{ config('app.url') }}/images/logo.png"
                }
            },
            "datePublished": "{{ $artikel->created_at->toIso8601String() }}",
            "dateModified": "{{ $artikel->updated_at->toIso8601String() }}",
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "{{ config('app.url') }}/news-articles/{{ $artikel->slug }}"
            }
        }
    </script>
@endpush

@section('content')


<div class="container_detail_artikel">
    <div class="detail_artikel_img">
        <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}">
        <div class="divider_bottom_normal"></div>
    </div>
    <div class="container_container_artikel">
        <div class="detail_artikel_heading">
            <h1>{{ $artikel->title }}</h1>
            <span>Posted By : {{ $artikel->author->name }} / On : {{ $artikel->created_at->format('d F Y') }} / In : {{ $kategori->name }}</span>
        </div>
        <div class="detail_artikel_content">
            {!! $artikel->description !!}
        </div>
    </div>
</div>
@endsection
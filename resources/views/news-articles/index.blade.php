@extends('layouts.app')

@push('meta')
    <meta property="og:title" content="News & Articles" />
    <meta property="og:description" content="Temukan berbagai informasi terbaru, berita terkini, dan artikel menarik seputar topik yang Anda minati." />
    <meta property="og:image" content="{{ config('app.url') . '/images/bg_artikel.png' }}" />
    <meta property="og:url" content="{{ config('app.url') }}/news-articles" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="News & Articles" />
    <meta name="twitter:description" content="Temukan berbagai informasi terbaru, berita terkini, dan artikel menarik seputar topik yang Anda minati." />
    <meta name="twitter:image" content="{{ config('app.url') . '/images/bg_artikel.png' }}" />
    <meta name="twitter:site" content="@username_twitter" />
@endpush

@section('content')
<div class="banner_page" style="background-image: url(../images/bg_artikel.png);">
    <div class="heading_page">
        <h1>News & Articles</h1>
        <h2>News & Articles</h2>
    </div>
    <p>Temukan berbagai informasi terbaru, berita terkini, <br/>dan artikel menarik seputar topik yang Anda minati.</p>
    <div class="divider_bottom_normal"></div>
</div>
<div class="container_page" id="container_page">
    <div class="artikel_heading">
        <h1>Daftar Artikel</h1>

        <!-- Form Filter Kategori -->
        <form action="{{ route('news-articles.index') }}" method="GET" class="mb-4">
            <div class="row">
                <div class="select_layout">
                    <select name="kategori_id" class="form-control" onchange="this.form.submit()">
                        <option value="">Semua Kategori</option>
                        @foreach($kategoris as $kategori)
                            <option value="{{ $kategori->id }}" {{ request('kategori_id') == $kategori->id ? 'selected' : '' }}>
                                {{ $kategori->name }}
                            </option>
                        @endforeach
                    </select>
                    <iconify-icon icon="tabler:chevron-down"></iconify-icon>
                </div>
            </div>
        </form>
    </div>
    
    <!-- List Artikel -->
    <div class="container_artikel">
        <div class="list_artikel">
            @forelse($artikels as $artikel)
                <div class="artikel_box">
                    <div class="artikel_card">
                        <div class="artikel_card_image">
                            <a href="news-articles/{{ $artikel->slug }}"><img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}"></a>
                        </div>
                        <div class="card_body">
                            <a href="news-articles/{{ $artikel->slug }}">
                                <h5 class="card-title">{{ $artikel->title }}</h5>
                            </a>
                            <p class="card-text">{!! Str::limit(strip_tags($artikel->description), 60) !!}</p>
                            <a href="news-articles/{{ $artikel->slug }}"><button>Baca Selengkapnya</button></a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-md-12 text-center">
                    <p>Tidak ada artikel tersedia untuk kategori ini.</p>
                </div>
            @endforelse
        </div>
        
        <!-- Pagination -->
    </div>
    @if ($artikels->hasPages())
        <div class="pagination">
            <ul class="pagination-list">
                @if ($artikels->onFirstPage())
                    <li class="pagination_box"><iconify-icon icon="material-symbols:chevron-left-rounded"></iconify-icon></li>
                @else
                    <li><a href="{{ $artikels->previousPageUrl() }}" rel="prev" class="pagination_box"><iconify-icon icon="material-symbols:chevron-left-rounded"></iconify-icon></a></li>
                @endif

                @foreach ($artikels->links()->elements[0] as $page => $url)
                    @if ($page == $artikels->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach

                @if ($artikels->hasMorePages())
                    <li><a href="{{ $artikels->nextPageUrl() }}" class="pagination_box" rel="next"><iconify-icon icon="material-symbols:chevron-right-rounded"></iconify-icon></a></li>
                @else
                    <li class="pagination_box"><iconify-icon icon="material-symbols:chevron-right-rounded"></iconify-icon></li>
                @endif
            </ul>
        </div>
    @endif

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

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var element = document.getElementById("container_page");
        if(element) {
            element.scrollIntoView({ behavior: "smooth" });
        }
    });
    </script>
@endsection

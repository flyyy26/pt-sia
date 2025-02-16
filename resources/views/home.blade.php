@extends('layouts.app')

@section('content')
<div class="layout_banner">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <!-- <div class="swiper-slide">
                <div class="section_1" style="background-image: url(../images/bg_banner.png);">
                    <div class="banner_coding">
                        <img src="images/sensor_banner.png" alt="Sensor Banner" class="sensor_banner">
                        <img src="images/truck_banner.png" alt="Truck Banner" class="truck_banner">
                        <div class="banner_content">
                            <h3>Dinamis & Pengukuran<br/> Berat Real Time</h3>
                            <h1>Weight In Motion</h1>
                            <p>Sistem Penimbangan Dinamis Sensor Serat Optik untuk perlindungan jalan dan infrastruktur penting secara real time</p>
                            <a href="#"><button>Learn More</button></a>
                        </div>
                        <div class="cta_banner">
                            <div class="circle_cta_banner">
                                <div class="circle_small_cta_banner"></div>
                            </div>
                            <img src="images/cta_arrow.svg" alt="Cta Arrow" class="cta_arrow">
                            <a href="#"><button>Lihat Database</button></a>
                        </div>
                    </div>
                </div>
            </div> -->
            @foreach($banners as $banner)
            <div class="swiper-slide">
                <div class="section_1" style="background-image: url({{ asset('storage/' . $banner->image) }});">
                    
                    @if($banner->creation_method === 'coding')
                        {!! $banner->custom_html !!}
                    @endif

                    <!-- <div class="banner_content">
                        <h3>Dinamis & Pengukuran<br/> Berat Real Time</h3>
                        <h1>Weight In Motion</h1>
                        <p>Sistem Penimbangan Dinamis Sensor Serat Optik untuk perlindungan jalan dan infrastruktur penting secara real time</p>
                        <a href="#"><button>Learn More</button></a>
                    </div>
                    <div class="cta_banner">
                        <div class="circle_cta_banner">
                            <div class="circle_small_cta_banner"></div>
                        </div>
                        <img src="images/cta_arrow.svg" alt="Cta Arrow" class="cta_arrow">
                        <a href="#"><button>Lihat Database</button></a>
                    </div> -->

                    @if($banner->creation_method === 'coding' && !empty($banner->custom_css))
                    <style>
                            {!! $banner->custom_css !!}
                            </style>
                    @endif

                </div>
            </div>
            @endforeach
            <!-- <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            <div class="swiper-slide">Slide 4</div>
            <div class="swiper-slide">Slide 5</div>
            <div class="swiper-slide">Slide 6</div>
            <div class="swiper-slide">Slide 7</div>
            <div class="swiper-slide">Slide 8</div>
            <div class="swiper-slide">Slide 9</div> -->
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <div class="divider_bottom"></div>
</div>

<div class="section_2">
    <div class="section_2_tab_layout">
        <div class="section_2_tab_content">
            <div id="1" class="tabcontent">
                <div class="tabcontent_text">
                    <div class="heading_section_2">
                        <h2>Product</h2>
                    </div>
                    <h1>Menggunakan sensor fiber optik</h1>
                    <p>Teknologi berbasis sensor fiber optik menawarkan akurasi tinggi dalam mendeteksi dan menganalisis data, memastikan performa optimal dalam berbagai kondisi lingkungan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Sensor Fiber Optik</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_1.png" alt="Keunggulan"> 
                </div>
            </div>

            <div id="2" class="tabcontent">
                <div class="tabcontent_text">
                    <div class="heading_section_2">
                        <h2>Product</h2>
                    </div>
                    <h1>Tidak diperlukan listrik dibawah jalan</h1>
                    <p>Teknologi ini dirancang tanpa memerlukan listrik di bawah jalan, sehingga lebih aman, efisien, dan mudah dalam instalasi maupun perawatan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Tanpa Aliran Listrik</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_2.png" alt="Keunggulan">
                </div>
            </div>

            <div id="3" class="tabcontent">
                <div class="tabcontent_text">
                    <div class="heading_section_2">
                        <h2>Product</h2>
                    </div>
                    <h1>Sistem Kami Minim Perawatan</h1>
                    <p>Teknologi berbasis sensor fiber optik menawarkan akurasi tinggi dalam mendeteksi dan menganalisis data, memastikan performa optimal dalam berbagai kondisi lingkungan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Minim Perawatan</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_3.png" alt="Keunggulan">
                </div>
            </div>
        </div>
        <div class="section_2_tab_btn">
            <p>Fitur</p>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">1</button>
                <button class="tablinks" onclick="openCity(event, '2')">2</button>
                <button class="tablinks" onclick="openCity(event, '3')">3</button>
            </div>
        </div>
    </div>
</div>
<div class="section_3">
    <div class="heading_section_3">
        <h1><span>Penyebab</span> <br/>Kerusakan Jalan</h1>
    </div>
    <div class="section_3_video">
        <div class="video_section">
            <!-- <button id="openPopup"><iconify-icon icon="el:play-alt"></iconify-icon></button> -->
            <button class="openPopup" data-video="https://www.youtube.com/embed/9xwazD5SyVg?si=yxxWl0F9-7gx_yrP"><iconify-icon icon="el:play-alt"></iconify-icon></button>
        </div>
    </div>
    <div class="section_3_layout">
        <div class="section_3_box">
            <img src="images/kerusakan_jalan.svg" alt="Kerusakan Jalan">
            <h3>Kerusakan Jalan</h3>
            <p>Faktanya kelebihan muatan  menjadi salah satu penyebab kerusakan jalan & berdampak pada keselamatan lalu lintas di Indonesia.</p>
        </div>
        <div class="section_3_box">
            <img src="images/retak_rambut.svg" alt="Retak Rambut">
            <h3>Retak Rambut</h3>
            <p>Kerusakan jalan yang disebabkan muatan  berlebih diawali oleh retak rambut pada  jalan dan infrastruktur</p>
        </div>
        <div class="section_3_box_layout">
            <img src="images/tanda_tanya.svg" alt="">
            <h1>Mengapa harus menggunakan Sistem Weigh-In Motion (WIM) untuk perlindungan jalan dan infrastruktur??</h1>
        </div>
        <div class="section_3_box">
            <img src="images/wim_icon.svg" alt="Retak Rambut">
            <h3>Weigh-In Motion</h3>
            <p>Kerusakan jalan yang disebabkan muatan  berlebih diawali oleh retak rambut pada  jalan dan infrastruktur</p>
        </div>
    </div>
</div>
<div class="section_4">
    <div class="section_4_video">
        <button class="openPopup" data-video="https://www.youtube.com/embed/wP6KM8bS-MQ?si=Qsi3m5sjB8-5N2Mp"><iconify-icon icon="el:play-alt"></iconify-icon></button>
    </div>
    <div class="section_4_content">
        <h1>Bagaimana <span>Sistem <br/>Weigh-In Motion</span> bekerja?</h1>
        <p>WIM Sensor Fiber Optik: Menimbang kendaraan tanpa perlu berhenti,  untuk perlindungan jalan, jembatan dan  infrastruktur penting lainnya</p>
        <div class="section_4_layout">
            <div class="section_4_box">
                <img src="images/fiber_optik.svg" alt="Sensor Fiber Optik">
                <p>Sensor Fiber <br/>Optik</p>
            </div>
            <div class="section_4_box">
                <img src="images/tanpa_listrik.svg" alt="Tanpa Listrik">
                <p>Tanpa Listrik</p>
            </div>
            <div class="section_4_box">
                <img src="images/minim_perawatan.svg" alt="Tanpa Listrik">
                <p>Minim Perawatan</p>
            </div>
            <div class="section_4_box">
                <img src="images/reusable.svg" alt="Tanpa Listrik">
                <p>Re-Usable</p>
            </div>
        </div>
        <a href="#"><button>Baca Selengkapnya</button></a>
    </div>
</div>
<div class="section_5">
    <div class="section_5_content">
        <h1>LASSER SCANNER</h1>
        <div class="section_5_layout">
            <div class="section_5_box">
                <img src="images/presisi.png" alt="Pengukuran Presisi">
                <p>Pengukuran Presisi</p>
            </div>
            <div class="section_5_box">
                <img src="images/optimal.png" alt="Optimal di Segala Cuaca">
                <p>Optimal di Segala Cuaca</p>
            </div>
            <div class="section_5_box">
                <img src="images/instalasi.png" alt="Instalasi mudah">
                <p>Instalasi mudah</p>
            </div>
            <div class="section_5_box">
                <img src="images/collect.png" alt="Collect Data">
                <p>Collect Data Akurat</p>
            </div>
        </div>
        <a href="#"><button>More Info</button></a>
    </div>
    <div class="section_5_img">
        <img src="images/lasser_scanner.png" alt="Lasser Scanner Image">
    </div>
</div>
<div class="section_6">
    <div class="blog_heading">
        <h1>News & Articles</h1>
    </div>
    <div class="blog_layout">
        <div class="swiper swiperArtikel">
            <div class="swiper-wrapper">
                @foreach($artikels as $artikel)
                    <div class="swiper-slide">
                        <div class="artikel_box">
                            <div class="artikel_card">
                                <div class="artikel_card_image">
                                    <a href="news-articles/{{ $artikel->slug }}"><img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}"></a>
                                </div>
                                <div class="card_body">
                                    <a href="news-articles">
                                        <h5 class="card-title">{{ $artikel->title }}</h5>
                                    </a>
                                    <p class="card-text">{!! Str::limit(strip_tags($artikel->description), 60) !!}</p>
                                    <a href="news-articles/{{ $artikel->slug }}"><button>Baca Selengkapnya</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <a href="{{ url('/news-articles') }}"><button class="btn_see_all">See All</button></a>

        <div class="section_7">
            <div class="contact_section">
                <a href="#">
                    <iconify-icon icon="basil:gmail-solid"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="solar:phone-bold"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="mingcute:whatsapp-fill"></iconify-icon>
                </a>
                <a href="#">
                    <iconify-icon icon="mingcute:instagram-fill"></iconify-icon>
                </a>
            </div>
            <img src="images/bubble_chat.png" alt="" class="bubble_chat">
            <div class="section_7_box">
                <div class="content_section_7">
                    <h1><span>Need Help?</span> <br/>Contact Us <p>In :<p></h1>
                </div>
                <img src="images/women_contact.png" alt="SIA Contact" class="women_contact">
                <div class="content_section_7 content_section_7_sc">
                    <h1>Klik This</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="videoPopup" class="popup">
    <div class="overlay_video_popup"></div>
    <div class="popup-content">
        <span id="closePopup" class="closeVideoBtn"><iconify-icon icon="carbon:close-filled"></iconify-icon></span>
        <iframe id="videoFrame" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

@endsection
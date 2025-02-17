@extends('layouts.app')

@push('meta')
    <meta property="og:title" content="Corporate" />
    <meta property="og:description" content="PT Sistem Inovasi Akurasi (SIA) merupakan Perusahaan swasta nasional yang didirikan  berdasarkan akta No. 2 pada tanggal 03 November 2023 dari kantor Notaris Yeldi Anwar,  SH." />
    <meta property="og:image" content="{{ config('app.url') . '/images/corporate_img_banner.png' }}" />
    <meta property="og:url" content="{{ config('app.url') }}/corporate" />
    <meta property="og:type" content="corporate" />
    <meta property="og:site_name" content="{{ config('app.name') }}" />
    <meta property="og:locale" content="id_ID" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Corporate" />
    <meta name="twitter:description" content="PT Sistem Inovasi Akurasi (SIA) merupakan Perusahaan swasta nasional yang didirikan  berdasarkan akta No. 2 pada tanggal 03 November 2023 dari kantor Notaris Yeldi Anwar,  SH." />
    <meta name="twitter:image" content="{{ config('app.url') . '/images/corporate_img_banner.png' }}" />
    <meta name="twitter:site" content="@username_twitter" />
@endpush

@section('content')

    <div class="section_1_corpo">
        <div class="section_1_corpo_layout">
            <h3>Corporate</h3>
            <h1>PT. SISTEM INOVASI AKURASI</h1>
            <img src="images/label_corpo.svg" alt="Label Corpo" class="label_corpo">
            <div class="company_profile_heading">
                <h2>Company</h2>
                <h2>Profile</h2>
            </div>
            <img src="images/corporate_img_banner.png" alt="Corporate Image Banner" class="corporate_img_banner">
            <img src="images/bg_sia.svg" alt="Background SIA" class="bg_sia">
            <img src="images/star_banner_top.svg" alt="" class="star_banner_top">
            <img src="images/star_banner_right.svg" alt="" class="star_banner_right">
        </div>
    </div>
    <div class="section_2_corpo">
        <img src="images/star_banner_right.svg" alt="" class="star_banner_2">
        <img src="images/triangle_icon.svg" alt="" class="triangle_icon">
        <div class="section_2_corpo_logo">
            <img src="images/sia_circle.png" alt="Logo Sistem Akurasi Inovasi">
            <span>Since 2023</span>
        </div>
        <div class="section_2_corpo_content">
            <p>PT Sistem Inovasi Akurasi (SIA) merupakan Perusahaan swasta nasional yang didirikan  berdasarkan akta No. 2 pada tanggal 03 November 2023 dari kantor Notaris Yeldi Anwar,  SH.</p>
            <p>Berkedudukan di Jakarta Selatan</p>
            <div class="section_2_corpo_content_grid">
                <img src="images/corpo_gedung.png" alt="">
                <div class="section_2_corpo_maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9532629121236!2d106.85105627603666!3d-6.136981910167688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f57d438e6ddb%3A0xe2a1d875f472352e!2sGriya%20Inti%20Sentosa!5e0!3m2!1sen!2sid!4v1738917086934!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="section_3_corpo">
        <div class="p_corpo_3_first">
            <p>Akta pendirian telah mendapatkan pengesahan dari  Menteri Hukum dan Hak Asasi Manusia Republik Indonesia pada tanggal 07 November  2023</p>
        </div>
        <div class="section_3_corpo_layout">
            <div class="section_3_corpo_box section_3_corpo_box_bottom">
                <h3>Akta Pendirian</h3>
                <div class="divider_3"></div>
                <div class="space_corpo_3"></div>
            </div>
            <div class="section_3_corpo_box section_3_corpo_box_bottom">
                <h3 class="corpo_3_heading_blue">2023</h3>
                <div class="divider_3"></div>
                <div class="space_corpo_3"></div>
            </div>
            <div class="section_3_corpo_box section_3_corpo_box_bg section_3_corpo_box_bottom">
                <h4 class="section_3_corpo_box_bottom_h4">Weigh In Motion</h4>
                <div class="divider_3 divider_3_bg"></div>
                <h4 class="section_3_corpo_box_top_h4">Laser Scanner</h4>
            </div>
            <div class="section_3_corpo_box section_3_corpo_box_top">
                <div class="space_corpo_3"></div>
                <div class="divider_3"></div>
                <h3 class="corpo_3_heading_blue">2023</h3>
            </div>
        </div>
        <div class="p_corpo_3">
            <p>Domisili Perusahaan di Komplek Griya Inti Sentosa, Jl. Griya Agung No. 88 89, Kelurahan Sunter Agung, Kecamatan Tanjung Priok, Kota ADM Jakarta Utara.</p>
            <div class="divider_p_corpo"></div>
        </div>
    </div>
    <div class="section_4_corpo">
        <div class="section_4_corpo_content">
            <img src="images/corpo_panel.png" alt="Laser">
        </div>
        <div class="section_4_corpo_content section_4_corpo_content_bg">
            <img src="images/corpo_laser.png" alt="Panel">
        </div>
        <div class="section_4_corpo_text">
            <p>Perusahaan berfokus untuk mengimplementasikan teknologi penimbangan kendaraan  dinamis atau Weigh-In-Motion (WIM) untuk perlindungan infrastruktur dan teknologi  Laser Scanner dalam pengukuran volumetrik dan klasifikasi kendaraan.</p>
        </div>
    </div>
    <div class="section_5_corpo">
        <div class="section_5_corpo_grid">
            <div class="section_5_corpo_box">
                <img src="images/hours_icon.svg" alt="Hours Icon">
                <p>24 Jam
                Non-Stop</p>
            </div>
            <div class="section_5_corpo_box">
                <img src="images/sun_icon.svg" alt="Sun Icon">
                <p>Optimal di Segala Cuaca</p>
            </div>
            <div class="section_5_corpo_box">
                <img src="images/setting_icon.svg" alt="Setting Icon">
                <p>Minim 
                Perawatan</p>
            </div>
            <div class="section_5_corpo_box">
                <img src="images/health_db_icon.svg" alt="Setting Icon">
                <p>Data Real Time</p>
            </div>
        </div>
        <div class="section_5_corpo_p">
            <p>Teknologi yang kami sajikan mampu menghasilkan data real time yang berharga selama  24 jam non-stop, tahan terhadap segala kondisi cuaca serta minim perawatan.</p>
        </div>
    </div>
    <div class="section_6_corpo">
        <img src="images/star_turndown.svg" alt="" class="star_down">
        <img src="images/star_turndown.svg" alt="" class="star_down_sc">
        <div class="section_6_corpo_heading">
            <h1>Visi dan Misi Kami</h1>
        </div>
        <div class="section_6_corpo_layout">
            <div class="section_6_corpo_img">
                <img src="images/visi_misi_img.png" alt="Visi Misi PT. SIA">
            </div>
            <div class="section_6_corpo_content">
                <div class="section_6_corpo_box">
                    <h1>Visi</h1>
                    <p>Berkontribusi nyata dalam perlindungan infrastruktur dan keselamatan transportasi di  Indonesia.</p>
                </div>
                <div class="section_6_corpo_box">
                    <h1>Misi</h1>
                    <div class="section_6_corpo_box_list">
                        <div class="section_6_corpo_box_list_main">
                            <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                            <p>Menjadi mitra terpercaya bagi pelanggan,</p>
                        </div>
                        <div class="section_6_corpo_box_list_main">
                            <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                            <p>Kemitraan kuat dengan partner yang kredibel,</p>
                        </div>
                        <div class="section_6_corpo_box_list_main">
                            <iconify-icon icon="tabler:chevron-right"></iconify-icon>
                            <p>Perusahaan tumbuh secara konsisten  dalam market dan profit yang positif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_10_wim">
        <div class="section_10_wim_heading">
            <h1>Layanan</h1>
            <h3>Pendampingan 24 Jam</h3>
        </div>
        <div class="section_10_wim_img">
            <img src="images/call_center_bubble.png" alt="Bubble Chat" class="bubble_wim">
            <img src="images/bg_call_center.webp" class="wim_call_center" alt="Call Center">
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
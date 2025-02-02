@extends('layouts.app')

@section('content')
<div class="section_1">
    <img src="images/sensor_banner.png" alt="Sensor Banner" class="sensor_banner">
    <img src="images/truck_banner.png" alt="Truck Banner" class="truck_banner">
    <div class="banner_content">
        <h3>Counting & Classification<br/> High-Technology</h3>
        <h1>Laser Scanner</h1>
        <p>Menghitung dan meng-klasifikasi kendaraan  secara real time dan akurat bahkan dalam kondisi  malam dan cuaca hujan</p>
        <a href="#"><button>Learn More</button></a>
    </div>
    <div class="cta_banner">
        <div class="circle_cta_banner">
            <div class="circle_small_cta_banner"></div>
        </div>
        <img src="images/cta_arrow.svg" alt="Cta Arrow" class="cta_arrow">
        <a href="#"><button>Lihat Database</button></a>
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
                    <h1>Sistem Kami <br/>Minim Perawatan</h1>
                    <p>Teknologi berbasis sensor fiber optik menawarkan akurasi tinggi dalam mendeteksi dan menganalisis data, memastikan performa optimal dalam berbagai kondisi lingkungan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Minim Perawatan</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_3.png" alt="Keunggulan">
                </div>
            </div>

            <div id="4" class="tabcontent">
                <div class="tabcontent_text">
                    <div class="heading_section_2">
                        <h2>Product</h2>
                    </div>
                    <h1>Durabilitas Tinggi <br/>(>8 tahun)</h1>
                    <p>Teknologi berbasis sensor fiber optik menawarkan akurasi tinggi dalam mendeteksi dan menganalisis data, memastikan performa optimal dalam berbagai kondisi lingkungan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Durabilitas Tinggi</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_4.png" alt="Keunggulan">
                </div>
            </div>

            <div id="5" class="tabcontent">
                <div class="tabcontent_text">
                    <div class="heading_section_2">
                        <h2>Product</h2>
                    </div>
                    <h1>Reusable <br/> (Dapat dipakai ulang)</h1>
                    <p>Teknologi berbasis sensor fiber optik menawarkan akurasi tinggi dalam mendeteksi dan menganalisis data, memastikan performa optimal dalam berbagai kondisi lingkungan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Dapat dipakai ulang</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_5.png" alt="Keunggulan">
                </div>
            </div>

            <div id="6" class="tabcontent">
                <div class="tabcontent_text">
                    <div class="heading_section_2">
                        <h2>Product</h2>
                    </div>
                    <h1>Dapat diinstall di iklim apapun</h1>
                    <p>Teknologi berbasis sensor fiber optik menawarkan akurasi tinggi dalam mendeteksi dan menganalisis data, memastikan performa optimal dalam berbagai kondisi lingkungan.</p>
                    <a href="#"><button>Learn More</button></a>
                    <h3 class="heading_absolute">Pada Iklim Apapun</h3>
                </div>
                <div class="tabcontent_img">
                    <img src="images/keunggulan_6.png" alt="Keunggulan">
                </div>
            </div>
        </div>
        <div class="section_2_tab_btn">
            <p>Keunggulan</p>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">1</button>
                <button class="tablinks" onclick="openCity(event, '2')">2</button>
                <button class="tablinks" onclick="openCity(event, '3')">3</button>
                <button class="tablinks" onclick="openCity(event, '4')">4</button>
                <button class="tablinks" onclick="openCity(event, '5')">5</button>
                <button class="tablinks" onclick="openCity(event, '6')">6</button>
            </div>
        </div>
    </div>

</div>
<div class="section_3">
    <div class="heading_section_3">
        <h1><span>Penyebab</span> <br/>Kerusakan Jalan</h1>
    </div>
    <div class="video_section">
        <iframe src="https://www.youtube.com/embed/9xwazD5SyVg?si=7IR1HXuiYDvOo9__" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
        <iframe src="https://www.youtube.com/embed/9xwazD5SyVg?si=7IR1HXuiYDvOo9__" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
    
    <div class="section_6_heading">
        <div class="circle_heading"></div>
        <h2>Integrasi yang mudah dengan perangkat ITS (Intellegence Transportation System)</h2>
    </div>
    <div class="section_6_box">
            <img src="images/tech_img.png" alt="Integrated Hi-Tech" class="tech_img">
            <h1>Integrated <br/> <span>Hi-Tech</span></h1>
            <p>Sistem WIM Sensor Fiber Optik dapat dengan mudah
            dihubungkan dengan sistem ITS lainnya seperti 
            kamera ANPR untuk pengenalan plat nomor, 
            LIDAR/LASER  untuk dimensi 3D kendaraan,
            tinggi, panjang, lebar.</p>
        <div class="section_6_layout">
            <img src="images/tech_arrow.svg" alt="" class="tech_arrow">
            <img src="images/tech_icon.png" alt="Hi-Tech Icon" class="tech_icon">
            <img src="images/section_6_img.png" alt="Integrated Hi-Tech" class="section_6_layout_img">
        </div>
    </div>
</div>
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
    <img src="images/contact_img_home.svg" alt="" class="contact_img_icon">
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
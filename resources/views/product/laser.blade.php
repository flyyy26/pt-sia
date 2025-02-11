@extends('layouts.app')

@section('content')

<?php

    $keunggulans = [
        [
            "icon" => "images/usb_icon.svg",
            "alt" => "Sensor Serat Optik",
            "description" => "Laser Scanner adalah sensor untuk pendeteksi kendaraan berbasis teknologi pemindai laser. "
        ],
        [
            "icon" => "images/db_icon.svg",
            "alt" => "Real Time",
            "description" => "Dibandingkan dengan teknologi lain, sensor  ini mampu mendeteksi kendaraan dengan presisi dan resolusi tinggi."
        ],
        [
            "icon" => "images/truck_weigh_icon.svg",
            "alt" => "Real Time",
            "description" => "Laser mampu mengukur profil kendaraan secara akurat dan oleh  sebab itu ini merupakan alat yang ideal untuk aplikasi di mana kendaraan counting dan klasifikasi diperlukan."
        ]
    ];

    $teknis = [
        [
            "bahan" => "Teknologi",
            "type" => "Laser Scanner"
        ],
        [
            "bahan" => "Ukuran",
            "type" => "296 x 178 x 209 mm"
        ],
        [
            "bahan" => "Berat",
            "type" => "5 Kg (3 Kg sensor 2Kg bracket)"
        ],
        [
            "bahan" => "Box",
            "type" => "Reinforced polycarbonate"
        ],
        [
            "bahan" => "Cahaya dipancarkan",
            "type" => "905 nm tidak terlihat"
        ],
        [
            "bahan" => "Kelas laser",
            "type" => "Kelas 1"
        ],
        [
            "bahan" => "Sudut pindai",
            "type" => "96"
        ],
        [
            "bahan" => "Periode pemindaian",
            "type" => "16 ms"
        ],
        [
            "bahan" => "Daya transmisi",
            "type" => "16 dB"
        ],
        [
            "bahan" => "Jalur komunikasi",
            "type" => "Ethernet"
        ],
        [
            "bahan" => "Catu daya",
            "type" => "12 / 24 Vdc"
        ],
        [
            "bahan" => "Konsumsi listrik",
            "type" => "< 5 W"
        ],
        [
            "bahan" => "Perlindungan",
            "type" => "IP65"
        ],
        [
            "bahan" => "Temperatur Operasi",
            "type" => "-20 C / +60 C"
        ],
    ];

?>

<div class="banner_page" style="background-image: url(../images/bg_product.png);">
    <div class="heading_page">
        <h1>Product</h1>
        <h2>Product</h2>
    </div>
    <p>Produk kami dibuat dengan kualitas<br/> terbaik berstandar international.</p>
</div>
<div class="section_1_wim">
    <div class="heading_wim heading_wim_laser">
        <h1>02</h1>
        <h3>LASER SCANNER</h3>
    </div>
    <img src="{{ asset('images/laser_heading.svg') }}" alt="WIM Sensor Fiber Optic" class="heading_wim_img">
    <img src="{{ asset('images/scanner_icon_page.png') }}" alt="Laser Scanner" class="scanner_icon_page">
    <img src="{{ asset('images/laser_product_icon.png') }}" alt="WIM Sensor Fiber Optic" class="icon_wim icon_laser_page">
    <div class="p_wim p_wim_sc">
        <img src="{{ asset('images/quote_left.svg') }}" alt="WIM Description" class="quote_left">
        <img src="{{ asset('images/quote_right.svg') }}" alt="WIM Description" class="quote_right">
        <p>Teknologi Laser Scanner menghitung dan meng-klasifikasi kendaraan secara real time dan akurat.</p>
    </div>
</div>
<div class="section_2_wim section_2_wim_laser">
    <div class="section_2_wim_content">
        <?php foreach ($keunggulans as $keunggulan): ?>
            <div class="section_2_wim_box">
                <div class="section_2_wim_box_icon">
                    <img src="{{ asset($keunggulan['icon']) }}" alt="{{ $keunggulan['alt'] }}">
                </div>
                <div class="section_2_wim_box_content">
                    <p><?= $keunggulan['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="section_2_wim_img">
        <img src="{{ asset('images/laser_section_2.png') }}" alt="WIM Sensor Fiber Optic">
    </div>
</div>
<div class="section_3_laser">
    <div class="section_3_laser_heading">
        <h1><span>Laser</span> mampu membedakan <b>>20</b> Jenis Kendaraan, seperti :</h1>
    </div>
    <div class="section_3_laser_layout">
        <div class="section_3_laser_box active_box">
            <img src="{{ asset('images/truck_hover_img.png') }}" alt="Truck">
            <div class="overlay_green_box"></div>
            <h1>Truck</h1>
        </div>
        <div class="section_3_laser_box">
            <img src="{{ asset('images/motor_hover_img.png') }}" alt="Motor">
            <div class="overlay_green_box"></div>
            <h1>Motor</h1>
        </div>
        <div class="section_3_laser_box">
            <img src="{{ asset('images/bus_hover_img.png') }}" alt="Bus">
            <div class="overlay_green_box"></div>
            <h1>Bus</h1>
        </div>
        <div class="section_3_laser_box">
            <img src="{{ asset('images/car_hover_img.png') }}" alt="Van">
            <div class="overlay_green_box"></div>
            <h1>Van</h1>
        </div>
        <div class="section_3_laser_box_more">
            <h1>And More!</h1>
        </div>
    </div>
</div>
<div class="section_4_laser">
    <img src="{{ asset('images/section_3_laser_img.png') }}"  alt="Laser Scanner" class="section_4_laser_img">
    <div class="section_4_laser_content">
        <p>Laser mampu mengukur profil kendaraan secara akurat dan oleh sebab itu ini  merupakan alat yang ideal untuk aplikasi di mana kendaraan counting dan  klasifikasi diperlukan. Laser mampu membedakan lebih banyak dari 20 kelas  kendaraan</p>
        <img src="{{ asset('images/section_3_laser_truck.png') }}" alt="Truck">
    </div>
</div>

<div class="section_5_laser">
    <img src="{{ asset('images/section_5_laser_heading.png') }}" alt="" class="section_5_laser_heading">
    <img src="{{ asset('images/section_5_laser_truck.png') }}"  alt="Truck" class="section_5_laser_truck">
    <div class="section_5_laser_layout">
        <div class="section_5_laser_box">
            <p>Sensor telah dirancang, baik secara mekanis maupun dari sisi perangkat lunak untuk beroperasi di luar ruangan, bahkan dalam kondisi  cuaca buruk dan gelap tanpa penerangan.</p>
        </div>
        <div class="section_5_laser_box">
            <p>Optik pemindai berbeda dari produk lain dipasaran, karena terdiri dari dua hal yang berbeda secara fisik yaitu area untuk transmisi dan  area penerimaan laser, membuatnya sangat kebal terhadap kotoran yang dihasilkan oleh debu, air dan polusi.</p>
        </div>
        <div class="section_5_laser_box">
            <p>Sensor dilengkapi dengan CPU (central processing unit) yang memprosesnya sinyal dari pemindai untuk mendapatkan semua data  berhubungan dengan kendaraan yang melintas. Komunikasi dengan sensor berlangsung melalui jalur Ethernet dan dikonfigurasi melalui  halaman web yang sederhana dan intuitif</p>
        </div>
    </div>
</div>

<div class="section_6_laser">
    <div class="section_6_laser_content">
        <div class="heading_laser_table">
            <h1>Data Teknis Laser Scanner</h1>
        </div>
        <div class="laser_table">
            <?php foreach ($teknis as $teknik): ?>
                <div class="section_6_laser_table_content">
                    <div class="section_6_laser_box">
                        <p><?= $teknik['bahan']; ?></p>
                    </div>
                    <div class="section_6_laser_box">
                        <p><span>:</span>  <?= $teknik['type']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="section_6_laser_img">
        <img src="{{ asset('images/section_6_laser_img.png') }}" alt="Laser">
    </div>
</div>
<div class="section_7_laser">
    <div class="section_7_laser_heading">
        <img src="{{ asset('images/section_7_laser_heading_img.png') }}" alt="" class="section_7_laser_heading_img">
        <img src="{{ asset('images/polygon_heading.svg') }}" alt="Polygon Heading" class="polygon_heading_7">
        <h1>Kenapa Kami <br/><span>Berbeda?</span></h1>
        <img src="{{ asset('images/section_7_laser_img.png') }}" alt="Truck" class="section_7_laser_img">
    </div>
    <div class="section_7_laser_layout">
        <div class="section_7_laser_box">
            <div class="section_7_laser_box_img">
                <img src="{{ asset('images/target_icon.svg') }}" alt="Target">
            </div>
            <div class="section_7_laser_box_heading">
                <h1>Akurasi Counting hingga lebih dari 99%</h1>
            </div>
            <div class="section_7_laser_box_content">
                <p>Dengan memperhatikan lokasi instalasi, penempatan laser pada ketinggian yang  optimal, pengaturan sudut pemindaian serta pengaturan konfigurasi pada web  interface maka akurasi counting diatas 99% akan dengan mudah dan stabil.</p>
            </div>
        </div>
        <div class="section_7_laser_box section_7_laser_box_gr">
            <div class="section_7_laser_box_img">
                <img src="{{ asset('images/cloud_rain_icon.svg') }}" alt="Target">
            </div>
            <div class="section_7_laser_box_heading">
                <h1>Optimal bahkan dalam kondisi hujan dan minim penerangan</h1>
            </div>
            <div class="section_7_laser_box_content">
                <p>Kelebihan teknologi laser salah satunya adalah mampu bekerja optimal bahkan  dalam kondisi penerangan yang kurang serta cuaca hujan, laser pun telah teruji  dalam proteksi IP65.</p>
            </div>
        </div>
        <div class="section_7_laser_box">
            <div class="section_7_laser_box_img">
                <img src="{{ asset('images/settings_sync_icon.svg') }}" alt="Target">
            </div>
            <div class="section_7_laser_box_heading">
                <h1>Minim perawatan</h1>
            </div>
            <div class="section_7_laser_box_content">
                <p>Hampir dapat dikatakan laser hanya memerlukan perawatan yang minimal yaitu  pembersihan area luar optik laser dengan air biasa yang dilakukan setahun sekali  atau melihat kondisi lingkungan dimana laser ditempatkan.</p>
            </div>
        </div>
    </div>
</div>

<div class="section_7 section_7_sc">
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
    <img src="{{ asset('images/bubble_chat.png') }}" alt="" class="bubble_chat">
    <div class="section_7_box">
        <div class="content_section_7">
            <h1><span>Need Help?</span> <br/>Contact Us In :</h1>
        </div>
        <img src="{{ asset('images/women_contact.png') }}" alt="SIA Contact" class="women_contact">
        <div class="content_section_7">
            <h1>Klik This</h1>
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

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const boxes = document.querySelectorAll(".section_3_laser_box");

        boxes.forEach(box => {
            box.addEventListener("mouseenter", function () {
                // Hapus class active_box dari semua elemen
                boxes.forEach(b => b.classList.remove("active_box"));
                // Tambahkan class active_box ke elemen yang sedang dihover
                this.classList.add("active_box");
            });
        });
    });
</script>

@endsection
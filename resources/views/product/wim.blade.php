@extends('layouts.app')

@section('content')

<?php
    $features = [
        [
            "icon" => "images/charger_icon_green.svg",
            "alt" => "Sensor Fiber Optik",
            "title" => "Sensor Fiber Optik",
            "description" => "Teknologi terkini Sensor Fiber Optik menjadikannya sensor berat yang stabil, akurat, dan tahan lama."
        ],
        [
            "icon" => "images/lamp_icon_green.svg",
            "alt" => "Tanpa Listrik",
            "title" => "Tanpa Listrik",
            "description" => "Tidak diperlukan Listrik dibawah jalan, sehingga menjadikannya <b>kebal medan elektromagnetik</b>."
        ],
        [
            "icon" => "images/setting_icon_green.svg",
            "alt" => "Minim Perawatan",
            "title" => "Minim Perawatan",
            "description" => "Minim perawatan dan memiliki daya tahan tinggi <b>(> 8 tahun)</b>."
        ],
        [
            "icon" => "images/suhu_icon_green.svg",
            "alt" => "Sensor Tidak Sensitif",
            "title" => "Sensor Tidak Sensitif",
            "description" => "Sensor <b>tidak sensitif</b> terhadap perubahan cuaca dan temperatur."
        ],
        [
            "icon" => "images/recycle_icon_green.svg",
            "alt" => "Re-Usable",
            "title" => "Re-Usable",
            "description" => "Dapat dipakai ulang dan dapat dipindahkan ke tempat lain saat ada perbaikan jalan <b>(reusable)</b>."
        ]
    ];

    $keunggulans = [
        [
            "icon" => "images/usb_icon.svg",
            "alt" => "Sensor Serat Optik",
            "description" => "Teknologi penimbangan dinamis berbasis sensor serat optik, memungkinkan pengukuran yang tepat terhadap berat total dan berat gandar kendaraan yang sedang melaju, memastikan kepatuhan terhadap peraturan berat dan <b>meningkatkan keselamatan di jalan</b>."
        ],
        [
            "icon" => "images/db_icon.svg",
            "alt" => "Real Time",
            "description" => "Dengan mendeteksi kendaraan yang kelebihan muatan <b>secara real-time</b>, sensor serat optik menawarkan bantuan konkret dalam mencegah kecelakaan dan kerusakan infrastruktur."
        ],
        [
            "icon" => "images/curve_icon.svg",
            "alt" => "Real Time",
            "description" => "Sensor berat dapat dipasang di jalan raya, jembatan, atau lokasi kerja dan <b>menyediakan data yang andal dan akurat</b>."
        ]
    ];

    $whys = [
        [
            "image" => "images/how_wim_1.png",
            "alt" => "Sensor Fiber Optik Terpasang",
            "description" => "<span>1.</span> Sistem Weigh In Motion (WIM) Sensor Fiber Optik terpasang pada  pelat lentur baja tahan karat yang dipasang rata dengan permukaan jalan  dan dapat ditempatkan di jalan perkotaan dan pinggiran kota, jalan bebas  hambatan/jalan raya, jembatan, gerbang tol, Pelabuhan, Pelabuhan peti  kemas, pertambangan dan lainnya."
        ],
        [
            "image" => "images/how_wim_2.png",
            "alt" => "Teknologi Serat Optik",
            "description" => "<span>2.</span> Sensor penimbangan dinamis menggunakan teknologi serat optik  sehingga menjadikannya unik karena stabil, akurat, tahan lama serta tidak  memerlukan listrik dibawah jalan. Sensor dihubungkan dengan kabel  serat optik ke pencatat data/ datalogger."
        ],
        [
            "image" => "images/how_wim_3.png",
            "alt" => "Data Logger",
            "description" => "<span>3.</span> Unit akuisisi data (datalogger) memproses dan menyimpan semua  informasi yang dikumpulkan dari sensor penimbangan dinamis dalam  basis data. Semua informasi transit tersedia bagi pengguna melalui  antarmuka web yang mudah diakses dari setiap perangkat. Datalogger  dapat ditempat hingga jarak 10 Km tanpa mempengaruhi hasil."
        ],
        
    ];

    $teknis = [
        [
            "bahan" => "Material",
            "ukuran" => "-",
            "type" => "Stainless Steel"
        ],
        [
            "bahan" => "Dimensi Pelat",
            "ukuran" => "mm",
            "type" => "1482/1732/1982 x 598 x 20/22/25"
        ],
        [
            "bahan" => "Kapasitas Penimbangan Per Gandar",
            "ukuran" => "kg",
            "type" => "0 ... 25,000"
        ],
        [
            "bahan" => "Teknologi Penimbangan",
            "ukuran" => "-",
            "type" => "Sensor Fiber Optik"
        ],
        [
            "bahan" => "Sertifikasi & Kepatuhan",
            "ukuran" => "-",
            "type" => "OIML R134 & COST 323"
        ],
        [
            "bahan" => "Temperatur operasi",
            "ukuran" => "C",
            "type" => "-30 ... +70"
        ],
        [
            "bahan" => "Kecepatan Deteksi",
            "ukuran" => "Km/Jam",
            "type" => "5 ... 130"
        ],
        [
            "bahan" => "Durabilitas",
            "ukuran" => "Tahun",
            "type" => ">8"
        ],
        [
            "bahan" => "Fondasi",
            "ukuran" => "-",
            "type" => "Aspal, beton bertulang"
        ],
        [
            "bahan" => "Terpengaruh oleh perubahan temperatur",
            "ukuran" => "-",
            "type" => "Tidak"
        ],
        [
            "bahan" => "Diperlukan loop induktif",
            "ukuran" => "-",
            "type" => "Tidak"
        ],
        [
            "bahan" => "Diperlukan listrik dibawah jalan",
            "ukuran" => "-",
            "type" => "Tidak"
        ],
        [
            "bahan" => "Kemiringan memanjang dan melintang jalan dibutuhkan",
            "ukuran" => "-",
            "type" => "<496"
        ],
        [
            "bahan" => "Index kekasaran jalan dibutuhkan",
            "ukuran" => "-",
            "type" => "IRI < 6 mm/m"
        ],
    ];

    $teknisSecond = [
        [
            "bahan" => "Dimensi",
            "ukuran" => "mm",
            "type" => "482 x 177 x 170"
        ],
        [
            "bahan" => "Berat",
            "ukuran" => "kg",
            "type" => "6"
        ],
        [
            "bahan" => "Koneksi pada panel depan",
            "ukuran" => "-",
            "type" => "SC/APC (optic fiber), RJ45 (network), IEC (supply)"
        ],
        [
            "bahan" => "Pemasangan",
            "ukuran" => "-",
            "type" => "Brackets standard rack 19” (EIA-310)"
        ],
        [
            "bahan" => "Catu daya",
            "ukuran" => "VAC",
            "type" => "110 - 230110 - 230"
        ],
        [
            "bahan" => "Konsumsi listrik",
            "ukuran" => "W",
            "type" => "15"
        ],
        [
            "bahan" => "Temperatur operasi",
            "ukuran" => "C",
            "type" => "-10 ... +60"
        ],
        [
            "bahan" => "Isi",
            "ukuran" => "-",
            "type" => "PC, fiber optic light source, spectrometer"
        ],
        [
            "bahan" => "Kapasitas HDD",
            "ukuran" => "GB",
            "type" => "128 ... 1024"
        ],
        [
            "bahan" => "Kapasitas penyimpanan lokal",
            "ukuran" => "Hari",
            "type" => "> 30 dengan teks dan gambar, > 365 hanya teks"
        ],
        [
            "bahan" => "Antarmuka jaringan",
            "ukuran" => "-",
            "type" => "Ethernet 1 Gbps (IEEE 803.3ab)"
        ],
        [
            "bahan" => "Jarak dari Sensor",
            "ukuran" => "Km",
            "type" => "< 10"
        ],
    ];

    $dataIcon = [
        [
            "image" => "images/data_icon_1.png",
            "alt" => "Berat Kotor Kendaraan"
        ],
        [
            "image" => "images/data_icon_2.png",
            "alt" => "Kecepatan Transit"
        ],
        [
            "image" => "images/data_icon_3.png",
            "alt" => "Perhitungan dan Klasifikasi Kendaraan"
        ],
        [
            "image" => "images/data_icon_4.png",
            "alt" => "Jumlah AS"
        ],
        [
            "image" => "images/data_icon_5.png",
            "alt" => "Berat Roda Tunggal"
        ],
        [
            "image" => "images/data_icon_6.png",
            "alt" => "Jarak Poros"
        ],
        [
            "image" => "images/data_icon_7.png",
            "alt" => "Lebar Poros"
        ],
        [
            "image" => "images/data_icon_8.png",
            "alt" => "Panjang Kendaraan"
        ],
        [
            "image" => "images/data_icon_9.png",
            "alt" => "Roda Kembar"
        ],
        [
            "image" => "images/data_icon_10.png",
            "alt" => "Peringatan Transit Keluar dari Satu Pelat Lentur"
        ],
    ]
    
?>

<div class="banner_page" style="background-image: url(../images/bg_product.png);">
    <div class="heading_page">
        <h1>Product</h1>
        <h2>Product</h2>
    </div>
    <p>Produk kami dibuat dengan kualitas<br/> terbaik berstandar international.</p>
</div>
<div class="section_1_wim">
    <div class="heading_wim">
        <h1>01</h1>
        <h3>WIM SENSOR FIBER OPTIC</h3>
    </div>
    <img src="{{ asset('images/wim_heading.svg') }}" alt="WIM Sensor Fiber Optic" class="heading_wim_img">
    <img src="{{ asset('images/wim_product_icon.svg') }}" alt="WIM Sensor Fiber Optic" class="icon_wim">
    <div class="p_wim">
        <img src="{{ asset('images/quote_left.svg') }}" alt="WIM Description" class="quote_left">
        <img src="{{ asset('images/quote_right.svg') }}" alt="WIM Description" class="quote_right">
        <p>Sistem Penimbangan Dinamis Sensor Serat Optik untuk perlindungan jalan dan infrastruktur penting secara real time.</p>
    </div>
</div>
<div class="section_2_wim">
    <div class="section_2_wim_img">
        <img src="{{ asset('images/wim_section_2.png') }}" alt="WIM Sensor Fiber Optic">
    </div>
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
</div>
<div class="section_3_wim">
    <div class="section_3_wim_heading">
        <h1>Cara <span>WIM</span> Bekerja</h1>
        <p>WIM Sensor Fiber Optik: Menimbang kendaraan tanpa perlu berhenti, untuk perlindungan jalan, jembatan dan infrastruktur penting lainnya</p>
    </div>
    <div class="section_3_wim_video">
        <button class="openPopup" data-video="https://www.youtube.com/embed/wP6KM8bS-MQ?si=Qsi3m5sjB8-5N2Mp"><iconify-icon icon="el:play-alt"></iconify-icon></button>
    </div>
</div>

<div class="section_4_wim">
    <?php foreach ($features as $feature): ?>
        <div class="section_4_wim_box">
            <div class="section_4_wim_img">
                <img src="{{ asset($feature['icon']) }}" alt="<?= $feature['alt']; ?>">
            </div>
            <h1><?= $feature['title']; ?></h1>
            <p><?= $feature['description']; ?></p>
        </div>
    <?php endforeach; ?>
</div>

<div class="section_5_wim">
    <div class="section_3_wim_heading">
        <h1>Bagaimana <span>Sistem Weigh-In<br/> Motion</span> bekerja?</h1>
    </div>
    <div class="section_5_wim_container">
        <?php foreach ($whys as $why): ?>
            <div class="section_5_wim_layout">
                <div class="section_5_wim_img">
                    <img src="{{ asset($why['image']) }}"  alt="<?= $why['alt']; ?>">
                </div>
                <div class="section_5_wim_content">
                    <p><?= $why['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="section_6_wim">
    <div class="section_6_wim_heading">
        <h1>Data Teknis Sistem WIM Sensor Fiber Optik</h1>
    </div>
    <div class="section_6_wim_wrapper">
        <div class="section_6_wim_container">
            <div class="section_6_wim_content_img">
                <img src="{{ asset('images/pelat_lentur.png') }}"  alt="Pelat Lentur">
            </div>
            <div class="section_6_wim_content_layout">
                <h4>Pelat Lentur</h4>
                <?php foreach ($teknis as $index => $teknik): ?>
                    <div class="section_6_wim_content <?= $index % 2 === 0 ? '' : 'section_6_wim_content_white'; ?>">
                        <div class="section_6_wim_box">
                            <p><?= $teknik['bahan']; ?></p>
                        </div>
                        <div class="section_6_wim_box" style="text-align:center;">
                            <p><?= $teknik['ukuran']; ?></p>
                        </div>
                        <div class="section_6_wim_box">
                            <p><?= $teknik['type']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="section_6_wim_container">
            <div class="section_6_wim_content_img">
                <img src="{{ asset('images/data_logger.png') }}" alt="Data Logger">
            </div>
            <div class="section_6_wim_content_layout">
                <h4>Data Logger</h4>
                <?php foreach ($teknisSecond as $index => $teknikSecond): ?>
                    <div class="section_6_wim_content <?= $index % 2 === 0 ? '' : 'section_6_wim_content_white'; ?>">
                        <div class="section_6_wim_box">
                            <p><?= $teknikSecond['bahan']; ?></p>
                        </div>
                        <div class="section_6_wim_box" style="text-align:center;">
                            <p><?= $teknikSecond['ukuran']; ?></p>
                        </div>
                        <div class="section_6_wim_box">
                            <p><?= $teknikSecond['type']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>

<div class="section_7_wim">
    <div class="section_7_wim_heading">
        <div class="section_3_wim_heading section_3_wim_heading_small">
            <h1>Data berharga yang dikumpulkan oleh <br/><span>WIM Sensor Fiber Optik</span></h1>
            <p>WIM Sensor Fiber Optik adalah sistem penimbangan kendaraan canggih yang dirancang untuk aplikasi pengukuran dinamis, yang menawarkan rangkaian data  yang komprehensif tanpa memerlukan perangkat tambahan. Mampu menyediakan informasi waktu nyata termasuk berat total/kotor, jarak/ruang antar as,  pengenalan roda ganda, berat per as dan per roda, panjang kendaraan, arah perjalanan, kecepatan, dan klasifikasi kendaraan.</p>
        </div>
    </div>
    <div class="section_7_wim_layout">
        <?php foreach ($dataIcon as $icon): ?>
            <img src="{{ asset($icon['image']) }}" alt="<?= $icon['alt']; ?>">
        <?php endforeach; ?>
    </div>
</div>

<div class="section_8_wim">
    <div class="section_8_wim_heading">
        <h1>Kenapa Kami <br/><span>Berbeda?</span></h1>
    </div>
    <div class="section_8_wim_container">
        <div class="section_8_wim_layout_1">
            <img src="{{ asset('images/vector_top.png') }}" alt="Line" class="vector_top">
            <img src="{{ asset('images/vector_top_2.png') }}" alt="Line" class="vector_top_2">
            <h1 class="heading_number_1">1</h1>
            <div class="section_8_wim_img_1">
                <img src="{{ asset('images/diff_1.png') }}" alt="Re-Usable">
            </div>
            <div class="section_8_wim_content_1">
                <h1>Re-Useable</h1>
                <p>Pelat lentur sistem WIM menggunakan sensor fiber optik dan dihubungkan ke  datalogger melalui kabel fiber optik sehingga “tidak diperlukan listrik dibawah jalan”.</p>
                <p>Fiber Optik adalah teknologi yang memanfaatkan transmisi cahaya melalui serat kaca  tipis, WIM sensor fiber optik didasarkan pada teknologi ini, dirancang untuk  mengukur kendaraan yang bergerak menggunakan sensor optik yang sangat  sensitif.</p>
            </div>
        </div>
        <div class="section_8_wim_layout_2">
            <h1 class="heading_number_2">2</h1>
            <img src="{{ asset('images/vector_top_3.png') }}" alt="Line" class="vector_top_3">
            <div class="section_8_wim_content_2">
                <h1>Instalasi yang mudah dan tidak invasif</h1>
                <p>Dengan ukurannya yang kompak WIM kami mudah diinstalasi dan tidak memerlukan area pembongkaran yang luas.</p>
            </div>
            <div class="section_8_wim_img_1">
                <img src="{{ asset('images/diff_2.png') }}" alt="Instalasi yang mudah dan tidak invasif">
            </div>
        </div>
        <div class="section_8_wim_layout_3">
            <h1 class="heading_number_3">3</h1>
            <img src="{{ asset('images/vector_top_4.png') }}" alt="Line" class="vector_top_4">
            <div class="section_8_wim_img_1" style="background-color:silver;">
                <img src="" alt="Dapat digunakan kembali setelah ada pekerjaan perbaikan jalan (reuseable)">
            </div>
            <div class="section_8_wim_content_2 section_8_wim_content_3">
                <h1>Dapat digunakan kembali setelah ada pekerjaan perbaikan jalan (reuseable)</h1>
                <p>WIM kami mudah dipasang ulang ditempat baru. Sistem WIM terus berfungsi setelah renovasi permukaan jalan dan pekerjaan lainnya.</p>
            </div>
        </div>
        <div class="section_8_wim_layout_4">
            <h1 class="heading_number_4">4</h1>
            <img src="{{ asset('images/vector_top_5.png') }}"  alt="Line" class="vector_top_5">
            <div class="section_8_wim_content_2 section_8_wim_content_4">
                <h1>Dapat di install di iklim apapun</h1>
                <p>Sistem WIM kami membedakan dirinya karena daya tahannya yang tinggi terhadap faktor lingkungan seperti variasi suhu, salju, banjir.</p>
            </div>
            <div class="section_8_wim_img_1" style="background-color:silver;">
                <img src="" alt="Dapat di install di iklim apapun">
            </div>
        </div>
        <div class="section_8_wim_layout_3">
            <h1 class="heading_number_5">5</h1>
            <img src="{{ asset('images/vector_top_6.png') }}"  alt="Line" class="vector_top_6">
            <div class="section_8_wim_img_1" style="background-color:silver;">
                <img src="{{ asset('images/diff_5.png') }}"  alt="Integrasi yang mudah dengan perangkat ITS (Intelligent Transportation System) lainnya">
            </div>
            <div class="section_8_wim_content_2 section_8_wim_content_3 section_8_wim_content_title">
                <h1>Integrasi yang mudah dengan perangkat ITS (Intelligent Transportation System) lainnya</h1>
                <p>Sistem WIM Sensor Fiber Optik dapat dengan mudah dihubungkan dengan sistem ITS lainnya seperti kamera ANPR untuk pengenalan plat nomor, LIDAR/LASER  untuk dimensi 3D kendaraan, tinggi, panjang, lebar</p>
            </div>
        </div>
    </div>
    <div class="section_8_wim_banner">
        <img src="{{ asset('images/intelejen.webp') }}" alt="Intellegent Banner">
    </div>
</div>

<div class="section_9_wim">
    <div class="section_9_wim_heading">
        <h1><span>Untuk Siapa</span> Sistem WIM <br/>Sensor Fiber Optik?</h1>
    </div>
    <div class="section_9_wim_container">
        <div class="section_9_wim_layout">
            <h1 class="for_number">1</h1>
            <img src="{{ asset('images/operator_owner.png') }}" alt="Operator Owner" class="operator_owner">
            <div class="section_9_wim_content">
                <h1>Pemilik dan operator<br/> jalan raya maupun jalan tol</h1>
                <div class="section_9_wim_box">
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">
                    <p>Informasi dari system WIM memberikan masukan penting bagi studi transportasi yang membantu  mengoptimalkan perencanaan dan desain jaringan jalan di masa depan. </p>
                </div>
                <div class="section_9_wim_box">
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">
                    <p>Informasi berat  kendaraan yang detail dan akurat merupakan masukan penting baik untuk dasar desain prasarana  jalan dan jembatan  maupun untuk perencanaan pemeliharaannya infrastruktur.</p>
                </div>
                <div class="section_9_wim_box">
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">
                    <p>Selain itu, informasi dari sistem WIM dapat digunakan secara rinci dalam analisis arus transportasi  melalui jaringan jalan dan perkembangannya dari waktu ke waktu. informasi ini juga dapat  digunakan dalam memberikan bukti untuk pengambilan kebijakan transportasi yang lebih aman.</p>
                </div>
            </div>
            <div class="section_9_wim_image">
                <img src="{{ asset('images/for_1.png') }}" alt="Pemilik Operator">
            </div>
        </div>
        <div class="section_9_wim_layout section_9_wim_layout_second">
            <h1 class="for_second">2</h1>
            <img src="{{ asset('images/secure_man.png') }}" alt="Secure Man" class="secure_man">
            <div class="section_9_wim_image">
                <img src="{{ asset('images/for_2.png') }}" alt="Pihak Berwenang">
            </div>
            <div class="section_9_wim_content section_9_wim_content_right">
                <h1>Penegakan aturan batas berat <br/>kendaraan oleh pihak berwenang</h1>
                <div class="section_9_wim_box section_9_wim_box_right">
                    <p>Tujuan penegakan aturan batas berat kendaraan adalah untuk mencapai kepatuhan yang lebih  baik terhadap peraturan pemuatan dan konsekuensinya adalah pengurangan kelebihan beban.</p>
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">          
                </div>
                <div class="section_9_wim_box section_9_wim_box_right">
                    <p>Dampak negatif yang ditimbulkan oleh pembiaran berat kendaraan berlebih adalah;  meningkatnya keausan infrastruktur jalan, persaingan tidak sehat dan berkurangnya keselamatan  di jalan.</p>
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">          
                </div>
                <div class="section_9_wim_box section_9_wim_box_right">
                    <p>Sistem WIM Sensor Fiber Optik menawarkan bantuan untuk Pra-Seleksi penyaringan kendaraan  yang memiliki bobot berlebih dengan WIM Kecepatan Tinggi, maupun penegakan langsung  dengan bantuan WIM kecepatan rendah.</p>
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">          
                </div>
            </div>
        </div>
        <div class="section_9_wim_layout section_9_wim_layout_padding">
            <h1 class="for_number">3</h1>
            <img src="{{ asset('images/operator_owner.png') }}" alt="Operator Owner" class="operator_owner">
            <div class="section_9_wim_content">
                <h1>Tarif tol berdasarkan<br/> berat kendaraan</h1>
                <div class="section_9_wim_box">
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">
                    <p>Di negara-negara yang memiliki perhatian serius terhadap perlindungan infrastruktur,  keselamatan jalan raya dan persaingan logistik yang adil, pengguna jalan tol membayar tarif tol  berdasarkan berat sebenarnya dan/atau beban gandar kendaraannya. </p>
                </div>
                <div class="section_9_wim_box">
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">
                    <p>Hal ini sejalan dengan  prinsip ‘membayar polusi’, Dimana puncak tarif penggunaan jalan tol sebanding dengan keausan  jalan yang ditimbulkan oleh kendaraan.</p>
                </div>
                <div class="section_9_wim_box">
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">
                    <p>Sistem WIM tidak hanya menjamin harga tol yang adil namun juga dapat menghasilkan  pendapatan tambahan untuk membiayai pemeliharaan infrastruktur. Penerapan ini mencakup  penggunaan sistem WIM kecepatan rendah di gerbang tol dan WIM kecepatan tinggi dalam  kondisi aliran bebas/ free flow.</p>
                </div>
            </div>
            <div class="section_9_wim_image">
                <img src="{{ asset('images/for_3.png') }}"  alt="Pemilik Operator">
            </div>
        </div>
        <div class="section_9_wim_layout section_9_wim_layout_second">
            <h1 class="for_second for_four">4</h1>
            <img src="{{ asset('images/secure_man.png') }}" alt="Secure Man" class="secure_man">
            <div class="section_9_wim_image">
                <img src="{{ asset('images/for_4.png') }}"  alt="Pihak Berwenang">
            </div>
            <div class="section_9_wim_content section_9_wim_content_right">
                <h1>Aplikasi di area Industri; <br/>Pelabuhan, pusat industri, <br/>pusat logistik, pertambangan</h1>
                <div class="section_9_wim_box section_9_wim_box_right">
                    <p>Sistem WIM dapat digunakan untuk memeriksa bobot dan beban gandar truk yang masuk  maupun meninggalkan lokasi pelabuhan, pusat industri, pusat logistik dan pertambangan.</p>
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">          
                </div>
                <div class="section_9_wim_box section_9_wim_box_right">
                    <p>Sistem WIM yang telah disertifikasi untuk aplikasi perdagangan juga dapat digunakan untuk  penentuan tarif maupun penagihan terhadap berat barang yang diangkut.</p>
                    <img src="{{ asset('images/list_arrow.svg') }}" alt="List Arrow">          
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
        <img src="{{ asset('images/call_center_bubble.png') }}" alt="Bubble Chat" class="bubble_wim">
        <img src="{{ asset('images/bg_call_center.webp') }}" class="wim_call_center" alt="Call Center">
    </div>
</div>

<div class="section_11_wim">
    <div class="section_11_wim_image" style="background-color:silver;">
        <img src="" alt="">
    </div>
    <div class="section_11_wim_content">
        <p>Bersama dengan platform teknologi berbasis cloud, kami dan principal kami menawarkan layanan  pemantauan real-time 24 jam yang komprehensif. </p>
        <p>Layanan ini memungkinkan teknisi kami untuk  terus memantau berbagai data terkait pengoperasian sistem penimbangan.</p>
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

@endsection
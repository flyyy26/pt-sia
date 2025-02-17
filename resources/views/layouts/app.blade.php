<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT. Sistem Inovasi Akurasi')</title>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('images/sia_circle.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('meta')
</head>
<body>

    <!-- Navbar -->
    <div class="menu_container">
        <div class="nav_top">
            <div class="logo">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" loading="lazy">
            </div>
            <div class="contact_header">
                <div class="contact_box_header">
                    <iconify-icon icon="solar:phone-bold"></iconify-icon>
                    <div class="contact_box_header_content">
                        <h3>Call Us</h3>
                        <a href="tel:{{ $appSetting->phone_number ?? '021-6516318' }}" target="_blank"><p>{{ $appSetting->phone_number ?? '021-6516318' }}</p></a>
                    </div>
                </div>
                <div class="contact_box_header">
                    <iconify-icon icon="ic:round-email"></iconify-icon>
                    <div class="contact_box_header_content">
                        <h3>Email Us</h3>
                        <a href="mailto:{{ $appSetting->email ?? 'info@sisteminovasi.co.id' }}"><p> {{ $appSetting->email ?? 'info@sisteminovasi.co.id' }}</p></a>
                    </div>
                </div>
                <div class="contact_follow_header">
                    <span>Follow Us :</span>
                    <div class="contact_follow_header_layout">
                        <a href="{{ $appSetting->youtube ?? 'https://www.youtube.com/' }}" target="_blank">
                            <iconify-icon icon="mdi:youtube"></iconify-icon>
                        </a>
                        <a href="{{ $appSetting->instagram ?? 'https://www.instagram.com/' }}" target="_blank">
                            <iconify-icon icon="mingcute:instagram-fill"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav_bottom">
            <div class="logo_mobile">
                <img src="{{ asset('images/logo_mobile.png') }}" alt="Logo">
            </div>
            <div class="layout_hamburger">
                <div class="search_mobile"><iconify-icon icon="ri:search-line"></iconify-icon></div>
                <button class="hamburger open-popup-mobile"><img src="{{ asset('images/menu_icon.svg') }}" alt="Hamburger Menu Icon"></button>
            </div>
            <div class="menu popup-container-mobile" id="popup-mobile">
                <nav>
                    <ul>
                        <a href="{{ url('/') }}">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">Home</li>
                        </a>
                        <li class="has-submenu">
                            <div class="submenu-toggle">Product <iconify-icon icon="fluent:chevron-down-32-filled"></iconify-icon></div>
                            <ul class="submenu">
                                <li><a href="{{ url('/product/wim-sensor-fiber-optic') }}">WIM Sensor</a></li>
                                <li><a href="{{ url('/product/laser-scanner') }}">Lasser Scanner</a></li>
                            </ul>
                        </li>
                        <a href="{{ url('/news-articles') }}">
                            <li class="{{ Request::is('news-articles*') ? 'active' : '' }}">News & Articles</li>
                        </a>
                        <a href="{{ url('/corporate') }}">
                            <li class="{{ Request::is('corporate') ? 'active' : '' }}">Corporate</li>
                        </a>
                        <a href="{{ url('/contact') }}">
                            <li class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</li>
                        </a>
                    </ul>
                    <form action="{{ route('news-articles.index') }}" method="GET" class="search_menu_mobile">
                        <iconify-icon icon="ri:search-line"></iconify-icon>
                        <input type="text" name="search" placeholder="Search Here" value="{{ request('search') }}">
                        <button type="submit" style="display: none;"></button>
                    </form>
                    <div class="close_mobile">
                        <iconify-icon icon="carbon:close-filled"></iconify-icon>
                    </div>
                </nav>

                <form action="{{ route('news-articles.index') }}" method="GET" class="search_menu">
                    <iconify-icon icon="ri:search-line"></iconify-icon>
                    <input type="text" name="search" placeholder="Search Here" value="{{ request('search') }}">
                    <button type="submit" style="display: none;"></button>
                </form>


                <div id="searchResults"></div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="footer">
        <div class="footer_first">
            <div class="footer_identity">
                <img src="{{ asset('images/white_logo.svg') }}" alt="Logo" loading="lazy">
                <p>PT Sistem Inovasi Akurasi (SIA) merupakan Perusahaan swasta nasional yang didirikan berdasarkan akta No. 2 pada tanggal 03 November 2023 dari kantor Notaris Yeldi Anwar, SH</p>
                <div class="social_media_footer">
                    <a href="https://api.whatsapp.com/send?phone={{ $appSetting->whatsapp ?? 'https://api.whatsapp.com/send?phone=' }}" target="_blank">
                        <div class="social_media_box">
                            <iconify-icon icon="ic:round-whatsapp"></iconify-icon>
                        </div>
                    </a>
                    <a href="{{ $appSetting->instagram ?? 'https://www.youtube.com/@sisteminovasiakurasi123' }}" target="_blank">
                        <div class="social_media_box">
                            <iconify-icon icon="basil:instagram-outline"></iconify-icon>
                        </div>
                    </a>
                    <a href="{{ $appSetting->youtube ?? 'https://www.youtube.com/' }}" target="_blank">
                        <div class="social_media_box">
                            <iconify-icon icon="mdi:youtube"></iconify-icon>
                        </div>
                    </a>
                </div>
            </div>
            <div class="menu_footer">
                <div class="menu_footer_box">
                    <h3>Navigation</h3>
                    <ul>
                        <li><a href="{{ url('/corporate') }}">Corporate</a></li>
                        <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        <li><a href="{{ url('/product/wim-sensor-fiber-optic') }}">Product</a></li>
                    </ul>
                </div>
                <div class="menu_footer_box">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="{{ url('/faq') }}">FaQs</a></li>
                        <li><a href="{{ url('/news-articles') }}">News & Articles</a></li>
                        <li><a href="https://api.whatsapp.com/send?phone={{ $appSetting->whatsapp ?? 'https://api.whatsapp.com/send?phone=' }}" target="_blank">Help</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_second">
            <ul>
                <li><a href="{{ url('/terms-condition') }}">Terms & Condition</a></li>
                <li><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></li>
            </ul>
            <span>© 2025 PT. SISTEM AKURASI INOVASI | ID</span>
        </div>
        <div class="footer_third">
            <p><span>Disclaimer:</span> Kami tidak bertanggung jawab atas konten situs pihak ketiga. Verifikasi informasi dan konsultasikan dengan profesional sebelum mengambil keputusan.</p>
            <div class="company_data">
                <div class="company_data_box">
                    <iconify-icon icon="carbon:location-filled"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Sistem Akurasi Inovasi</h5>
                        <p>Komp Griya Inti Sentosa Jl. Griya Agung Blok 0 88-89, Sunter Jakarta.</p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="mdi:envelope"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Email</h5>
                        <p>info@sisteminovasi.co.id</p>
                    </div>
                </div>
                <div class="company_data_box">
                    <iconify-icon icon="ic:baseline-phone"></iconify-icon>
                    <div class="company_data_content">
                        <h5>Telepon</h5>
                        <p>021-6516318</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script>
       document.addEventListener('DOMContentLoaded', function () {
            const submenuToggles = document.querySelectorAll('.submenu-toggle');

            submenuToggles.forEach(toggle => {
                toggle.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Hapus kelas 'active' dari semua submenu kecuali yang diklik
                    submenuToggles.forEach(t => {
                        if (t !== this) {
                            t.classList.remove('active');
                        }
                    });
                    // Toggle kelas 'active' pada elemen yang diklik
                    this.classList.toggle('active');
                });
            });

            // Event listener untuk mendeteksi klik di luar submenu
            document.addEventListener('click', function (e) {
                // Jika klik terjadi di luar elemen dengan kelas 'submenu-toggle' dan submenu
                submenuToggles.forEach(toggle => {
                    const submenu = toggle.nextElementSibling;
                    if (submenu && !toggle.contains(e.target) && !submenu.contains(e.target)) {
                        toggle.classList.remove('active');
                    }
                });
            });

            document.addEventListener('scroll', function (e) {
                // Jika klik terjadi di luar elemen dengan kelas 'submenu-toggle' dan submenu
                submenuToggles.forEach(toggle => {
                    const submenu = toggle.nextElementSibling;
                    if (submenu && !toggle.contains(e.target) && !submenu.contains(e.target)) {
                        toggle.classList.remove('active');
                    }
                });
            });
        });

    </script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const openPopups = document.querySelectorAll(".openPopup");
            const closePopup = document.getElementById("closePopup");
            const videoPopup = document.getElementById("videoPopup");
            const videoFrame = document.getElementById("videoFrame");

            openPopups.forEach(button => {
                button.addEventListener("click", function () {
                    const videoUrl = this.getAttribute("data-video");
                    videoFrame.src = videoUrl;
                    videoPopup.style.display = "flex";
                });
            });

            closePopup.addEventListener("click", function () {
                videoPopup.style.display = "none";
                videoFrame.src = ""; // Reset src untuk menghentikan video
            });
        });

    </script>
    <script>
        function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "grid";
        evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 6000,
                disableOnInteraction: true,
            },
            loop:true,
        });
    </script>
    <script>
        var swiper = new Swiper(".swiperArtikel", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                slidesPerView: 1,
                spaceBetween: 20,
                },
                768: {
                slidesPerView: 2,
                spaceBetween: 20,
                },
                1024: {
                slidesPerView: 3,
                spaceBetween: 30,
                },
            },
        });
    </script>
    <script>
       document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll(".faq-item");

            faqItems.forEach((item) => {
                const question = item.querySelector(".faq-question");
                const answer = item.querySelector(".faq-answer");

                question.addEventListener("click", () => {
                    // Tutup semua FAQ lain sebelum membuka yang diklik
                    faqItems.forEach((i) => {
                        const otherAnswer = i.querySelector(".faq-answer");
                        if (i !== item) {
                            otherAnswer.style.maxHeight = null;
                            otherAnswer.style.opacity = 0;
                            i.classList.remove("active");
                        }
                    });

                    // Toggle FAQ yang diklik
                    if (answer.style.maxHeight) {
                        answer.style.maxHeight = null;
                        answer.style.opacity = 0;
                        item.classList.remove("active");
                    } else {
                        answer.style.maxHeight = answer.scrollHeight + "px"; // Sesuai tinggi konten
                        answer.style.opacity = 1;
                        item.classList.add("active");
                    }
                });
            });
        });


    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popup = document.getElementById("popup");
            const openBtn = document.querySelector(".open-popup");
            const closeBtn = document.querySelector(".close-btn");

            // Buka popup
            openBtn.addEventListener("click", function () {
                popup.classList.add("active");
            });

            // Tutup popup
            closeBtn.addEventListener("click", function () {
                popup.classList.remove("active");
            });

            // Klik di luar popup untuk menutup
            popup.addEventListener("click", function (e) {
                if (e.target === this) {
                    this.classList.remove("active");
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const popup = document.getElementById("popup-mobile");
            const openBtn = document.querySelector(".open-popup-mobile");
            const closeBtn = document.querySelector(".close_mobile");

            // Buka popup
            openBtn.addEventListener("click", function () {
                popup.classList.add("active");
            });

            // Tutup popup
            closeBtn.addEventListener("click", function () {
                popup.classList.remove("active");
            });

            // Klik di luar popup untuk menutup
            popup.addEventListener("click", function (e) {
                if (e.target === this) {
                    this.classList.remove("active");
                }
            });
        });
    </script>
    </body>
    </html>
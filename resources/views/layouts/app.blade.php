<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT. Sistem Inovasi Akurasi')</title>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
                        <p>021-6516318</p>
                    </div>
                </div>
                <div class="contact_box_header">
                    <iconify-icon icon="ic:round-email"></iconify-icon>
                    <div class="contact_box_header_content">
                        <h3>Email Us</h3>
                        <p>info@sisteminovasi.co.id</p>
                    </div>
                </div>
                <div class="contact_follow_header">
                    <span>Follow Us :</span>
                    <div class="contact_follow_header_layout">
                        <a href="#">
                            <iconify-icon icon="mdi:youtube"></iconify-icon>
                        </a>
                        <a href="#">
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
                <button class="hamburger"><img src="{{ asset('images/menu_icon.svg') }}" alt="Hamburger Menu Icon"></button>
            </div>
            <div class="menu">
                <nav>
                    <ul>
                        <a href="{{ url('/') }}">
                            <li class="{{ Request::is('/') ? 'active' : '' }}">Home</li>
                        </a>
                        <a href="{{ url('/product') }}">
                            <li class="{{ Request::is('product') ? 'active' : '' }}">Product</li>
                        </a>
                        <a href="{{ url('/news-articles') }}">
                            <li class="{{ Request::is('news-articles*') ? 'active' : '' }}">News & Articles</li>
                        </a>
                        <a href="{{ url('/corporate') }}">
                            <li class="{{ Request::is('corporate') ? 'active' : '' }}">Corporate</li>
                        </a>
                    </ul>
                </nav>

                <div class="search_menu">
                    <iconify-icon icon="ri:search-line"></iconify-icon>
                    <input type="text" placeholder="Search Here">
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <div class="footer"></div>
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
    </body>
    </html>
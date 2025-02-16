@extends('layouts.app')

@section('content')

<div class="contact_page_banner">
    <h1>Contact Us</h1>
</div>
<div class="contact_page_container">
    <div class="contact_page_container_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.9532629121236!2d106.85105627603666!3d-6.136981910167688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f57d438e6ddb%3A0xe2a1d875f472352e!2sGriya%20Inti%20Sentosa!5e0!3m2!1sen!2sid!4v1738917086934!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact_page_container_content">
        <h1>Hubungi Kami</h1>
        <p>Lorem ipsum dolor sit amet consectetur. Elementum sed nunc egestas amet et proin gravida. Diam cras massa sed tempor ullamcorper leo interdum turpis in. Leo tempor arcu cursus lacus phasellus amet porttitor. Eu varius risus tortor semper sed sit.</p>
        <ul>
            <li><iconify-icon icon="ic:baseline-phone"></iconify-icon> 021-6516318</li>
            <li><iconify-icon icon="mdi:envelope"></iconify-icon> info@sisteminovasi.co.id</li>
            <li><iconify-icon icon="oi:map-marker"></iconify-icon> Komp Griya Inti Sentosa Jl. Griya Agung Blok 0 88-89, Sunter Jakarta.</li>
            <li><iconify-icon icon="mingcute:instagram-fill"></iconify-icon> @ptsisteminovasiakurasi</li>
            <li><iconify-icon icon="line-md:youtube-filled"></iconify-icon> pt sistem inovasi akurasi</li>
            <li><iconify-icon icon="mynaui:globe"></iconify-icon> www.sistemakurasi.com</li>
        </ul>
        <div class="form_layout">
            <h2>Tulis pesan dan kami akan segera menghubungi anda!</h2>
            <form action="">
                <div class="double_field">
                    <input type="text" placeholder="Name" name="" id="">
                    <input type="email" placeholder="Email" name="" id="">
                </div>
                <div class="double_field">
                    <input type="number" placeholder="Phone" name="" id="">
                    <input type="text" placeholder="Subject" name="" id="">
                </div>
                <textarea name="" placeholder="Comment or Messege" id=""></textarea>
                <button>Send</button>
            </form>
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

@endsection
@extends('layout.main')

@section('title', 'Metode & Alat')

@section('header')
<header>
<!-- Top Navigation -->
<nav class="lime darken-3" role="navigation" style="margin-left: 1px;">
    <div class="nav-wrapper" style="margin: 0 32px;">
    <!--a id="logo-container" href="/" class="brand-logo">GGP-IS</a-->
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
    
    <ul class="right hide-on-med-and-down">
        
        <li><a href="{{ url('/about') }}">Tentang</a></li>
        <li><a href="{{ url('/methods') }}">Metode & Alat</a></li>
        <li><a href="{{ url('/data') }}">Data & Informasi</a></li>
        <li><a href="{{ url('/historical') }}">Kondisi Historis</a></li>
        <li><a href="{{ url('/bau') }}">Skenario Bisnis Seperti Biasa</a></li>
        <li><a href="{{ url('/gpp') }}">Skenario Pertumbuhan Hijau</a></li>
        <li><a href="{{ url('/help') }}">Bantuan</a></li>
        
    </ul>
    <ul id="mobile-demo" class="side-nav">
        <li><a href="{{ url('/about') }}">Tentang</a></li>
        <li><a href="{{ url('/methods') }}">Metode & Alat</a></li>
        <li><a href="{{ url('/data') }}">Data & Informasi</a></li>
        <li><a href="{{ url('/historical') }}">Kondisi Historis</a></li>
        <li><a href="{{ url('/bau') }}">Skenario Bisnis Seperti Biasa</a></li>
        <li><a href="{{ url('/gpp') }}">Skenario Pertumbuhan Hijau</a></li>
        <li><a href="{{ url('/help') }}">Bantuan</a></li>
        
    </ul>
    </div>
</nav>

<ul id="slide-out" class="side-nav fixed">
    <li class="lime darken-3">
    
    <h3 class="banner-header center-align">
        <a href="index.html" style="padding: 0px; color: #fff;">GGP-IS</a>
        <!-- <div class="divider"></div> -->
    </h3>

    </li>
    <li class="yellow darken-2">
    <div class="userView header">
        <h5 class="banner-color">Metode & Alat</h5>
    </div>
    </li>
    <li><a class="waves-effect active" href="metode-alurkerja.html">Alur kerja</a></li>
    <li><div class="divider"></div></li>
</ul>
</header>
@endsection

@section('main')
<main>
    <div class="section content">
        <h3 class="banner-color">Alur Kerja</h3>
    <p>Lima tahap yang dilalui dalam proses perencanaan Pertumbuhan Hijau adalah (1) pelibatan pemangku kepentingan dan pembentukan kemitraan, (2) penyusunan skenario <i>business-as-usual</i> (BAU), (3) pembentukan kesepakatan tujuan Pertumbuhan Hijau, (4) penyusunan skenario Pertumbuhan Hijau dan analisis <i>ex-ante</i>, (5) dan penyusunan peta jalan Pertumbuhan Hijau. Analisis untuk mengelola data dan melakukan simulasi rencana pembangunan di masa yang akan datang menggunakann LUMENS (<i>Land Use Planning for Multiple Environmental Services</i>) yang dapat mengakomodasi analisis spasial, pemodelan ekologi dan ekonomi, serta menjalankan proyeksi skenario pembangunan untuk memperoleh gambaran dampak di masa yang akan datang.</p>

    <p align="center"><img class="responsive-img" src="{{ url('/images/alur.png') }}" />
    <br><b>Gambar 7.</b> Diagram alur kerja Perencanaan Pertumbuhan Ekonomi Hijau</p>

    <p><b><u>Pelibatan pemangku kepentingan</u></b> dan pembentukan kemitraan merupakan tahapan yang memastikan penyusunan rencana Pertumbuhan Hijau merupakan rumusan sistematis yang menghimpun aspirasi semua pihak. Proses inklusif bersama pemangku kepentingan difasilitasi melalui sesi diskusi kelompok terpusat maupun lokakarya. Kondisi pandemi saat penyusunan rencana ini telah mengubah model diskusi menjadi telekonferensi dan diskusi daring. Meskipun demikian, inovasi terus dilakukan agar memungkinkan keterlibatan yang optimal dari peserta diskusi misalnya menggunakan perangkat interaktif diskusi seperti mural. Pemangku kepentingan yang telah terlibat antara lain satuan kerja perangkat daerah Provinsi Jambi, pelaku usaha (PKA, GAPKI, Atsiri), dan beberapa mitra kerja.</p>
        
    <p><b><u>Penyusunan skenario business-as-usual (BAU)</u></b> merupakan analisis kondisi saat ini dan perkiraan kondisi dimasa yang akan datang dengan memperhatikan data historis dan rencana pembangunan para pihak di masa depan yang terdiri dari rencana pembangunan pemerintah dan rencana kegiatan penggunaan lahan. Skenario ini dibangun berdasarkan data dan informasi pembangunan dari berbagai dokumen dan informasi langsung parapihak. Pada tahap ini juga didapatkan informasi berbagai kegiatan yang bersifat multisektoral yang membentuk kesatuan ekonomi wilayah.</p>
    <p><b><u>Pembentukan kesepakatan tujuan Pertumbuhan Hijau</u></b> adalah upaya diskusi untuk mencapai kesepahaman terkait rencana kerja di masa depan. Pembentukan kesepakatan ini didasarkan pada tujuan pembangunan daerah seperti yang tertuang dalam komitmen Jambi Green dan juga berdasarkan hasil partisipasi pemangku kepentingan. Untuk menjadi rujukan kegiatan di masa depan, integrasi dengan kegiatan yang sudah ada dan rencana para pihak juga dilaksanakan.</p>
        <p><b><u>Penyusunan skenario rencana Pertumbuhan Hijau</u></b> dilakukan melalui tahapan identifikasi masalah strategis pembangunan, penyusunan capaian dambaan, analisis ketersediaan dan kebutuhan lahan (land demand analysis), kesepakatan target capaian indikator makro rencana Pertumbuhan Hijau, dan penyusunan strategi rencana Pertumbuhan Hijau dan rencana intervensi. Proses iteratif ini juga diterapkan untuk membuat analisis ex-ante sehingga mencapai tujuan Pertumbuhan Hijau yang dilihat dari indikator makro pembangunan. Penyusunan skenario terus direvisi sehingga mendapatkan capaian indikator makro yang bersesuain dengan target yang telah disepakati. Untuk menggambarkan skenario rencana Pertumbuhan Hijau secara lebih konkret, strategi dan intervensi Pertumbuhan Hijau diterjemahkan secara keruangan (spatially explicit).</p>
        <p><b><u>Penyusunan peta jalan rencana Pertumbuhan Hijau</u></b> merupakan penjabaran terperinci dari rencana intervensi yang telah dihasilkan. Penyusunan peta jalan diawali dari penyusunan berbagai aktivitas pembangunan yang dapat dilaksanakan pada setiap rencana intervensi, kemudian dilanjutkan dengan berbagai keterangan sehingga mempermudah pemahaman dalam pengarusutamaan yang diharapkan dilakukan oleh para pihak terkait. Peta jalan rencana Pertumbuhan Hijau ini juga dilengkapi dengan pembagian peran dalam kegiatan dan alokasi waktu serta tahapan kegiatan.</p>

    </div>
</main>
@endsection
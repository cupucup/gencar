@php use Carbon\Carbon; @endphp
@extends('website-new.layouts.index')

@section('styles')
    <style>
        .overlay {
            position: absolute; /* Sit on top of the page content */
            width: 100%; /* Full width (cover the whole page) */
            height: 90%; /* Full height (cover the whole page) */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(2, 6, 33, 0.8); /* Black background with opacity */
        }
    </style>
@endsection

@section('content')

    <!-- BANNER BLOCK SECTION START HERE -->
    <section class="banner_wrapper">
        <div class="swiper bannerSwiper">
            <div class="parallax-bg" style="background-image: url({{ url('assets-web/img/slider/banner-3.jpg') }});"
                 data-swiper-parallax="-23%"></div>
            <div class="overlay"></div>

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-slide">
                        <img class="img-fluid img-slider"
                             src="{{ url('assets-new/images/home/foto-slide.png') }}" style="width: 80%;" alt="foto-slide"/>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner-slide">
                        <div class="banner-text">
                            <h2 data-swiper-parallax="-200">GENCAR SOP - AP</h2>
                            <div class="slider_border" data-swiper-parallax="-200"></div>
                            <p data-swiper-parallax="-200">
                                Gerakan Penataan Administrasi Dengan Standar Operasional Prosedur - Administrasi
                                Pemerintahan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- BANNER BLOCK SECTION END'S HERE -->
    <!-- FEATURE BLOCK SECTION START HERE -->
    <section class="features_wrapper default-padding" id="courses">
        <div class="container">
            <div class="heading text-center light wow fadeInUp" data-wow-duration="1.5s">
                <h3>TUJUAN GENCAR SOP-AP</h3>
            </div>
            <div class="Courses_swiper wow fadeInUp" data-wow-duration="1.5s">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-list mb-lg-0">
                            <div class="bg_icon">
                                <i class="icofont icofont-worker" alt="icons" style="color: white; font-size: 3em;"></i>
                            </div>
                            <h2 class="text-center">Tujuan Jangka Pendek</h2>
                            <div>
                                <ul class="brxe-list">
                                    <li>Tersediannya Standar Operasional Prosedur Administrasi ASN di 5
                                        Dokumen di Sekretariat Dinas PUPR
                                    </li>
                                    <li>Tersediannya Sistem Tata Kelola (Website QR Code) Administrasi
                                        Aparatur Sipil Negara.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-list mb-lg-0">
                            <div class="bg_icon">
                                <i class="icofont icofont-tools-alt-1" alt="icons"
                                   style="color: white; font-size: 3em;"></i>
                            </div>
                            <h2 class="text-center">Tujuan Jangka Menengah</h2>
                            <div>
                                <ul class="brxe-list">
                                    <li>Tersediannya Standar Operasional Prosedur Administrasi ASN di 4 Bidang lingkup
                                        Dinas
                                        PUPR
                                    </li>
                                    <li>Teraktualisasi Sistem Tata Kelola (Website QR Code) Adminitrasi Aparatur Sipil
                                        Negara.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-list mb-0">
                            <div class="bg_icon">
                                <i class="icofont icofont-medal" alt="icons" style="color: white; font-size: 3em;"></i>
                            </div>
                            <h2 class="text-center">Tujuan Jangka Panjang</h2>
                            <div>
                                <ul class="brxe-list">
                                    <li>Penerapan Standar Operasional Prosedur di Dinas PUPR</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE BLOCK SECTION END'S HERE -->
    <!-- ABOUT BLOCK SECTION START HERE -->
    <section class="about_wrapper default-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="about_left">
                        <div class="f-0">
                            <img loading="lazy" loading="lazy" src="{{ asset('assets-new/images/about_bg.webp') }}" alt="img" width="551"
                                 height="550">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 mb-lg-0 mb-5 wow fadeInUp" data-wow-duration="1.5s">
                    <div class="about_right">
                        <div class="heading">
                            <h2>GENCAR SOP - AP</h2>
                        </div>
                        <p class="mb-3">GENCAR SOP-AP (Gerakan Penataan Administrasi Dengan Standar Operasional Prosedur
                            -
                            Administrasi Pemerintahan) adalah inisiatif untuk meningkatkan kinerja dan administrasi ASN
                            (Aparatur Sipil Negara) di lingkup Dinas PUPR (Pekerjaan Umum dan Perumahan Rakyat). Upaya
                            ini bertujuan untuk mengubah proses administrasi manual menjadi digital sehingga lebih
                            efisien dan efektif. Salah satu ukuran keberhasilannya adalah penerapan SOP (Standar
                            Operasional Prosedur). </p>
                        <a href="#" class="common_btn">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT BLOCK SECTION END'S HERE -->
    <!-- FEATURE BLOCK SECTION START HERE -->
    <section class="features_wrapper service default-padding">
        <div class="container">
            <div class="heading text-center light wow fadeInUp" data-wow-duration="1.5s">
                <h2>VISI</h2>
                <h3>“HALMAHERA TIMUR MAJU DAN SEJAHTERA”</h3>
            </div>
            <div class="heading text-center light wow fadeInUp mt-5" data-wow-duration="1.5s">
                <h2>MISI</h2>
            </div>
            <div class="Courses_swiper wow fadeInUp" data-wow-duration="2s">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-list">
                            <div class="bg_icon">
                                {{--<img loading="lazy" loading="lazy" src="assets/images/icons/service-icon/planning1.webp"
                                     alt="icons" width="52" height="52">--}}
                                <i class="icofont icofont-users-alt-1" style="font-size: 3em; color: white;"></i>
                            </div>
                            <div class="content">
                                <h5>Melanjutkan Pembangunan Sumber Daya Manusia</h5>
                                <p>Dengan tujuan melanjutkan pembangunan sumber daya manusia yang berkualitas yakni
                                    Sumber
                                    Daya Manusia Halmahera Timur yang agamais, berbudaya, berkarakter, yang dilakukan
                                    melalui pendidikan dan peningkatan keterampilan, baik yang dilaksanakan oleh
                                    pemerintah
                                    maupun swasta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-list">
                            <div class="bg_icon">
                                <i class="icofont icofont-vehicle-wrecking" style="font-size: 3em; color: white;"></i>
                            </div>
                            <div class="content">
                                <h5>Melanjutkan Pembangunan Infrastruktur</h5>
                                <p>Misi ini bertujuan meningkatkan ketersediaan sarana dan prasarana untuk mendukung
                                    pertumbuhan wilayah, melalui konsep pengembangan berbasis kawasan-kawasan strategis
                                    kabupaten.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-list">
                            <div class="bg_icon">
                                <i class="icofont icofont-industries-alt-4" style="font-size: 3em; color: white;"></i>
                            </div>
                            <div class="content">
                                <h5>Melanjutkan Pembangunan Ekonomi Kerakyatan dan Mendorong Investasi,</h5>
                                <p>Misi ini untuk peningkatan produksi hasil sektor-sektor pertanian, perkebunan serta
                                    perikanan dan kelautan, yang dilakukan melalui konsep pengembangan ekonomi terpadu
                                    dan
                                    terintegrasi berbasis potensi lokal, serta mendorong peran sektor pariwisata,
                                    koperasi,
                                    UMKM, industri, perdagangan serta membuka peluang investasi melalui pengembangan
                                    pusat-pusat ekonomi baru yang produktif, berbasis partisipasi masyarakat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-list">
                            <div class="bg_icon">
                                <i class="icofont icofont-users-alt-1" style="font-size: 3em; color: white;"></i>
                            </div>
                            <div class="content">
                                <h5>Reformasi Birokrasi dan Tata Kelola Pemerintahan</h5>
                                <p>Rancangan keberhasilan seluruh misi pembangunan sangat ditentukan oleh misi ini,
                                    dengan
                                    melaksanakan amanat otonomi daerah dalam mewujudkan reformasi birokrasi.
                                    Penyelenggaraan
                                    pemerintahan dan pembangunan daerah yang difokuskan pada penataan sistem, aparatur,
                                    dan
                                    pranata kelembagaan dengan berorientasi pada profesionalisme aparatur dalam
                                    pemberian
                                    pelayanan kepada masyarakat sesuai dengan tuntutan paradigma pembangunan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="feature-list mb-lg-0">
                            <div class="bg_icon">
                                <i class="icofont icofont-court-hammer" style="font-size: 3em; color: white;"></i>
                            </div>
                            <div class="content">
                                <h5>Mewujudkan Stabilitas Politik Keamanan Hukum dan Sosial</h5>
                                <p>Meningkatkan pemahaman dibidang hukum kepada masyarakat guna menjamin terciptanya
                                    ketertiban, keamanan, dan stabilitas politik dengan melalui peningkatkan nilai-nilai
                                    kebersamaan, saling menghormati dan menghargai melalui pengembangan peran aktif
                                    seluruh
                                    komponen masyarakat dengan pendekatan agaman, adat dan budaya serta lembaga-lembaga
                                    kemasyarakatan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURE BLOCK SECTION END'S HERE -->

    <!-- NEWS SECTION START HERE -->
    <section class="news default-padding" id="news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="title_box wow fadeInUp" data-wow-duration="1.5s">
                        <h2>Berita / Artikel</h2>
                        <div class="title_border"></div>
                        <p>Berita / Artikel kegiatan Gencar SOP-AP dan Dinas PUPR</p>
                    </div>
                </div>
            </div>
            <div class="swiper News">
                <div class="swiper-wrapper">
                    @foreach($articles as $article)
                        <div class="swiper-slide">
                            <div class="news_box">
                                <a href="{{ route('publikasi.detail', $article->id) }}" class="news_img">
                                    <img loading="lazy" src="{{ asset($article->image) }}"
                                         alt="news" width="370"
                                         height="200">
                                    <div class="news_date">
                                        <h2><span>{{ Carbon::createFromDate($article->date)->format('d') }}</span>{{ Carbon::createFromDate($article->date)->format('M') }}</h2>
                                    </div>
                                </a>
                                <div class="news_detail">
                                    <a href="{{ route('publikasi.detail', $article->id) }}">{{ $article->title }}</a>
                                    {!! $article->content !!}
                                    <a href="{{ route('publikasi.detail', $article->id) }}" class="read-more">Read More <i
                                            class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- NEWS SECTION END'S HERE -->

    <!-- CONTACT SECTION START HERE -->
    <section class="contact_form default-padding" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    {{--<div class="title_box">
                        <h2>Contact Us</h2>
                        <div class="title_border"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s</p>
                    </div>--}}
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 ps-lg-0">
                    <div class="map_box" style="height: 70vh;">
                        <div id="map">
                            <iframe class="home_map" title="map"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61225.66239640521!2d-86.58156613279506!3d36.34799169410726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88643a203d4efe6b%3A0x6e4d58947bee541!2sVolunteer+State+Community+College!5e0!3m2!1sen!2sin!4v1541481047657"
                                    width="600" height="700" style="border:0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION END'S HERE -->

@endsection

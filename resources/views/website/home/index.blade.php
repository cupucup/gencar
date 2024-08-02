@extends('layouts.website')


@section('content')

    <!--HOME SLIDER AREA-->
    <div class="welcome-slider-area">
        <div class="welcome-single-slide slide-one">
            <div class="slider-bg"></div>
            <div class="container no-padding">
                <div class="welcome-text text-center">
                    {{--                    <h1>Gerakan Penataan Administrasi </h1>--}}
                    {{--                    <p>Dengan Standar Operasional Prosedur – Administrasi Pemerintahan</p>--}}
                    {{--                    <div class="welcome-image-layer">--}}
                    {{--                        <img src="img/slider/slider_layer_1.png" alt="">--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="welcome-single-slide slide-two">
            <div class="slider-bg"></div>
            <div class="container no-padding">
                <div class="welcome-text text-center">
                    <h1><span>GENCAR SOP</span> - AP</h1>
                    <p>Gerakan Penataan Administrasi Dengan Standar Operasional Prosedur - Administrasi Pemerintahan</p>
                </div>
            </div>
        </div>
    </div>
    <!--END HOME SLIDER AREA-->

    <!--ABOUT AREA-->
    <section class="about-area section-padding" id="about">
        <div class="container about-features">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-features">
                        <div class="features-icon text-center"><i class="icofont icofont-worker"></i></div>
                        <h3 class="text-center">Tujuan Jangka Pendek</h3>
                        <p>1. Tersediannya Standar Operasional Prosedur Administrasi ASN di 5
                            Dokumen di Sekretariat Dinas PUPR</p>
                        <p>2. Tersediannya Sistem Tata Kelola (Website QR Code) Administrasi
                            Aparatur Sipil Negara.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-features">
                        <div class="features-icon text-center">
                            <i class="icofont icofont-tools-alt-1"></i>
                        </div>
                        <h3 class="text-center">Tujuan Jangka Menengah</h3>
                        <p>1. Tersediannya Standar Operasional Prosedur Administrasi ASN di 4 Bidang lingkup Dinas
                            PUPR</p>
                        <p>2. Teraktualisasi Sistem Tata Kelola (Website QR Code) Adminitrasi Aparatur Sipil Negara.</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-features">
                        <div class="features-icon text-center">
                            <i class="icofont icofont-medal"></i>
                        </div>
                        <h3 class="text-center">Tujuan Jangka Panjang</h3>
                        <p>Penerapan Standar Operasional Prosedur di Dinas PUPR</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container about-bottom-content">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="about-img">
                        <div class="about-layer-one">
                            <img src="{{ asset('assets-web/img/about/about-bottom-layer.jpg') }}" alt="">
                        </div>
                        <div class="about-layer-two">
                            <img src="{{ asset('assets-web/img/about/about-top-layer.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-sm-12 col-xs-12">
                    <div class="about-content wow fadeInRight">
                        <h2>GENCAR SOP - AP</h2>
                        <h3></h3>
                        <p> GENCAR SOP-AP (Gerakan Penataan Administrasi Dengan Standar Operasional Prosedur -
                            Administrasi Pemerintahan) adalah inisiatif untuk meningkatkan kinerja dan administrasi ASN
                            (Aparatur Sipil Negara) di lingkup Dinas PUPR (Pekerjaan Umum dan Perumahan Rakyat). Upaya
                            ini bertujuan untuk mengubah proses administrasi manual menjadi digital sehingga lebih
                            efisien dan efektif. Salah satu ukuran keberhasilannya adalah penerapan SOP (Standar
                            Operasional Prosedur). </p>
                        <a href="#" class="read-more">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--ABOUT AREA END-->

    <!--SERVICE AREA-->
    <section class="service-area gray-bg section-padding" id="service">
        <div class="service-area-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Visi</h2>
                        <h3 class="fw-bold">“HALMAHERA TIMUR MAJU DAN SEJAHTERA”</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>Misi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-hidding-and-icon">
                            <div class="service-icon"><i class="icofont icofont-users-alt-1"></i></div>
                            <h3>MELANJUTKAN PEMBANGUNAN SUMBER DAYA MANUSIA</h3>
                        </div>
                        <div class="service-details">
                            <div class="service-icon"><i class="icofont icofont-users-alt-1"></i></div>
                            {{--                            <div class="service-icon">--}}
                            {{--                                <i class="icofont icofont-calculations"></i>--}}
                            {{--                            </div>--}}
                            <h3>MELANJUTKAN PEMBANGUNAN SUMBER DAYA MANUSIA</h3>
                            <p>Dengan tujuan melanjutkan pembangunan sumber daya manusia yang berkualitas yakni Sumber
                                Daya Manusia Halmahera Timur yang agamais, berbudaya, berkarakter, yang dilakukan
                                melalui pendidikan dan peningkatan keterampilan, baik yang dilaksanakan oleh pemerintah
                                maupun swasta.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-hidding-and-icon">
                            <div class="service-icon"><i class="icofont icofont-vehicle-wrecking"></i></div>
                            <h3>MELANJUTKAN PEMBANGUNAN INFRASTRUKTUR,</h3>
                        </div>
                        <div class="service-details">
                            <div class="service-icon"><i class="icofont icofont-vehicle-wrecking"></i></div>
                            {{--                            <div class="service-icon"><i class="icofont icofont-bricks"></i></div>--}}
                            <h3>MELANJUTKAN PEMBANGUNAN INFRASTRUKTUR</h3>
                            <p>Misi ini bertujuan meningkatkan ketersediaan sarana dan prasarana untuk mendukung
                                pertumbuhan wilayah, melalui konsep pengembangan berbasis kawasan-kawasan strategis
                                kabupaten.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-hidding-and-icon">
                            <div class="service-icon"><i class="icofont icofont-industries-alt-4"></i></div>
                            <h3>MELANJUTKAN PEMBANGUNAN EKONOMI KERAKYATAN DAN MENDORONG INVESTASI,</h3>
                        </div>
                        <div class="service-details">
                            <div class="service-icon"><i class="icofont icofont-industries-alt-4"></i></div>
                            <h3>MELANJUTKAN PEMBANGUNAN EKONOMI KERAKYATAN DAN MENDORONG INVESTASI,</h3>
                            <p>Misi ini untuk peningkatan produksi hasil sektor-sektor pertanian, perkebunan serta
                                perikanan dan kelautan, yang dilakukan melalui konsep pengembangan ekonomi terpadu dan
                                terintegrasi berbasis potensi lokal, serta mendorong peran sektor pariwisata, koperasi,
                                UMKM, industri, perdagangan serta membuka peluang investasi melalui pengembangan
                                pusat-pusat ekonomi baru yang produktif, berbasis partisipasi masyarakat.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row " style="display: flex; justify-content: center;">
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-hidding-and-icon">
                            <div class="service-icon"><i class="icofont icofont-users-alt-1"></i></div>
                            <h3>REFORMASI BIROKRASI DAN TATA KELOLAH PEMERINTAHAN</h3>
                        </div>
                        <div class="service-details">
                            <div class="service-icon"><i class="icofont icofont-users-alt-1"></i></div>
                            <h3>REFORMASI BIROKRASI DAN TATA KELOLAH PEMERINTAHAN</h3>
                            <p>Rancangan keberhasilan seluruh misi pembangunan sangat ditentukan oleh misi ini, dengan
                                melaksanakan amanat otonomi daerah dalam mewujudkan reformasi birokrasi. Penyelenggaraan
                                pemerintahan dan pembangunan daerah yang difokuskan pada penataan sistem, aparatur, dan
                                pranata kelembagaan dengan berorientasi pada profesionalisme aparatur dalam pemberian
                                pelayanan kepada masyarakat sesuai dengan tuntutan paradigma pembangunan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                    <div class="single-service text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-hidding-and-icon">
                            <div class="service-icon"><i class="icofont icofont-court-hammer"></i></div>
                            <h3>MEWUJUDKAN STABILITAS POLITIK KEAMANAN HUKUM DAN SOSIAL</h3>
                        </div>
                        <div class="service-details">
                            <div class="service-icon"><i class="icofont icofont-court-hammer"></i></div>
                            <h3>MEWUJUDKAN STABILITAS POLITIK KEAMANAN HUKUM DAN SOSIAL</h3>
                            <p>Meningkatkan pemahaman dibidang hukum kepada masyarakat guna menjamin terciptanya
                                ketertiban, keamanan, dan stabilitas politik dengan melalui peningkatkan nilai-nilai
                                kebersamaan, saling menghormati dan menghargai melalui pengembangan peran aktif seluruh
                                komponen masyarakat dengan pendekatan agaman, adat dan budaya serta lembaga-lembaga
                                kemasyarakatan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICE AREA END-->

    <!--FUN FACT AREA-->
    <section class="fact-area red-bg section-padding" id="fact">
        <div class="fact-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="fact-icon"><i class="icofont icofont-coffee-cup"></i></div>
                        <h3 class="counter">3250</h3>
                        <p>Visitor</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="fact-icon"><i class="icofont icofont-ui-love"></i></div>
                        <h3 class="counter">4270</h3>
                        <p>Online Visitor</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="fact-icon"><i class="icofont icofont-gift"></i></div>
                        <h3 class="counter">3250</h3>
                        <p>Today View</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-fun-fact text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="fact-icon"><i class="icofont icofont-medal"></i></div>
                        <h3 class="counter">1140</h3>
                        <p>Today Visitor</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FUN FACT AREA END-->

    <!--BLOG AREA-->
    <section class="blog-area section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-3 col-lg-offset-3 col-md-6 col-lg-6 col-sm-12 col-xs-12 text-center">
                    <div class="area-title text-center  wow fadeIn">
                        <h2><span>Berita / Artikel</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeIn">
                        <div class="post-thumb">
                            <img src="{{ asset('assets-web/img/blog/blog-1.jpg') }}" alt="">
                        </div>
                        <div class="post-details">
                            <div class="post-meta">
                                <p><a href="#"><i class="icofont icofont-user-alt-3"></i> By Admin</a><a href="#"><i
                                            class="icofont icofont-calendar"></i> June.12.2017</a></p>
                            </div>
                            <h3>Constracta Blog Post Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ultai labore et dolore eiusmod tempor magna aliqua.</p>
                            <a href="#" class="read-more">Read More <i class="icofont icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeIn">
                        <div class="post-thumb">
                            <img src="{{ asset('assets-web/img/blog/blog-2.jpg') }}" alt="">
                        </div>
                        <div class="post-details">
                            <div class="post-meta">
                                <p><a href="#"><i class="icofont icofont-user-alt-3"></i> By Admin</a><a href="#"><i
                                            class="icofont icofont-calendar"></i> June.12.2017</a></p>
                            </div>
                            <h3>Constracta Blog Post Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ultai labore et dolore eiusmod tempor magna aliqua.</p>
                            <a href="#" class="read-more">Read More <i class="icofont icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="single-blog wow fadeIn">
                        <div class="post-thumb">
                            <img src="{{ asset('assets-web/img/blog/blog-3.jpg') }}" alt="">
                        </div>
                        <div class="post-details">
                            <div class="post-meta">
                                <p><a href="#"><i class="icofont icofont-user-alt-3"></i> By Admin</a><a href="#"><i
                                            class="icofont icofont-calendar"></i> June.12.2017</a></p>
                            </div>
                            <h3>Constracta Blog Post Title</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ultai labore et dolore eiusmod tempor magna aliqua.</p>
                            <a href="#" class="read-more">Read More <i class="icofont icofont-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->
@endsection

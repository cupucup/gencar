<!--START TOP AREA-->
<header class="top-area" id="home">
    <div class="header-top-area">
        <!--MAINMENU AREA-->
        <div class="mainmenu-area" id="mainmenu-area">
            <div class="mainmenu-area-bg"></div>
            <nav class="navbar">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="navbar-header">
                                <button class="collapsed navbar-toggle" type="button" data-toggle="collapse"
                                        data-target=".bs-example-js-navbar-scrollspy">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="/" class="navbar-brand">
                                    <img class="mb-2" src="{{ asset('assets-web/img/logo.png') }}" style="width: 50px; height: auto;" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy text-center">
                                <ul id="nav" class="nav navbar-nav">
                                    <li>
                                        <a href="{{ route('home') }}">Beranda</a>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Tentang Kami
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="about-us">
                                                <li><a href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
                                                <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                                <li><a href="{{ route('tupoksi') }}">Tupoksi</a></li>
                                                <li><a href="{{ route('sekretariat') }}">Sekretariat</a></li>
                                                <li><a href="{{ route('bidang-pembangunan-jembatan') }}">Bidang Pembangunan Jembatan</a></li>
                                                <li><a href="{{ route('bidang-pembangunan-jalan') }}">Bidang Pembangunan Jalan</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Strategi Marketing
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="about-us">
                                                <li><a href="#">Profil Reformer</a></li>
                                                <li><a href="#">Dokumen Proper</a></li>
                                                <li><a href="#">Output</a></li>
                                                <li><a href="#">Gallery</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-link dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Arsip Surat
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="about-us">
                                                <li><a href="{{ route('surat-masuk') }}">Surat Masuk</a></li>
                                                <li><a href="{{ route('surat-keluar') }}">Surat Keluar</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="#testmonial">Publikasi & Informasi</a>
                                    </li>
                                    <li>
                                        <a class="btn btn-primary bg-primary"  style="margin-left: 30px; background: #354777; padding-left: 25px; padding-right: 25px; color: white;" href="{{ route('login') }}">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!--END MAINMENU AREA END-->
    </div>
</header>
<!--END TOP AREA-->



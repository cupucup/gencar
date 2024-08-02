<header>
    <div class="navigation-wrap stickyMenu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg ">
                        <a class="navbar-brand me-auto d-flex justify-content-center gap-3 align-items-center"
                            href="/" aria-label="logo-image">
                            <img loading="lazy" src="{{ asset('assets-web/img/logo.png') }}" alt="logo"
                                style="width: auto; height: 3em;">
                            <img loading="lazy" src="{{ asset('assets-new/images/logo-gencar-white.png') }}"
                                alt="logo" style="width: auto; height: 2em;">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="main-menu"
                                class="navbar-nav align-items-lg-center ms-auto tabActive navbar-nav-scroll sm sm-clean">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::routeIs('visi-misi') ? 'active' : '' }}"
                                        href="#!">Tentang Kami</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('visi-misi') }}">Visi & Misi</a></li>
                                        <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                                        <li><a href="{{ route('tupoksi') }}">Kepala Dinas</a></li>
                                        <li><a href="{{ route('sekretariat') }}">Sekretariat</a></li>
                                        <li><a href="{{ route('bidang-pembangunan-jembatan') }}">Bidang Pembangunan
                                                Jembatan</a></li>
                                        <li><a href="{{ route('bidang-pembangunan-jalan') }}">Bidang Pembangunan
                                                Jalan</a></li>
                                        <li><a href="{{ route('bidang-tata-ruang') }}">Bidang Tata Ruang</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#!">Strategi Marketing</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('profile-reformer') }}">Profile Reformer</a></li>
                                        <li><a href="{{ route('dokumen-proper') }}">Dokumen</a></li>
                                        <li><a class="dropdown-item" href="{{ route('foto') }}">Foto</a></li>
                                        <li><a class="dropdown-item" href="{{ route('video') }}">Video</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Arsip Surat</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('surat-masuk') }}">Surat Masuk</a>
                                            <ul class="submenu">
                                                <li><a class="dropdown-item"
                                                        href="{{ route('suratMasukByBidang', '1') }}">Sekretariat</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('suratMasukByBidang', '2') }}">Bidang
                                                        Pembangunan Jembatan</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('suratMasukByBidang', '3') }}">Bidang
                                                        Pembangunan Jalan</a></li>
                                                <li><a class="dropdown-item"
                                                        href="{{ route('suratMasukByBidang', '4') }}">Bidang Tata
                                                        Ruang</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('surat-keluar') }}">Surat Keluar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#">Publikasi & Informasi</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('publikasi.gencar') }}">Kegiatan Gencar SOP-AP</a></li>
                                        <li><a href="{{ route('publikasi.dinas') }}">Kegiatan Dinas PUPR</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    @if (Auth::check())
                                        <a class="nav-link btn" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                    @else
                                        <a class="nav-link btn" href="{{ route('login') }}">Login</a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

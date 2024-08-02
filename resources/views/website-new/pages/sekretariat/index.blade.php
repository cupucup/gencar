@extends('website-new.layouts.index')

@section('content')

    <!-- BREADCRUMB START HERE -->
    <section class="breadcrumb_wrapper about">
        <div class="container">
            <div class="breadcrumb_block">
                <div>
                    <h1>{{ $title }}</h1>
                    <div class="trackPage">
                        <a href="{{ route('home') }}">Beranda</a>
                        <span>{{ $title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BREADCRUMB END HERE -->

    <!-- ABOUT BLOCK SECTION START HERE -->
    <section class="about_wrapper default-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 fade-in">
                    <h2>Sekretaris Dinas</h2>
                    <p>Sekretaris Dinas mempunyai tugas pokok membantu Kepala Dinas dalam membina dan menyelenggarakan urusan Penyusunan Program, Kepegawaian, Keuangan, dan Perlengkapan serta Kehumasan dengan fungsinya sebagai berikut:</p>
                    <ol class="numbered-list">
                        <li>Memimpin dan mengendalikan kegiatan bidang administrasi dan ketatausahaan;</li>
                        <li>Merumuskan urusan penyusunan program, kepegawaian/ketatausahaan, keuangan dan perlengkapan serta hubungan masyarakat sebagai pedoman pelaksanaan kegiatan;</li>
                        <li>Mengkoordinasikan tugas dengan kepala bidang di lingkup Dinas Pekerjaan Umum guna kelancaran pelaksanaan tugas;</li>
                        <li>Membina penyusunan teknis operasional kerja di lingkup sekretariat berdasarkan program yang ditetapkan;</li>
                        <li>Memberikan informasi kepada masyarakat mengenai seluruh kegiatan dinas guna tersosialisasinya program yang telah ditetapkan;</li>
                        <li>Membagi tugas kepada kepala sub bagian berdasarkan tugas dan fungsi guna kelancaran pelaksanaan tugas;</li>
                        <li>Memberi petunjuk kepada kepala sub bagian berdasarkan pedoman kerja agar terhindar dari kesalahan;</li>
                        <li>Mengevaluasi pelaksanaan tugas kepala sub bagian di lingkup sekretariat sebagai bahan pembinaan karier;</li>
                        <li>Melaporkan pelaksanaan tugas kepada Kepala Dinas baik lisan maupun tertulis sebagai bahan pertanggungjawaban;</li>
                        <li>Memberikan saran dan pertimbangan kepada Kepala Dinas baik lisan maupun tertulis sebagai bahan pengambilan kebijakan;</li>
                        <li>Melaksanakan tugas lain yang diberikan oleh Kepala Dinas baik lisan maupun tertulis guna kelancaran pelaksanaan tugas.</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT BLOCK SECTION END'S HERE -->

    <!-- Tambahkan CSS langsung di sini -->
    <style>
    .fade-in {
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .fade-in.visible {
        opacity: 1;
    }

    .numbered-list {
        counter-reset: list-counter;
        list-style: none;
        padding-left: 0;
    }

    .numbered-list li {
        position: relative;
        margin: 20px 0;
        padding-left: 40px;
        color: #333;
        font-size: 18px;
    }

    .numbered-list li:before {
        content: counter(list-counter);
        counter-increment: list-counter;
        position: absolute;
        left: 0;
        top: 0;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #007BFF;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 16px;
    }

    h2 {
        color: #007BFF; /* Warna biru untuk judul */
    }

    .breadcrumb_wrapper {
        background-color: #e6f7ff; /* Latar belakang biru muda */
    }

    .breadcrumb_block h1 {
        color: #0056b3; /* Warna biru lebih gelap untuk teks */
    }

    .trackPage a, .trackPage span {
        color: #007BFF; /* Warna biru untuk breadcrumb */
    }

    .about_wrapper {
        background-color: #f0f8ff; /* Latar belakang biru sangat muda */
    }
    </style>

    <!-- Tambahkan JavaScript langsung di sini -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const fadeIns = document.querySelectorAll('.fade-in');

        function checkVisibility() {
            fadeIns.forEach(element => {
                const rect = element.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    element.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', checkVisibility);
        checkVisibility(); // Check visibility on load
    });
    </script>

@endsection

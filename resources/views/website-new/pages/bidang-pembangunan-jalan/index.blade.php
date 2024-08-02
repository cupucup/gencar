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
                    <h2>Kepala Bidang Pembangunan Jalan</h2>
                    <p>Kepala Bidang Pembangunan Jalan memiliki tugas pokok membantu Kepala Dinas dalam melaksanakan program teknis dinas di bidang Pembangunan jalan dan fungsi antara lain:</p>
                    <ol class="numbered-list">
                        <li>Memimpin dan mengendalikan pelaksanaan tugas di bidang Pembangunan Jalan;</li>
                        <li>Merumuskan program di lingkup bidang Pembangunan Jalan berdasarkan kebijakan yang telah ditetapkan sebagai pedoman kerja;</li>
                        <li>Mengkoordinasikan penyelenggaraan kegiatan dengan Sekretaris dan Kepala Bidang lain di lingkup Dinas Pekerjaan Umum dan Penataan Ruang guna kelancaran pelaksanaan tugas;</li>
                        <li>Membagi tugas kepada kepala seksi di lingkup bidang Pembangunan Jalan;</li>
                        <li>Memberi petunjuk kepada kepala seksi di lingkup bidang Pembangunan Jalan;</li>
                        <li>Mengatur pelaksanaan tugas kepala seksi di lingkup bidang Pembangunan Jalan untuk mengetahui kesesuaian dengan arahan yang diberikan;</li>
                        <li>Menilai dan mengevaluasi pelaksanaan tugas bawahan di lingkup bidang Pembangunan Jalan sebagai bahan pembinaan dan pengembangan karier;</li>
                        <li>Melaporkan pelaksanaan tugas kepada Kepala Dinas baik lisan maupun tertulis sebagai bahan pertanggungjawaban;</li>
                        <li>Memberikan saran dan pertimbangan kepada Kepala Dinas baik lisan maupun tertulis sebagai bahan pengambilan keputusan;</li>
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

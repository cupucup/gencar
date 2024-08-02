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
                    <h2>Kepala Bidang Jembatan</h2>
                    <p>Kepala Bidang Jembatan mempunyai tugas merumuskan dan melaksanakan kebijakan teknis Bidang Pembangunan Jembatan. Kepala Bidang Jembatan memiliki uraian tugas dan fungsi sebagai berikut:</p>
                    <ol class="numbered-list">
                        <li>Meningkatkan kegiatan Pembangunan Jembatan.</li>
                        <li>Melaksanakan Pengawasan, Evaluasi dan Pelaporan Penyelenggaraan Kegiatan Pembangunan Jembatan.</li>
                        <li>Merumuskan sasaran yang hendak dicapai berdasarkan skala prioritas dan dana yang tersedia sebagai dasar dalam pelaksanaan tugas.</li>
                        <li>Mengkoordinasikan para bawahan agar terjalin kerja sama yang baik dan saling mendukung.</li>
                        <li>Merumuskan kebijakan teknis, memberikan bimbingan dan pembinaan di bidang prasarana jembatan sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                        <li>Membina dan meningkatkan prasarana jembatan serta peningkatan tata laksana dan pengelolaan prasarana jembatan sesuai dengan peraturan yang berlaku.</li>
                        <li>Mengawasi secara teknis pelaksanaan kegiatan di Bidang Pembangunan Jembatan agar keamanan dan pemanfaatan prasarana jembatan sesuai dengan yang diharapkan.</li>
                        <li>Melaksanakan penanggulangan jembatan yang rusak akibat bencana alam.</li>
                        <li>Melakukan koordinasi dengan instansi terkait, sepanjang menyangkut pemanfaatan jembatan milik daerah dan kegiatannya pada jalan Nasional dan Provinsi.</li>
                        <li>Mengevaluasi hasil pelaksanaan kegiatan Pembangunan Jembatan secara keseluruhan dan berkesinambungan.</li>
                        <li>Melaksanakan tugas-tugas yang diberikan oleh atasan baik secara lisan maupun tulisan.</li>
                        <li>Menyiapkan bahan Pembinaan, Koordinasi dan Fasilitasi Pelaksanaan Kegiatan Pembangunan Jembatan.</li>
                        <li>Menyusun Rencana Kerja dan Anggaran Tahunan Bidang Pembangunan Jembatan sebagai penjabaran lebih lanjut dan rencana strategi Dinas Pekerjaan Umum dan Penataan Ruang.</li>
                        <li>Membimbing serta memberi petunjuk kepada para bawahan berdasarkan pembagian tugas agar pelaksanaan tugas dapat berjalan dengan lancar.</li>
                        <li>Mengevaluasi hasil pelaksanaan kegiatan para bawahan sebagai bahan perencanaan kerja yang akan datang dan pertimbangan pengembangan karier.</li>
                        <li>Melaporkan hasil pelaksanaan tugas/kegiatan kepada Kepala Dinas baik secara lisan maupun tertulis sebagai bahan pertanggungjawaban.</li>
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

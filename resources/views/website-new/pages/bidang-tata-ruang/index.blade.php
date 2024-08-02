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
                    <h2>Kepala Bidang Penataan Ruang</h2>
                    <p>Kepala Bidang Penataan Ruang mempunyai tugas pokok merumuskan dan melaksanakan kebijakan teknis Tata Ruang. Kepala Bidang Penataan Ruang mempunyai uraian tugas sebagai berikut:</p>
                    <ol class="numbered-list">
                        <li class="fade-in">Menyusun rencana kerja anggaran tahunan Bidang Penataan Ruang sebagai penyebaran rencana kerja Dinas Pekerjaan Umum dan Penataan Ruang.</li>
                        <li class="fade-in">Menyiapkan penyusunan pelaksanaan tugas dan kebijakan kepada Dinas Pekerjaan Umum dan Penataan Ruang.</li>
                        <li class="fade-in">Mengevaluasi pelaksanaan tugas bidang Penataan Ruang dan fungsinya.</li>
                        <li class="fade-in">Melaporkan kepada Kepala Dinas Pekerjaan Umum dan Penataan Ruang secara lisan maupun tertulis sesuai bidang tugas sebagai bahan pertanggungjawaban.</li>
                        <li class="fade-in">Mengkoordinasikan dan mengendalikan tugas-tugas strategi dinas dengan instansi terkait demi kelancaran tugasnya.</li>
                        <li class="fade-in">Melaksanakan tugas-tugas kedinasan yang diberikan oleh Kepala Dinas baik secara lisan maupun tertulis.</li>
                        <li class="fade-in">Memimpin, membina, dan mengendalikan tugas-tugas bawahan sesuai bidang tugasnya.</li>
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

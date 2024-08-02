@extends('layouts.website')


@section('content')
<section class="container section-padding bg-gray-100">

</section>
<div style="display: flex; cursor: pointer; padding: 10px; background-color: #ffeb3b; border: 1px solid #ccc; justify-content: space-around;">
    <div class="tablinks active" onclick="openTab(event, 'visi')" style="padding: 10px 20px; border: 1px solid #ccc; background-color: #ffa000; color: white;">Visi</div>
    <div class="tablinks" onclick="openTab(event, 'misi')" style="padding: 10px 20px; border: 1px solid #ccc; background-color: #ffa000; color: white;">Misi</div>
</div>

<div id="visi" class="content active" style="border: 1px solid #ccc; padding: 20px;">
    <div class="section" style="margin: 20px 0;">
        <h2 style="color: #002366; text-align: center;">Visi Kabupaten Halmahera Timur Tahun 2021-2025</h2>
        <img src="{{ asset('assets-web/img/lands.webp') }}" alt="Visi Image" style="width: 40%; height: auto; border: 5px solid #ffeb3b; display: block; margin-left: auto; margin-right: auto;">
        <div class="text" style="margin: 20px 0;">
            <p style="text-align: justify">Visi Pembangunan Daerah dalam Rencana Pembangunan Jangka Menengah Daerah (RPJMD) merupakan rumusan umum mengenai keadaan yang diinginkan pada akhir periode perencanaan pembangunan. Visi daerah ini disusun dengan memperhatikan aspek substantif yang berpijak pada isu strategis, maupun aspek teknis serta harus selaras dengan visi provinsi sebagai upaya mendukung pembangunan yang terarah. Visi Kabupaten Halmahera Timur Tahun 2021-2025 : Visi Pembangunan Daerah dalam Rencana Pembangunan Jangka Menengah Daerah (RPJMD) merupakan rumusan umum mengenai keadaan yang diinginkan pada akhir periode perencanaan pembangunan. Visi daerah ini disusun dengan memperhatikan aspek substantif yang berpijak pada isu strategis, maupun aspek teknis serta harus selaras dengan visi provinsi sebagai upaya mendukung pembangunan yang terarah. Visi Kabupaten Halmahera Timur Tahun 2021-2025</p>
            <p style="text-align: center;"><strong>“HALMAHERA TIMUR MAJU DAN SEJAHTERA”</strong></p>
            <p style="text-align: justify;">Visi di atas merupakan lanjutan dan penegasan dari visi pembangunan sebagai keberlanjutan dan apresiasi pada pembangunan yang telah dijalankan pada periode sebelumnya yang didasarkan pada realitas dan telaah obyektif. Visi ini juga selaras dengan visi Maluku Utara 2020-2024 yaitu Maluku Utara Sejahtera yang difokuskan pada pembangunan sumber daya manusia, keseimbangan dan stabilitas pembangunan, pembangunan infrastruktur, kehidupan sosial yang beradab dan berbudaya, dan pelaksanaan tata kelola pemerintahan yang baik. Melihat pertimbangan tersebut, visi pembangunan lima tahun Kabupaten Halmahera Timur mendatang selanjutnya dijabarkan dalam dua kata kunci:</p>
        </div>
    </div>
    <div class="card" style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 20px 0; background-color: #fff; display: flex; align-items: center;">
        <img src="maju.webp" alt="Maju Image" style="width: 20%; height: auto; border-radius: 10px; margin-right: 20px;">
        <div>
            <h3 style="color: #002366;">1. MAJU</h3>
            <p  style="text-align: justify;">Maju mempunyai makna menjadikan Kabupaten Halmahera Timur sebagai daerah yang maju dan meningkat dari kondisi masa lalu. Maju juga berarti pembangunan daerah melalui pembangunan berkelanjutan dan pembangunan infrastruktur yang merata serta terintegrasi.</p>
        </div>
    </div>
    <div class="card" style="border: 1px solid #ccc; border-radius: 10px; padding: 20px; margin: 20px 0; background-color: #fff; display: flex; align-items: center;">
        <div>
            <h3 style="color: #002366;">2. SEJAHTERA</h3>
            <p style="text-align: justify;">Sejahtera merupakan sebuah kondisi kehidupan individu dan masyarakat yang dapat memenuhi standar kehidupan yang layak sesuai harkat dan martabat kemanusiaan. Sejahtera juga dimaknai sebagai sebuah derajat kehidupan sosial ekonomi masyarakat Halmahera Timur yang semakin membaik ditandai dengan terpenuhinya sandang, pangan dan papan masyarakat secara merata. Rumusan visi di atas terbangun dalam satu kesatuan dan saling melengkapi. Secara substantif, rangkaian visi tersebut bertujuan meningkatkan pemenuhan kebutuhan akan pelayanan dasar, infrastruktur, peningkatan perekonomian masyarakat dan daerah, serta meningkatkan kualitas pelayanan publik dan meningkatkan kualitas tata kelola pemerintahan serta mewujudkan harmoni sosial di tengah masyarakat Halmahera Timur.</p>
        </div>
        <img src="sejahtera.webp" alt="Sejahtera Image" style="width: 20%; height: auto; border-radius: 10px; margin-left: 20px;">
    </div>
</div>

<div id="misi" class="content" style="border: 1px solid #ccc; padding: 20px; display: none;">
    <div class="section" style="margin: 20px 0;">
        <div class="text" style="margin: 20px 0;">
            <h2 style="color: #002366;">Misi Kabupaten Halmahera Timur Tahun 2021-2025</h2>
            <ol>
                <li><strong>Melanjutkan Pembangunan Sumber Daya Manusia:</strong> Dengan tujuan melanjutkan pembangunan sumber daya manusia yang berkualitas yakni Sumber Daya Manusia Halmahera Timur yang agamais, berbudaya, berkarakter, yang dilakukan melalui pendidikan dan peningkatan keterampilan, baik yang dilaksanakan oleh pemerintah maupun swasta.</li>
                <li><strong>Melanjutkan Pembangunan Infrastruktur:</strong> Misi ini merupakan penopang bagi perwujudan keempat misi lainnya. Misi bertujuan meningkatkan ketersediaan sarana dan prasarana untuk mendukung pertumbuhan wilayah, melalui konsep pengembangan berbasis kawasan-kawasan strategis kabupaten.</li>
                <li><strong>Melanjutkan Pembangunan Ekonomi Kerakyatan dan Mendorong Investasi:</strong> Misi ini merupakan kerangka acuan untuk memanifestasikan keempat misi lainnya, yakni untuk peningkatan produksi hasil sektor-sektor pertanian, perkebunan serta perikanan dan kelautan, yang dilakukan melalui konsep pengembangan ekonomi terpadu dan terintegrasi berbasis potensi lokal, serta mendorong peran sektor pariwisata, koperasi, UMKM, industri, perdagangan serta membuka peluang investasi melalui pengembangan pusat-pusat ekonomi baru yang produktif, berbasis partisipasi masyarakat.</li>
                <li><strong>Reformasi Birokrasi dan Tata Kelolah Pemerintahan:</strong> Rancangan keberhasilan seluruh misi pembangunan sangat ditentukan oleh misi ini, dengan melaksanakan amanat otonomi daerah dalam mewujudkan reformasi birokrasi.</li>
                <li><strong>Mewujudkan Stabilitas Politik Keamanan Hukum dan Sosial:</strong> Misi ini merupakan payung pelaksanaan keempat misi lainnya. Meningkatkan pemahaman dibidang hukum kepada masyarakat guna menjamin terciptanya ketertiban, keamanan, dan stabilitas politik dengan melalui peningkatkan nilai-nilai kebersamaan.</li>
            </ol>
        </div>
        <img src="path/to/image4.jpg" alt="Misi Image" style="width: 100%; height: auto; border: 5px solid #ffeb3b;">
    </div>
    <div class="section" style="margin: 20px 0;">
        <img src="path/to/image5.jpg" alt="Misi Image 2" style="width: 100%; height: auto; border: 5px solid #ffeb3b;">
        <div class="text" style="margin: 20px 0;">
            <!-- Additional misi content can be added here -->
        </div>
    </div>
</div>

<script>
    function openTab(event, tabName) {
        var i, content, tablinks;
        content = document.getElementsByClassName("content");
        for (i = 0; i < content.length; i++) {
            content[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
            tablinks[i].style.backgroundColor = "#ffa000";
        }
        document.getElementById(tabName).style.display = "block";
        event.currentTarget.className += " active";
        event.currentTarget.style.backgroundColor = "#ffeb3b";
    }
</script>

@endsection

<!doctype html>
<html lang="en">
<head>
    <!--====== USEFULL META ======-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== TITLE TAG ======-->
    <title>{{ isset($title) ? $title : 'Website' }}</title>
    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="{{ asset('assets-web/img/favicon.png') }}" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="{{ asset('assets-web/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-web/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-web/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-web/css/magnific-popup.css') }}">
    <link href="{{ asset('assets-web/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="{{ asset('assets-web/css/icofont.css') }}" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="{{ asset('assets-web/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-web/css/responsive.css') }}" rel="stylesheet">

    <script src="{{ asset('assets-web/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--- PRELOADER -->
<div class="preeloader">
    <div class="preloader-spinner"></div>
</div>

<!--SCROLL TO TOP-->
<a href="#home" class="scrolltotop"><i class="icofont icofont-bubble-up"></i></a>

@include('layouts.template.header-website')

@yield('content')

@include('layouts.template.footer-website')

<!--====== SCRIPTS JS ======-->
<script src="{{ asset('assets-web/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets-web/js/vendor/bootstrap.min.js') }}"></script>


<!--====== PLUGINS JS ======-->
<script src="{{ asset('assets-web/js/vendor/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets-web/js/vendor/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ asset('assets-web/js/vendor/jquery.appear.js') }}"></script>
<script src="{{ asset('assets-web/js/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('assets-web/js/jquery.parallax-scroll.js') }}"></script>
<script src="{{ asset('assets-web/js/stellar.js') }}"></script>
<script src="{{ asset('assets-web/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets-web/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets-web/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets-web/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets-web/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets-web/js/wow.min.js') }}"></script>
<script src="{{ asset('assets-web/js/contact-form.js') }}"></script>
<script src="{{ asset('assets-web/js/jquery.sticky.js') }}"></script>

<!--===== ACTIVE JS=====-->
<script src="{{ asset('assets-web/js/main.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#surat_keluar').DataTable();
        $('#surat_masuk').DataTable();

    });
</script>
</body>
</html>

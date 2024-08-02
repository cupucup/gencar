<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAG START HERE -->
    <meta charset="UTF-8">
    <meta name="title" content="Netbizz.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name=theme-color content="#0094e2">
    <meta name="description"
          content="We craft website in a way which improves the web experience. We take pride in treating all customers with the highest degree of care, understanding, services, and support.">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="site_url">
    <meta property="og:title" content="Gencar SOP - AP">
    <meta property="og:description"
          content="We craft website in a way which improves the web experience. We take pride in treating all customers with the highest degree of care, understanding, services, and support.">
    <meta property="og:image" content="https://site_url.com/assets/images/thumbnail.webp">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://site_url.com">
    <meta property="twitter:title" content="Gencar SOP - AP">
    <meta property="twitter:description"
          content="GENCAR SOP-AP (Gerakan Penataan Administrasi Dengan Standar Operasional Prosedur - Administrasi Pemerintahan).">
    <meta property="twitter:image" content="https://site_url.com/assets/images/thumbnail.webp">
    <!-- META TAG END'S HERE -->
    <title>{{ isset($title) ? $title : 'Gencar SOP-AP' }}</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="{{ asset('assets-new/images/fivicon.ico') }}">

    <!-- LOCAL LINK ATTACHMENT -->
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets-new/css/bootstrap.css') }}'>
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets-new/css/swiper.css') }}'>
    <link rel="stylesheet" type='text/css' media='screen' href="{{ asset('assets-new/css/font-awesome.min.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets-new/css/animate.css') }}'>
    <link rel="stylesheet" href="{{ asset('assets-new/css/lightbox.css') }}">
    <link rel='stylesheet' type='text/css' media='screen' href='{{ asset('assets-new/css/app.css') }}'>
    <link rel="stylesheet" href="{{ asset('assets-new/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-web/css/icofont.css') }}">

    @yield('styles')
</head>

<body class="hidden home">
<!-- LOADER START HERE -->
<div class="page_loader">
    <div class="loader"></div>
</div>
<!-- LOADER END HERE -->
<!-- HEADER START HERE -->
@include('website-new.partials.header')
<!-- HEADER START HERE -->

<!-- SECTION START HERE -->
<main>
   @yield('content')
</main>
<!-- SECTION END'S HERE -->

<!-- FOOTER START HERE -->
@include('website-new.partials.footer')
<!-- FOOTER END HERE -->

<!-- SCROLL TO TOP BUTTON START HERE -->
<a id="button" href="#!">
    <img loading="lazy" src="{{ asset('assets-new/images/icons/scroll-top.svg') }}" alt="scroll" width="20" height="20">
</a>
<!-- SCROLL TO TOP BUTTON END HERE -->

<!-- SEARCH-BOX START HERE -->
<div class="modal fade search-box" id="search" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close">
                    <img loading="lazy" src="{{ asset('assets-new/images/icons/modal-btn.svg') }}" alt="close">
                </button>
            </div>
            <div class="modal-body">
                <form role="search" method="post" class="search-form form">
                    <input type="search" class="search-field" placeholder="Type here">
                    <button type="submit" class="submit-btn">
                        <img loading="lazy" src="{{ asset('assets-new/images/icons/search-header.svg') }}" alt="search">
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- LOCAL SCRIPT ATTACHMENT -->
<script src='{{ asset('assets-new/js/jquery.min.js') }}'></script>
<script src='{{ asset('assets-new/js/bootstrap.js') }}'></script>
<script src="{{ asset('assets-new/js/jquery.smartmenus.min.js') }}"></script>
<script src='{{ asset('assets-new/js/swiper.js') }}'></script>
<script src="{{ asset('assets-new/js/slider.js') }}"></script>
<script src="{{ asset('assets-new/js/about.js') }}"></script>
<script src="{{ asset('assets-new/js/wow.js') }}"></script>
<script src="{{ asset('assets-new/js/lightbox.js') }}"></script>
<script src='{{ asset('assets-new/js/main.js') }}'></script>
@yield('scripts')
</body>

</html>

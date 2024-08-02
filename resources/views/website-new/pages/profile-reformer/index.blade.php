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
    <section class="about_page default-padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-5 col-sm-8 order-2 order-lg-1 d-none d-lg-block">
                    <div class="about_page_img"> <img src="{{ asset('assets-new/images/about/profile-reformer.png') }}" alt="about" style="width: 75%;"> </div>
                </div>
                <div class="col-lg-6 col-12 order-1 order-lg-2">
                    <div class="section_heading">
                        <h2>ISWAN MA’BUD, S.HUT</h2>
                    </div>
                    <div class="about_pages_con">
                        <div class="list-group">
                            <div class="list-group-item list-group-item-action">
                                <div class="brxe-list">
                                    <li>Jabatan : Sekretaris</li>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action">
                                <div class="brxe-list">
                                    <li>Unit Kerja : Dinas PUPR</li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT BLOCK SECTION END'S HERE -->
@endsection

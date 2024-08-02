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
    <section class="projects default-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="heading text-center light">
                        <h3><span>Gallery Video</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="gallery_padding">
                        <div class="gallery">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <video width="320" height="240" controls>
                                            <source src="{{ asset('uploads/video/VIDEO DUKUNGAN INSPEKTUR.mp4') }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <video width="320" height="240" controls>
                                            <source src="{{ asset('uploads/video/VIDEO DUKUNGAN KABAG HUKUM.mp4') }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <video width="320" height="240" controls>
                                            <source src="{{ asset('uploads/video/VIDEO DUKUNGAN KADIS PUPR.mp4') }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                </div>
                                
                                @foreach($gallery as $item)
                                    <div class="col-lg-4">
                                        <div class="entry work-entry graphic">
                                            <video width="320" height="240" controls>
                                                <source src="{{ asset($item->path) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT BLOCK SECTION END'S HERE -->
@endsection

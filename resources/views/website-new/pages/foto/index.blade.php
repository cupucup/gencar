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
                        <h3><span>Gallery Foto</span></h3>
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
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/1.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/1.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/2.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/2.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/3.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/3.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/4.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/4.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/5.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/5.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/6.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/6.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/7.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/7.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/8.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/8.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/9.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/9.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/10.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/10.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/11.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/11.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/12.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/12.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/13.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/13.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4">
                                    <div class="entry work-entry graphic">
                                        <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover;" src="{{ asset('uploads/foto/14.jpeg') }}" alt="Assistant">
                                        <a href="{{ asset('uploads/foto/14.jpeg') }}" data-lightbox="image-1" data-title="My caption">
                                            <div class="overlay overlay-light hidden" data-overlay="9" data-pos="center">
                                                <div class="overlay-content text-center">
                                                    <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i></div>
                                                    <h4 class="title"></h4>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                
                                @foreach($gallery as $item)
                                    <div class="col-lg-4">
                                        <div class="entry work-entry graphic">
                                            <img class="img-fluid" style="width: 100%; height: 15rem; object-fit: cover; " src="{{ asset($item->path) }}"
                                                 alt="Assistant">
                                            <a href="{{ url($item->path) }}" data-lightbox="image-1" data-title="My caption">
                                                <div class="overlay overlay-light hidden" data-overlay="9"
                                                     data-pos="center">
                                                    <div class="overlay-content text-center">
                                                        <div class="link_set"><i class="fa fa-link" aria-hidden="true"></i>
                                                        </div>
                                                        <h4 class="title">{{ $item->name }}</h4>
                                                    </div>
                                                </div>
                                            </a>
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

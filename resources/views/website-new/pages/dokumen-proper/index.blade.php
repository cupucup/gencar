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
                <div class="col-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">LAPORAN GENCAR SOP-AP</h5>
                            <a href="{{ asset('uploads/dokumen/LAPORAN GENCAR SOP-AP.pdf') }}" download="document-LAPORAN GENCAR SOP-AP" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">MAJALAH GENCAR SOP-AP</h5>
                            <a href="{{ asset('uploads/dokumen/MAJALAH GENCAR SOP-AP.pdf') }}" download="document-MAJALAH GENCAR SOP-AP" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-4">
                    <div class="card p-3">
                        <div class="card-body">
                            <h5 class="card-title">RENSTRA PUPR 2021-2025</h5>
                            <a href="{{ asset('uploads/dokumen/RENSTRA PUPR 2021-2025.pdf') }}" download="document-RENSTRA PUPR 2021-2025" class="btn btn-primary">Download</a>
                        </div>
                    </div>
                </div>
                
                @foreach($documents as $document)
                    <div class="col-4">
                        <div class="card p-3">
                            <div class="card-body">
                                <h5 class="card-title">{{ $document->name }}</h5>
                                <a href="{{ asset($document->path) }}" download="document-{{ $document->name }}"
                                   class="btn btn-primary">Download</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- ABOUT BLOCK SECTION END'S HERE -->
@endsection

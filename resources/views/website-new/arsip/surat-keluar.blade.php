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
        @if (count($filesOut) > 0)
            <div class="container">
                <div class="row align-items-center">
                    <section class="container section-padding">
                        <div class="text-center margin-bottom">
                            <h1>Surat Keluar</h1>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table id="surat_keluar" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Perihal Surat</th>
                                            <th>Tujuan Surat</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($filesOut as $fileUpload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $fileUpload->origin }}</td>
                                                <td>{{ $fileUpload->regarding }}</td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a class="btn btn-sm btn-success mr-2"
                                                            href="{{ Storage::url($fileUpload->path) }}" download>
                                                            <i class="icofont icofont-download"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        @endif
    </section>
    <!-- ABOUT BLOCK SECTION END'S HERE -->
@endsection

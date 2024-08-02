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

    <div class="container mb-5">
        <div class="row align-items-center">
            <section class="container section-padding">
                <div class="text-center margin-bottom">
                    <h1>Surat Masuk</h1>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table id="surat_masuk" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Asal Surat</th>
                                    <th>Perihal</th>
                                    <th>Disposition</th>
                                    <th>Actions</th>
                                    <th>a</th>
                                </tr>
                            </thead>

                            <tbody>
                                @if(count($filesIn) > 0)
                                @foreach ($filesIn as $item)
                                <tr>
                                    <td style="width: 5%">{{ $loop->iteration }}</td>
                                    <td>{{ $item->origin }}</td>
                                    <td>{{ $item->regarding }}</td>
                                    <td>{{ $item->disposition->name ?? 'N/A' }}</td>
                                    <td style="width: 10%">
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-primary " href="{{ Storage::url($item->path) }}" download>
                                                <i class="icofont icofont-download"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td><img src="{{ Storage::url($item->path) }}" alt=""></td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada Data</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>
<!-- ABOUT BLOCK SECTION END'S HERE -->
@endsection
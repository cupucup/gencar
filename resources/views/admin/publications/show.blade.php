
@extends('layouts.main')
@inject('carbon', 'Carbon\Carbon')
@section('app-title', 'Detail Publikasi')

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container mt-4">
            <h1>Detail Publikasi</h1>
            <div class="card mb-3">
                <img src="{{ $publication->image }}" class="card-img-top" alt="{{ $publication->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $publication->title }}</h5>
                    <p class="card-text"><small class="text-muted">{{ $carbon::parse($publication->date)->format('d M Y') }}</small></p>
                    <p class="card-text">{!! $publication->content !!}</p>
                    <p class="card-text"><strong>Kategori:</strong> {{ $publication->category }}</p>
                </div>
            </div>
            <a href="{{ route('publications.index') }}" class="btn btn-primary">Kembali ke Daftar</a>
        </div>
    </div>
</section>
@endsection

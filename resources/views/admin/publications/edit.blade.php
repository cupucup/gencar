@extends('layouts.main')

@section('app-title', 'Edit Publikasi')

@section('css-plugin')
<link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css">
@endsection

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container mt-4">
            <h1>Edit Publikasi</h1>
            <form action="{{ route('publications.update', $publication->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $publication->title }}" required>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $publication->date }}" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" class="form-control @error('category') is-invalid @enderror" id="category">
                        <option value="Kedai Pangan" {{ $publication->category == 'Kedai Pangan' ? 'selected' : '' }}>Kedai Pangan</option>
                        <option value="Dinas Pangan" {{ $publication->category == 'Dinas Pangan' ? 'selected' : '' }}>Dinas Pangan</option>
                     </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ $publication->content }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</section>
@endsection

@section('js-plugin')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('publications.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection

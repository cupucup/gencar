@extends('layouts.main')

@section('app-title', 'Tambah Publikasi')

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container mt-4">
            
            <div class="card">
                <div class="card-header">
                    <h1>Tambah Publikasi Baru</h1>
                </div>
                <div class="card-body">
                  
                    <form action="{{ route('publications.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                            @error('title')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="date" class="form-label">Tanggal</label>
                            <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}" required>
                            @error('date')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select name="category_id" class="form-control @error('category_id') is-invalid @enderror" id="category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>                        
                        <div class="mb-3">
                            <label for="content" class="form-label">Konten</label>
                            <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
                            @error('content')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required>
                            @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Publikasi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tambahkan ini di bagian bawah sebelum tag penutup </body> -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{route('publications.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection

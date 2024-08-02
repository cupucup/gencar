@extends('layouts.main')

@section('app-title', 'Upload File')

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h1>Upload File</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('results.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" class="form-control" id="file" name="file" required>
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="images">Images</option>
                                <option value="document">Document</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

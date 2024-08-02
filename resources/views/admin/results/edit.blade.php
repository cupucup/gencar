@extends('layouts.main')

@section('app-title', 'Edit File')

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container mt-4">
            <div class="card">
                <div class="card-header">
                    <h1>Edit File</h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('results.update', $result->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $result->name }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="file" class="form-label">File (Optional)</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-select" id="type" name="type" required>
                                <option value="images" @if($result->type == 'images') selected @endif>Images</option>
                                <option value="document" @if($result->type == 'document') selected @endif>Document</option>
                                <option value="video" @if($result->type == 'video') selected @endif>Video</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

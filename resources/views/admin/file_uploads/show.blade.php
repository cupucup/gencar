@extends('layouts.main')

@section('app-title', 'File Management')
@inject('carbon', 'Carbon\Carbon')

@section('css-plugin')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endsection

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container">
            <h1>File Uploads</h1>

            <div class="card mb-4">
                <div class="card-body">
                    <p><strong>No. Surat:</strong> {{ $fileUpload->no_filez }}</p>
                    <p><strong>Tanggal Surat:</strong> {{ $fileUpload->date }}</p>
                    <p><strong>Asal Surat:</strong> {{ $fileUpload->origin }}</p>
                    <p><strong>Perihal Surat:</strong> {{ $fileUpload->regarding }}</p>
                    <p><strong>Disposition:</strong> {{ $fileUpload->disposition->name ?? 'N/A' }}</p>
                    <p><strong>Extension:</strong> {{ $fileUpload->extension }}</p>
                    <p><strong>Instructions:</strong> {{ $fileUpload->instructions }}</p>
                    <div class="d-flex">
                        <a href="{{ Storage::url($fileUpload->path) }}" class="btn btn-info me-2" download>Download</a>
                        <a href="{{ route('file_uploads.edit', $fileUpload->id) }}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{ route('file_uploads.destroy', $fileUpload->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-plugin')
    <script src="{{ asset('assets') }}/js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection

@extends('layouts.main')

@section('app-title', 'File Management')
@inject('carbon', 'Carbon\Carbon')

<?php
use Carbon\Carbon;
?>
@section('css-plugin')
    <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet" />
@endsection

@section('main-content')
    <section class="pc-container">
        <div class="pc-content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Upload Surat Keluar</div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('file_uploads.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="no_filez">No. Surat</label>
                                    <input type="text" name="no_filez" id="no_filez" class="form-control" value="{{ old('no_filez') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="date">Tanggal Surat Keluar</label>
                                    <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}" required>
                                </div>
                                <input type="hidden" name="date_receipt" id="date_receipt" class="form-control" value="{{ Carbon::now() }}">
                                <div class="form-group">
                                    <label for="origin">Tujuan Surat</label>
                                    <input type="text" name="origin" id="origin" class="form-control" value="{{ old('origin') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="origin">Show or not</label>
                                    <select name="active" class="form-control" id="">
                                        <option selected>Pilih</option>
                                        <option value="yes">Tampilkan</option>
                                        <option value="no">Tidak Tampilkan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="regarding">Perihal</label>
                                    <textarea name="regarding" id="regarding" cols="30" rows="10" class="form-control">{{ old('regarding') }}</textarea>
                                </div>
                                <input type="hidden" name="status" value="out">
                                <input type="hidden" name="name" value="default" id="name" class="form-control" required>
                                <div class="form-group">
                                    <label for="file">File</label>
                                    <input type="file" name="file" id="file" class="form-control" required>
                                </div>
                                <button type="submit" class="btn btn-success">Upload</button>
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

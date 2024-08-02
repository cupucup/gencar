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
        <div class="row my-3">
            <div class="col-3">
           
            </div>
        </div>
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">{{ $title }}</h5>
                @if ($title == 'Surat Masuk')
            <a class="btn btn-lg btn-success" href="{{ route('file_uploads.create_surat_masuk') }}">+ Upload Surat Masuk</a>
        @elseif ($title == 'Surat Keluar')
            <a class="btn btn-lg btn-success" href="{{ route('file_uploads.create_surat_keluar') }}">+ Upload Surat Keluar</a>
        @else
            EROR HUBUNGI ADMIN
        @endif
            </div>


            @if ($title == 'Surat Masuk')
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>No. Surat</th>
                                <th>Tanggal</th>
                                <th>Tanggal Terima</th>
                                <th>Asal Surat</th>
                                <th>Perihal</th>

            
                                <th>Status</th>
                                <th>Showing</th>
                                <th>Disposition</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fileUploads as $fileUpload)
                                <tr>
                                    <td>{{ $fileUpload->id }}</td>
                                    <td>{{ $fileUpload->no_filez }}</td>
                                    <td>{{ $fileUpload->date }}</td>
                                    <td>{{ $fileUpload->date_receipt }}</td>
                                    <td>{{ $fileUpload->origin }}</td>
                                    <td>{{ $fileUpload->regarding }}</td>

                                   
                                    <td>@if ($fileUpload->status == "out")
                                        Surat Keluar
                                    @else
                                        Surat Masuk
                                    @endif</td>
                                    <th>{{ $fileUpload->active }}</th>
                                    <td>{{ $fileUpload->disposition->name ?? 'N/A' }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-sm btn-success mr-2" href="{{ route('file_uploads.show', $fileUpload->id) }}">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-sm btn-success mr-2" href="{{ route('file_uploads.edit', $fileUpload->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('file_uploads.destroy', $fileUpload->id) }}" method="POST" class="mr-2">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @elseif ($title == 'Surat Keluar')
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>No. Surat</th>
                            <th>Tanggal</th>
                            <th>Tanggal Terima</th>
                            <th>Asal Surat</th>
                            <th>Perihal</th>

        
                            <th>Status</th>
                            <th>Showing</th>
                            <th>Disposition</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fileUploads as $fileUpload)
                            <tr>
                                <td>{{ $fileUpload->id }}</td>
                                <td>{{ $fileUpload->no_filez }}</td>
                                <td>{{ $fileUpload->date }}</td>
                                <td>{{ $fileUpload->date_receipt }}</td>
                                <td>{{ $fileUpload->origin }}</td>
                                <td>{{ $fileUpload->regarding }}</td>

                               
                                <td>@if ($fileUpload->status == "out")
                                    Surat Keluar
                                @else
                                    Surat Masuk
                                @endif</td>
                                <th>{{ $fileUpload->active }}</th>
                                <td>{{ $fileUpload->disposition->name ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('file_uploads.show', $fileUpload->id) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('file_uploads.edit', $fileUpload->id) }}">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('file_uploads.destroy', $fileUpload->id) }}" method="POST" class="mr-2">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @else
            EROR HUBUNGI ADMIN
        @endif



     
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

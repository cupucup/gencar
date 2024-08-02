@extends('layouts.main')

@section('app-title', 'File Management')
@inject('carbon', 'Carbon\Carbon')

@section('css-plugin')
<link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css">
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endsection

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update File    @if ($fileUpload->status == 'in')
                      Surat Masuk
                    @elseif ($fileUpload->status == 'out')
                      Surat Keluar
                    @else
                        EROR HUBUNGI ADMIN
                    @endif</div>
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

                        @if ($fileUpload->status == 'in')
                        <form action="{{ route('file_uploads.update', $fileUpload->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="no_filez">No. Surat</label>
                                <input type="text" name="no_filez" id="no_filez" class="form-control" value="{{ old('no_filez', $fileUpload->no_filez) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="date">Tanggal Surat</label>
                                <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $fileUpload->date) }}" required>
                            </div>
                            
                            <input type="hidden" name="date_receipt" id="date_receipt" class="form-control" value="{{ old('date_receipt', $fileUpload->date_receipt) }}">
                            
                            <div class="form-group">
                                <label for="origin">Asal Surat</label>
                                <input type="text" name="origin" id="origin" class="form-control" value="{{ old('origin', $fileUpload->origin) }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="regarding">Perihal</label>
                                <textarea name="regarding" id="regarding" cols="30" rows="10" class="form-control" required>{{ old('regarding', $fileUpload->regarding) }}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="disposition_id">Disposition</label>
                                <select name="disposition_id" class="form-control" id="">
                                    <option value="">Pilih Disposition</option>
                                    @foreach($dispositions as $disposition)
                                        <option value="{{ $disposition->id }}" {{ old('disposition_id', $fileUpload->disposition_id) == $disposition->id ? 'selected' : '' }}>{{ $disposition->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" id="status">
                                    <option value="out" {{ old('status', $fileUpload->status) == 'out' ? 'selected' : '' }}>Surat Keluar</option>
                                    <option value="in" {{ old('status', $fileUpload->status) == 'in' ? 'selected' : '' }}>Surat Masuk</option>
                                </select>
                            </div>
                            
                            <input type="hidden" name="name" id="name" class="form-control" value="{{ old('name', $fileUpload->name) }}" required>
                                   
                        <div class="form-group">
                            <label for="active">Show or not</label>
                            <select name="active" class="form-control" id="active">
                                <option value="" selected>Pilih</option>
                                <option value="yes" {{ old('active', $fileUpload->active) == 'yes' ? 'selected' : '' }}>Tampilkan</option>
                                <option value="no" {{ old('active', $fileUpload->active) == 'no' ? 'selected' : '' }}>Tidak Tampilkan</option>
                            </select>
                        </div>
                            <div class="form-group">
                                <label for="file">File</label>
                                <input type="file" name="file" id="file" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="instructions">Instruksi Dan Informasi</label>
                                <textarea name="instructions" id="instructions" cols="30" rows="10" class="form-control">{{ old('instructions', $fileUpload->instructions) }}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      @elseif ($fileUpload->status == 'out')
                      <form action="{{ route('file_uploads.update', $fileUpload->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="no_filez">No. Surat</label>
                            <input type="text" name="no_filez" id="no_filez" class="form-control" value="{{ old('no_filez', $fileUpload->no_filez) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="date">Tanggal Surat Keluar</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{ old('date', $fileUpload->date) }}" required>
                        </div>
                        
                        <input type="hidden" name="date_receipt" id="date_receipt" class="form-control" value="{{ old('date_receipt', $fileUpload->date_receipt) }}">
                        
                        <div class="form-group">
                            <label for="origin">Tujuan Surat</label>
                            <input type="text" name="origin" id="origin" class="form-control" value="{{ old('origin', $fileUpload->origin) }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="regarding">Perihal</label>
                            <textarea name="regarding" id="regarding" cols="30" rows="10" class="form-control" required>{{ old('regarding', $fileUpload->regarding) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="active">Show or not</label>
                            <select name="active" class="form-control" id="active">
                                <option value="" selected>Pilih</option>
                                <option value="yes" {{ old('active', $fileUpload->active) == 'yes' ? 'selected' : '' }}>Tampilkan</option>
                                <option value="no" {{ old('active', $fileUpload->active) == 'no' ? 'selected' : '' }}>Tidak Tampilkan</option>
                            </select>
                        </div>


                        <input type="hidden" name="status" id="status" class="form-control" value="out" required>
                        
                        <input type="hidden" name="name" id="name" class="form-control" value="{{ old('name', $fileUpload->name) }}" required>
                        
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" name="file" id="file" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                      @else
                          EROR HUBUNGI ADMIN
                      @endif



                
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

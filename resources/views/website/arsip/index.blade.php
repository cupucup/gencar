@extends('layouts.website')


@section('content')
    <section class="container section-padding bg-gray-100">

    </section>
    @if(isset($filesIn))
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
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($filesIn as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->origin }}</td>
                                <td>{{ $item->regarding }}</td>
                                <td>{{ $item->disposition->name ?? 'N/A' }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-sm btn-success mr-2"
                                           href="{{ Storage::url($item->path) }}" download>
                                            <i class="icofont icofont-download"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="text-center margin-bottom">
                        <h1>Surat Masuk</h1>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Asal Surat</th>
                                    <th>Perihal</th>
                                    <th>Disposition</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($filesIn as $fileUpload)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $fileUpload->origin }}</td>
                                        <td>{{ $fileUpload->regarding }}</td>
                                        <td>{{ $fileUpload->disposition->name ?? 'N/A' }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <a class="btn btn-sm btn-success mr-2"
                                                   href="{{ Storage::url($fileUpload->path) }}" download>
                                                    <i class="icofont icofont-download"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if(isset($filesOut))
        <section class="container section-padding">
            <div class="text-center margin-bottom">
                <h1>Surat Keluar</h1>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table id="surat_keluar" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Perihal Surat</th>
                            <th>Tujuan Surat</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($filesOut as $fileUpload)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $fileUpload->origin }}</td>
                                <td>{{ $fileUpload->regarding }}</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a class="btn btn-sm btn-success mr-2"
                                           href="{{ Storage::url($fileUpload->path) }}" download>
                                            <i class="icofont icofont-download"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @endif

@endsection

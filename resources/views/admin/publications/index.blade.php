@extends('layouts.main')
@inject('carbon', 'Carbon\Carbon')
@section('app-title', 'Daftar Publikasi')

@section('css-plugin')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endsection

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="container mt-4">
           <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <h1>Daftar Publikasi</h1>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('publications.create') }}" class="btn btn-primary mb-3">Tambah Publikasi</a>
                </div>
            </div>
            <div class="card-body">
                <table id="publicationsTable" class="table table-striped" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Tanggal</th>
                            <th>Kategori</th>
                            <th>Konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publications as $publication)
                            <tr>
                                <td>{{ $publication->title }}</td>
                                <td>{{ $carbon::parse($publication->date)->format('d M Y') }}</td>
                                <td>{{ $publication->category }}</td>
                                <td>{!! \Illuminate\Support\Str::limit(strip_tags($publication->content), 100, '...') !!}</td>
                                <td>
                                    <a href="{{ route('publications.show', $publication->id) }}" class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('publications.edit', $publication->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('publications.destroy', $publication->id) }}" method="POST" class="delete-form" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           </div>
            {{ $publications->links() }}
        </div>
    </div>
</section>
@endsection

@section('js-plugin')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#publicationsTable').DataTable();

        $('.delete-form').on('submit', function(e) {
            var form = this;
            e.preventDefault();
            Swal.fire({
                title: 'Anda yakin ingin menghapus publikasi ini?',
                text: "Tindakan ini tidak dapat dibatalkan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Tidak, batalkan!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            })
        });
    });
</script>
@endsection

@extends('layouts.main')

@section('app-title', 'Daftar File')

@section('css-plugin')
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endsection

@section('main-content')
<section class="pc-container">
    <div class="pc-content">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h1>Daftar File</h1>
                <a href="{{ route('results.create') }}" class="btn btn-primary">Upload File</a>
            </div>
            <div class="card-body">
                <table id="resultsTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Path</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($results as $result)
                        <tr>
                            <td>{{ $result->name }}</td>
                            <td>{{ $result->path }}</td>
                            <td>{{ $result->type }}</td>
                            <td>
                                <a href="{{ route('results.edit', $result->id) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('results.destroy', $result->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
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
    </div>
</section>
@endsection

@section('js-plugin')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#resultsTable').DataTable();
    });
</script>
@endsection

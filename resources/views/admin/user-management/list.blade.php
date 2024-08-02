@extends('layouts.main')


@section('app-title', 'User Management')
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
                    <a class="btn btn-lg btn-success" href="{{ route('users.create') }}"> + Add User</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Users Management</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->getRoleNames->name }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                               
                                                <a class="btn ml-2 btn-sm btn-success mr-2"
                                                    href="{{ route('users.edit', $user->id) }}">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    class="mr-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn ml-2 btn-sm btn-danger" type="submit">
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

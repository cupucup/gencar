@extends('layouts.main')


@section('app-title', 'Aktivitas Anda')
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
                    <div class="card-header">Update User</div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                    
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
                            </div>
                    
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
                            </div>
                    
                         
                            <button type="submit" class="btn btn-primary">Update</button>
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

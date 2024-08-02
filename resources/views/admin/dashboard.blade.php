@extends('layouts.main')


@section('app-title', 'Dashboard')
@inject('carbon', 'Carbon\Carbon')


@section('css-plugin')
<link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/datepicker-bs5.min.css">
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css" rel="stylesheet"/>
@endsection

@section('main-content')
<section class="pc-container">
    <div class="pc-content">

        
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

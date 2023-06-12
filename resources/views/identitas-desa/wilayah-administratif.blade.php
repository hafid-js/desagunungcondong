@extends('layouts.app')

@section('title', 'Wilayah Administratif Dusun')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Daftar Dusun</div>
@endsection

@push('css')
    <style>
        th {
            color: #616468;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')



@endsection


@push('scripts')
    <script src="https://demo.jadiorder.com/assets/vendor/summernote/summernote-bs4.js"></script>
    <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <script src="http://demosid.opendesa.id/assets/bootstrap/js/id.js?vf5906d544f9f5fec43558999e8b3b3f7"></script>
@endpush

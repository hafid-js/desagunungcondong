@extends('layouts.app')

@section('title', 'Tentang OpenSID')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Tentang OpenSID</div>
@endsection

@push('css')
    <style>
        th {
            color: #616468;
        }

    </style>
@endpush

@section('content')
<!-- Main Content -->
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-lg-3">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Wilayah Desa</h4>
              </div>
              <div class="card-body">
                9
              </div>
              <a href="">Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-info">
              <i class="fas fa-user-alt"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Penduduk</h4>
              </div>
              <div class="card-body">
                94
              </div>
              <a href="">Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-users"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Keluarga</h4>
              </div>
              <div class="card-body">
                36
              </div>
              <a href="">Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-success">
              <i class="fas fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Surat Tercetak</h4>
              </div>
              <div class="card-body">
                72
              </div>
              <a href="">Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

@endsection


@push('scripts')
<script src="{{  asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{  asset('/stisla/assets/js/page/components-table.js')}}"></script>
@endpush

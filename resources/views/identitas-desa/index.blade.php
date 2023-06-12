@extends('layouts.app')

@section('title', 'Identitas Desa')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Identitas Desa</div>
@endsection

@push('css')
    <style>
        th {
            color: #616468;
        }

        td {
            color: black;
        }

        .subtitle_head {
            padding: 10px 50px 10px 5px;
            background-color: rgb(236, 236, 236);
            margin: 15px 0px 10px 0px;
            text-align: left;
            color: #34395e;
        }

        img.penduduk {
            width: auto;
            max-height: 250px;
            max-width: 200px;
            border-radius: 15px;
            display: block;
            margin: 0 auto;
            padding: 2px;
            border: 2px solid #d2d6de;
        }

        img {
            margin-bottom: 5px;
        }

        img {
            vertical-align: middle;
        }

        img {
            border: 0;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')


    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body" style="margin-bottom: -12px;">
                        <div class="buttons">
                            <a class="btn btn-sm btn-primary text-white" href="/identitas-desa/ubah" type="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-edit"></i> Ubah Data Desa
                            </a>
                            <a href="/penduduk/form/1" class="btn btn-sm btn-icon icon-left btn-warning"><i
                                class="fas fa-map-marker"></i>
                            Peta Wilayah Desa</a>  <a href="/penduduk/form/1" class="btn btn-sm btn-icon icon-left btn-info"><i
                                class="fas fa-map"></i>
                            Peta Wilayah Desa</a>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">

                                    <div class="col-12 mt-0">
                                        <div class="hero align-items-center bg-success text-white"
                                            style="background-image: url('stisla/assets/img/unsplash/andre-benz-1214056-unsplash.jpg');">
                                          <div class="align-items-center">
                                            <div class="gallery gallery-md ">
                                                <div class="gallery-item" data-image="stisla/assets/img/345260190_1629918550769087_7361250346739841706_n.jpg" data-title="Image 1"></div>
                                                </div>
                                          </div>
                                            <div class="hero-inner text-center">

                                                <h2>Desa Gunung Condong</h2>
                                                <p class="lead">Kecamatan Bruno, Kabupaten Purworejo, Provinsi Jawa Tengah</p>
                                            </div>
                                        </div>
                                    </div>

                                <div class="col-md-12 col-lg-12">

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="3" class="subtitle_head"><strong>DESA</strong>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Desa</td>
                                                            <td>:</td>
                                                            <td>Gunung Condong</td>
                                                        </tr>
                                                        <tr>
                                                            <td width="300">Kode Desa</td>
                                                            <td width="1">:</td>
                                                            <td>53.19.08.2016</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kode Pos Desa</td>
                                                            <td>:</td>
                                                            <td>
                                                                54261
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Kepala Desa</td>
                                                            <td>:</td>
                                                            <td>Sudiyono</td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIP Kepala Desa</td>
                                                            <td>:</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Alamat Kantor Desa</td>
                                                            <td>:</td>
                                                            <td>Jl.Kemranggen Gn.Condong Km 1</td>
                                                        </tr>
                                                        <tr>
                                                            <td>E-Mail Desa</td>
                                                            <td>:</td>
                                                            <td>email@gunungcondong.com</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Telepon Desa</td>
                                                            <td>:</td>
                                                            <td>082322875277</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Website Desa</td>
                                                            <td>:</td>
                                                            <td>http://www.gunungcondong.com</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="subtitle_head"><strong>KECAMATAN</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Kecamatan</td>
                                                            <td>:</td>
                                                            <td>Bruno</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kode Kecamatan</td>
                                                            <td>:</td>
                                                            <td>53.19.08</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Camat</td>
                                                            <td>:</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIP Camat</td>
                                                            <td>:</td>
                                                            <td>-</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="subtitle_head"><strong>KABUPATEN</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Kabupaten</td>
                                                            <td>:</td>
                                                            <td>Purworejo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kode Kabupaten</td>
                                                            <td>:</td>
                                                            <td>53.19</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="subtitle_head"><strong>PROVINSI</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>Nama Provinsi</td>
                                                            <td>:</td>
                                                            <td>Jawa Tengah</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kode Provinsi</td>
                                                            <td>:</td>
                                                            <td>53</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/js/page/components-table.js') }}"></script>
    <script src="{{ asset('/stisla/assets/js/page/bootstrap-modal.js') }}"></script>
@endpush

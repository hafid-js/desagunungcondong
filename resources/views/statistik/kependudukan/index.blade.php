@extends('layouts.app')

@section('title', 'Statistik Kependudukan')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Statistik Kependudukan</div>
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
            background-color: #018f9c;
            margin: 15px 0px 10px 0px;
            text-align: left;
            color: white;
        }

        .list-group>.active {
            border-color: #d2d6de;
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
    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('/stisla/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endpush

@section('content')


    <div class="section-body">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color: #34395e">Statistik Penduduk</h4>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i
                                    class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse show" id="mycard-collapse">
                        <div class="row">
                            <div class="col-12">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action" id="list-home-list"
                                        data-toggle="list" href="#list-home" role="tab">Umur (Rentang)</a>
                                    <a class="list-group-item list-group-item-action" id="list-profile-list"
                                        data-toggle="list" href="#list-profile" role="tab">Umur
                                        (Kategori)</a>
                                    <a class="list-group-item list-group-item-action active" id="list-messages-list"
                                        data-toggle="list" href="#list-messages" role="tab">Pendidikan Dalam
                                        KK</a>
                                    <a class="list-group-item list-group-item-action" id="list-settings-list"
                                        data-toggle="list" href="#list-settings" role="tab">Pendidikan
                                        Sedang Ditempuh</a>
                                    <a class="list-group-item list-group-item-action" id="list-pekerjaan-list"
                                        data-toggle="list" href="#list-pekerjaan" role="tab">Pekerjaan</a>
                                    <a class="list-group-item list-group-item-action" id="list-statusPerkawinan-list"
                                        data-toggle="list" href="#list-statusPerkawinan" role="tab">Status
                                        Perkawinan</a>
                                    <a class="list-group-item list-group-item-action" id="list-agama-list"
                                        data-toggle="list" href="#list-agama" role="tab">Agama</a>
                                    <a class="list-group-item list-group-item-action" id="list-jenisKelamin-list"
                                        data-toggle="list" href="#list-jenisKelamin" role="tab">Jenis
                                        Kelamin</a>
                                    <a class="list-group-item list-group-item-action" id="list-hubunganDalamKK-list"
                                        data-toggle="list" href="#list-hubunganDalamKK" role="tab">Hubungan Dalam
                                        KK</a>
                                    <a class="list-group-item list-group-item-action" id="list-wargaNegara-list"
                                        data-toggle="list" href="#list-wargaNegara" role="tab">Warga Negara</a>
                                    <a class="list-group-item list-group-item-action" id="list-statusPenduduk-list"
                                        data-toggle="list" href="#list-statusPenduduk" role="tab">Status
                                        Penduduk</a>
                                    <a class="list-group-item list-group-item-action" id="list-golonganDarah-list"
                                        data-toggle="list" href="#list-golonganDarah" role="tab">Golongan
                                        Darah</a>
                                    <a class="list-group-item list-group-item-action" id="list-penyandangCacat-list"
                                        data-toggle="list" href="#list-penyandangCacat" role="tab">Penyandang
                                        Cacat</a>
                                    <a class="list-group-item list-group-item-action" id="list-penyakitMenahun-list"
                                        data-toggle="list" href="#list-penyakitMenahun" role="tab">Penyakit
                                        Menahun</a>
                                    <a class="list-group-item list-group-item-action" id="list-akseptorKB-list"
                                        data-toggle="list" href="#list-akseptorKB" role="tab">Akseptor KB</a>
                                    <a class="list-group-item list-group-item-action" id="list-aktaKelahiran-list"
                                        data-toggle="list" href="#list-aktaKelahiran" role="tab">Akta
                                        Kelahiran</a>
                                    <a class="list-group-item list-group-item-action" id="list-kepemilikanKTP-list"
                                        data-toggle="list" href="#list-kepemilikanKTP" role="tab">Kepemilikan
                                        KTP</a>
                                    <a class="list-group-item list-group-item-action" id="list-asuransi-list"
                                        data-toggle="list" href="#list-asuransi" role="tab">Asuransi
                                        Kesehatan</a>
                                    <a class="list-group-item list-group-item-action" id="list-statusCovid-list"
                                        data-toggle="list" href="#list-statusCovid" role="tab">Status
                                        Covid</a>
                                    <a class="list-group-item list-group-item-action" id="list-sukuEtnis-list"
                                        data-toggle="list" href="#list-sukuEtnis" role="tab">Suku /
                                        Etnis</a>
                                    <a class="list-group-item list-group-item-action" id="list-BpjsKetenagakerjaan-list"
                                        data-toggle="list" href="#list-BpjsKetenagakerjaan" role="tab">BPJS
                                        Ketenagakerjaan</a>
                                    <a class="list-group-item list-group-item-action" id="list-statusKehamilan-list"
                                        data-toggle="list" href="#list-statusKehamilan" role="tab">Status
                                        Kehamilan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h4 style="color: #34395e">Statistik Keluarga</h4>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse2" class="btn btn-icon btn-info" href="#"><i
                                    class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse" id="mycard-collapse2">
                        <div class="row">
                            <div class="col-12">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action" id="list-kelasSosial-list"
                                        data-toggle="list" href="#list-kelasSosial" role="tab">Kelas Sosial</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h4 style="color: #34395e">Statistik RTM</h4>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse3" class="btn btn-icon btn-info" href="#"><i
                                    class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse" id="mycard-collapse3">
                        <div class="row">
                            <div class="col-12">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action" id="list-bdt-list"
                                        data-toggle="list" href="#list-bdt" role="tab">BDT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <h4 style="color: #34395e">Program Bantuan</h4>
                        <div class="card-header-action">
                            <a data-collapse="#mycard-collapse4" class="btn btn-icon btn-info" href="#"><i
                                    class="fas fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="collapse" id="mycard-collapse4">
                        <div class="row">
                            <div class="col-12">
                                <div class="list-group" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action"
                                        id="list-penerimaBantuanPenduduk-list" data-toggle="list"
                                        href="#list-penerimaBantuanPenduduk" role="tab">Penerima Bantuan Penduduk</a>
                                    <a class="list-group-item list-group-item-action"
                                        id="list-penerimaBantuanKeluarga-list" data-toggle="list"
                                        href="#list-penerimaBantuanKeluarga" role="tab">Penerima Bantuan
                                        Keluarga</a>
                                    <a class="list-group-item list-group-item-action" id="list-bpnt-list"
                                        data-toggle="list" href="#list-bpnt" role="tab">BPNT (501)</a>
                                    <a class="list-group-item list-group-item-action" id="list-blsm-list"
                                        data-toggle="list" href="#list-blsm" role="tab">BLSM (502)</a>
                                    <a class="list-group-item list-group-item-action" id="list-pkh-list"
                                        data-toggle="list" href="#list-pkh" role="tab">PKH (503)</a>
                                    <a class="list-group-item list-group-item-action" id="list-bedahRumah-list"
                                        data-toggle="list" href="#list-bedahRumah" role="tab">Bedah Rumah (504)</a>
                                    <a class="list-group-item list-group-item-action" id="list-jamkesmas-list"
                                        data-toggle="list" href="#list-jamkesmas" role="tab">JAMKESMAS (505)</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-8">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>

                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button>
                                        <button class="btn btn-sm btn-warning grafikType" type="button"
                                            id="grafikType" onclick="grafikType();">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>

                                       <button class="btn btn-sm btn-info pieType"
                                            type="button"id="pieType" onclick="pieType();">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                       <button class="btn btn-sm btn-danger" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Rentang Umur
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="box-body">
                                    <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button>

                                        <button class="btn btn-sm btn-warning grafikType" type="button"
                                            id="grafikType" onclick="grafikType2();">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>

                                       <button class="btn btn-sm btn-info pieType"
                                            type="button"id="pieType" onclick="pieType2();">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Umur (Kategori)</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart2" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col" colspan="3">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left" colspan="3">BALITA (0 - 5)</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left" colspan="3">ANAK-ANAK (6 - 17)</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left" colspan="3">DEWASA (18 - 30)</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left" colspan="3">TUA (31 - 99999)</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left" colspan="3">JUMLAH</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left" colspan="3">BELUM MENGISI</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left" colspan="3"> TOTAL</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Pendidikan Dalam KK
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">TIDAK / BELUM SEKOLAHN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM TAMAT SD/SEDERAJAT</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left"> TAMAT SD / SEDERAJAT</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> SLTP/SEDERAJAT</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Pendidikan Sedang
                                Ditempuh</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">BELUM MASUK TK/KELOMPOK BERMAIN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">SEDANG TK/KELOMPOK BERMAIN</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left"> TIDAK PERNAH SEKOLAH</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> SEDANG SD/SEDERAJAT</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-pekerjaan" role="tabpanel"
                        aria-labelledby="list-pekerjaan-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Pekerjaan</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">BELUM/TIDAK BEKERJA</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">MENGURUS RUMAH TANGGA</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                                class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left"> PELAJAR/MAHASISWA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> PENSIUNAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> LAINNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-statusPerkawinan" role="tabpanel"
                        aria-labelledby="list-statusPerkawinan-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Status Perkawinan
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">BELUM KAWIN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> KAWIN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left"> CERAI HIDUP</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> CERAI MATI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-agama" role="tabpanel" aria-labelledby="list-agama-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Status Perkawinan
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">ISLAM</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">KRISTEN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left"> KATHOLIK</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> HINDU</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> BUDHA </td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> KHONGHUCU</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> KEPERCAYAAN TERHADAP TUHAN YME / LAINNYA
                                                        </td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-jenisKelamin" role="tabpanel"
                        aria-labelledby="list-jenisKelamin-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Jenis Kelamin</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">LAKI-LAKI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">PEREMPUAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-hubunganDalamKK" role="tabpanel"
                        aria-labelledby="list-statusPerkawinan-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Hubungan Dalam KK
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">KEPALA KELUARGA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SUAMI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left"> ISTRI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left"> ANAK</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-wargaNegara" role="tabpanel"
                        aria-labelledby="list-wargaNegara-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Warga Negara</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">WNI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">WNA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">DUA KEWARGANEGARAAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-statusPenduduk" role="tabpanel"
                        aria-labelledby="list-statusPenduduk-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Status Penduduk</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">TETAP</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">TIDAK TETAP</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-golonganDarah" role="tabpanel"
                        aria-labelledby="list-golonganDarah-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Golongan Darah</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">A</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">B</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">AB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">O</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">A+</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">A-</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">B+</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-penyandangCacat" role="tabpanel"
                        aria-labelledby="list-penyandangCacat-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Penyandang Cacat</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> CACAT FISIK</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">CACAT NETRA/BUTA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">CACAT RUNGU/WICARA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CACAT MENTAL/JIWA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CACAT FISIK DAN MENTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">CACAT LAINNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">TIDAK CACAT</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-penyakitMenahun" role="tabpanel"
                        aria-labelledby="list-penyakitMenahun-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Penyakit Menahun</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> JANTUNG</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">LEVER</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">PARU-PARU</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> KANKER</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> STROKE</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">DIABETES MELITUS</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">GINJAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">TIDAK ADA/TIDAK SAKIT</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-akseptorKB" role="tabpanel"
                        aria-labelledby="list-akseptorKB-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Akseptor KB</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> PIL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">UID</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">SUNTIK</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> KONDOM</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> STROKE</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">SUSUK KB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">STERILISASI WANITA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">LAINNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">TIDAK MENGGUNAKAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-aktaKelahiran" role="tabpanel"
                        aria-labelledby="list-aktaKelahiran-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Akta Kelahiran</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> UMUR 0 S/D 1 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">UMUR 2 S/D 4 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 5 S/D 9 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 10 S/D 14 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 15 S/D 19 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">SUSUK KB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 25 S/D 29 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">UMUR 30 S/D 34 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-kepemilikanKTP" role="tabpanel"
                        aria-labelledby="list-kepemilikanKTP-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Kepemilikan KTP</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> BELUM REKAM</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">SUDAH REKAM</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD PRINTED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> PRINT READY RECORD</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD SHIPPED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SENT FOR CARD PRINTING</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD ISSUED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM WAJIB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-asuransi" role="tabpanel"
                        aria-labelledby="list-asuransi-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Asuransi Kesehatan
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> TIDAK/BELUM PUNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BPJS PENERIMA BANTUAN IURAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD PRINTED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> PRINT READY RECORD</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD SHIPPED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SENT FOR CARD PRINTING</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD ISSUED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM WAJIB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-statusCovid" role="tabpanel"
                        aria-labelledby="list-statusCovid-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Status Covid
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> TIDAK/BELUM PUNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BPJS PENERIMA BANTUAN IURAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD PRINTED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> PRINT READY RECORD</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD SHIPPED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SENT FOR CARD PRINTING</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD ISSUED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM WAJIB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-sukuEtnis" role="tabpanel"
                        aria-labelledby="list-sukuEtnis-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Suku / Etnis
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> TIDAK/BELUM PUNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BPJS PENERIMA BANTUAN IURAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD PRINTED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> PRINT READY RECORD</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD SHIPPED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SENT FOR CARD PRINTING</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD ISSUED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM WAJIB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-BpjsKetenagakerjaan" role="tabpanel"
                        aria-labelledby="list-BpjsKetenagakerjaan-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut BPJS Ketenagakerjaan
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> TIDAK/BELUM PUNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BPJS PENERIMA BANTUAN IURAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD PRINTED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> PRINT READY RECORD</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD SHIPPED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SENT FOR CARD PRINTING</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD ISSUED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM WAJIB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-statusKehamilan" role="tabpanel"
                        aria-labelledby="list-statusKehamilan-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Status Kehamilan
                            </h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> TIDAK/BELUM PUNYA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BPJS PENERIMA BANTUAN IURAN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD PRINTED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> PRINT READY RECORD</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD SHIPPED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> SENT FOR CARD PRINTING</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> UMUR 20 S/D 24 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left"> CARD ISSUED</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BELUM WAJIB</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-kelasSosial" role="tabpanel"
                        aria-labelledby="list-kelasSosial-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>
                                        </button> <button class="btn btn-sm btn-danger" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Rentang Umur
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Kelas Sosial</h6>
                            <div class="card">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-bdt" role="tabpanel" aria-labelledby="list-bdt-list">
                        <div class="card">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>
                                        </button> <button class="btn btn-sm btn-danger" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Rentang Umur
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut BDT</h6>
                            <div class="card">
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">3</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">4</td>
                                                        <td class="text-left">50 S/D 54 TAHUN</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">JUMLAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BELUM MENGISI</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-penerimaBantuanPenduduk" role="tabpanel"
                        aria-labelledby="list-penerimaBantuanPenduduk-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Penerima Bantaun
                                Penduduk</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left">JAMKESMAS</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">PENERIMA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BUKAN PENERIMA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="text-danger">Catatan : </h6>
                                <ol>
                                    <li class="text-danger">Angka masing-masing program menghitung semua peserta,
                                        aktif maupun yang tidak</li>
                                    <li class="text-danger">Jumlah PENERIMA menghitung peserta aktif saja, dan setiap
                                        peserta terhitung satu sekali saja, meskipun menerima lebih dari satu jenis
                                        bantuan.</li>
                                    <li class="text-danger">Jumlah BUKAN PENERIMA dan TOTAL menghitung peserta aktif
                                        saja.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="box-body">
                                <div class="card-header">
                                    <h6>Data Penerima Bantuan Penduduk</h6>
                                </div>
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Program</th>
                                                    <th scope="col">Nama Peserta</th>
                                                    <th scope="col">Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:10%;">
                                                        1
                                                    </td>
                                                    <td>
                                                        JAMKESMAS
                                                    </td>
                                                    <td>
                                                        AHLUL
                                                    </td>
                                                    <td>
                                                        RT 004 RW - Dusun Mangsit
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td>
                                                        JAMKESMAS
                                                    </td>
                                                    <td>
                                                        AHMAD ALLIF RIZKI
                                                    </td>
                                                    <td>
                                                        RT 004 RW - Dusun Mangsit
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-penerimaBantuanKeluarga" role="tabpanel"
                        aria-labelledby="list-penerimaBantuanKeluarga-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Kependudukan Menurut Penerima Bantaun
                                Keluarga</h6>
                            <div class="card">
                                <div class="box-body">
                                   <div class="card-body">
                                        <div id="chart" hidden="true"> </div>
                                    </div>
                                    <div class="table-responsive">
                                        <div class="card-body">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">NO</th>
                                                        <th scope="col">JENIS&nbsp;KELOMPOK</th>
                                                        <th scope="col" colspan="2">JUMLAH</th>
                                                        <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                        <th scope="col" colspan="2">PEREMPUAN</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="padat">1</td>
                                                        <td class="text-left"> BPNT</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BLSM</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">PKH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat">2</td>
                                                        <td class="text-left">BEDAH RUMAH</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">PENERIMA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left">BUKAN PENERIMA</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="padat"></td>
                                                        <td class="text-left"> TOTAL</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">6</a>
                                                        </td>
                                                        <td class="text-right">6,19%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">3</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                        <td class="text-right"><a href=""
                                                                style="color: #1fa3d4;" class="font-weight-light">21</a>
                                                        </td>
                                                        <td class="text-right">3,09%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="text-danger">Catatan : </h6>
                                <ol>
                                    <li class="text-danger">Angka masing-masing program menghitung semua peserta,
                                        aktif maupun yang tidak</li>
                                    <li class="text-danger">Jumlah PENERIMA menghitung peserta aktif saja, dan setiap
                                        peserta terhitung satu sekali saja, meskipun menerima lebih dari satu jenis
                                        bantuan.</li>
                                    <li class="text-danger">Jumlah BUKAN PENERIMA dan TOTAL menghitung peserta aktif
                                        saja.</li>
                                </ol>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="box-body">
                                <div class="card-header">
                                    <h6>Data Penerima Bantuan Keluarga</h6>
                                </div>
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered" id="table-1">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">Program</th>
                                                    <th scope="col">Nama Peserta</th>
                                                    <th scope="col">Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:10%;">
                                                        1
                                                    </td>
                                                    <td>
                                                        BPNT
                                                    </td>
                                                    <td>
                                                        AHLUL
                                                    </td>
                                                    <td>
                                                        RT 004 RW - Dusun Mangsit
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        2
                                                    </td>
                                                    <td>
                                                        PKH
                                                    </td>
                                                    <td>
                                                        AHMAD ALLIF RIZKI
                                                    </td>
                                                    <td>
                                                        RT 004 RW - Dusun Mangsit
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        3
                                                    </td>
                                                    <td>
                                                        BLSM
                                                    </td>
                                                    <td>
                                                        AHMAD ALLIF RIZKI
                                                    </td>
                                                    <td>
                                                        RT 004 RW - Dusun Mangsit
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        4
                                                    </td>
                                                    <td>
                                                        Bedah Rumah
                                                    </td>
                                                    <td>
                                                        AHMAD ALLIF RIZKI
                                                    </td>
                                                    <td>
                                                        RT 004 RW - Dusun Mangsit
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="list-bpnt" role="tabpanel" aria-labelledby="list-bpnt-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Peserta Program BPNT
                            </h6>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">SASARAN&nbsp;KELUARGA</th>
                                                    <th scope="col" colspan="2">JUMLAH</th>
                                                    <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                    <th scope="col" colspan="2">PEREMPUAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">BUKAN PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">TOTAL</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-danger">Catatan : </h6>
                                    <ol>
                                        <li class="text-danger">Jumlah PESERTA termasuk peserta yang mungkin tidak aktif
                                            lagi.</li>
                                        <li class="text-danger">Jumlah BUKAN PESERTA dan TOTAL menghitung peserta aktif
                                            saja.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-blsm" role="tabpanel" aria-labelledby="list-blsm-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Peserta Program BLSM
                            </h6>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">SASARAN&nbsp;KELUARGA</th>
                                                    <th scope="col" colspan="2">JUMLAH</th>
                                                    <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                    <th scope="col" colspan="2">PEREMPUAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">BUKAN PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">TOTAL</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-danger">Catatan : </h6>
                                    <ol>
                                        <li class="text-danger">Jumlah PESERTA termasuk peserta yang mungkin tidak aktif
                                            lagi.</li>
                                        <li class="text-danger">Jumlah BUKAN PESERTA dan TOTAL menghitung peserta aktif
                                            saja.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-pkh" role="tabpanel" aria-labelledby="list-pkh-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Peserta Program PKH
                            </h6>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">SASARAN&nbsp;KELUARGA</th>
                                                    <th scope="col" colspan="2">JUMLAH</th>
                                                    <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                    <th scope="col" colspan="2">PEREMPUAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">BUKAN PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">TOTAL</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-danger">Catatan : </h6>
                                    <ol>
                                        <li class="text-danger">Jumlah PESERTA termasuk peserta yang mungkin tidak aktif
                                            lagi.</li>
                                        <li class="text-danger">Jumlah BUKAN PESERTA dan TOTAL menghitung peserta aktif
                                            saja.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-bedahRumah" role="tabpanel"
                        aria-labelledby="list-bedahRumah-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Peserta Program Bedah Rumah
                            </h6>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">SASARAN&nbsp;KELUARGA</th>
                                                    <th scope="col" colspan="2">JUMLAH</th>
                                                    <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                    <th scope="col" colspan="2">PEREMPUAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">BUKAN PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">TOTAL</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-danger">Catatan : </h6>
                                    <ol>
                                        <li class="text-danger">Jumlah PESERTA termasuk peserta yang mungkin tidak aktif
                                            lagi.</li>
                                        <li class="text-danger">Jumlah BUKAN PESERTA dan TOTAL menghitung peserta aktif
                                            saja.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="list-jamkesmas" role="tabpanel"
                        aria-labelledby="list-jamkesmas-list">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="buttons">
                                    <div class="dropdown d-inline">
                                        <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-print"></i> Cetak
                                        </button>
                                        <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fa fa-download"></i> Unduh
                                        </button> <button class="btn btn-sm btn-warning" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-bar-chart"></i> Grafik Data
                                        </button>
                                        </button> <button class="btn btn-sm btn-info" type="button"
                                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-pie-chart"></i> Pie Chart
                                        </button>

                                    </div>
                                </div>
                            </div>
                            <h6 class="text-center" style="color:black;">Data Peserta Program JAMKESMAS
                            </h6>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">SASARAN&nbsp;KELUARGA</th>
                                                    <th scope="col" colspan="2">JUMLAH</th>
                                                    <th scope="col" colspan="2">LAKI&nbsp;-&nbsp;LAKI</th>
                                                    <th scope="col" colspan="2">PEREMPUAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">BUKAN PESERTA</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>
                                                <tr>
                                                    <td class="padat"></td>
                                                    <td class="text-left">TOTAL</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">6</a>
                                                    </td>
                                                    <td class="text-right">6,19%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">3</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                    <td class="text-right"><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">21</a>
                                                    </td>
                                                    <td class="text-right">3,09%</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="text-danger">Catatan : </h6>
                                    <ol>
                                        <li class="text-danger">Jumlah PESERTA termasuk peserta yang mungkin tidak aktif
                                            lagi.</li>
                                        <li class="text-danger">Jumlah BUKAN PESERTA dan TOTAL menghitung peserta aktif
                                            saja.</li>
                                    </ol>
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

    <script src="{{ asset('/stisla/assets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('/stisla/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>

    <script src="{{ asset('/stisla/assets/js/page/modules-datatables.js') }}"></script>


    <script>
        $(document).ready(function() {
            $('#table-1').DataTable()
        });
    </script>



    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}

    {{-- <script src="https://code.highcharts.com/highcharts.js"></script>

<script src="https://code.highcharts.com/modules/variable-pie.js"></script>

<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script src="https://code.highcharts.com/modules/export-data.js"></script> --}}

    <script src="https://demosid.opendesa.id/assets/js/highcharts/highcharts.js?veacc1073f611f20f00a4b5721288782a"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/highcharts-3d.js?v0c7e9d126406bbc3b1d64a0320712c73">
    </script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/exporting.js?va4e5fb14e15a7cfaa1147b05bd8384b6"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/highcharts-more.js?vdce736a9b0cf090859ffcc2afee1b6fe">
    </script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/sankey.js?v5a8fdb24a6b6659a8b17a96e11926363"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/organization.js?v2c49225a2bde8ab39f994191a11ed210">
    </script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/accessibility.js?vd90cba6c71505ad406c43678c3a77f7f">
    </script>


    <script type="text/javascript">
        var chart;

        function grafikType() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart',
                    defaultSeriesType: 'column'
                },
                title: 0,
                xAxis: {
                    title: {
                        text: 'Pendidikan Dalam KK'
                    },
                    categories: [
                        '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '13',
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Populasi'
                    }
                },
                legend: {
                    layout: 'vertical',
                    enabled: false
                },
                plotOptions: {
                    series: {
                        colorByPoint: true
                    },
                    column: {
                        pointPadding: 0,
                        borderWidth: 0
                    }
                },
                series: [{
                    shadow: 1,
                    border: 1,
                    data: [
                        ['TIDAK / BELUM SEKOLAH', 21],
                        ['BELUM TAMAT SD/SEDERAJAT', 5],
                        ['TAMAT SD / SEDERAJAT', 15],
                        ['SLTP/SEDERAJAT', 26],
                        ['SLTA / SEDERAJAT', 28],
                        ['DIPLOMA I / II', 1],
                        ['AKADEMI/ DIPLOMA III/S. MUDA', 0],
                        ['DIPLOMA IV/ STRATA I', 19],
                        ['STRATA II', 32],
                        ['STRATA III', 11],
                    ]
                }]
            });

            $('#chart').removeAttr('hidden');
        }

        function pieType() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: 0,
                plotOptions: {
                    index: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true
                        },
                        showInLegend: true
                    }
                },
                legend: {
                    layout: 'vertical',
                    backgroundColor: '#FFFFFF',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -30,
                    y: 0,
                    floating: true,
                    shadow: true,
                    enabled: true
                },
                series: [{
                    type: 'pie',
                    name: 'Populasi',
                    data: [
                        ["TIDAK / BELUM SEKOLAH", 21],
                        ["BELUM TAMAT SD/SEDERAJAT", 5],
                        ["TAMAT SD / SEDERAJAT", 15],
                        ["SLTP/SEDERAJAT", 26],
                        ["SLTA / SEDERAJAT", 28],
                        ["DIPLOMA I / II", 1],
                        ["AKADEMI/ DIPLOMA III/S. MUDA", 0],
                        ["DIPLOMA IV/ STRATA I", 0],
                        ["STRATA II", 0],
                        ["STRATA III", 0],
                    ]
                }]
            });

            $('#chart').removeAttr('hidden');
        }
    </script>
       <script type="text/javascript">
        var chart;

        function grafikType2() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart2',
                    defaultSeriesType: 'column'
                },
                title: 0,
                xAxis: {
                    title: {
                        text: 'Pendidikan Dalam KK'
                    },
                    categories: [
                        '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '13',
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Populasi'
                    }
                },
                legend: {
                    layout: 'vertical',
                    enabled: false
                },
                plotOptions: {
                    series: {
                        colorByPoint: true
                    },
                    column: {
                        pointPadding: 0,
                        borderWidth: 0
                    }
                },
                series: [{
                    shadow: 1,
                    border: 1,
                    data: [
                        ['TIDAK / BELUM SEKOLAH', 21],
                        ['BELUM TAMAT SD/SEDERAJAT', 5],
                        ['TAMAT SD / SEDERAJAT', 15],
                        ['SLTP/SEDERAJAT', 26],
                        ['SLTA / SEDERAJAT', 28],
                        ['DIPLOMA I / II', 1],
                        ['AKADEMI/ DIPLOMA III/S. MUDA', 0],
                        ['DIPLOMA IV/ STRATA I', 19],
                        ['STRATA II', 32],
                        ['STRATA III', 11],
                    ]
                }]
            });

            $('#chart2').removeAttr('hidden');
        }

        function pieType2() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart2',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: 0,
                plotOptions: {
                    index: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true
                        },
                        showInLegend: true
                    }
                },
                legend: {
                    layout: 'vertical',
                    backgroundColor: '#FFFFFF',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -30,
                    y: 0,
                    floating: true,
                    shadow: true,
                    enabled: true
                },
                series: [{
                    type: 'pie',
                    name: 'Populasi',
                    data: [
                        ["TIDAK / BELUM SEKOLAH", 21],
                        ["BELUM TAMAT SD/SEDERAJAT", 5],
                        ["TAMAT SD / SEDERAJAT", 15],
                        ["SLTP/SEDERAJAT", 26],
                        ["SLTA / SEDERAJAT", 28],
                        ["DIPLOMA I / II", 1],
                        ["AKADEMI/ DIPLOMA III/S. MUDA", 0],
                        ["DIPLOMA IV/ STRATA I", 0],
                        ["STRATA II", 0],
                        ["STRATA III", 0],
                    ]
                }]
            });

            $('#chart2').removeAttr('hidden');
        }
    </script>
@endpush

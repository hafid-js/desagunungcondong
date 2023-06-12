@extends('layouts.app')

@section('title', 'Data Calon Pemilih')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item active">Data Calon Pemilih</div>
@endsection

@push('css')
    <style>
        th {
            color: #616468;
            font-size: 12px;
        }

        td {
            color: black;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')


    <div class="section-body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 ">
                        <div class="card">
                            <div class="box-body">
                                    <div class="card-body">
                                        <div class="row" style="margin-bottom: -20px; margin-left: -25px; margin-top: -18px;">
                                            <div class="card-body">
                                                <div class="buttons">
                                                   <div class="float-left">
                                                    <a href="#" style="color: white;" data-toggle="modal" data-target="#cetakData"
                                                    class="btn btn-sm btn-icon icon-left bg-purple"><i class="fas fa-print"></i>
                                                    Cetak</a>
                                                <a href="#" data-toggle="modal" data-target="#unduhData"
                                                    class="btn btn-sm btn-icon icon-left btn-dark"><i class="fas fa-download"></i>
                                                    Unduh</a>
                                                <a href="#" data-toggle="modal" data-target="#pencarianSpesifik"
                                                    class="btn btn-sm btn-icon icon-left btn-info"><i class="fas fa-search"></i>
                                                    Pencarian Spesifik</a>
                                                <a href="#" class="btn btn-sm btn-icon icon-left btn-secondary"><i
                                                        class="fas fa-refresh"></i>
                                                    Bersihkan</a>
                                                   </div>
                                                        <div class="float-right">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span style="height: 30px;" class="input-group-text">First and last name</span>
                                                                        <div style="height: 30px;" class="input-group-text">
                                                                            <li class="fas fa-calendar"></li>
                                                                        </div>
                                                                    </div>
                                                                    <input type="text" style="height: 30px;" id="tgl_masuk" class="form-control  datepicker col-md-12 col-sm-12 col-lg-12">
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row justify-content-center mb-4 mt-4">
                                            <h6 style="font-family: 'Source Sans Pro',sans-serif;" class="text-dark">DAFTAR CALON PEMILIH UNTUK TANGGAL PEMILIHAN 26-05-2023</h6>
                                        </div>
                                        <div class="row">
                                            <div class="form-row justify-content-right col-md-6">
                                                <div class="form-group col-md-4 col-lg-3 col-sm-12">
                                                    <select class="form-control input-sm"
                                                        style="  height:33px; margin-bottom: -20px;
                                            padding: 5px 10px;
                                            font-size: 12px;
                                            line-height: 1.5;
                                            border-radius: 3px; padding: 4px 4px;">
                                                        <option>Jenis Kelamin</option>
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4 col-lg-3 col-sm-12">
                                                    <select class="form-control input-sm" id="pilihRW" name="pilihRW"
                                                        style="  height:33px; margin-bottom: -20px;
                                            padding: 5px 10px;
                                            font-size: 12px;
                                            line-height: 1.5;
                                            border-radius: 3px; padding: 4px 4px;">
                                                        <option>Pilih Dusun</option>
                                                        <option value="1">Krajan</option>
                                                        <option>Kepudang</option>
                                                        <option>Karangsari</option>
                                                        <option>Kemplung</option>
                                                        <option>Brembet</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4 col-lg-2 col-sm-12 pilihRW" style="display: none;">
                                                    <select class="form-control input-sm" id="pilihRT" name="pilihRT"
                                                        style="  height:33px; margin-bottom: -20px;
                                            padding: 5px 10px;
                                            font-size: 12px;
                                            line-height: 1.5;
                                            border-radius: 3px; padding: 4px 4px;">
                                                        <option>Pilih RW</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4 col-lg-2 col-sm-12 pilihRT" style="display: none;">
                                                    <select class="form-control input-sm"
                                                        style="  height:33px; margin-bottom: -20px;
                                            padding: 5px 10px;
                                            font-size: 12px;
                                            line-height: 1.5;
                                            border-radius: 3px; padding: 4px 4px;">
                                                        <option>Pilih RT</option>
                                                        <option>4</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row justify-content-end col-md-4 mb-2" style="margin-left:-4px;">
                                                <div class="input-group col-md-8">
                                                    <input type="text" class="form-control" placeholder="   Search"
                                                        style=" height: 33px;
                                            padding: 5px 10px;
                                            font-size: 12px;
                                            line-height: 1.5;
                                            border-radius: 18px 0px 0px 18px; padding: 4px 4px;">
                                                    <div class="input-group-btn">
                                                        <button class="btn btn-primary"
                                                            style="width:40px; height: 33px;
                                              padding: 5px 10px;
                                              font-size: 11px;
                                              line-height: 1.5;
                                              border-radius: 0px 18px 18px 0px; padding: 4px 4px;"><i
                                                                class="fas fa-search"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">TAG&nbsp;ID&nbsp;CARD</th>
                                                    <th scope="col">NAMA</th>
                                                    <th scope="col">NO.&nbsp;KK</th>
                                                    <th scope="col">ALAMAT</th>
                                                    <th scope="col">DUSUN</th>
                                                    <th scope="col">RW</th>
                                                    <th scope="col">RT</th>
                                                    <th scope="col">PENDIDIKAN&nbsp;DALAM&nbsp;KK</th>
                                                    <th scope="col">UMUR&nbsp;PADA&nbsp;25-5-2023</th>
                                                    <th scope="col">PEKERJAAN</th>
                                                    <th scope="col">KAWIN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716996</a></td>
                                                    <td>-</td>
                                                    <td>KHAFID</td>
                                                    <td><a href="" style="color: #1fa3d4;"
                                                            class="font-weight-light">5201142005716993</a></td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>TAMATAN SD / SEDERAJAT</td>
                                                    <td>25</td>
                                                    <td>KARYAWAN SWASTA</td>
                                                    <td>BELUM KAWIN</td>
                                                </tr>
                                            </tbody>
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
</div>


    <div class="modal fade" tabindex="-1" role="dialog" id="cetakData">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" style="color: rgb(86, 86, 86);"><i class="fas fa-print"></i>
                        Cetak Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-body">
                                <code>Centang kotak berikut apabila NIK/No.KK ingin disensor</code>
                                <div class="custom-control custom-checkbox mt-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label text-dark font-weight-600"
                                        for="customCheck1">Sensor NIK / No. KK</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>
                            Tutup</button>
                        <button type="button" href="/keluarga/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                            Cetak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="unduhData">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" style="color: rgb(86, 86, 86);"><i class="fas fa-download"></i>
                        Unduh Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-body">
                            <code>Centang kotak berikut apabila NIK/No.KK ingin disensor</code>
                            <div class="custom-control custom-checkbox mt-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label text-dark font-weight-600" for="customCheck1">Sensor
                                    NIK / No. KK</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i>
                        Tutup</button>
                    <button type="button" onclick="alert('ini untuk download data keluarga')" class="btn btn-info"><i
                            class="fas fa-check"></i> Cetak</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="pencarianSpesifik">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);">Pencarian Spesifik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-5">
                                    <label for="" class="font-weight-bold">Umur</label>
                                    <input type="text" class="form-control" placeholder="Dari">
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-5">
                                    <label for="" class="font-weight-bold">&nbsp;</label>
                                    <input type="text" class="form-control" placeholder="Sampai">
                                </div>
                                <div class="form-group col-md-12 col-sm-12 col-lg-2">
                                    <label for="" class="font-weight-bold">&nbsp;</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Tahun</option>
                                        <option value="">Bulan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Pekerjaan</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Status Perkawinan</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Agama</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Pendidikan Sedang Ditempuh</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Pendidikan Dalam KK</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Status Penduduk</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Kepemilikan Tag ID Card</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fas fa-close"></i> Batal</button>
                            <button type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('scripts')
<script src="https://demo.jadiorder.com/assets/vendor/summernote/summernote-bs4.js"></script>
    <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/stisla/assets/js/page/components-table.js') }}"></script>
    <script src="{{ asset('/stisla/assets/js/page/bootstrap-modal.js') }}"></script>

    <!-- bootstrap color picker -->
    <script
        src="http://demosid.opendesa.id/assets/bootstrap/js/bootstrap-colorpicker.min.js?v9730eb5c9c1d945d025b3877085cbab4">
    </script>
    <!-- bootstrap Date time picker -->
    <script
        src="http://demosid.opendesa.id/assets/bootstrap/js/bootstrap-datetimepicker.min.js?v8a36160a466cad1a9e414321f4784baf">
    </script>
    <script src="http://demosid.opendesa.id/assets/bootstrap/js/id.js?vf5906d544f9f5fec43558999e8b3b3f7"></script>

    <!-- numeral js -->
    <script src="http://demosid.opendesa.id/assets/js/numeraljs/numeral.min.js?vb3ac42fc2efdd8256803f41aab702110"></script>

    <script type="text/javascript">
        function loadText() {
            $('textarea#summernote').summernote('destroy');
            $('textarea#summernote').summernote({
                height: "40vh",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete: function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
        }

        $(function() {
            loadText();
            $("#pilihRW").change(function() {
                if ($(this).val() == "1") {
                    $(".pilihRW").show();
                    $("#akses").attr("required", true);
                } else {
                    $(".pilihRW").hide();
                    $("#akses").attr("required", false);
                }
            });
            $("#pilihRT").change(function() {
                if ($(this).val() == "1") {
                    $(".pilihRT").show();
                    $("#akses").attr("required", true);
                } else {
                    $(".pilihRT").hide();
                    $("#akses").attr("required", false);
                }
            });

            loadResult();
        });
    </script>

@endpush

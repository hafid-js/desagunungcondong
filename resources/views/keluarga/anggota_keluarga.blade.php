@extends('layouts.app')

@section('title', 'Daftar Anggota Keluarga')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Daftar Keluarga</div>
    <div class="breadcrumb-item active">Daftar Anggota Keluarga</div>
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
                <div class="card">
                    <div class="card-body">
                        <div class="buttons">
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-plus"></i> Tambah Anggota
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" href="/keluarga/form_peristiwa/1"><i
                                            class="fa fa-plus"></i>
                                        Anggota Keluarga Lahir</a>
                                    <a class="dropdown-item has-icon" href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                        Anggota Keluarga Masuk</a>
                                    <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                        data-target="#tambahAnggota"><i class="fa fa-plus"></i>
                                        Dari Penduduk Sudah Ada</a>
                                </div>
                            </div>
                            <a href="/keluarga/kartu_keluarga" class="btn btn-sm btn-icon icon-left btn-dark"><i
                                    class="fas fa-book"></i>
                                Kartu Keluarga</a>

                            <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-arrow-left"></i> Kembali Ke Daftar Keluarga
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: -30px;">
                    <div class="col-12 col-md-12 col-lg-12 ">
                        <div class="card">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <h6 style="color:black;">Rincian Keluarga</h6>
                                        <table class="table table-bordered table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;">
                                                        Nomor Kartu Keluarga</td>
                                                    <td nowrap> : 0520304200900005</td>
                                                </tr>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;">
                                                        Kepala Keluarga</td>
                                                    <td nowrap> : AHMAD ALLIF RIZKI</td>
                                                </tr>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px;">Alamat
                                                    </td>
                                                    <td nowrap> : 491 Gardlund Rd RT - / RW 1 Dusun Kedungwatu</td>
                                                </tr>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px;">Program
                                                        Bantuan
                                                    </td>
                                                    <td nowrap> : - </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <h6 style="color:black;">Daftar Anggota Keluarga</h6>
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">AKSI</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">NAMA</th>
                                                    <th scope="col">TANGGAL LAHIR</th>
                                                    <th scope="col">JENIS KELAMIN</th>
                                                    <th scope="col">HUBUNGAN</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="/penduduk/form/1"
                                                                class="btn btn-icon btn-sm btn-primary"><i
                                                                    class="fas fa-edit"></i></a>

                                                            <a style="width: 40px;" href="#" data-toggle="modal"
                                                                data-target="#pecahData"
                                                                class="btn btn-icon  btn-sm btn-info"><i
                                                                    class="fas fa-cut"></i></a>

                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-dark"><i class="fas fa-link"
                                                                    data-toggle="modal"
                                                                    data-target="#ubahHubunganKeluarga"></i></a>
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-danger" data-toggle="modal" data-target="#hapusData"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>3306132204980002</td>
                                                    <td>AHMAD ALLIF RIZKI</td>
                                                    <td><small>22 April 1998</small></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>KEPALA KELUARGA</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon btn-sm btn-primary" data-toggle="modal"
                                                                data-target="#ubahDokumen"><i class="fas fa-edit"></i></a>

                                                            <a style="width: 40px;" href="#" data-toggle="modal"
                                                                data-target="#pecahData"
                                                                class="btn btn-icon  btn-sm btn-info"><i
                                                                    class="fas fa-cut"></i></a>

                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-dark"><i
                                                                    class="fas fa-link" data-toggle="modal"
                                                                    data-target="#ubahHubunganKeluarga"></i></a>
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-danger" data-toggle="modal" data-target="#hapusData"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>3306132204980002</td>
                                                    <td>AHMAD ALLIF RIZKI</td>
                                                    <td><small>22 April 1998</small></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>KEPALA KELUARGA</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon btn-sm btn-primary"
                                                                data-toggle="modal" data-target="#ubahDokumen"><i
                                                                    class="fas fa-edit"></i></a>

                                                            <a style="width: 40px;" href="#" data-toggle="modal"
                                                                data-target="#pecahData"
                                                                class="btn btn-icon  btn-sm btn-info"><i
                                                                    class="fas fa-cut"></i></a>

                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-dark"><i
                                                                    class="fas fa-link" data-toggle="modal"
                                                                    data-target="#ubahHubunganKeluarga"></i></a>
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-danger" data-toggle="modal" data-target="#hapusData"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>3306132204980002</td>
                                                    <td>AHMAD ALLIF RIZKI</td>
                                                    <td><small>22 April 1998</small></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>KEPALA KELUARGA</td>
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



    <div class="modal fade" tabindex="-1" role="dialog" id="pecahData">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);"><i
                            class="fas fa-exclamation-triangle" style="color:red;"></i> Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Apakah Anda yakin ingin memecah Data Keluarga ini?
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" onclick="alert('berhasil menghapus data!')" class="btn btn-info"><i
                            class="fas fa-check"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="hapusData">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);"><i
                            class="fas fa-exclamation-triangle" style="color:red;"></i> Konfirmasi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-info">
                        Apakah yakin ingin dikeluarkan dari Keluarga ini?
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="button" onclick="alert('berhasil menghapus data!')" class="btn btn-info"><i
                            class="fas fa-check"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" tabindex="-1" role="dialog" id="ubahHubunganKeluarga">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" style="color: rgb(86, 86, 86);"> Ubah Hubungan Keluarga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-title mb-2">NIK</div>
                                </div>
                                <div class="col-sm-6 mt-sm-0 mt-4">
                                    <div class="text-title mb-2">: 3306132204980002</div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-title mb-2">Nama Penduduk</div>
                                </div>
                                <div class="col-sm-6 mt-sm-0 mt-4">
                                    <div class="text-title mb-2">: AHMAD ALLIF RIZKI</div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card card-danger">
                                <div class="card-body">
                                    <label for="hubungan" class="font-text-bold text-bg-dark">Hubungan</label>
                                    <select name="" id="hubungan" class="form-control">
                                        <option value="">-- Pilih Hubungan --</option>
                                        <option value="">SUAMI</option>
                                        <option value="">ISTRI</option>
                                        <option value="">ANAK</option>
                                        <option value="">MENANTU</option>
                                        <option value="">CUCU</option>
                                        <option value="">ORANGTUA</option>
                                        <option value="">MERTUA</option>
                                        <option value="">FAMILI LAIN</option>
                                        <option value="">PEMBANTU</option>
                                        <option value="">LAINNYA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i> Batal</button>
                    <button type="button" onclick="alert('berhasil menghapus data!')" class="btn btn-info"><i
                            class="fas fa-check"></i> Simpan</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" tabindex="-1" role="dialog" id="tambahDokumen">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Dokumen</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Dokumen</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Jenis Dokumen</label>
                            <select class="custom-select">
                                <option selected>-- Pilih Jenis Dokumen --</option>
                                <option value="1">Surat Pengantar RT/RW</option>
                                <option value="2">Fotokopi KK</option>
                                <option value="3">Fotokopi KTP</option>
                                <option value="">Fotokopi Surat Nikah/Akta Nikah/Kutipan Akta Pernikahan</option>
                                <option value="">Surat Pindah Datang Dari Tempat Asal</option>
                                <option value="">Surat Keterangan Kematian Dari Rumah Sakit, Rumah Bersalin
                                    Puskesmas, atau Visum Dokter</option>
                                <option value="">Surat Keterangan Cerai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <code style="background-color: #61646818">Kosongkan jika tidak ingin mengubah dokumen.
                                    Ukuran maksimal 10 MB.</code> <br>
                                <div class="form-group mt-3">
                                    <input type="checkbox"> <label>Boleh diubah oleh warga melalui Layanan Mandiri</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fas fa-close"></i> Tutup</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="tambahAnggota">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Anggota Keluarga</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card card-info">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">NIK</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Hubungan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>3306132204980002</td>
                                                <td>Khafid</td>
                                                <td>KEPALA KELUARGA</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card card-info">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="font-weight-bold">NIK / Nama Penduduk (dari penduduk yang tidak memiliki
                                        No. KK)</label>
                                    <select class="custom-select select2">
                                        <option selected>-- Silahkan Cari NIK / Nama Penduduk --</option>
                                        <option value="1">NIK : 330613220498002 - KHAFID</option>
                                        <option value="1">NIK : 330613220498002 - KHAFID</option>
                                        <option value="1">NIK : 330613220498002 - KHAFID</option>
                                        <option value="1">NIK : 330613220498002 - KHAFID</option>
                                        <option value="1">NIK : 330613220498002 - KHAFID</option>
                                        <option value="1">NIK : 330613220498002 - KHAFID</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Hubungan Keluarga</label>
                                    <select class="custom-select">
                                        <option selected>-- Silahkan Cari Hubungan Keluarga --</option>
                                        <option value="1">ORANGTUA</option>
                                        <option value="1">FAMILI LAIN</option>
                                        <option value="1">PEMBANTU</option>
                                        <option value="1">LAINNYA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fas fa-close"></i> Tutup</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="ubahDokumen">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Dokumen</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Dokumen</label>
                            <input type="text" class="form-control" value="mydocument">
                        </div>
                        <div class="form-group">
                            <label>Jenis Dokumen</label>
                            <select class="custom-select">
                                <option>-- Pilih Jenis Dokumen --</option>
                                <option value="1">Surat Pengantar RT/RW</option>
                                <option value="2">Fotokopi KK</option>
                                <option value="3" selected>Fotokopi KTP</option>
                                <option value="">Fotokopi Surat Nikah/Akta Nikah/Kutipan Akta Pernikahan</option>
                                <option value="">Surat Pindah Datang Dari Tempat Asal</option>
                                <option value="">Surat Keterangan Kematian Dari Rumah Sakit, Rumah Bersalin
                                    Puskesmas, atau Visum Dokter</option>
                                <option value="">Surat Keterangan Cerai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih File</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                <code style="background-color: #61646818">Kosongkan jika tidak ingin mengubah dokumen.
                                    Ukuran maksimal 10 MB.</code> <br>
                                <div class="form-group mt-3">
                                    <input type="checkbox"> <label>Boleh diubah oleh warga melalui Layanan Mandiri</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                    class="fas fa-close"></i> Tutup</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</a>
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

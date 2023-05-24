@extends('layouts.app')

@section('title', 'Data Penduduk')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Data Penduduk</div>
@endsection

@push('css')
    <style>
        th {
            color: #616468;
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
                                    <i class="fa fa-plus"></i> Tambah Penduduk
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" href="/form_peristiwa/1"><i class="fa fa-plus"></i>
                                        Penduduk Lahir</a>
                                    <a class="dropdown-item has-icon" href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                        Penduduk Masuk</a>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#deletePenduduk"
                                class="btn btn-sm btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>
                                Hapus Data Terpilih</a>
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-arrow-down"></i> Pilih Aksi Lainnya
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" data-toggle="modal" data-target="#cetakData"
                                        href="#"><i class="fa fa-print"></i> Cetak</a>
                                    <a class="dropdown-item has-icon" href="#"><i class="fa fa-download"></i>
                                        Unduh</a>
                                    <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                        data-target="#pencarianSpesifik"><i class="fa fa-search"></i> Pencarian
                                        Spesifik</a>
                                    <a class="dropdown-item has-icon" data-toggle="modal" data-target="#cariPenerimaBantuan"
                                        href="#"><i class="fa fa-search"></i> Pencarian
                                        Program Bantuan</a>
                                    <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                        data-target="#cariKumpulanNIK"><i class="fa fa-users"></i> Pilihan
                                        Kumpulan NIK</a>
                                    <a class="dropdown-item has-icon" href="#"><i class="fa fa-search"></i> NIK
                                        Sementara</a>
                                    <a class="dropdown-item has-icon" href="#"><i class="fa fa-book"></i> Log
                                        Penduduk</a>
                                </div>
                            </div>
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-arrow-down"></i> Impor / Ekspor
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" href="#"><i class="fa fa-print"></i> Ekspor
                                        Penduduk</a>
                                </div>
                            </div>
                            <a href="#" class="btn btn-sm btn-icon icon-left btn-secondary"><i
                                    class="fas fa-refresh"></i> Bersihkan</a>
                        </div>
                        <hr>
                        <div class="row mb-2">
                            <div class="form-row justify-content-start col-md-8">
                                <div class="form-group col-md-4 col-lg-2 col-sm-12">
                                    <select class="form-control input-sm"
                                        style="  height: 33px;
                                    padding: 5px 10px;
                                    font-size: 12px;
                                    line-height: 1.5;
                                    border-radius: 3px; padding: 4px 4px;">
                                        <option>Status Penduduk</option>
                                        <option>Tetap</option>
                                        <option>Tidak Tetap</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-lg-2 col-sm-12">
                                    <select class="form-control input-sm"
                                        style="  height:33px;
                                    padding: 5px 10px;
                                    font-size: 12px;
                                    line-height: 1.5;
                                    border-radius: 3px; padding: 4px 4px;">
                                        <option>Status Dasar</option>
                                        <option>Hidup</option>
                                        <option>Mati</option>
                                        <option>Pindah</option>
                                        <option>Hilang</option>
                                        <option>Pergi</option>
                                        <option>Tidak Valid</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-lg-2 col-sm-12">
                                    <select class="form-control input-sm"
                                        style="  height:33px;
                                    padding: 5px 10px;
                                    font-size: 12px;
                                    line-height: 1.5;
                                    border-radius: 3px; padding: 4px 4px;">
                                        <option>Jenis Kelamin</option>
                                        <option>Hidup</option>
                                        <option>Mati</option>
                                        <option>Pindah</option>
                                        <option>Hilang</option>
                                        <option>Pergi</option>
                                        <option>Tidak Valid</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-2 col-sm-12 col-md-4">
                                    <select class="form-control input-sm"
                                        style="  height:33px;
                                    padding: 5px 10px;
                                    font-size: 12px;
                                    line-height: 1.5;
                                    border-radius: 3px; padding: 4px 4px;">
                                        <option>Pilih Dusun</option>
                                        <option>Hidup</option>
                                        <option>Mati</option>
                                        <option>Pindah</option>
                                        <option>Hilang</option>
                                        <option>Pergi</option>
                                        <option>Tidak Valid</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row justify-content-end col-md-4">
                                <div class="input-group col-md-8">
                                    <input type="text" class="form-control" placeholder="Search"
                                        style=" height: 33px;
                                    padding: 5px 10px;
                                    font-size: 12px;
                                    line-height: 1.5;
                                    border-radius: 10px 0px 0px 10px; padding: 4px 4px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"
                                            style="width:40px; height: 33px;
                                      padding: 5px 10px;
                                      font-size: 11px;
                                      line-height: 1.5;
                                      border-radius: 0px 10px 10px 0px; padding: 4px 4px;"><i
                                                class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr style="font-size: 12px;">
                                    <th>
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                class="custom-control-input" id="checkbox-all">
                                            <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>NO</th>
                                    <th>AKSI</th>
                                    <th>FOTO</th>
                                    <th>NIK</th>
                                    <th>TAG&nbsp;ID&nbsp;CARD</th>
                                    <th>NAMA</th>
                                    <th>NO.&nbsp;KK</th>
                                    <th>NAMA&nbsp;AYAH</th>
                                    <th>NAMA&nbsp;IBU</th>
                                    <th>NO.&nbsp;RUMAH&nbsp;TANGGA</th>
                                    <th>ALAMAT</th>
                                    <th>DUSUN</th>
                                    <th>RW</th>
                                    <th>RT</th>
                                    <th>PENDIDIKAN&nbsp;DALAM&nbsp;KK</th>
                                    <th>UMUR</th>
                                    <th>PEKERJAAN</th>
                                    <th>KAWIN</th>
                                    <th>TGL&nbsp;PERISTIWA</th>
                                    <th>TGL&nbsp;TERDAFTAR</th>
                                </tr>
                                <tr style="font-size: 12px;">
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-1">
                                            <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Pilih Aksi
                                            </button>
                                            <div class="dropdown-menu" style="width: 250px;">
                                                <a class="dropdown-item has-icon" href="penduduk/detail"><i
                                                        class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/form/1"><i
                                                        class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                <a class="dropdown-item has-icon" data-toggle="modal"
                                                    data-target="#ubahStatusDasar" href="#"><i
                                                        class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/dokumen"><i
                                                        class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/cetak_biodata"><i
                                                        class="fa fa-print"></i> Cek Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                                    data-target="#deletePenduduk"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                            class="img-fluid" alt=""></td>
                                    <td>5201142005716996</td>
                                    <td></td>
                                    <td style="color: #343a40">KHAFID</td>
                                    <td></td>
                                    <td style="color: #343a40">MISLAN</td>
                                    <td style="color: #343a40">SARTINI</td>
                                    <td style="color: #343a40">011405000012</td>
                                    <td style="color: #343a40">Jl.Kliwonan</td>
                                    <td style="color: #343a40">KRAJAN </td>
                                    <td style="color: #343a40">03</td>
                                    <td style="color: #343a40">01</td>
                                    <td style="color: #343a40">TAMAT SD / SEDERAJAT</td>
                                    <td style="color: #343a40">25</td>
                                    <td style="color: #343a40">TUKANG SAPU</td>
                                    <td style="color: #343a40">BELUM KAWIN</td>
                                    <td style="color: #343a40">22 April 1998</td>
                                    <td style="color: #343a40">28 Mei 2023</td>
                                </tr>
                                <tr style="font-size: 12px;">
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-2">
                                            <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Pilih Aksi
                                            </button>
                                            <div class="dropdown-menu" style="width: 250px;">
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/form/1"><i
                                                        class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                <a class="dropdown-item has-icon" data-toggle="modal"
                                                    data-target="#ubahStatusDasar" href="#"><i
                                                        class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/dokumen"><i
                                                        class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/cetak_biodata"><i
                                                        class="fa fa-print"></i> Cek Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                                    data-target="#deletePenduduk"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                            class="img-fluid" alt=""></td>
                                    <td>5201142005716996</td>
                                    <td></td>
                                    <td style="color: #343a40">KHAFID</td>
                                    <td></td>
                                    <td style="color: #343a40">MISLAN</td>
                                    <td style="color: #343a40">SARTINI</td>
                                    <td style="color: #343a40">011405000012</td>
                                    <td style="color: #343a40">Jl.Kliwonan</td>
                                    <td style="color: #343a40">KRAJAN </td>
                                    <td style="color: #343a40">03</td>
                                    <td style="color: #343a40">01</td>
                                    <td style="color: #343a40">TAMAT SD / SEDERAJAT</td>
                                    <td style="color: #343a40">25</td>
                                    <td style="color: #343a40">TUKANG SAPU</td>
                                    <td style="color: #343a40">BELUM KAWIN</td>
                                    <td style="color: #343a40">22 April 1998</td>
                                    <td style="color: #343a40">28 Mei 2023</td>
                                </tr>
                                <tr style="font-size: 12px;">
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-3">
                                            <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Pilih Aksi
                                            </button>
                                            <div class="dropdown-menu" style="width: 250px;">
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                <a class="dropdown-item has-icon" data-toggle="modal"
                                                    data-target="#ubahStatusDasar" href="#"><i
                                                        class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/dokumen"><i
                                                        class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/cetak_biodata"><i
                                                        class="fa fa-print"></i> Cek Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                                    data-target="#deletePenduduk"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                            class="img-fluid" alt=""></td>
                                    <td>5201142005716996</td>
                                    <td></td>
                                    <td style="color: #343a40">KHAFID</td>
                                    <td></td>
                                    <td style="color: #343a40">MISLAN</td>
                                    <td style="color: #343a40">SARTINI</td>
                                    <td style="color: #343a40">011405000012</td>
                                    <td style="color: #343a40">Jl.Kliwonan</td>
                                    <td style="color: #343a40">KRAJAN </td>
                                    <td style="color: #343a40">03</td>
                                    <td style="color: #343a40">01</td>
                                    <td style="color: #343a40">TAMAT SD / SEDERAJAT</td>
                                    <td style="color: #343a40">25</td>
                                    <td style="color: #343a40">TUKANG SAPU</td>
                                    <td style="color: #343a40">BELUM KAWIN</td>
                                    <td style="color: #343a40">22 April 1998</td>
                                    <td style="color: #343a40">28 Mei 2023</td>
                                </tr>
                                <tr style="font-size: 12px;">
                                    <td class="p-0 text-center">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input"
                                                id="checkbox-4">
                                            <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-sm btn-primary dropdown-toggle" type="button"
                                                id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Pilih Aksi
                                            </button>
                                            <div class="dropdown-menu" style="width: 250px;">
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-list-ol"></i> Lihat Detail Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-edit"></i> Ubah Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#"><i
                                                        class="fa fa-map-marker"></i> Lihat Lokasi Tempat Tinggal</a>
                                                <a class="dropdown-item has-icon" data-toggle="modal"
                                                    data-target="#ubahStatusDasar" href="#"><i
                                                        class="fa fa-sign-out"></i> Ubah Status Dasar</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/dokumen"><i
                                                        class="fa fa-upload"></i> Upload Dokumen Penduduk</a>
                                                <a class="dropdown-item has-icon" href="/penduduk/cetak_biodata"><i
                                                        class="fa fa-print"></i> Cek Biodata Penduduk</a>
                                                <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                                    data-target="#deletePenduduk"><i class="fa fa-trash"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                            class="img-fluid" alt=""></td>
                                    <td>5201142005716996</td>
                                    <td></td>
                                    <td style="color: #343a40">KHAFID</td>
                                    <td></td>
                                    <td style="color: #343a40">MISLAN</td>
                                    <td style="color: #343a40">SARTINI</td>
                                    <td style="color: #343a40">011405000012</td>
                                    <td style="color: #343a40">Jl.Kliwonan</td>
                                    <td style="color: #343a40">KRAJAN </td>
                                    <td style="color: #343a40">03</td>
                                    <td style="color: #343a40">01</td>
                                    <td style="color: #343a40">TAMAT SD / SEDERAJAT</td>
                                    <td style="color: #343a40">25</td>
                                    <td style="color: #343a40">TUKANG SAPU</td>
                                    <td style="color: #343a40">BELUM KAWIN</td>
                                    <td style="color: #343a40">22 April 1998</td>
                                    <td style="color: #343a40">28 Mei 2023</td>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="deletePenduduk">
        <div class="modal-dialog modal-lg">
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
                        Apakah Anda yakin ingin mengahapus data ini?
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" onclick="alert('berhasil menghapus data!')" class="btn btn-danger"><i
                            class="fas fa-trash"></i> Hapus</button>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="cetakData">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);"><i
                            class="fas fa-print"></i> Cetak Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Centang kotak berikut apabila NIK/No.KK ingin disensor</h4>
                        </div>
                        <div class="card-body">
                            <p style="font-weight:bold;"><input type="checkbox"> Sensor NIK/No.KK</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i> Cetak</a>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="cariPenerimaBantuan">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);"><i
                            class="fas fa-search"></i> Pencarian Program Bantuan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="form-group mt-5">
                            <label class="font-weight-bold" for="">Program Bantuan</label>
                            <select name="" id="" class="form-control select2 col-md-6 col-lg-6">
                                <option value="">Penduduk Penerima Bantuan</option>
                                <option value="">Penduduk Bukan Penerima Bantuan</option>
                                <option value="">JAMKESMAS</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br justify-content-between">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-times"></i>
                        Batal</button>
                    <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                        Simpan</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="cariKumpulanNIK">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);">Pilih Kumpulan NIK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="form-group col-md-12 mt-3">
                            <label for="" class="font-weight-bold">Kumpulan NIK</label>
                            <textarea name="" id="" rows="5" class="form-control" style="height:100%;"
                                placeholder="Isi maks 20 NIK, dengan pemisah koma (,). Contoh: 5201142005716996, 5201144609786995"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                        Simpan</a>
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
                                    <label for="" class="font-weight-bold">Jenis Kelamin</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Status Dasar</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                        <option value="" selected>HIDUP</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Cacat</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Cara KB</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Status KTP</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Asuransi</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Warga Negara</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Golongan Darah</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Sakit Menahun</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 col-lg-6">
                                    <label for="" class="font-weight-bold">Kepemilikan Tag ID Card</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i> Batal</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" tabindex="-1" role="dialog" id="ubahStatusDasar">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="card">
                        <div class="card-header">
                            <h4>Ubah Status Dasar</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Status Dasar Baru</label>
                                <select class="custom-select">
                                    <option>Pilih Status Dasar</option>
                                    <option value="1">MATI</option>
                                    <option value="2">PINDAH</option>
                                    <option value="3" selected>HILANG</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Peristiwa</label>
                                <input type="date" class="form-control datepicker">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lapor</label>
                                <input type="date" class="form-control datepicker">
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan Peristiwa</label>
                                <textarea rows="5" class="form-control input-sm" name="" id="catatan" placeholder="Catatan"></textarea>
                                <small style="color: #616468">*mati/hilang terangkan penyebabnya, pindah tuliskan
                                    alamat
                                    pindah</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal"><i
                                        class="fas fa-close"></i> Tutup</button>
                                <a type="button" href="/penduduk/cetak" class="btn btn-info"><i
                                        class="fas fa-check"></i>
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
        <script src="{{ asset('/stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('/stisla/assets/js/page/components-table.js') }}"></script>
        <script src="{{ asset('/stisla/assets/js/page/bootstrap-modal.js') }}"></script>
    @endpush

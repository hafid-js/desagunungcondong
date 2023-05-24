@extends('layouts.app')

@section('title', 'Data Keluarga')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item active">Data Keluarga</div>
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
                                    <i class="fa fa-plus"></i> Tambah KK Baru
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" href="/keluarga/form_peristiwa/5"><i
                                            class="fa fa-plus"></i>
                                        Tambah Penduduk Masuk</a>
                                    <a class="dropdown-item has-icon" data-toggle="modal" data-target="#tambahKK"
                                        href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                        Tambah Penduduk Sudah Ada</a>
                                </div>
                            </div>
                            <a href="#" style="color: white;" data-toggle="modal" data-target="#cetakData"
                                class="btn btn-sm btn-icon icon-left bg-purple"><i class="fas fa-print"></i>
                                Cetak</a>
                            <a href="#" data-toggle="modal" data-target="#unduhData"
                                class="btn btn-sm btn-icon icon-left btn-dark"><i class="fas fa-download"></i>
                                Unduh</a>
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-danger" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-arrow-down"></i> Aksi Data Terpilih
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" onclick="alert('cetak kartu keluarga')"><i
                                            class="fa fa-print"></i>
                                        Cetak Kartu Keluarga</a>
                                    <a class="dropdown-item has-icon" href="#"
                                        onclick="alert('unduh kartu keluarga')"><i class="fa fa-download"></i>
                                        Unduh Kartu Keluarga</a>
                                    <a class="dropdown-item has-icon" onclick="alert('hapus kartu keluarga')"
                                        href="#"><i class="fa fa-trash"></i>
                                        Hapus Data Terpilih</a>
                                </div>
                            </div>
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-arrow-down"></i> Pilih Aksi Lainnya
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" href="#" data-toggle="modal"
                                        data-target="#cariKumpulanKK"><i class="fa fa-search"></i>
                                        Pilihan Kumpulan KK</a>
                                    <a class="dropdown-item has-icon"href="#" data-toggle="modal"
                                        data-target="#cariPenerimaBantuan"><i class="fa fa-search"></i>
                                        Pencarian Program Bantuan</a>
                                </div>
                            </div>

                            <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-rotate"></i> Bersihkan
                            </button>
                        </div>
                        <hr>
                        <div class="row mb-4">
                            <div class="form-row justify-content-start col-md-8">
                                <div class="form-group col-md-4 col-lg-3 col-sm-4">
                                    <select class="form-control input-sm"
                                        style="  height: 33px;
                            padding: 5px 10px;
                            font-size: 12px;
                            line-height: 1.5;
                            border-radius: 3px; padding: 4px 4px;">
                                        <option>Pilih Status KK</option>
                                        <option>KK Aktif</option>
                                        <option>KK Hilang/Pindah/Mati</option>
                                        <option>KK Kosong</option>
                                        <option>No. KK Sementara</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-lg-3 col-sm-4">
                                    <select class="form-control input-sm"
                                        style="  height:33px;
                            padding: 5px 10px;
                            font-size: 12px;
                            line-height: 1.5;
                            border-radius: 3px; padding: 4px 4px;">
                                        <option>Jenis Kelamin</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4 col-lg-3 col-sm-4">
                                    <select class="form-control input-sm"
                                        style="  height:33px;
                            padding: 5px 10px;
                            font-size: 12px;
                            line-height: 1.5;
                            border-radius: 3px; padding: 4px 4px;">
                                        <option>Pilih Dusun</option>
                                        <option>Krajan</option>
                                        <option>Kepudang</option>
                                        <option>Karangsari</option>
                                        <option>Kemplung</option>
                                        <option>Brembet</option>
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
                    </div>
                </div>
                <div class="row" style="margin-top: -70px;">
                    <div class="col-12 col-md-12 col-lg-12 ">
                        <div class="card">
                            <div class="box-body">
                                <div class="table-responsive">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                data-checkbox-role="dad" class="custom-control-input"
                                                                id="checkbox-all">
                                                            <label for="checkbox-all"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </th>
                                                    <th scope="col">NO</th>
                                                    <th scope="col">AKSI</th>
                                                    <th scope="col">FOTO</th>
                                                    <th scope="col">NOMOR&nbsp;KK</th>
                                                    <th scope="col">KEPALA&nbsp;KELUARGA</th>
                                                    <th scope="col">NIK</th>
                                                    <th scope="col">TAG&nbsp;ID&nbsp;CARD</th>
                                                    <th scope="col">JUMLAH&nbsp;ANGGOTA</th>
                                                    <th scope="col">JENIS&nbsp;KELAMIN</th>
                                                    <th scope="col">ALAMAT</th>
                                                    <th scope="col">DUSUN</th>
                                                    <th scope="col">RW</th>
                                                    <th scope="col">RT</th>
                                                    <th scope="col">TANGGAL&nbsp;TERDAFTAR</th>
                                                    <th scope="col">TANGGAL&nbsp;CETAK&nbsp;KK</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="/keluarga/anggota"
                                                                class="btn btn-icon btn-sm btn-primary"><i
                                                                    class="fas fa-list-ol"></i></a>
                                                            <button style="width: 40px;" class="btn btn-sm btn-info"
                                                                type="button" id="dropdownMenuButton2"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="width: 250px;">
                                                                <a class="dropdown-item has-icon"
                                                                    href="/keluarga/form_peristiwa/1"><i
                                                                        class="fa fa-plus"></i>
                                                                    Anggota Keluarga Lahir</a>
                                                                <a class="dropdown-item has-icon"
                                                                    href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                                                    Anggota Keluarga Masuk</a>
                                                            </div>
                                                            <a data-toggle="modal" data-target="#ubahDataKK"
                                                                style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                        </div>
                                                    </td>
                                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                                            class="img-fluid" alt=""></td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/keluarga/kartu_keluarga">0720319200800004</a></td>
                                                    <td>MISLAN</td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/penduduk/detail">5201143105121724</a></td>
                                                    <td>-</td>
                                                    <td><a style="color: #1fa3d4;" href="/keluarga/anggota">4</a></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>3</td>
                                                    <td>14 Mei 2023</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="/keluarga/anggota"
                                                                class="btn btn-icon btn-sm btn-primary"><i
                                                                    class="fas fa-list-ol"></i></a>
                                                            <button style="width: 40px;" class="btn btn-sm btn-info"
                                                                type="button" id="dropdownMenuButton2"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="width: 250px;">
                                                                <a class="dropdown-item has-icon"
                                                                    href="/keluarga/form_peristiwa/1"><i
                                                                        class="fa fa-plus"></i>
                                                                    Anggota Keluarga Lahir</a>
                                                                <a class="dropdown-item has-icon"
                                                                    href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                                                    Anggota Keluarga Masuk</a>
                                                            </div>
                                                            <a data-toggle="modal" data-target="#ubahDataKK"
                                                                style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                        </div>
                                                    </td>
                                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                                            class="img-fluid" alt=""></td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/keluarga/kartu_keluarga">0720319200800004</a></td>
                                                    <td>MISLAN</td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/penduduk/detail">5201143105121724</a></td>
                                                    <td>-</td>
                                                    <td><a style="color: #1fa3d4;" href="/keluarga/anggota">4</a></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>3</td>
                                                    <td>14 Mei 2023</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="/keluarga/anggota"
                                                                class="btn btn-icon btn-sm btn-primary"><i
                                                                    class="fas fa-list-ol"></i></a>
                                                            <button style="width: 40px;" class="btn btn-sm btn-info"
                                                                type="button" id="dropdownMenuButton2"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="width: 250px;">
                                                                <a class="dropdown-item has-icon"
                                                                    href="/keluarga/form_peristiwa/1"><i
                                                                        class="fa fa-plus"></i>
                                                                    Anggota Keluarga Lahir</a>
                                                                <a class="dropdown-item has-icon"
                                                                    href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                                                    Anggota Keluarga Masuk</a>
                                                            </div>
                                                            <a data-toggle="modal" data-target="#ubahDataKK"
                                                                style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                        </div>
                                                    </td>
                                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                                            class="img-fluid" alt=""></td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/keluarga/kartu_keluarga">0720319200800004</a></td>
                                                    <td>MISLAN</td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/penduduk/detail">5201143105121724</a></td>
                                                    <td>-</td>
                                                    <td><a style="color: #1fa3d4;" href="/keluarga/anggota">4</a></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>3</td>
                                                    <td>14 Mei 2023</td>
                                                    <td>-</td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <div class="custom-checkbox custom-control">
                                                            <input type="checkbox" data-checkboxes="mygroup"
                                                                class="custom-control-input" id="checkbox-1">
                                                            <label for="checkbox-1"
                                                                class="custom-control-label">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 10px;">1</td>
                                                    <td
                                                        style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons">
                                                            <a style="width: 40px;" href="/keluarga/anggota"
                                                                class="btn btn-icon btn-sm btn-primary"><i
                                                                    class="fas fa-list-ol"></i></a>
                                                            <button style="width: 40px;" class="btn btn-sm btn-info"
                                                                type="button" id="dropdownMenuButton2"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa fa-plus"></i>
                                                            </button>
                                                            <div class="dropdown-menu" style="width: 250px;">
                                                                <a class="dropdown-item has-icon"
                                                                    href="/keluarga/form_peristiwa/1"><i
                                                                        class="fa fa-plus"></i>
                                                                    Anggota Keluarga Lahir</a>
                                                                <a class="dropdown-item has-icon"
                                                                    href="form_peristiwa/2"><i class="fa fa-plus"></i>
                                                                    Anggota Keluarga Masuk</a>
                                                            </div>
                                                            <a data-toggle="modal" data-target="#ubahDataKK"
                                                                style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                        </div>
                                                    </td>
                                                    <td><img src="	http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                                            class="img-fluid" alt=""></td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/keluarga/kartu_keluarga">0720319200800004</a></td>
                                                    <td>MISLAN</td>
                                                    <td><a style="color: #1fa3d4;"
                                                            href="/penduduk/detail">5201143105121724</a></td>
                                                    <td>-</td>
                                                    <td><a style="color: #1fa3d4;" href="/keluarga/anggota">4</a></td>
                                                    <td>LAKI-LAKI</td>
                                                    <td>-</td>
                                                    <td>KRAJAN</td>
                                                    <td>-</td>
                                                    <td>3</td>
                                                    <td>14 Mei 2023</td>
                                                    <td>-</td>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="tambahKK">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Data Kepala Keluarga</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="font-weight-bold">Kepala Keluarga (dari penduduk yang tidak memiliki
                                No.KK)</label>
                            <select class="custom-select">
                                <option>Silahkan Cari NIK / Nama Kepala Keluarga</option>
                                <option value="1">NIK :5201140706966997 - AHMAD ALLIF RIZKI</option>
                                <option value="2">NIK :5201145003976995 - ADINI SEPTIA LISTA</option>
                                <option value="3">NIK :5201145211486994 - BAIQ OLIVIA APRILLIANI</option>
                                <option value="">NIK :5201147112947048 - DELLA MAHARANI NINGSIH</option>
                                <option value="">NIK :5201144408886994 - ELOK KHALISA SABRINA</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Nomor Kartu Keluarga (KK)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nomor KK">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                    class="fas fa-close"></i> Tutup</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</a>
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
                            <h6>Centang kotak berikut apabila NIK/No.KK ingin disensor</h6>
                        </div>
                        <div class="card-body">
                            <p style="font-weight:bold;"><input type="checkbox"> Sensor NIK/No.KK</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a type="button" href="/keluarga/cetak" class="btn btn-info"><i class="fas fa-check"></i> Cetak</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="unduhData">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold" style="color: rgb(86, 86, 86);"><i class="fas fa-print"></i>
                        Unduh Data</h5>
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
                    <a type="button" onclick="alert('ini untuk download data keluarga')" class="btn btn-info"><i
                            class="fas fa-check"></i> Cetak</a>
                </div>
            </div>
        </div>
    </div>
    </div>



    <div class="modal fade" tabindex="-1" role="dialog" id="ubahDataKK">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-dark font-weight-bold">Ubah Data KK</h4>
                    </div>
                    <div class="card-body">
                        {{-- <div class="form-group">
                            <label>Status Data KK</label>
                            <select class="custom-select">
                                <option >Pilih Status Dasar</option>
                                <option value="1">MATI</option>
                                <option value="2">PINDAH</option>
                                <option value="3" selected>HILANG</option>
                            </select>
                        </div> --}}

                        <div class="form-group">
                            <label class="font-weight-bold" for="noKK">Nomor KK <code id="tampil_noKK"
                                    style="display: none;"> (Sementara) </code></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <input type="checkbox" title="Centang jika belum memiliki Nomor KK"
                                            id="noKK_sementara">
                                    </div>
                                </div>
                                <input id="noKK" name="noKK" class="form-control input-sm required noKK"
                                    type="text" placeholder="Nomor KK" value=""></input>
                            </div <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <textarea name="" class="form-control" style="height: 100px;" id="" cols="30" rows="10"> Jl.Kayu Putih Tengah 1 Blok A No-2</textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Dusun</label>
                                <select class="custom-select">
                                    <option>Pilih Dusun</option>
                                    <option value="1">Krajan</option>
                                    <option value="2">Kepudang</option>
                                    <option value="3">Karangsari</option>
                                    <option value="">Kemplung</option>
                                    <option value="">Brembet</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold">RW</label>
                                <select class="custom-select">
                                    <option>Pilih RW</option>
                                    <option value="1">-</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold">RT</label>
                                <select class="custom-select">
                                    <option>Pilih RT</option>
                                    <option value="1">-</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="font-weight-bold">Tanggal Cetak Kartu Keluarga</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <li class="fas fa-calendar"></li>
                                    </div>
                                </div>
                                <input type="date" class="form-control datepicker col-md-4 col-sm-12 col-lg-4">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Kelas Sosial</label>
                            <select class="custom-select">
                                <option>Pilih Tingkatan Kelas Sejahtera</option>
                                <option value="1">KELUARGA PRA SEJAHTERA</option>
                                <option value="2">KELUARGA SEJAHTERA I</option>
                                <option value="3">KELUARGA SEJAHTERA II</option>
                                <option value="">KELUARGA SEJAHTERA III</option>
                                <option value="">KELUARGA SEJAHTERA III PLUS</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-close"></i>
                                Tutup</button>
                            <button href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i>
                                Simpan</button>
                        </div>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="cariKumpulanKK">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-light" style="color: rgb(86, 86, 86);">Pilihan Kumpulan KK</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card card-primary">
                        <div class="form-group col-md-12 mt-3">
                            <label for="" class="font-weight-bold">Kumpulan KK</label>
                            <textarea name="" id="" rows="5" class="form-control" style="height:100%;"
                                placeholder="Isi maks 20 KK, dengan pemisah koma (,). Contoh: 5201142005716996, 5201144609786995"></textarea>
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

@endsection


@push('scripts')
    <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/stisla/assets/js/page/components-table.js') }}"></script>
    <script src="{{ asset('/stisla/assets/js/page/bootstrap-modal.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#noKK_sementara').change(function() {
                var cek_noKK = '';
                var noKK_sementara_berikut = '0520304200900002';
                var noKK_asli = '';
                if ($('#noKK_sementara').prop('checked')) {
                    $('#noKK').removeClass('noKK');
                    if (cek_noKK != '0') $('#noKK').val(noKK_sementara_berikut);
                    $('#noKK').prop('readonly', true);
                    $('#tampil_noKK').show();
                } else {
                    $('#noKK').addClass('noKK');
                    $('#noKK').val(noKK_asli);
                    $('#noKK').prop('readonly', false);
                    $('#tampil_noKK').hide();
                }
            });

            $('#noKK_sementara').change();
        });
    </script>
@endpush

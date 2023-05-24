@extends('layouts.app')

@section('title', 'Detail Penduduk')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Detail Penduduk</div>
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
    background-color:#018f9c;
    margin: 15px 0px 10px 0px;
    text-align: left;
    color: white;
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
                    <div class="card-body">
                        <div class="buttons">
                            <a class="btn btn-sm btn-primary text-white" href="/penduduk/dokumen" type="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-book"></i> Manajemen Dokumen
                            </a>
                            <a href="/penduduk/form/1" class="btn btn-sm btn-icon icon-left btn-info"><i
                                    class="fas fa-edit"></i>
                                Ubah Biodata</a>
                            <a href="/penduduk/cetak_biodata" class="btn btn-sm btn-warning"
                                 aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-print"></i> Cetak Biodata
                            </a>
                            <div class="dropdown d-inline">
                                <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-arrow-left"></i> Kembali Ke Daftar Penduduk
                                </button>
                                <div class="dropdown-menu" style="width: 250px;">
                                    <a class="dropdown-item has-icon" href="#"><i class="fa fa-print"></i> Ekspor
                                        Penduduk</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover">
                                                <div class="mb-3">
                                                    <div class="ticket-title">
                                                        <h5 class="text-dark">Biodata Penduduk (NIK : 3306132204980002)</h5>
                                                      </div>
                                                      <div class="ticket-desc">
                                                        <div><small style=" color: #616468;">Terdaftar sebelum : &nbsp;<i class="fas fa-clock"></i> 28 Mei
                                                            2023 22:45:28</small></div>
                                                        <div><small style=" color: #616468;">Terdaftar diubah : &nbsp;<i
                                                            class="fas fa-clock"></i> 5 April 2023 22:45:28 &nbsp;<i
                                                            class="fas fa-user"></i> Khafid</small></div>
                                                      </div>
                                                </div>
                                                <tr>
                                                    <td colspan="3">
                                                        <div class="text-center">
                                                            <img class="penduduk"
                                                                src="http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                                                alt="Foto Penduduk">
                                                        </div>
                                                    </td>
                                                </tr>
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <td>Status Dasar</td>
                                                                <td>:</td>
                                                                <td><span class=""><strong>HIDUP</strong></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td width="300">Nama</td>
                                                                <td width="1">:</td>
                                                                <td>AHMAD ALLIF RIZKI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Kepemilikan Identitas</td>
                                                                <td>:</td>
                                                                <td>
                                                                    <table
                                                                        class="table table-bordered table-striped table-hover detail">
                                                                        <tr>
                                                                            <th>Wajib Identitas</th>
                                                                            <th>Identitas-EL</th>
                                                                            <th>Status Rekam</th>
                                                                            <th>Tag ID Card</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>WAJIB</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor Kartu Keluarga</td>
                                                                <td>:</td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor KK Sebelumnya</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Hubungan Dalam Keluarga</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelamin</td>
                                                                <td>:</td>
                                                                <td>LAKI-LAKI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Agama</td>
                                                                <td>:</td>
                                                                <td>ISLAM</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Penduduk</td>
                                                                <td>:</td>
                                                                <td>TETAP</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>DATA
                                                                        KELAHIRAN</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Akta Kelahiran</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tempat / Tanggal Lahir</td>
                                                                <td>:</td>
                                                                <td>MANGSIT / 07-06-1995</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tempat Dilahirkan</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Kelahiran</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Kelahiran Anak Ke</td>
                                                                <td>:</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Penolong Kelahiran</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Berat Lahir</td>
                                                                <td>:</td>
                                                                <td>0 Gram</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Panjang Lahir</td>
                                                                <td>:</td>
                                                                <td> cm</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>PENDIDIKAN
                                                                        DAN PEKERJAAN</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendidikan dalam KK</td>
                                                                <td>:</td>
                                                                <td>TIDAK / BELUM SEKOLAH</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pendidikan sedang ditempuh</td>
                                                                <td>:</td>
                                                                <td>TIDAK SEDANG SEKOLAH</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pekerjaan</td>
                                                                <td>:</td>
                                                                <td>BELUM/TIDAK BEKERJA</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>DATA
                                                                        KEWARGANEGARAAN</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Suku/Etnis</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Warga Negara</td>
                                                                <td>:</td>
                                                                <td>WNI</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor Paspor</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal Berakhir Paspor</td>
                                                                <td>:</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor KITAS/KITAP</td>
                                                                <td>:</td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>ORANG
                                                                        TUA</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>NIK Ayah</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Ayah</td>
                                                                <td>:</td>
                                                                <td>AHLUL</td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIK Ibu</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Ibu</td>
                                                                <td>:</td>
                                                                <td>RUSDAH</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head">
                                                                    <strong>ALAMAT</strong>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dusun</td>
                                                                <td>:</td>
                                                                <td>MANGSIT</td>
                                                            </tr>
                                                            <tr>
                                                                <td>RT/ RW</td>
                                                                <td>:</td>
                                                                <td>004 / -</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Sebelumnya</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor Telepon</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat Email</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Telegram</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cara Hubung Warga</td>
                                                                <td>:</td>
                                                                <td>Telegram</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>STATUS
                                                                        KAWIN</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Status Kawin</td>
                                                                <td>:</td>
                                                                <td>BELUM KAWIN</td>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>DATA
                                                                        KESEHATAN</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Golongan Darah</td>
                                                                <td>:</td>
                                                                <td>TIDAK TAHU</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cacat</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sakit Menahun</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama/Nomor Asuransi Kesehatan</td>
                                                                <td>:</td>
                                                                <td> / </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nomor BPJS Ketenagakerjaan</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>

                                                            <tr>
                                                                <th colspan="3" class="subtitle_head"><strong>DATA
                                                                        LAINNYA</strong></th>
                                                            </tr>
                                                            <tr>
                                                                <td>Bahasa</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Keterangan</td>
                                                                <td>:</td>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </table>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="3" class="subtitle_head"><strong>PROGRAM
                                                                    BANTUAN</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="table-responsive mt-3">
                                                                    <table
                                                                        class="table table-bordered dataTable table-striped table-hover tabel-daftar">
                                                                        <thead class="bg-gray disabled color-palette">
                                                                            <tr>
                                                                                <th class="padat">No</th>
                                                                                <th>Waktu&nbsp;/&nbsp;Tanggal</th>
                                                                                <th>Nama&nbsp;Program</th>
                                                                                <th>Keterangan</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-center">1</td>
                                                                                <td>13 Dec 2008 - 13 Dec 2010</td>
                                                                                <td><a
                                                                                        href="http://demosid.opendesa.id/index.php/program_bantuan/data_peserta/10">JAMKESMAS</a>
                                                                                </td>
                                                                                <td style="text-align: justify;">Jamkesmas ( akronim dari Jaminan
                                                                                    Kesehatan Masyarakat ) adalah sebuah
                                                                                    program jaminan kesehatan untuk warga
                                                                                    Indonesia yang memberikan perlindungan
                                                                                    sosial dibidang kesehatan untuk menjamin
                                                                                    masyarakat miskin dan tidak mampu yang
                                                                                    iurannya dibayar oleh pemerintah agar
                                                                                    kebutuhan dasar kesehatannya yang layak
                                                                                    dapat terpenuhi.Program ini dijalankan
                                                                                    oleh Departemen Kesehatan sejak 2008.
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="3" class="subtitle_head"><strong>DOKUMEN /
                                                                    KELENGKAPAN PENDUDUK</strong></th>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="table-responsive mt-3">
                                                                    <table
                                                                        class="table table-bordered dataTable table-striped table-hover tabel-daftar">
                                                                        <thead class="bg-gray disabled color-palette">
                                                                            <tr>
                                                                                <th>No</th>
                                                                                <th>Aksi</th>
                                                                                <th>Nama Dokumen</th>
                                                                                <th>Tanggal Upload</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="padat">1</td>
                                                                                <td class="aksi">
                                                                                    <a href="http://demosid.opendesa.id/index.php/penduduk/unduh_berkas/16"
                                                                                        class="btn btn-flat btn-sm"
                                                                                        title="Unduh Dokumen"><i
                                                                                            class="fa fa-download"></i></a>
                                                                                    <a href="http://demosid.opendesa.id/index.php/penduduk/unduh_berkas/16/1"
                                                                                        class="btn btn-flat btn-sm"
                                                                                        title="Lihat Dokumen"><i
                                                                                            class="fa fa-eye"></i></a>
                                                                                </td>
                                                                                <td></td>
                                                                                <td>04 Mei 2023 10:08:43</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
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
    @endsection


    @push('scripts')
        <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/stisla/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('/stisla/assets/js/page/components-table.js') }}"></script>
        <script src="{{ asset('/stisla/assets/js/page/bootstrap-modal.js') }}"></script>
    @endpush

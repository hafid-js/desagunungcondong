@extends('layouts.app')

@section('title', 'Detail Penduduk')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Daftar Penduduk</div>
    <div class="breadcrumb-item active">Dokumen / Kelengkapan Penduduk</div>
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
                            <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahDokumen"
                                type="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-plus"></i> Tambah Dokumen
                            </button>
                            <button href="#" data-toggle="modal" data-target="#hapusDokumen"
                                class="btn btn-sm btn-icon icon-left btn-danger"><i class="fas fa-trash"></i>
                                Hapus Data Terpilih</button>

                            <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-arrow-left"></i> Kembali Ke Halaman Biodata Penduduk
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
                                        <table class="table table-bordered table-striped table-hover">
                                            <tbody>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px; width:15%;">
                                                        Nama Penduduk</td>
                                                    <td nowrap> : AHMAD ALLIF RIZKI</td>
                                                </tr>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px;">NIK
                                                    </td>
                                                    <td nowrap> : 5201140706966997</td>
                                                </tr>
                                                <tr>
                                                    <td nowrap style="padding-top : 10px;padding-bottom : 10px;">Alamat
                                                    </td>
                                                    <td nowrap> : RT/RW : 004/- DUSUN : MANGSIT </td>
                                                </tr>
                                            </tbody>
                                        </table>

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
                                                    <th scope="col">NAMA DOKUMEN</th>
                                                    <th scope="col">JENIS DOKUMEN</th>
                                                    <th scope="col">TANGGAL UPLOAD</th>
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
                                                    <td style="width: 1%;
                                                    white-space: nowrap;
                                                    text-align: left;">
                                                        <div class="buttons" >
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon btn-sm btn-primary" data-toggle="modal" data-target="#ubahDokumen"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-danger"><i
                                                                    class="fas fa-trash"></i></a>
                                                            <a style="width: 40px;" href="#"
                                                                class="btn btn-icon  btn-sm btn-info"><i
                                                                    class="fas fa-download"></i></a>
                                                        </div>
                                                    </td>
                                                    <td>mydocument.pdf</td>
                                                    <td>Fotokopi KK</td>
                                                    <td><small>04 Mei 2023 10:08:43</small></td>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="hapusDokumen">
        <div class="modal-dialog ">
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
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i> Tutup</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i> Simpan</a>
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
                                <option >-- Pilih Jenis Dokumen --</option>
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
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-close"></i> Tutup</button>
                            <a type="button" href="/penduduk/cetak" class="btn btn-info"><i class="fas fa-check"></i> Simpan</a>
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

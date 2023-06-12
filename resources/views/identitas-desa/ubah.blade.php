@extends('layouts.app')

@section('title', 'Identitas Desa')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Ubah Data</div>
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

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-3">
                <div class="card">
                    <div class="col-12 mt-3">
                        <div class="hero-inner text-center">
                            <div class="country mb-3" data-name="Anguilla" data-continent="North America">
                                <img class="img-fluid" style="border-radius: 6px;"
                                    src="https://demo.getstisla.com/assets/modules/flag-icon-css/flags/4x3/ai.svg"
                                    alt="Anguilla Flag">
                            </div>
                            <h6>Lambang Desa</h6>
                            <code>(Kosongkan, jika logo tidak berubah)</code>
                                <input type="file" class="form-control mb-3">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="col-12 mt-3">
                        <div class="hero-inner text-center">
                            <div class="country mb-3" data-name="Anguilla" data-continent="North America">
                                <img class="img-fluid" style="border-radius: 6px;"
                                    src="https://kec-bruno.purworejokab.go.id/asset/foto_berita/WhatsApp-Image-2020-04-14-at-09_28_58.jpg"
                                    alt="Anguilla Flag">
                            </div>
                            <h6>Kantor Desa</h6>
                            <code>(Kosongkan, jika Kantor Desa tidak berubah)</code>
                                <input type="file" class="form-control mb-3">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <button style="border-radius: 3px;" class="btn btn-sm btn-info" type="button"
                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-left"></i> Kembali Ke Data Identitas Desa
                        </button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="namaDesa" class="col-sm-3 col-form-label">Nama Desa</label>
                                <div class="col-sm-9">
                                    <select name="" id="" class="form-control select2">
                                        <option value="">Gunung Condong</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodeDesa" class="col-sm-3 col-form-label">Kode Desa</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="kodeDesa" value="5319082016" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Kode Pos Desa</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="kodePosDesa" value="54261">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Kepala Desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodePosDesa" value="Sudiyono">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">NIP Kepala Desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodePosDesa"
                                        placeholder="NIP Kepala Desa" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Alamat Kantor Desa</label>
                                <div class="col-sm-9">
                                    <textarea name="" class="form-control" id="" cols="30" rows="10">Jl.Kemranggen Gn.Condong</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">E-Mail Desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodePosDesa" placeholder="E-Mail Desa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Telepon Desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodePosDesa"
                                        placeholder="Telepon Desa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Website Desa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodePosDesa"
                                        value="http://www.gunungcondong.com">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Nama Kecamatan</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control" id="kodePosDesa" value="Bruno">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Kode Kecamatan</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control" id="kodePosDesa" value="54261">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Nama Camat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kodePosDesa" value="-">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">NIP Camat</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="kodePosDesa" value="-">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Nama Kabupaten</label>
                                <div class="col-sm-5">
                                    <input type="text" readonly class="form-control" id="kodePosDesa" value="Purworejo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Kode Kabupaten</label>
                                <div class="col-sm-3">
                                    <input type="text" readonly class="form-control" id="kodePosDesa" value="54261">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Nama Provinsi</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control" id="kodePosDesa" value="Jawa Tengah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kodePosDesa" class="col-sm-3 col-form-label">Kode Provinsi</label>
                                <div class="col-sm-9">
                                    <input type="text" readonly class="form-control" id="kodePosDesa" value="53">
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
    </div>
@endsection


@push('scripts')
    <script src="https://demo.jadiorder.com/assets/vendor/summernote/summernote-bs4.js"></script>
    <script src="{{ asset('/stisla/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('/stisla/assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <script src="http://demosid.opendesa.id/assets/bootstrap/js/id.js?vf5906d544f9f5fec43558999e8b3b3f7"></script>
@endpush

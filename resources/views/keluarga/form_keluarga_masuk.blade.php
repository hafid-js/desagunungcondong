@extends('layouts.app')

@section('title', 'Biodata Anggota Keluarga')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Biodata Anggota Keluarga</div>
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
                    {{-- <div class="card-header">
                      <h4>My Picture</h4>
                      <div class="card-header-action">
                        <a href="#" class="btn btn-primary">View All</a>
                      </div>
                    </div> --}}
                    <div class="card-body">
                        <div class="chocolat-parent text-center">
                            <a href="{{ asset('/stisla/assets/img/example-image.jpg') }}" class="chocolat-image"
                                title="Just an example">
                                <div data-crop-image="285">
                                    <img alt="image" src="http://demosid.opendesa.id/assets/images/pengguna/kuser.png"
                                        class="img-fluid w-10">
                                </div>
                            </a>
                        </div>
                        <div class="form-group mt-3">
                            <label style="color: #616468">(Kosongkan jika tidak ingin mengubah foto)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile"></label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <button style="border-radius: 3px;" class="btn btn-sm btn-info mr-2" type="button"
                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-left"></i> Kembali Ke Daftar Keluarga
                        </button>
                        <button style="border-radius: 3px;" class="btn btn-sm btn-info" type="button"
                            id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-arrow-left"></i> Kembali Ke Daftar Anggota Keluarga
                        </button>
                    </div>

                    <div class="card-body">
                        <div class="section-title mt-0">Data Keluarga :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12 col-lg-4">
                                <label class="font-weight-bold">No. KK</label>
                                <input type="text" value="0520304200900005" class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-8 col-sm-12 col-lg-8">
                                <label class="font-weight-bold">Kepala KK</label>
                                <input type="text" value="MISLAN" class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-lg-12">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" value="Jl.Kayu Putih Tengah 1 Blok A No.2" class="form-control"
                                    readonly>
                            </div>
                        </div>
                        <div class="section-title mt-0">Data Anggota :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12 col-lg-4">
                                <label class="font-weight-bold">Tanggal Pindah Masuk</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <li class="fas fa-calendar"></li>
                                        </div>
                                    </div>
                                    <input type="text" id="tgl_masuk" class="form-control datepicker">
                                </div>
                            </div>
                            <div class="form-group col-md-4 col-sm-12 col-lg-4">
                                <label class="font-weight-bold">Tanggal Lapor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <li class="fas fa-calendar"></li>
                                        </div>
                                    </div>
                                    <input type="text" id="tgl_masuk" class="form-control datepicker">
                                </div>
                            </div>
                        </div>
                        <div class="section-title mt-0">Data Diri :</div>
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="nik">NIK <code id="tampil_nik"
                                        style="display: none;"> (Sementara) </code></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" title="Centang jika belum memiliki NIK"
                                                id="nik_sementara">
                                        </div>
                                    </div>
                                    <input id="nik" name="nik" class="form-control input-sm required nik"
                                        type="text" placeholder="Nomor NIK" value=""></input>
                                </div>
                            </div>

                            <div class="form-group col-md-8">
                                <label class="font-weight-bold" for="inputNama">Nama Lengkap <code>(Tanpa
                                        Gelar)</code></label>
                                <input type="text" class="form-control" id="inputNama" placeholder="Nama Lengkap">
                            </div>
                        </div>
                        <label style="font-weight: 600; color:black;">Status Kepemilikan Identitas</label>
                        <div class="table-responsive">
                            <table class="table table-bordered table-md table-hover">
                                <thead class="bg-gray">
                                    <tr>
                                        <th>Wajib&nbsp;Identitas</th>
                                        <th>Identitas&nbsp;Elektronik</th>
                                        <th>Status&nbsp;Rekam</th>
                                        <th>Tag&nbsp;ID&nbsp;Card</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-dark font-weight-bold">BELUM WAJIB</td>
                                        <td><select id="ktpEL" name="ktpEL" class="form-control">
                                                <option value="">Pilih Identitas-EL</option>
                                                <option value="">BELUM</option>
                                                <option value="2">KTP-EL</option>
                                                <option value="">KIA</option>
                                            </select></td>
                                        <td><select name="" id="" class="form-control">
                                                <option value="">Pilih Status Rekam</option>
                                                <option value="">BELUM REKAM</option>
                                                <option value="">SUDAH REKAM</option>
                                                <option value="">CARD PRINTED</option>
                                                <option value="">PRINT READY RECORD</option>
                                                <option value="">CARD SHIPPED</option>
                                                <option value="">SENT FOR CARD PRINTING</option>
                                                <option value="">CARD ISSUED</option>
                                                <option value="">BELUM WAJIB</option>

                                            </select></td>
                                        <td>
                                            <input type="text" name="" id="" class="form-control"
                                                placeholder="Tag Id Card">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-row ktpEL" style="display: none">
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="penerbitanKtp">Tempat Penerbitan KTP</label>
                                <input type="text" class="form-control" id="penerbitanKtp"
                                    placeholder="No. KK Sebelumnya">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="tanggalPenerbitan">Tanggal Penerbitan KTP</label>
                                <input type="text" class="form-control datepicker" id="tanggalPenerbitan">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="inputkk">Nomor KK Sebelumnya</label>
                                <input type="text" class="form-control" id="inputkk"
                                    placeholder="No. KK Sebelumnya">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="inputHubunganKeluarga">Hubungan Dalam
                                    Keluarga</label>
                                <select name="" id="" class="form-control select2">
                                    <option value="">Pilih Hubungan Keluarga</option>
                                    <option value="">KEPALA KELUARGA</option>
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
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="inputHubunganKeluarga">Jenis Kelamin</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option value="">Laki-Laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <select class="form-control">
                                    <option value="">Pilih Agama</option>
                                    <option value="">ISLAM</option>
                                    <option value="">KRISTEN</option>
                                    <option value="">KATHOLIK</option>
                                    <option value="">HINDU</option>
                                    <option value="">BUDHA</option>
                                    <option value="">KONGHUCHU</option>
                                    <option value="">KEPERCAYAAN KEPADA TUHAN YME / LAINNYA</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <select class="form-control" id="statusPenduduk">
                                    <option value="">Pilih Status Penduduk</option>
                                    <option value="">TETAP</option>
                                    <option value="2">TIDAK TETAP</option>
                                </select>
                            </div>
                        </div>

                        <div class="statusPenduduk" style="display: none">
                            <div class="section-title mt-3">DATA PENDUDUK TIDAK TETAP :</div>
                            <label for="" class="text-dark font-weight-600">Maksud dan Tujuan Kedatangan</label>
                            <textarea class="form-control col-sm-12 col-md-6 col-lg-4 h-50" placeholder="Maksud dan Tujuan Kedatangan"></textarea>

                        </div>
                        <div class="section-title mt-2">DATA KELAHIRAN :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Nomor Akta Kelahiran</label>
                                <input type="text" class="form-control" placeholder="Nomor Akta Kelahiran">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="" class="font-weight-bold">Tempat Lahir</label>
                                <input type="text" class="form-control" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Tanggal Lahir</label>
                                <input type="date" class="form-control datepicker" id="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Waktu Kelahiran</label>
                                <input type="time" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Tempat Dilahirkan</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Tempat Dilahirkan</option>
                                    <option value="">RS/RB</option>
                                    <option value="">PUSKESMAS</option>
                                    <option value="">POLINDES</option>
                                    <option value="">RUMAH</option>
                                    <option value="">LAINNYA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Jenis Kelahiran</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Jenis Kelahiran</option>
                                    <option value="">TUNGGAL</option>
                                    <option value="">KEMBAR 2</option>
                                    <option value="">KEMBAR 3</option>
                                    <option value="">KEMBAR 4</option>
                                    <option value="">LAINNYA</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Anak Ke <code>(Isi dengan
                                        angka)</code></label>
                                <input type="number" class="form-control" placeholder="Anak Ke-">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Penolong Kelahiran</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Penolong Kelahiran</option>
                                    <option value="">DOKTER</option>
                                    <option value="">BIDAN PERAWAT</option>
                                    <option value="">DUKUN</option>
                                    <option value="">LAINNYA</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Berat Lahir <code>( gram )</code></label>
                                <input type="text" class="form-control" placeholder="Berat Lahir">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Panjang Lahir <code>( cm )</code></label>
                                <input type="text" class="form-control" placeholder="Panjang Lahir">
                            </div>
                        </div>
                        <div class="section-title mt-0">PENDIDIKAN DAN PEKERJAAN :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Pendidikan (Dalam KK) </option>
                                    <option value="1">TIDAK / BELUM SEKOLAH</option>
                                    <option value="2">BELUM TAMAT SD/SEDERAJAT</option>
                                    <option value="3">TAMAT SD / SEDERAJAT</option>
                                    <option value="4">SLTP/SEDERAJAT</option>
                                    <option value="5">SLTA / SEDERAJAT</option>
                                    <option value="6">DIPLOMA I / II</option>
                                    <option value="7">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                    <option value="8">DIPLOMA IV/ STRATA I</option>
                                    <option value="9">STRATA II</option>
                                    <option value="10">STRATA III</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="1">BELUM MASUK TK/KELOMPOK BERMAIN</option>
                                    <option value="2">SEDANG TK/KELOMPOK BERMAIN</option>
                                    <option value="3">TIDAK PERNAH SEKOLAH</option>
                                    <option value="4">SEDANG SD/SEDERAJAT</option>
                                    <option value="5">TIDAK TAMAT SD/SEDERAJAT</option>
                                    <option value="6">SEDANG SLTP/SEDERAJAT</option>
                                    <option value="7">SEDANG SLTA/SEDERAJAT</option>
                                    <option value="8">SEDANG D-1/SEDERAJAT</option>
                                    <option value="9">SEDANG D-2/SEDERAJAT</option>
                                    <option value="10">SEDANG D-3/SEDERAJAT</option>
                                    <option value="11">SEDANG S-1/SEDERAJAT</option>
                                    <option value="12">SEDANG S-2/SEDERAJAT</option>
                                    <option value="13">SEDANG S-3/SEDERAJAT</option>
                                    <option value="14">SEDANG SLB A/SEDERAJAT</option>
                                    <option value="15">SEDANG SLB B/SEDERAJAT</option>
                                    <option value="16">SEDANG SLB C/SEDERAJAT</option>
                                    <option value="17">TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB</option>
                                    <option value="18">TIDAK SEDANG SEKOLAH</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Pekerjaan</option>
                                    <option value="1">BELUM/TIDAK BEKERJA</option>
                                    <option value="2">MENGURUS RUMAH TANGGA</option>
                                    <option value="3">PELAJAR/MAHASISWA</option>
                                    <option value="4">PENSIUNAN</option>
                                    <option value="5">PEGAWAI NEGERI SIPIL (PNS)</option>
                                    <option value="6">TENTARA NASIONAL INDONESIA (TNI)</option>
                                    <option value="7">KEPOLISIAN RI (POLRI)</option>
                                    <option value="8">PERDAGANGAN</option>
                                    <option value="9">PETANI/PEKEBUN</option>
                                    <option value="10">PETERNAK</option>
                                    <option value="11">NELAYAN/PERIKANAN</option>
                                    <option value="12">INDUSTRI</option>
                                    <option value="13">KONSTRUKSI</option>
                                    <option value="14">TRANSPORTASI</option>
                                    <option value="15">KARYAWAN SWASTA</option>
                                    <option value="16">KARYAWAN BUMN</option>
                                    <option value="17">KARYAWAN BUMD</option>
                                    <option value="18">KARYAWAN HONORER</option>
                                    <option value="19">BURUH HARIAN LEPAS</option>
                                    <option value="20">BURUH TANI/PERKEBUNAN</option>
                                    <option value="21">BURUH NELAYAN/PERIKANAN</option>
                                    <option value="22">BURUH PETERNAKAN</option>
                                    <option value="23">PEMBANTU RUMAH TANGGA</option>
                                    <option value="24">TUKANG CUKUR</option>
                                    <option value="25">TUKANG LISTRIK</option>
                                    <option value="26">TUKANG BATU</option>
                                    <option value="27">TUKANG KAYU</option>
                                    <option value="28">TUKANG SOL SEPATU</option>
                                    <option value="29">TUKANG LAS/PANDAI BESI</option>
                                    <option value="30">TUKANG JAHIT</option>
                                    <option value="31">TUKANG GIGI</option>
                                    <option value="32">PENATA RIAS</option>
                                    <option value="33">PENATA BUSANA</option>
                                    <option value="34">PENATA RAMBUT</option>
                                    <option value="35">MEKANIK</option>
                                    <option value="36">SENIMAN</option>
                                    <option value="37">TABIB</option>
                                    <option value="38">PARAJI</option>
                                    <option value="39">PERANCANG BUSANA</option>
                                    <option value="40">PENTERJEMAH</option>
                                    <option value="41">IMAM MASJID</option>
                                    <option value="42">PENDETA</option>
                                    <option value="43">PASTOR</option>
                                    <option value="44">WARTAWAN</option>
                                    <option value="45">USTADZ/MUBALIGH</option>
                                    <option value="46">JURU MASAK</option>
                                    <option value="47">PROMOTOR ACARA</option>
                                    <option value="48">ANGGOTA DPR-RI</option>
                                    <option value="49">ANGGOTA DPD</option>
                                    <option value="50">ANGGOTA BPK</option>
                                    <option value="51">PRESIDEN</option>
                                    <option value="52">WAKIL PRESIDEN</option>
                                    <option value="53">ANGGOTA MAHKAMAH KONSTITUSI</option>
                                    <option value="54">ANGGOTA KABINET KEMENTERIAN</option>
                                    <option value="55">DUTA BESAR</option>
                                    <option value="56">GUBERNUR</option>
                                    <option value="57">WAKIL GUBERNUR</option>
                                    <option value="58">BUPATI</option>
                                    <option value="59">WAKIL BUPATI</option>
                                    <option value="60">WALIKOTA</option>
                                    <option value="61">WAKIL WALIKOTA</option>
                                    <option value="62">ANGGOTA DPRD PROVINSI</option>
                                    <option value="63">ANGGOTA DPRD KABUPATEN/KOTA</option>
                                    <option value="64">DOSEN</option>
                                    <option value="65">GURU</option>
                                    <option value="66">PILOT</option>
                                    <option value="67">PENGACARA</option>
                                    <option value="68">NOTARIS</option>
                                    <option value="69">ARSITEK</option>
                                    <option value="70">AKUNTAN</option>
                                    <option value="71">KONSULTAN</option>
                                    <option value="72">DOKTER</option>
                                    <option value="73">BIDAN</option>
                                    <option value="74">PERAWAT</option>
                                    <option value="75">APOTEKER</option>
                                    <option value="76">PSIKIATER/PSIKOLOG</option>
                                    <option value="77">PENYIAR TELEVISI</option>
                                    <option value="78">PENYIAR RADIO</option>
                                    <option value="79">PELAUT</option>
                                    <option value="80">PENELITI</option>
                                    <option value="81">SOPIR</option>
                                    <option value="82">PIALANG</option>
                                    <option value="83">PARANORMAL</option>
                                    <option value="84">PEDAGANG</option>
                                    <option value="85">PERANGKAT DESA</option>
                                    <option value="86">KEPALA DESA</option>
                                    <option value="87">BIARAWATI</option>
                                    <option value="88">WIRASWASTA</option>
                                    <option value="89">LAINNYA</option>
                                </select>
                            </div>
                        </div>
                        <div class="section-title mt-0">DATA KEWARGANEGARAAN :</div>
                        <label for="" class="font-weight-bold">Suku/Etnis</label>
                        <div class="form-group">
                            <select name="" id="" class="form-control select2">
                                <option value="">-- Pilih Suku / Etnis --</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Alas">Alas</option>
                                <option value="Alor">Alor</option>
                                <option value="Ambon">Ambon</option>
                                <option value="Ampana">Ampana</option>
                                <option value="Anak Dalam">Anak Dalam</option>
                                <option value="Aneuk Jamee">Aneuk Jamee</option>
                                <option value="Angkola">Angkola</option>
                                <option value="Arab: Orang Hadhrami">Arab: Orang Hadhrami</option>
                                <option value="Aru">Aru</option>
                                <option value="Asmat">Asmat</option>
                                <option value="Baduy">Baduy</option>
                                <option value="Bajau">Bajau</option>
                                <option value="Balantak">Balantak</option>
                                <option value="Bali">Bali</option>
                                <option value="Banggai">Banggai</option>
                                <option value="Banjar">Banjar</option>
                                <option value="Banten">Banten</option>
                                <option value="Bare’e">Bare’e</option>
                                <option value="Batak">Batak</option>
                                <option value="Batak Karo">Batak Karo</option>
                                <option value="Batin">Batin</option>
                                <option value="Bawean">Bawean</option>
                                <option value="Bawean">Bawean</option>
                                <option value="Bentong">Bentong</option>
                                <option value="Berau">Berau</option>
                                <option value="Besemah">Besemah</option>
                                <option value="Betawi">Betawi</option>
                                <option value="Bima">Bima</option>
                                <option value="Bolang Mongondow">Bolang Mongondow</option>
                                <option value="Bonai">Bonai</option>
                                <option value="Boti">Boti</option>
                                <option value="Bugis">Bugis</option>
                                <option value="Bulungan ">Bulungan </option>
                                <option value="Bungku">Bungku</option>
                                <option value="Buol">Buol</option>
                                <option value="Buru">Buru</option>
                                <option value="Buton">Buton</option>
                                <option value="Cham ">Cham </option>
                                <option value="Cirebon ">Cirebon </option>
                                <option value="Dairi">Dairi</option>
                                <option value="Damal">Damal</option>
                                <option value="Dampeles">Dampeles</option>
                                <option value="Dani ">Dani </option>
                                <option value="Daya ">Daya </option>
                                <option value="Dayak">Dayak</option>
                                <option value="Dompu">Dompu</option>
                                <option value="Dondo ">Dondo </option>
                                <option value="Dongga">Dongga</option>
                                <option value="Donggo">Donggo</option>
                                <option value="Duri">Duri</option>
                                <option value="Eropa ">Eropa </option>
                                <option value="Flores">Flores</option>
                                <option value="Gayo">Gayo</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Gumai ">Gumai </option>
                                <option value="India">India</option>
                                <option value="Jambi ">Jambi </option>
                                <option value="Jawa">Jawa</option>
                                <option value="Jepang">Jepang</option>
                                <option value="Kaili ">Kaili </option>
                                <option value="Kampar">Kampar</option>
                                <option value="Kaur ">Kaur </option>
                                <option value="Kayu Agung">Kayu Agung</option>
                                <option value="Kei">Kei</option>
                                <option value="Kerinci">Kerinci</option>
                                <option value="Kluet ">Kluet </option>
                                <option value="Komering ">Komering </option>
                                <option value="Konjo Pegunungan">Konjo Pegunungan</option>
                                <option value="Konjo Pesisir">Konjo Pesisir</option>
                                <option value="Korea ">Korea </option>
                                <option value="Koto">Koto</option>
                                <option value="Krui">Krui</option>
                                <option value="Kubu">Kubu</option>
                                <option value="Kulawi">Kulawi</option>
                                <option value="Kutai ">Kutai </option>
                                <option value="Lamaholot">Lamaholot</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Laut,">Laut,</option>
                                <option value="Lematang ">Lematang </option>
                                <option value="Lembak">Lembak</option>
                                <option value="Lintang">Lintang</option>
                                <option value="Lom">Lom</option>
                                <option value="Lore">Lore</option>
                                <option value="Lubu">Lubu</option>
                                <option value="Madura">Madura</option>
                                <option value="Makassar">Makassar</option>
                                <option value="Mamasa">Mamasa</option>
                                <option value="Manda">Manda</option>
                                <option value="Mandailing">Mandailing</option>
                                <option value="Mekongga">Mekongga</option>
                                <option value="Melayu">Melayu</option>
                                <option value="Mentawai">Mentawai</option>
                                <option value="Minahasa">Minahasa</option>
                                <option value="Minangkabau">Minangkabau</option>
                                <option value="Mongondow">Mongondow</option>
                                <option value="Mori">Mori</option>
                                <option value="Moro">Moro</option>
                                <option value="Moronene">Moronene</option>
                                <option value="Muko-Muko">Muko-Muko</option>
                                <option value="Muna">Muna</option>
                                <option value="Muyu">Muyu</option>
                                <option value="Ngada ">Ngada </option>
                                <option value="Nias">Nias</option>
                                <option value="Ocu">Ocu</option>
                                <option value="Ogan">Ogan</option>
                                <option value="Osing">Osing</option>
                                <option value="Osing ">Osing </option>
                                <option value="Padoe">Padoe</option>
                                <option value="Pakistani">Pakistani</option>
                                <option value="Pakpak">Pakpak</option>
                                <option value="Palembang">Palembang</option>
                                <option value="Pamona">Pamona</option>
                                <option value="Papua">Papua</option>
                                <option value="Pasir">Pasir</option>
                                <option value="Pattae">Pattae</option>
                                <option value="Peranakan">Peranakan</option>
                                <option value="Pesisi">Pesisi</option>
                                <option value="Ponosakan">Ponosakan</option>
                                <option value="Pubian">Pubian</option>
                                <option value="Rawa">Rawa</option>
                                <option value="Rejang">Rejang</option>
                                <option value="Rohingya">Rohingya</option>
                                <option value="Rongga">Rongga</option>
                                <option value="Rote">Rote</option>
                                <option value="Sabu">Sabu</option>
                                <option value="Saluan">Saluan</option>
                                <option value="Sambas">Sambas</option>
                                <option value="Samin ">Samin </option>
                                <option value="Samin">Samin</option>
                                <option value="Sangi">Sangi</option>
                                <option value="Sasak">Sasak</option>
                                <option value="Sekak Bangka">Sekak Bangka</option>
                                <option value="Sekayu">Sekayu</option>
                                <option value="Semendo ">Semendo </option>
                                <option value="Serawai ">Serawai </option>
                                <option value="Sigulai ">Sigulai </option>
                                <option value="Simalungun">Simalungun</option>
                                <option value="Simeulue">Simeulue</option>
                                <option value="Suluk">Suluk</option>
                                <option value="Sumba">Sumba</option>
                                <option value="Sumbawa ">Sumbawa </option>
                                <option value="Sunda">Sunda</option>
                                <option value="Sungkai ">Sungkai </option>
                                <option value="Talang Mamak">Talang Mamak</option>
                                <option value="Talau">Talau</option>
                                <option value="Tamiang ">Tamiang </option>
                                <option value="Tengger ">Tengger </option>
                                <option value="Tengger">Tengger</option>
                                <option value="Ternate ">Ternate </option>
                                <option value="Tidore">Tidore</option>
                                <option value="Tidung">Tidung</option>
                                <option value="Timor">Timor</option>
                                <option value="Tionghoa">Tionghoa</option>
                                <option value="Toba">Toba</option>
                                <option value="Tojo">Tojo</option>
                                <option value="Tolaki">Tolaki</option>
                                <option value="Toli Toli">Toli Toli</option>
                                <option value="Tomini">Tomini</option>
                                <option value="Toraja">Toraja</option>
                                <option value="Ulu">Ulu</option>
                                <option value="Una-una ">Una-una </option>
                                <option value="Wolio">Wolio</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Status Warga Negara</label>
                                <select name="" id="statusKewarganegaraan" class="form-control">
                                    <option value="">Pilih Kewarganegaraan</option>
                                    <option value="">WNI</option>
                                    <option value="2">WNA</option>
                                    <option value="3">DUA KEWARGANEGARAAN</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="" class="font-weight-bold">Nomor Paspor</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Nomor Paspor">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Tgl Berakhir Paspor</label>
                                <input type="date" class="form-control datepicker" name="" id="">
                            </div>
                            <div class="form-group col-md-8 statusKewarganegaraan" style="display: none;">
                                <label for="" class="font-weight-bold">Nomor KITAS / KITAP</label>
                                <input type="text" class="form-control" placeholder="Nomor KITAS / KITAP">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 statusKewarganegaraan" style="display: none;">
                                <label for="" class="font-weight-bold">Negara Asal</label>
                                <input type="text" placeholder="Negara Asal" class="form-control" name=""
                                    id="">
                            </div>
                        </div>
                        <div class="section-title mt-0">DATA ORANG TUA :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">NIK Ayah</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Nomor NIK Ayah">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="" class="font-weight-bold">Nama Ayah</label>
                                <input type="text" class="form-control" placeholder="Nama Ayah">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">NIK Ibu</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Nomor NIK Ibu">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="" class="font-weight-bold">Nama Ibu</label>
                                <input type="text" class="form-control" placeholder="Nama Ibu">
                            </div>
                        </div>
                        <div class="section-title mt-0">ALAMAT :</div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="" class="font-text-bold">Dusun</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Dusun</option>
                                    <option value="Kongo">Kongo</option>
                                    <option value="kocp">Kocp</option>
                                    <option value="Kedungwatu">Kedungwatu</option>
                                    <option value="Majasem">Majasem</option>
                                    <option value="KERANDANGAN">Kerandangan</option>
                                    <option value="LOCO">Loco</option>
                                    <option value="Mantap">Mantap</option>
                                    <option value="MANGSIT">Mangsit</option>
                                    <option value="SENGGIGI">Senggigi</option>
                                    <option value="test">Test</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="" class="font-weight-bold">RW</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih RW</option>
                                    <option value="">-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="" class="font-weight-bold">RT</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih RT</option>
                                    <option value="">-</option>
                                    <option value="7">7</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="" class="font-weight-bold">Alamat Sebelumnya</label>
                                <input type="text" class="form-control" placeholder="Alamat Sebelumnya">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="" class="font-weight-bold">Alamat Sekarang</label>
                                <input type="text" class="form-control" placeholder="Alamat Sekarang">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Nomor Telepon</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Nomor Telepon">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Email</label>
                                <input type="email" name="" id="" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Akun Telegram</label>
                                <input type="text" name="" id="" class="form-control"
                                    placeholder="Akun Telegram">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Cara Hubung Warga</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Cara Hubungi</option>
                                    <option value="">Email</option>
                                    <option value="">Telegram</option>
                                </select>
                            </div>
                        </div>
                        <div class="section-title mt-0">STATUS PERKAWINAN :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Status Perkawinan</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Status Perkawinan</option>
                                    <option value="1">BELUM KAWIN</option>
                                    <option value="2">KAWIN</option>
                                    <option value="3">CERAI HIDUP</option>
                                    <option value="4">CERAI MATI</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">No.&nbsp;Akta&nbsp;Nikah
                                    (Buku&nbsp;Nikah)/Perkawinan</label>
                                <input type="text" class="form-control" placeholder="Nomor Akta Perkawinan">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Tanggal Perkawinan</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="" class="font-weight-bold">Akta Perceraian</label>
                                <input type="text" class="form-control" placeholder="Akta Perceraian">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Tanggal Perceraian <code>(Wajib diisi
                                        apabila status CERAI)</code></label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="section-title mt-0">DATA KESEHATAN :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Golongan Darah</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Golongan Darah</option>
                                    <option value="1">A</option>
                                    <option value="2">B</option>
                                    <option value="3">AB</option>
                                    <option value="4">O</option>
                                    <option value="5">A+</option>
                                    <option value="6">A-</option>
                                    <option value="7">B+</option>
                                    <option value="8">B-</option>
                                    <option value="9">AB+</option>
                                    <option value="10">AB-</option>
                                    <option value="11">O+</option>
                                    <option value="12">O-</option>
                                    <option value="13">TIDAK TAHU</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Cacat</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Jenis Cacat</option>
                                    <option value="1">CACAT FISIK</option>
                                    <option value="2">CACAT NETRA/BUTA</option>
                                    <option value="3">CACAT RUNGU/WICARA</option>
                                    <option value="4">CACAT MENTAL/JIWA</option>
                                    <option value="5">CACAT FISIK DAN MENTAL</option>
                                    <option value="6">CACAT LAINNYA</option>
                                    <option value="7">TIDAK CACAT</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Sakit Menahun</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Sakit Menahun</option>
                                    <option value="1">JANTUNG</option>
                                    <option value="2">LEVER</option>
                                    <option value="3">PARU-PARU</option>
                                    <option value="4">KANKER</option>
                                    <option value="5">STROKE</option>
                                    <option value="6">DIABETES MELITUS</option>
                                    <option value="7">GINJAL</option>
                                    <option value="8">MALARIA</option>
                                    <option value="9">LEPRA/KUSTA</option>
                                    <option value="10">HIV/AIDS</option>
                                    <option value="11">GILA/STRESS</option>
                                    <option value="12">TBC</option>
                                    <option value="13">ASTHMA</option>
                                    <option value="14">TIDAK ADA/TIDAK SAKIT</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Akseptor KB</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Cara KB Saat Ini</option>
                                    <option value="1">PIL</option>
                                    <option value="2">IUD</option>
                                    <option value="3">SUNTIK</option>
                                    <option value="4">KONDOM</option>
                                    <option value="5">SUSUK KB</option>
                                    <option value="6">STERILISASI WANITA</option>
                                    <option value="7">STERILISASI PRIA</option>
                                    <option value="99">LAINNYA</option>
                                    <option value="100">TIDAK MENGGUNAKAN</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Asuransi Kesehatan</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Pilih Asuransi</option>
                                    <option value="1">TIDAK/BELUM PUNYA</option>
                                    <option value="2">BPJS PENERIMA BANTUAN IURAN</option>
                                    <option value="3">BPJS NON PENERIMA BANTUAN IURAN</option>
                                    <option value="99">ASURANSI LAINNYA</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for=""
                                    class="font-weight-bold">Nomor&nbsp;BPJS&nbsp;Ketenagakerjaan</label>
                                <input type="text" class="form-control" placeholder="Nomor BPJS Ketenagakerjaan">
                            </div>
                        </div>
                        <div class="section-title mt-0">LAINNYA :</div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="" class="font-weight-bold">Dapat Membaca Huruf</label>
                                <select name="" id="" class="form-control">
                                    <option value="0">Pilih Isian</option>
                                    <option value="1">LATIN</option>
                                    <option value="2">DAERAH</option>
                                    <option value="3">ARAB</option>
                                    <option value="4">ARAB DAN LATIN</option>
                                    <option value="5">ARAB DAN DAERAH</option>
                                    <option value="6">ARAB, LATIN DAN DAERAH</option>
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="" class="font-weight-bold">Keterangan</label>
                                <textarea name="" id="" class="form-control h-100" placeholder="Keterangan"></textarea>
                            </div>
                        </div>

                    </div>
                    <hr class="mb-0">
                    <div class="card-footer text-right justify-content-space-between">

                        <button class="btn btn-danger float-left" type="close"><i class="fa fa-close"></i>
                            Batal</button>
                        <button class="btn btn-primary float-lg-right" type="submit"><i class="fa fa-check"></i>
                            Submit</button>
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
            $("#ktpEL").change(function() {
                if ($(this).val() == "2") {
                    $(".ktpEL").show();
                    $("#akses").attr("required", true);
                } else {
                    $(".ktpEL").hide();
                    $("#akses").attr("required", false);
                }
            });
            $("#statusPenduduk").change(function() {
                if ($(this).val() == "2") {
                    $(".statusPenduduk").show();
                    $("#akses").attr("required", true);
                } else {
                    $(".statusPenduduk").hide();
                    $("#akses").attr("required", false);
                }
            });
            $("#statusKewarganegaraan").change(function() {
                if ($(this).val() == "2" || $(this).val() == "3") {
                    $(".statusKewarganegaraan").show();
                    $("#akses").attr("required", true);
                } else {
                    $(".statusKewarganegaraan").hide();
                    $("#akses").attr("required", false);
                }
            });

            loadResult();
        });

        $(document).ready(function() {

            $('#nik_sementara').change(function() {
                var cek_nik = '';
                var nik_sementara_berikut = '0520304200900002';
                var nik_asli = '';
                if ($('#nik_sementara').prop('checked')) {
                    $('#nik').removeClass('nik');
                    if (cek_nik != '0') $('#nik').val(nik_sementara_berikut);
                    $('#nik').prop('readonly', true);
                    $('#tampil_nik').show();
                } else {
                    $('#nik').addClass('nik');
                    $('#nik').val(nik_asli);
                    $('#nik').prop('readonly', false);
                    $('#tampil_nik').hide();
                }
            });

            $('#nik_sementara').change();
        });
    </script>
@endpush

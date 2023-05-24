@extends('layouts.app')

@section('title', 'Salinan Kartu Keluarga')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Daftar Keluarga</div>
    <div class="breadcrumb-item">Daftar Anggota Keluarga</div>
    <div class="breadcrumb-item active">Kartu Keluarga</div>
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
        .font{
            font-family: 'Source Sans Pro',sans-serif; color: #333 ;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('/stisla/assets/modules/select2/dist/css/select2.min.css') }}">
@endpush

@section('content')

<div class="row">
    <div class="col-12 col-md-12 col-lg-12 col-sm-12">
      <div class="card">
        <div class="card-body">
            <div class="box-header">
                <h4 class="text-center font"><strong>SALINAN KARTU KELUARGA</strong></h4>
                <h6 class="text-center font"><strong>No.  5201140106167003 </strong></h6>
            </div>

         <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="font" scope="col">No</th>
                    <th class="font" scope="col">Nama&nbsp;Lengkap</th>
                    <th class="font" scope="col">NIK</th>
                    <th class="font" scope="col">Jenis&nbsp;Kelamin</th>
                    <th class="font" scope="col">Tempat&nbsp;Lahir</th>
                    <th class="font" scope="col">Tanggal&nbsp;Lahir</th>
                    <th class="font" scope="col">Agama</th>
                    <th class="font" scope="col">Pendidikan</th>
                    <th class="font" scope="col">Jenis&nbsp;Pekerjaan</th>
                    <th class="font" scope="col">Golongan&nbsp;Darah</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>KHAFID</td>
                    <td>0</td>
                    <td>LAKI-LAKI</td>
                    <td>BANTUL</td>
                    <td>22-04-1998</td>
                    <td>ISLAM</td>
                    <td>SARJANA S1</td>
                    <td>PEGAWAI SWASTA</td>
                    <td>A+</td>
                  </tr>
                </tbody>
              </table>
         </div>
         <div class="table-responsive mt-4">
            <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="font" scope="col">No</th>
                    <th class="font" scope="col">Status&nbsp;Perkawinan</th>
                    <th class="font" scope="col">Tanggal&nbsp;Perkawinan</th>
                    <th class="font" scope="col">Status&nbsp;Hubungan&nbsp;Dalam&nbsp;Keluarga</th>
                    <th class="font" scope="col">Kewarganegaraan</th>
                    <th class="font" scope="col">No.&nbsp;Paspor</th>
                    <th class="font" scope="col">No.&nbsp;KITAS&nbsp;/&nbsp;KITAP</th>
                    <th class="font" scope="col">Nama&nbsp;AYAH</th>
                    <th class="font" scope="col">Nama&nbsp;Ibu</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>BELUM KAWIN</td>
                    <td>-</td>
                    <td>KEPALA KELUARGA</td>
                    <td>WNI</td>
                    <td>-</td>
                    <td>-</td>
                    <td>MISLAN</td>
                    <td>SARTINI</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>BELUM KAWIN</td>
                    <td>-</td>
                    <td>KEPALA KELUARGA</td>
                    <td>WNI</td>
                    <td>-</td>
                    <td>-</td>
                    <td>MISLAN</td>
                    <td>SARTINI</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>BELUM KAWIN</td>
                    <td>-</td>
                    <td>KEPALA KELUARGA</td>
                    <td>WNI</td>
                    <td>-</td>
                    <td>-</td>
                    <td>MISLAN</td>
                    <td>SARTINI</td>
                  </tr>
                </tbody>
              </table>

         </div>
         <div class="table-responsive">
            <table class="table no-border">
              <tbody>
                <tr>
                  <td width="25%">&nbsp;</td>
                  <td width="50%">&nbsp;</td>
                  <td class="text-center" width="25%">Gelora, 21 Mei 2023</td>
                </tr>
                <tr>
                  <td class="text-center">KEPALA KELUARGA</td>
                  <td>&nbsp;</td>
                  <td class="text-center">KEPALA DESA GELORA</td>
                </tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr>
                <tr>
                  <td class="text-center">TAMA</td>
                  <td width="50%">&nbsp;</td>
                  <td class="text-center">MUHAMMAD ILHAM </td>
                </tr>
              </tbody>
            </table>
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


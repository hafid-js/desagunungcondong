{{-- @extends('layouts.app')

@section('title', 'Laporan Bulanan')

@section('breadcrumb')
    @parent
    <div class="breadcrumb-item">Laporan Bulanan</div>
@endsection

@push('css')
@endpush

@section('content')


    <div class="card">
        <div class="card-body">
            <div class="buttons">
                <div class="dropdown d-inline">
                    <button class="btn btn-sm btn-primary" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-print"></i> Cetak
                    </button>
                    <button class="btn btn-sm btn-dark" type="button" id="dropdownMenuButton2" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-download"></i> Unduh
                    </button> <button class="btn btn-sm btn-warning" type="button" id="dropdownMenuButton2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bar-chart"></i> Grafik Data
                    </button>
                    </button> <button class="btn btn-sm btn-info" type="button" id="dropdownMenuButton2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-pie-chart"></i> Pie Chart
                    </button>

                </div>
            </div>
        </div>
        <h5 class="text-center" style="color:black;">PEMERINTAH KABUPATEN/KOTA CIANJUR</h5>
        <h6 class="text-center" style="color:black;">LAPORAN PERKEMBANGAN PENDUDUK (LAMPIRAN A - 9)</h6>
        <div class="card">
            <div class="box-body">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Desa/Kelurahan</label>
                        <div class="col-sm-9 col-md-5 col-lg-3">
                            <input type="text" value="Gunung Condong" class="form-control" id="inputEmail3" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label font-weight-bold">Kecamatan</label>
                        <div class="col-sm-9 col-md-5 col-lg-3">
                            <input type="text" value="Bruno" class="form-control" id="inputEmail3" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label font-weight-bold">Kecamatan</label>
                        <div class="col-sm-9 col-md-5 col-lg-3">
                            <input type="text" value="Bruno" class="form-control" id="inputEmail3" readonly>
                        </div>
                    </div>

                </div>
                <div class="table-responsive">
                    <div class="card-body">
                      <div class="table-responsive">
	<table id="tfhover" class="table table-bordered table-hover tftable lap-bulanan">
		<thead class="bg-secondary">
			<tr>
				<th rowspan="3" width='2%' class="text-center">No</th>
				<th rowspan="3" colspan="2" width='30%' class="text-center">Perincian</th>
				<th colspan="7" width='45%' class="text-center">Penduduk</th>
				<th colspan="3" rowspan="2" width='23%'class="text-center">Keluarga (KK)</th>
			</tr>
			<tr>
				<th colspan="2" class="text-center">WNI</th>
				<th colspan="2" class="text-center">WNA</th>
				<th colspan="3" class="text-center">Jumlah</th>
			</tr>
			<tr>
				<th class="text-center">L</th>
				<th class="text-center">P</th>
				<th class="text-center">L</th>
				<th class="text-center">P</th>
				<th class="text-center">L</th>
				<th class="text-center">P</th>
				<th class="text-center">L+P</th>
				<th class="text-center">L</th>
				<th class="text-center">P</th>
				<th class="text-center">L+P</th>
			</tr>
			<tr>
				<th class="text-center italic">1</th>
				<th class="text-center italic" colspan="2">2</th>
				<th class="text-center italic">3</th>
				<th class="text-center italic">4</th>
				<th class="text-center italic">5</th>
				<th class="text-center italic">6</th>
				<th class="text-center italic">7</th>
				<th class="text-center italic">8</th>
				<th class="text-center italic">9</th>
				<th class="text-center italic">10</th>
				<th class="text-center italic">11</th>
				<th class="text-center italic">12</th>
			</tr
		</thead>
		<tbody>
			<tr>
				<td class="no_urut">1</td>
				<td colspan="2">Penduduk/Keluarga awal bulan ini</td>
				<!-- Butuh informasi mengenai hal ini
				<td class="bilangan">46</td>
				<td class="bilangan">51</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">46</td>
				<td class="bilangan">51</td>
				<td class="bilangan">97</td>
				<td class="bilangan">27</td>
				<td class="bilangan">10</td>
				<td class="bilangan">37</td>-->
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/wni_l">46</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/wni_p">51</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/jml_l">46</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/jml_p">51</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/jml">97</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/kk_l">27</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/kk_p">10</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/awal/kk">37</a></td>
			</tr>
			<tr>
				<td class="no_urut">2</td>
				<td colspan="2">Kelahiran/Keluarga baru bulan ini</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
			</tr>
			<tr>
				<td class="no_urut">3</td>
				<td colspan="2">Kematian bulan ini</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/mati/wni_l">2</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/mati/jml_l">2</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/mati/jml">2</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/mati/kk_l">1</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/mati/kk">1</a></td>
			</tr>
			<tr>
				<td class="no_urut">4</td>
				<td colspan="2">Pendatang bulan ini</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/datang/wni_l">1</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/datang/jml_l">1</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/datang/jml">1</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
			</tr>
			<tr>
				<td class="no_urut">5</td>
				<td colspan="2">Pindah/Keluarga pergi bulan ini</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
			</tr>
			<tr>
				<td class="no_urut">6</td>
				<td colspan="2">Penduduk hilang bulan ini</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
			</tr>
			<tr>
				<td class="no_urut">7</td>
				<td colspan="2">Penduduk/Keluarga akhir bulan ini</td>
				<!-- Butuh informasi mengenai hal ini
				<td class="bilangan">45</td>
				<td class="bilangan">51</td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan">45</td>
				<td class="bilangan">51</td>
				<td class="bilangan">96</td>
				<td class="bilangan">26</td>
				<td class="bilangan">10</td>
				<td class="bilangan">36</td> -->
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/wni_l">45</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/wni_p">51</a></td>
				<td class="bilangan">-</td>
				<td class="bilangan">-</td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/jml_l">45</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/jml_p">51</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/jml">96</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/kk_l">26</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/kk_p">10</a></td>
				<td class="bilangan"><a href="https://demosid.opendesa.id/laporan/detail_penduduk/akhir/kk">36</a></td>
			</tr>
		</tbody>
	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@push('scripts')
@endpush --}}





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Sistem Informasi Desa Cisaranten - Statistik    </title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" href="https://demosid.opendesa.id/desa/logo/favicon.ico?v111351906c3b29e9d8b6a49991a7d8a6" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="https://demosid.opendesa.id/rss.xml" />

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/bootstrap.min.css?va33762e68af7d0da404f0c4ae54d3d94">
    <!-- Jquery UI -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/jquery-ui.min.css?v0b5729a931d113be34b6fac13bcf5b29">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/font-awesome.min.css?v269550530cc127b6aa5a35925a7de6ce">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/ionicons.min.css?v0d6763b67616cb9183f3931313d42971">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/dataTables.bootstrap.min.css?ved6e46bed80ba860a5585b6916b2bba3">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/bootstrap3-wysihtml5.min.css?v3878a5b007b6b71a7336f7a180b12bc6">
    <!-- Select2 -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/select2.min.css?v5f97e57cddd2710fa8a257ff34bba7a6">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/bootstrap-colorpicker.min.css?v0680879d9be8b73e90cf1ed3de2724e1">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/bootstrap-datepicker.min.css?ve3aa3b513c03a91adf5474be7dc7734d">
    <!-- boostrap datetimepicker -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/bootstrap/css/bootstrap-datetimepicker.min.css?v9427316facf12bcdb57ba9d091e775fd">
    <!-- Theme style -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/AdminLTE.min.css?vafd4168d48a9477b2b26a526460c6aad">
    <!-- AdminLTE Skins. -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/skins/_all-skins.min.css?v4e7f7de25ef272107d5a99f18a885876">
    <!-- Style Admin Modification Css -->
    <!-- Token Field -->
        <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/admin-style.css?vda4effd77718d2a92f3ffa0686fe0a47">
    <!-- OpenStreetMap Css -->
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/leaflet.css?v32b246a85101e359b47436ae91d78483">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/leaflet-geoman.css?v10bd1b98511a45c19d851a67c821398a">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/L.Control.Locate.min.css?v751f0c2162a282543275d9b8b74a0c12">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/MarkerCluster.css?v7bc4f5bc3ef97f61a122253681687894">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/MarkerCluster.Default.css?v0ba3d71ad0980967a4d3c7dc2ad819ef">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/leaflet-measure-path.css?v68b8fe37b32ddcd4d5d415006fdee343">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/mapbox-gl.css?vabd77169b68f1b61bc7aa0ef6a9c7a1e">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/L.Control.Shapefile.css?va461c1eefb817ef7fda400bd7b6b59bd">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/leaflet.groupedlayercontrol.min.css?v23f372a3d5678f71df43ce16557d8ba2">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/peta.css?ve40ede84dd9734a3f854ec2e876bc3d8">
    <link rel="stylesheet" href="https://demosid.opendesa.id/assets/css/toastr.min.css?vbc96861d9899e4e68fb2e59c363d8c60">

    <style>
        @media (max-width: 576px) {
            .komunikasi-opendk {
                display: none !important;
            }
        }
    </style>

    <!-- Untuk ubahan style desa -->
        <!-- Diperlukan untuk script jquery khusus halaman -->
    <script src="https://demosid.opendesa.id/assets/bootstrap/js/jquery.min.js?vc9f5aeeca3ad37bf2aa006139b935f0a"></script>

    <!-- OpenStreetMap Js-->
    <script src="https://demosid.opendesa.id/assets/js/leaflet.js?v08cb8781a018744f012bf3c207be9033"></script>
    <script src="https://demosid.opendesa.id/assets/js/turf.min.js?v7694b860bc69f6dd2898d3d64523b94d"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet-geoman.min.js?v1595f3326574b9ae57d0b36227a96df1"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.filelayer.js?vf34524acb4104a7372af800f402a6bcf"></script>
    <script src="https://demosid.opendesa.id/assets/js/togeojson.js?vc81b5e7f9d8163c09fc58adb294a9380"></script>
    <script src="https://demosid.opendesa.id/assets/js/togpx.js?v549cf9914499c5bff50e23491bba0a28"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet-providers.js?v39ac3b734a02a90d68faa9e54d250e49"></script>
    <script src="https://demosid.opendesa.id/assets/js/L.Control.Locate.min.js?vdc48e86928c3db5d6ca57aa8b4b69a01"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.markercluster.js?vee8d78836d0d718b2b6d39ef60e03181"></script>
    <script src="https://demosid.opendesa.id/assets/js/peta.js?v7d5aefd96a8a4c1c8736f169fa099cbf"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet-measure-path.js?v5cf6765207bd0b939699128435719e91"></script>
    <script src="https://demosid.opendesa.id/assets/js/apbdes_manual.js?ve720973a8deaa131f13245f4df50bc1b"></script>
    <script src="https://demosid.opendesa.id/assets/js/mapbox-gl.js?vc788fca67ea728be90f67bd7ade94141"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet-mapbox-gl.js?v2c8932ebc0149b195f899b535db9b0cb"></script>
    <script src="https://demosid.opendesa.id/assets/js/shp.js?v52c4e70dd160cf37974cea444e591fb7"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.shpfile.js?v92dc6a781dcdf45ec0cfbf5303ba3ff8"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.groupedlayercontrol.min.js?v012f7bbb00f0932cd687e252c75bd374"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.browser.print.js?vc048112383df11e1ff1abf1d96926685"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.browser.print.utils.js?vcd6c00a46d51c39da30d97d1b0999032"></script>
    <script src="https://demosid.opendesa.id/assets/js/leaflet.browser.print.sizes.js?v70c3b76e1e49d3d00cf3acee0b69b286"></script>
    <script src="https://demosid.opendesa.id/assets/js/dom-to-image.min.js?v8d5f56399c6a637773f05780906dc1f8"></script>
    <script src="https://demosid.opendesa.id/assets/js/toastr.min.js?vb36f28de584845317de40a7219c82b1c"></script>

    <!-- Diperlukan untuk global automatic base_url oleh external js file -->
    <script type="text/javascript">
        var BASE_URL = "https://demosid.opendesa.id/";
        var SITE_URL = "https://demosid.opendesa.id/";
        var MAPBOX_KEY = '';
        var JENIS_PETA = '5';
        var TAMPIL_LUAS = "0";
    </script>

    <!-- Highcharts JS -->
    <script src="https://demosid.opendesa.id/assets/js/highcharts/highcharts.js?veacc1073f611f20f00a4b5721288782a"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/highcharts-3d.js?v0c7e9d126406bbc3b1d64a0320712c73"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/exporting.js?va4e5fb14e15a7cfaa1147b05bd8384b6"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/highcharts-more.js?vdce736a9b0cf090859ffcc2afee1b6fe"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/sankey.js?v5a8fdb24a6b6659a8b17a96e11926363"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/organization.js?v2c49225a2bde8ab39f994191a11ed210"></script>
    <script src="https://demosid.opendesa.id/assets/js/highcharts/accessibility.js?vd90cba6c71505ad406c43678c3a77f7f"></script>

    	<script type="text/javascript">
		var csrfParam = 'sidcsrf';
		var getCsrfToken = () => document.cookie.match(new RegExp(csrfParam +'=(\\w+)'))[1]
	</script>
	<script src="https://demosid.opendesa.id/assets/js/anti-csrf.js?v40fdecf5f3d7feb30f54550ffc9220e6"></script>
</head>

<body id="sidebar_collapse" class="skin-purple-light sidebar-mini fixed">
    <div class="wrapper">
        <header class="main-header">
            <a href="https://demosid.opendesa.id/" target="_blank" class="logo">
                <span class="logo-mini"><b>SID</b></span>
                <span class="logo-lg"><b>OpenSID</b></span>
            </a>
            <nav class="navbar navbar-static-top">
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                                                                                                                                                    <li class="komunikasi-opendk">
                                                <a href="https://demosid.opendesa.id/opendk_pesan/clear">
                                                    <i class="fa fa-university fa-lg" title="Komunikasi OpenDK"></i>&nbsp;
                                                                                                                                                        </a>
                                            </li>
                                                                                                                            <li>
                                                <a href="https://demosid.opendesa.id/permohonan_surat_admin">
                                                    <i class="fa fa-print fa-lg" title="Cetak Surat"></i>&nbsp;
                                                                                                                                                        </a>
                                            </li>
                                                                                                                            <li>
                                                <a href="https://demosid.opendesa.id/komentar">
                                                    <i class="fa fa-commenting-o fa-lg" title="Komentar"></i>&nbsp;
                                                                                                                                                        </a>
                                            </li>
                                                                                                                            <li>
                                                <a href="https://demosid.opendesa.id/mailbox">
                                                    <i class="fa fa-envelope-o fa-lg" title="Pesan Masuk"></i>&nbsp;
                                                                                                                                                        </a>
                                            </li>
                                                                                                                            <li>
                                                <a href="https://demosid.opendesa.id/keluar/clear/masuk">
                                                    <i class="fa fa-bell-o fa-lg" title="Permohonan Surat"></i>&nbsp;
                                                                                                            <span class="badge" id="b_inbox">2</span>
                                                                                                                                                        </a>
                                            </li>

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="https://demosid.opendesa.id/assets/images/pengguna/kuser.png" class="user-image" alt="user-image" />
                                <span class="hidden-xs">Administrator</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="https://demosid.opendesa.id/assets/images/pengguna/kuser.png" class="img-circle" alt="user-image" />
                                    <p>
                                        <small>Anda Masuk Sebagai</small>
                                        Administrator                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="https://demosid.opendesa.id/user_setting" data-remote="false" data-toggle="modal" data-title="Pengaturan Pengguna" data-target="#modalBox" class="btn bg-maroon btn-flat btn-sm">Profil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="https://demosid.opendesa.id/siteman/logout" class="btn bg-maroon btn-flat btn-sm">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar" title="Informasi">
                                <span><i class="fa fa-question-circle fa-lg"></i>&nbsp;</span>
                            </a>
                        </li>
                                            </ul>
                </div>
            </nav>
        </header>

        <!-- Untuk menampilkan modal bootstrap umum -->
        <div class="modal fade" id="modalBox" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"></h4>
                    </div>
                    <div class="fetched-data"></div>
                </div>
            </div>
        </div>

        <!-- Untuk menampilkan pengaturan -->


<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://demosid.opendesa.id/desa/logo/34526019016299185507690877361250346739841706n__sid__BNzLaen.jpg" class="img-circle" alt="logo-desa">
            </div>
            <div class="pull-left info">
                <strong>Desa Cisaranten</strong>
                </br>
                                                    Kecamatan Cikadu                    </br>
                    Kabupaten Cianjur                            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU UTAMA</li>

                                                                        <li class="">
                            <a href="https://demosid.opendesa.id/hom_sid">
                                <i class="fa fa-home "></i><span>Home</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-dashboard "></i><span>Info Desa</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/identitas_desa">
                                            <i class="fa fa-id-card "></i>
                                            Identitas Desa                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/sid_core/clear">
                                            <i class="fa fa-map "></i>
                                            Wilayah Administratif                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/pengurus/clear">
                                            <i class="fa fa-sitemap "></i>
                                            Pemerintahan Desa                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/status_desa">
                                            <i class="fa fa-dot-circle-o "></i>
                                            Status Desa                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/lembaga/clear">
                                            <i class="fa fa-list "></i>
                                            Lembaga Desa                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/pelanggan">
                                            <i class="fa fa-credit-card "></i>
                                            Layanan Pelanggan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/pendaftaran_kerjasama">
                                            <i class="fa fa-list "></i>
                                            Pendaftaran Kerjasama                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-users "></i><span>Kependudukan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/penduduk/clear">
                                            <i class="fa fa-user "></i>
                                            Penduduk                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/keluarga/clear">
                                            <i class="fa fa-users "></i>
                                            Keluarga                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/rtm/clear">
                                            <i class="fa fa-venus-mars "></i>
                                            Rumah Tangga                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/kelompok/clear">
                                            <i class="fa fa-sitemap "></i>
                                            Kelompok                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/suplemen/clear">
                                            <i class="fa fa-slideshare "></i>
                                            Data Suplemen                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/dpt/clear">
                                            <i class="fa fa-podcast "></i>
                                            Calon Pemilih                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview active">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-line-chart text-aqua"></i><span>Statistik</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu active">
                                                                    <li class="active">
                                        <a href="https://demosid.opendesa.id/statistik/clear">
                                            <i class="fa fa-bar-chart text-red"></i>
                                            Statistik Kependudukan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/laporan/clear">
                                            <i class="fa fa-file-text "></i>
                                            Laporan Bulanan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/laporan_rentan/clear">
                                            <i class="fa fa-wheelchair "></i>
                                            Laporan Kelompok Rentan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/laporan_penduduk">
                                            <i class="fa fa-file-text-o "></i>
                                            Laporan penduduk                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-heartbeat "></i><span>Kesehatan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/covid19">
                                            <i class="fa fa-list "></i>
                                            Pendataan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/covid19/pantau">
                                            <i class="fa fa-check "></i>
                                            Pemantauan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/vaksin_covid/clear">
                                            <i class="fa fa fa-medkit "></i>
                                            Vaksin                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/stunting">
                                            <i class="fa fa-stethoscope "></i>
                                            Stunting                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-calendar-check-o "></i><span>Kehadiran</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/kehadiran_jam_kerja">
                                            <i class="fa fa-clock-o "></i>
                                            Jam Kerja                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/kehadiran_hari_libur">
                                            <i class="fa fa-calendar "></i>
                                            Hari Libur                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/kehadiran_rekapitulasi">
                                            <i class="fa fa-list "></i>
                                            Rekapitulasi                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/kehadiran_pengaduan">
                                            <i class="fa fa-exclamation "></i>
                                            Pengaduan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/kehadiran_keluar">
                                            <i class="fa fa-sign-out "></i>
                                            Alasan Keluar                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-book "></i><span>Layanan Surat</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/surat_master">
                                            <i class="fa fa-cog "></i>
                                            Pengaturan Surat                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/surat">
                                            <i class="fa fa-files-o "></i>
                                            Cetak Surat                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/permohonan_surat_admin">
                                            <i class="fa fa-files-o "></i>
                                            Permohonan Surat                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/keluar/clear/masuk">
                                            <i class="fa fa-folder-open "></i>
                                            Arsip Layanan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/surat_mohon">
                                            <i class="fa fa fa-book "></i>
                                            Daftar Persyaratan                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-archive "></i><span>Sekretariat</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/dokumen/clear">
                                            <i class="fa fa-file-text "></i>
                                            Informasi Publik                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/inventaris_tanah">
                                            <i class="fa fa-cubes "></i>
                                            Inventaris                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/klasifikasi/clear">
                                            <i class="fa fa-code "></i>
                                            Klasfikasi Surat                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-paste "></i><span>Buku Administrasi Desa</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/bumindes_umum">
                                            <i class="fa fa-bookmark "></i>
                                            Administrasi Umum                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/bumindes_penduduk_induk/clear">
                                            <i class="fa fa-users "></i>
                                            Administrasi Penduduk                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/bumindes_rencana_pembangunan">
                                            <i class="fa fa-university "></i>
                                            Administrasi Pembangunan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/bumindes_arsip">
                                            <i class="fa fa-archive "></i>
                                            Arsip Desa                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-balance-scale "></i><span>Keuangan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/keuangan/impor_data">
                                            <i class="fa fa-cloud-upload "></i>
                                            Impor Data                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/keuangan/laporan">
                                            <i class="fa fa-bar-chart "></i>
                                            Laporan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/keuangan_manual/manual_apbdes">
                                            <i class="fa fa-keyboard-o "></i>
                                            Input Data                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/keuangan_manual/laporan_manual">
                                            <i class="fa fa-bar-chart "></i>
                                            Laporan Manual                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/laporan_apbdes">
                                            <i class="fa fa-file-text-o "></i>
                                            Laporan APBDes                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa    fa-check-square-o "></i><span>Analisis</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/analisis_master/clear">
                                            <i class="fa fa-check-square-o "></i>
                                            Master Analisis                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/setting/analisis">
                                            <i class="fa fa-gear "></i>
                                            Pengaturan                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="">
                            <a href="https://demosid.opendesa.id/program_bantuan/clear">
                                <i class="fa fa-heart "></i><span>Bantuan</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-map-signs "></i><span>Pertanahan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/data_persil">
                                            <i class="fa fa-list "></i>
                                            Daftar Persil                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/cdesa">
                                            <i class="fa fa-files-o "></i>
                                            C-Desa                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="">
                            <a href="https://demosid.opendesa.id/admin_pembangunan">
                                <i class="fa fa-institution "></i><span>Pembangunan</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                                                                                                            <li class="">
                            <a href="https://demosid.opendesa.id/lapak_admin">
                                <i class="fa fa-cart-plus "></i><span>Lapak</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                                                                                                            <li class="">
                            <a href="https://demosid.opendesa.id/pengaduan_admin">
                                <i class="fa fa-info "></i><span>Pengaduan</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-university "></i><span>OpenDK</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/opendk_pesan/clear">
                                            <i class="fa fa-envelope "></i>
                                            Pesan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/sinkronisasi">
                                            <i class="fa  fa-random "></i>
                                            Sinkronisasi                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-globe "></i><span>Pemetaan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/gis/clear">
                                            <i class="fa fa-globe "></i>
                                            Peta                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/plan">
                                            <i class="fa fa-location-arrow "></i>
                                            Pengaturan Peta                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-envelope "></i><span>Hubung Warga</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/sms">
                                            <i class="fa fa-envelope-open-o "></i>
                                            Kirim Pesan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/daftar_kontak">
                                            <i class="fa fa-id-card-o "></i>
                                            Daftar Kontak                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-users "></i><span>Pengaturan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/modul/clear">
                                            <i class="fa fa-tags "></i>
                                            Modul                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/setting">
                                            <i class="fa fa-codepen "></i>
                                            Aplikasi                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/man_user/clear">
                                            <i class="fa fa-users "></i>
                                            Pengguna                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/database">
                                            <i class="fa fa-database "></i>
                                            Database                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/info_sistem">
                                            <i class="fa fa-server "></i>
                                            Info Sistem                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/setting/qrcode/clear">
                                            <i class="fa fa-qrcode "></i>
                                            QR Code                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-desktop "></i><span>Admin Web</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/web/clear">
                                            <i class="fa fa-file-movie-o "></i>
                                            Artikel                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/web_widget/clear">
                                            <i class="fa fa-windows "></i>
                                            Widget                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/menu/clear">
                                            <i class="fa fa-bars "></i>
                                            Menu                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/komentar/clear">
                                            <i class="fa fa-comments "></i>
                                            Komentar                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/gallery/clear">
                                            <i class="fa fa-image "></i>
                                            Galeri                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/sosmed">
                                            <i class="fa fa-facebook "></i>
                                            Media Sosial                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/web/slider">
                                            <i class="fa fa-film "></i>
                                            Slider                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/teks_berjalan">
                                            <i class="fa fa-ellipsis-h "></i>
                                            Teks Berjalan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/pengunjung/clear">
                                            <i class="fa fa-bar-chart "></i>
                                            Pengunjung                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/setting/web">
                                            <i class="fa fa-gear "></i>
                                            Pengaturan                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-inbox "></i><span>Layanan Mandiri</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/mailbox/clear">
                                            <i class="fa fa-wechat "></i>
                                            Kotak Pesan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/mandiri/clear">
                                            <i class="fa fa-500px "></i>
                                            Pendaftar Layanan Mandiri                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/gawai_layanan">
                                            <i class="fa fa-desktop "></i>
                                            Gawai Layanan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/pendapat">
                                            <i class="fa fa-thumbs-o-up "></i>
                                            Pendapat                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/setting/mandiri">
                                            <i class="fa fa-gear "></i>
                                            Pengaturan                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                                                                            <li class="treeview ">
                            <a href="https://demosid.opendesa.id/">
                                <i class="fa fa-desktop "></i><span>Anjungan</span>
                                <span class="pull-right-container"><i class='fa fa-angle-left pull-right'></i></span>
                            </a>
                            <ul class="treeview-menu ">
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/anjungan">
                                            <i class="fa fa-list "></i>
                                            Daftar Anjungan                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/anjungan_menu">
                                            <i class="fa fa-bars "></i>
                                            Menu                                        </a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://demosid.opendesa.id/anjungan_pengaturan">
                                            <i class="fa fa-gear "></i>
                                            Pengaturan                                        </a>
                                    </li>
                                                            </ul>
                        </li>
                                                        </ul>
    </section>
</aside>


<div class="content-wrapper">
	<section class="content-header">
		<h1>Statistik Kependudukan</h1>
		<ol class="breadcrumb">
			<li><a href="https://demosid.opendesa.id/hom_sid"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Statistik Kependudukan </li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<form id="mainform" name="mainform" method="post">
			<div class="row">
				<div class="col-md-4">

<div id="penduduk" class="box box-info 1">
	<div class="box-header with-border">
		<h3 class="box-title">Statistik Penduduk</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
							<li ><a href="https://demosid.opendesa.id/statistik/clear/13">Umur (Rentang)</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/15">Umur (Kategori)</a></li>
							<li class="active"><a href="https://demosid.opendesa.id/statistik/clear/0">Pendidikan Dalam KK</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/14">Pendidikan Sedang Ditempuh</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/1">Pekerjaan</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/2">Status Perkawinan</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/3">Agama</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/4">Jenis Kelamin</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/hubungan_kk">Hubungan Dalam KK</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/5">Warga Negara</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/6">Status Penduduk</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/7">Golongan Darah</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/9">Penyandang Cacat</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/10">Penyakit Menahun</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/16">Akseptor KB</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/17">Akta Kelahiran</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/18">Kepemilikan KTP</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/19">Asuransi Kesehatan</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/covid">Status Covid</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/suku">Suku / Etnis</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/bpjs-tenagakerja">BPJS Ketenagakerjaan</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/hamil">Status Kehamilan</a></li>
					</ul>
	</div>
</div>
<div id="keluarga" class="box box-info collapsed-box">
	<div class="box-header with-border">
		<h3 class="box-title">Statistik Keluarga</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
							<li ><a href="https://demosid.opendesa.id/statistik/clear/kelas_sosial">Kelas Sosial</a></li>
					</ul>
	</div>
</div>
<div id="rtm" class="box box-info collapsed-box">
	<div class="box-header with-border">
		<h3 class="box-title">Statistik RTM</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
							<li ><a href="https://demosid.opendesa.id/statistik/clear/bdt">BDT</a></li>
					</ul>
	</div>
</div>
<div id="bantuan" class="box box-info collapsed-box">
	<div class="box-header with-border">
		<h3 class="box-title">Statistik Program Bantuan</h3>
		<div class="box-tools">
			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
		</div>
	</div>
	<div class="box-body no-padding">
		<ul class="nav nav-pills nav-stacked">
							<li ><a href="https://demosid.opendesa.id/statistik/clear/bantuan_penduduk">Penerima Bantuan Penduduk</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/bantuan_keluarga">Penerima Bantuan Keluarga</a></li>
										<li ><a href="https://demosid.opendesa.id/statistik/clear/501">BPNT (501)</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/502">BLSM (502)</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/503">PKH (503)</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/504">Bedah Rumah (504)</a></li>
							<li ><a href="https://demosid.opendesa.id/statistik/clear/505">JAMKESMAS (505)</a></li>
					</ul>
	</div>
</div>
				</div>
				<div class="col-md-8">
					<div class="box box-info">
						<div class="box-header with-border">
							<a href="https://demosid.opendesa.id/statistik/dialog/cetak" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Cetak Laporan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Cetak Laporan"><i class="fa fa-print "></i>Cetak
							</a>
							<a href="https://demosid.opendesa.id/statistik/dialog/unduh" class="btn btn-social btn-flat bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Unduh Laporan" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Unduh Laporan"><i class="fa fa-print "></i>Unduh
							</a>
							<a class="btn btn-social btn-flat bg-orange btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block grafikType" title="Grafik Data" id="grafikType" onclick="grafikType();">
								<i class="fa fa-bar-chart"></i>Grafik Data
							</a>
							<a class="btn btn-social btn-flat btn-primary btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block pieType" title="Pie Data" id="pieType" onclick="pieType();">
								<i class="fa fa-pie-chart"></i>Pie Data
							</a>
														<a href="https://demosid.opendesa.id/statistik/clear/0" class="btn btn-social btn-flat bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-refresh"></i>Bersihkan</a>
						</div>
						<div class="box-body">
															<h4 class="box-title text-center"><b>Data Kependudukan Menurut Pendidikan Dalam KK</b></h4>
														<div id="chart" hidden="true"> </div>
						</div>
						<hr>
						<div class="box-body">
															<div class="row">
									<div class="col-sm-12 form-inline">
										<form id="mainform" method="post">
																						<select class="form-control input-sm " name="dusun" onchange="formAction('mainform','https://demosid.opendesa.id/statistik/dusun')">
												<option value="">Pilih Dusun</option>
																									<option value="KERANDANGAN" >Kerandangan</option>
																									<option value="LOCO" >Loco</option>
																									<option value="SENGGIGI" >Senggigi</option>
																									<option value="MANGSIT" >Mangsit</option>
																							</select>
																																</form>
									</div>
								</div>
																						<div class="table-responsive">
									<table class="table table-bordered dataTable table-striped table-hover tabel-daftar">
										<thead class="bg-gray color-palette">
											<tr>
												<th>No</th>
																									<th><a href="https://demosid.opendesa.id/statistik/order_by/0/2">Jenis Kelompok<i class='fa fa-sort-desc fa-sm'></i></a></th>
																																					<th colspan="2"><a href="https://demosid.opendesa.id/statistik/order_by/0/5">Jumlah<i class='fa fa-sort fa-sm'></i></a></th>
																																					<th colspan="2"><a href="https://demosid.opendesa.id/statistik/order_by/0/3">Laki-Laki<i class='fa fa-sort fa-sm'></i></a></th>
																																					<th colspan="2"><a href="https://demosid.opendesa.id/statistik/order_by/0/7">Perempuan<i class='fa fa-sort fa-sm'></i></a></th>
																							</tr>
										</thead>
										<tbody>
																																			<tr>
													<td class="padat">1</td>
													<td class="text-left">TIDAK / BELUM SEKOLAH</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/1/0" target="_blank">21</a>
													</td>
													<td class="text-right">21,88%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/1/1" target="_blank">7</a></td>
													<td class="text-right">7,29%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/1/2" target="_blank">14</a></td>
													<td class="text-right">14,58%</td>
												</tr>
																																			<tr>
													<td class="padat">2</td>
													<td class="text-left">BELUM TAMAT SD/SEDERAJAT</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/2/0" target="_blank">5</a>
													</td>
													<td class="text-right">5,21%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/2/1" target="_blank">3</a></td>
													<td class="text-right">3,13%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/2/2" target="_blank">2</a></td>
													<td class="text-right">2,08%</td>
												</tr>
																																			<tr>
													<td class="padat">3</td>
													<td class="text-left">TAMAT SD / SEDERAJAT</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/3/0" target="_blank">15</a>
													</td>
													<td class="text-right">15,63%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/3/1" target="_blank">9</a></td>
													<td class="text-right">9,38%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/3/2" target="_blank">6</a></td>
													<td class="text-right">6,25%</td>
												</tr>
																																			<tr>
													<td class="padat">4</td>
													<td class="text-left">SLTP/SEDERAJAT</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/4/0" target="_blank">26</a>
													</td>
													<td class="text-right">27,08%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/4/1" target="_blank">8</a></td>
													<td class="text-right">8,33%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/4/2" target="_blank">18</a></td>
													<td class="text-right">18,75%</td>
												</tr>
																																			<tr>
													<td class="padat">5</td>
													<td class="text-left">SLTA / SEDERAJAT</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/5/0" target="_blank">28</a>
													</td>
													<td class="text-right">29,17%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/5/1" target="_blank">17</a></td>
													<td class="text-right">17,71%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/5/2" target="_blank">11</a></td>
													<td class="text-right">11,46%</td>
												</tr>
																																			<tr>
													<td class="padat">6</td>
													<td class="text-left">DIPLOMA I / II</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/6/0" target="_blank">1</a>
													</td>
													<td class="text-right">1,04%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/6/1" target="_blank">1</a></td>
													<td class="text-right">1,04%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/6/2" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
												</tr>
																																			<tr>
													<td class="padat">7</td>
													<td class="text-left">AKADEMI/ DIPLOMA III/S. MUDA</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/7/0" target="_blank">0</a>
													</td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/7/1" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/7/2" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
												</tr>
																																			<tr>
													<td class="padat">8</td>
													<td class="text-left">DIPLOMA IV/ STRATA I</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/8/0" target="_blank">0</a>
													</td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/8/1" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/8/2" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
												</tr>
																																			<tr>
													<td class="padat">9</td>
													<td class="text-left">STRATA II</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/9/0" target="_blank">0</a>
													</td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/9/1" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/9/2" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
												</tr>
																																			<tr>
													<td class="padat">10</td>
													<td class="text-left">STRATA III</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/10/0" target="_blank">0</a>
													</td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/10/1" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/10/2" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
												</tr>
																																			<tr>
													<td class="padat"></td>
													<td class="text-left">JUMLAH</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/666/0" target="_blank">96</a>
													</td>
													<td class="text-right">100,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/666/1" target="_blank">45</a></td>
													<td class="text-right">46,88%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/666/2" target="_blank">51</a></td>
													<td class="text-right">53,13%</td>
												</tr>
																																			<tr>
													<td class="padat"></td>
													<td class="text-left">BELUM MENGISI</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/777/0" target="_blank">0</a>
													</td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/777/1" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/777/2" target="_blank">0</a></td>
													<td class="text-right">0,00%</td>
												</tr>
																																			<tr>
													<td class="padat"></td>
													<td class="text-left">TOTAL</td>
													<td class="text-right">
														<a href="https://demosid.opendesa.id/penduduk/statistik/0/888/0" target="_blank">96</a>
													</td>
													<td class="text-right">100,00%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/888/1" target="_blank">45</a></td>
													<td class="text-right">46,88%</td>
													<td class="text-right"><a href="https://demosid.opendesa.id/penduduk/statistik/0/888/2" target="_blank">51</a></td>
													<td class="text-right">53,13%</td>
												</tr>
																					</tbody>
									</table>
								</div>
																							</div>


						</div>
					</div>
				</div>
			</div>
		</form>
	</section>
</div>
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
								'1',							'2',							'3',							'4',							'5',							'6',							'7',							'8',							'9',							'10',							'11',														'13',						]
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
			shadow:1,
			border:1,
			data: [
																		['TIDAK / BELUM SEKOLAH',21],
																												['BELUM TAMAT SD/SEDERAJAT',5],
																												['TAMAT SD / SEDERAJAT',15],
																												['SLTP/SEDERAJAT',26],
																												['SLTA / SEDERAJAT',28],
																												['DIPLOMA I / II',1],
																												['AKADEMI/ DIPLOMA III/S. MUDA',0],
																												['DIPLOMA IV/ STRATA I',0],
																												['STRATA II',0],
																												['STRATA III',0],
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
					dataLabels:
					{
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
				enabled:true
			},
			series: [{
				type: 'pie',
				name: 'Populasi',
				data: [
																						["TIDAK / BELUM SEKOLAH",21],
																																	["BELUM TAMAT SD/SEDERAJAT",5],
																																	["TAMAT SD / SEDERAJAT",15],
																																	["SLTP/SEDERAJAT",26],
																																	["SLTA / SEDERAJAT",28],
																																	["DIPLOMA I / II",1],
																																	["AKADEMI/ DIPLOMA III/S. MUDA",0],
																																	["DIPLOMA IV/ STRATA I",0],
																																	["STRATA II",0],
																																	["STRATA III",0],
																																																									]
			}]
		});

		$('#chart').removeAttr('hidden');
	}
</script>
				<footer class="main-footer">
					<div class="pull-right hidden-xs">
						<b>Versi</b> 2306.0.0					</div>
					<strong>Aplikasi <a href="https://github.com/OpenSID/OpenSID" target="_blank">OpenSID</a>, dikembangkan oleh <a href="https://www.facebook.com/groups/OpenSID/" target="_blank">Komunitas OpenSID</a>.</strong>
				</footer>
				<aside class="control-sidebar control-sidebar-light">
    <div class="box-body">
        <div class="box-group" id="accordion">
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Aplikasi
                            OpenSID</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="box-body">
                        <p align="justify">OpenSID adalah aplikasi Sistem Informasi Desa
                            (SID) yang dikembangkan sejak Mei 2016. OpenSID dirancang dan
                            dikelola supaya terbuka dan dapat dikembangkan bersama-sama oleh komunitas peduli SID.
                            Informasi lebih lanjut dapat dilihat di <a
                                href=https://github.com/OpenSID/opensid>https://github.com/OpenSID/OpenSID</a>.</p>
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#catatan-rilis">Catatan Rilis</a>
                    </h4>
                </div>
                <div id="catatan-rilis" class="panel-collapse collapse">
                    <div class="box-body">
                        <div class="catatan-scroll">
                            <p>Di rilis ini, versi 2306.0.0 menyediakan pengaturan visual tanda tangan TTE. Rilis ini juga berisi penambahan fitur dan perbaikan lain yang diminta Komunitas SID.</p>
<p>Terima kasih pada @syahransaputra yang terus berkontribusi.</p>
<h4>Penambahan Fitur</h4>
<ol>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5718">#5718</a> Penambahan fungsi jarak antra baris (tools tinymce linehight).</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5578">#5578</a> Penambahan Capitalize Each Word pada kode isian surat TinyMCE.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5775">#5775</a> Penyesuaian ukuran font di bagian footer tte.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5764">#5764</a> Penambahan surat TinyMCE keterangan usaha.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5754">#5754</a> Penambahan surat TinyMCE keterangan pengantar.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5371">#5371</a> Penambahan popup untuk melihat foto pada galeri.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5763">#5763</a> Penambahan surat TinyMCE pengantar laporan kehilangan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5755">#5755</a> Penambahan surat TinyMCE keterangan kenduduk.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/2663">#2663</a> Penambahan shortcut surat keterangan kematian pada log penduduk.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5796">#5796</a> Penambahan validasi support ipv6 ketika nambah ip di anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5706">#5706</a> Penambahan pengaturan waktu kadaluarsa token OTP.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5349">#5349</a> Penambahan fitur batasi impor data penduduk pada pengguna admin.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5829">#5829</a> Penambahan jenis surat RTF dan TinyMCE pada modul pengaturan dan cetak surat.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5716">#5716</a> Penambahan pengaturan teks berjalan pada pengaturan anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5721">#5721</a> Penambahan modul &quot;Gawai Layanan&quot; sebagai pengganti fitur anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5826">#5826</a> Perubahan hapus wilayah RW atau Dusun hanya jika sudah berpenghuni.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5717">#5717</a> Menampilkan keterangan hadir &amp; tidak hadir pada menu perangkat desa.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5762">#5762</a> Penambahan surat TinyMCE pengantar izin keramaian.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5758">#5758</a> Penambahan surat TinyMCE pengantar surat keterangan catatan kepolisian.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5773">#5773</a> Penambahan surat TinyMCE keterangan pergi kawin.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5759">#5759</a> Penambahan surat TinyMCE keterangan KTP dalam proses.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5677">#5677</a> Penyesuaian mengeluarkan secara otomatis perangkat lupa absen.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5782">#5782</a> Perubahan tombol lihat document menjadi popup pada menu informasi publik.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5628">#5628</a> Penambahan tools RFM untuk menambah gambar pada surat TinyMCE.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5683">#5683</a> Penyesuaian lampiran surat TinyMCE.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5774">#5774</a> Penambahan surat TinyMCE keterangan wali hakim.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5769">#5769</a> Penambahan surat pernyataan belum memiliki akta lahir.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5766">#5766</a> Penambahan surat keterangan domisili usaha.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5802">#5802</a> Penambahan fungsi export &amp; import surat TinyMCE.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5848">#5848</a> Penambahan kode isian khusus kata -kata yang harus berupa huruf besar.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5784">#5784</a> Penambahan pengaturan slide , video &amp; url untuk ditampilkan dianjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5795">#5795</a> Penyesuaian akses pada menu anjungan jika tidak membeli lisensi anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5776">#5776</a> Penambahan pengaturan visual tanda tangan TTE.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5691">#5691</a> Penyesuaian status TTE demo jika menggunakan modul eSign demo / modul BSrE belum terpasang.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5783">#5783</a> Penyesuaian pengaturan screenserver ke pengaturan anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5788">#5788</a> Penyesuaian kode wilayah BPS yang diambil dari pantau.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5728">#5728</a> Penyesuaian validasi hapus Aparat Desa.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5580">#5580</a> Penyesuaian aturan penghapusan surat di halaman arsip.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5715">#5715</a> Penambahan anggota rumah tangga bersumber dari daftar nama di kartu keluarga kepala rumah tangga.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5358">#5358</a> Penambahan format nomor surat pada template surat.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5025">#5025</a> Penambahan cetak surat di anjungan mandiri khusus surat TinyMCE.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5765">#5765</a> Penambahan surat TinyMCE keterangan JAMKESOS.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5757">#5757</a> Penambahan surat TinyMCE Keterangan Jual Beli</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5864">#5864</a> Penambahan pop up pada daftar perangkat desa di anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5785">#5785</a> Penambahan pengaturan lanskap &amp; potret terkait layout anjungan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5797">#5797</a> Penyesuaian hapus peserta duplikat.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5673">#5673</a> Penambahan informasi kebutuhan sistem.</li>
</ol>
<h4>Perbaikan BUG</h4>
<ol>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5216">#5216</a> Perbaikan hasil ekspor surat keterangan beda indentitas KIS, data pertama tidak tampil/muncul.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5779">#5779</a> Perbaikan tambah buku keputusan menjadi wajib diisi jika mengunggah dokumen.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5749">#5749</a> Perbaikan penandatangan dari luar desa tidak muncul gelarnya.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5781">#5781</a> Perbaikan link pembangunan tidak tampil dengan benar pada peta.</li>
<li><a href="https://github.com/OpenSID/premium/issues/1251">#1251</a> Perbaikan lampiran surat dari layanan mandiri tidak muncul di details arsip layanan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5735">#5735</a> Perbaikan gagal migrasi v22.10-premium.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5563">#5563</a> Perbaikan preview surat pada pengaturan surat tinymce.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5787">#5787</a> Perbaikan modal pupup edit peserta form di program bantuan &amp; tombol profil.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5792">#5792</a> Perbaikan nama desa dengan tanda petik diidentitasa desa.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5801">#5801</a> Perbaikan pilih gambar pada edit logo identitas desa.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5793">#5793</a> Perbaikan pemanggilan images latar belakang login admin &amp; layanan mandiri.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5738">#5738</a> Perbaikan desimal dua digit tidak dapat ditampilkan pada transparansi APBDesa.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5803">#5803</a> Perbaikan print pada pemetaan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5814">#5814</a> Perbaikan migrasi decimal keuangan rinci.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5812">#5812</a> Perbaikan ubah status aktif &amp; tidak aktif berdasarkan range tanggal.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5820">#5820</a> Perbaikan kirim versi OpenSID ke layanan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5819">#5819</a> Perbaikan alert gagal pendaftaran kerjasama.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5825">#5825</a> Perbaikan surat baru dengan nama yang sama.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5837">#5837</a> Perbaikan daftar rekapitulasi kehadiran.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5828">#5828</a> Memisahkan tabel pemesanan dan lainnya.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5832">#5832</a> Perbaikan periksa surat tinymce permohonan warga yang tidak ada dokumen / persyaratan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5827">#5827</a> Menambahkan tombol informasi layanan selengkapnya pada menu layanan pelanggan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5847">#5847</a> Perbaikan gelar penandatangan surat tidak muncul pada permohonan dan arsip surat.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5850">#5850</a> Menambahkan kolom f12 -f14 di table keuangan_ta_spp.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5845">#5845</a> Perbaikan nama file terlalu panjang di peraturan desa.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5855">#5855</a> Perbaikan kamera masih hidup walau modal sudah ditutup.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5861">#5861</a> Perbaikan status surat setelah di TTD kepala desa layanan mandiri tidak berubah.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5708">#5708</a> Perbaikan token tidak bisa update ke database &amp; tidak respon ke kelayanan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5880">#5880</a> Perbaikan tulisan nomor urut tanah desa yang double N.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5879">#5879</a> Perbaikan link api wa pada widget halaman depan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5868">#5868</a> Penyesuaian terkait pembaruan token di beberapa kondisi.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5866">#5866</a> Perbaikan update dokumen penduduk.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5886">#5886</a> Perbaikan dobel akta perceraian pada layanan mandiri &amp; profile lengkap.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5890">#5890</a> Penyesuaian API SDGS yang berubah lagi di website sumber.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5894">#5894</a> Perbaikan panjang karakter pada kolom pada ID penerima bantuan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5895">#5895</a> Perbaikan maksimal foto produk pada menu lapak.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5869">#5869</a> Perbaikan form kerjasama karena tidak bisa koneksi ke layanan.</li>
<li><a href="https://github.com/OpenSID/OpenSID/issues/5902">#5902</a> Perbaikan identitas desa error 505 setelah melakukan restore database.</li>
</ol>
<h4>Perubahan Teknis</h4>
<ol>
<li>Perbaikan cara simpan cache IDM dan SDGS.</li>
<li>Perbaikan perubahan version saat ini.</li>
<li>Interval release.</li>
<li>Hapus duplikasi variabel.</li>
<li>perbarui langganan</li>
</ol>                        </div>
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Apakah SID ?</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="box-body">
                        <p align="justify">Aplikasi Sistem Informasi Desa (SID) adalah sistem olah data dan informasi
                            berbasis komputer yang dapat dikelola oleh pemerintah dan komunitas desa dalam dua ranah:
                        </p>
                        <dl>
                            <dt>1. Offline</dt>
                            <dd align="justify">Aplikasi diinstall dalam komputer server di kantor desa dan dioperasikan
                                sebagai server (pusat data) yang bersifat lokal. Karena tidak terhubung ke internet, SID
                                offline hanya bisa diakses dalam jaringan lokal. Sistem offline ini direkomendasikan
                                untuk diterapkan dalam penggunaan aplikasi SID harian. Database dari hasil proses olah
                                data secara offline itu dapat diunggah ke sistem online secara berkala.</dd>
                            <dt>2. Online</dt>
                            <dd align="justify">SID akan optimal jika terhubung ke internet sebagai sistem online
                                berbasis web. SID online akan otomatis berfungsi juga sebagai website desa. Website desa
                                ini memiliki fungsi yang terbagi dalam dua bagian, yakni bagian depan yang bisa diakses
                                oleh publik dan bagian dalam yang hanya bisa diakses oleh administrator sistem.</dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Manajemen Akses SID</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="box-body">
                        <p align="justify">Aplikasi SID dirancang untuk mengelola data dasar desa dan informasi desa.
                            Data dasar yang dikelola meliputi data dasar kependudukan dan data dasar aset/sumber daya
                            desa. Data dasar ini menjadi tanggung jawab pemerintah desa dalam pengelolaannya. Hanya
                            pengguna (user) dari pemerintah desa dan tim yang dikoordinasikan oleh pemerintah desa saja
                            yang akan memiliki kewenangan dan hak akses ke dalam sistem. Sementara, user di luar
                            pemerintah desa hanya akan memiliki akses terbatas pada fungsi olah informasi untuk website
                            desa.</p>
                        <p align="justify">Tingkat user (pengguna) dalam SID:</p>
                        <p align="justify">
                        <ol>
                            <li align="justify">
                                Administrator : adalah orang/tim yang bertanggung jawab penuh atas olah data dan
                                informasi dalam SID dan website desa. Orang/tim ini ditunjuk oleh pemerintah desa
                                disahkan dengan surat keputusan kepala desa.
                                <ol>
                                    <li align="justify">Peran olah data : entry, edit, delete data dasar</li>
                                    <li align="justify">Peran olah informasi : tulis, edit, publish artikel website</li>
                                </ol>
                            </li>
                            <li align="justify">
                                Operator: adalah orang/tim yang bertugas membantu administrator mengelola data dan
                                informasi, tetapi dengan kewenangan yang lebih terbatas.
                                <ol>
                                    <li align="justify">Peran olah data : entry, edit data dasar</li>
                                    <li align="justify">Peran olah informasi : tulis, edit artikel website.</li>
                                </ol>
                            </li>
                            <li align="justify">
                                Redaksi: adalah orang/tim yang bertugas sebagai redaksi media website desa dan hanya
                                dapat melakukan olah informasi berupa artikel website.
                                <ol>
                                    <li align="justify">Peran olah informasi : tulis, edit artikel. Redaksi boleh
                                        mengubah semua artikel, termasuk menjadikan headline, aktif/non-aktifkan,
                                        masukkan ke slider, dsbnya</li>
                                </ol>
                            </li>
                            <li align="justify">
                                Kontributor: adalah orang/tim yang bertugas menulis artikel untuk disetujui redaksi
                                untuk ditampilkan di website desa.
                                <ol>
                                    <li align="justify">Peran olah informasi : tulis, edit artikel yang dibuatnya
                                        sendiri. Kontributor tidak dapat menjadikan artikel manapun menjadi headline,
                                        aktif/non-aktifkan atau memasukkan ke slider.</li>
                                </ol>
                            </li>
                        </ol>
                        </p>
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Tahapan Membangun SID</a>
                    </h4>
                </div>
                <div id="collapse4" class="panel-collapse collapse">
                    <div class="box-body">
                        <P align="justify">Bagaimana memulai membangun Sistem Informasi Desa (SID) di desa kita? Caranya
                            sangat mudah, tetapi pasti perlu proses yang harus sabar dan cermat untuk dijalani. Siapa
                            pun Anda, baik perorangan maupun mewakili organisasi/lembaga, dapat mencoba mulai membangun
                            SID di desa masing-masing mengikuti langkah-langkah berikut.</P>
                        <ol>
                            <li align="justify">Bentuk tim kerja bersama pemerintah desa</li>
                            <li align="justify">Diskusikan basis data apa saja yang diperlukan untuk warga</li>
                            <li align="justify">Himpun data kependudukan warga dari Kartu Keluarga (KK)</li>
                            <li align="justify">Dapatkan aplikasi SID di <a
                                    href=https://github.com/OpenSID/OpenSID/releases>https://github.com/OpenSID/OpenSID/releases</a>
                            </li>
                            <li align="justify">Pasang aplikasi SID di komputer desa</li>
                            <li align="justify">Masukkan data penduduk ke SID</li>
                            <li align="justify">Basis data kependudukan sudah bisa dimanfaatkan</li>
                            <li align="justify">Diskusikan rencana pengembangan SID sesuai kebutuhan desa</li>
                            <li align="justify">Sebarluaskan informasi desa melalui beragam media untuk warga</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Hak Cipta, Syarat, Dan
                            Ketentuan</a>
                    </h4>
                </div>
                <div id="collapse5" class="panel-collapse collapse">
                    <div class="box-body">
                        <p align="justify">Aplikasi Sistem Informasi Desa (SID) dibangun dan dikembangkan pada awalnya
                            oleh COMBINE Resource Institution sejak tahun 2009. Sistem ini dikelola dengan merujuk pada
                            lisensi GNU General Public License Version 3.</p>
                        <p align="justify">Dengan lisensi GPL v3, semua ubahan OpenSID juga
                            berlisensi GPL v3, yaitu
                            bersifat sumber terbuka.
                        <p align="justify">
                        <p align="justify">OpenSID dikembangkan sejak Mei 2016, dan bebas
                            untuk dimanfaatkan dan
                            dikembangkan oleh semua desa.</p>
                        <p align="justify">Sejak Januari 2019, OpenSID dikelola oleh
                            Perkumpulan Desa Digital Terbuka
                            (OpenDesa). OpenDesa adalah pemegang hak cipta utama OpenSID.
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Kontak Dan Informasi</a>
                    </h4>
                </div>
                <div id="collapse6" class="panel-collapse collapse">
                    <div class="box-body">
                        <ol>
                            <li align="justify">Website Resmi OpenDesa, pengelola OpenSID:
                            </li>
                            <a href="http://opendesa.id" target="_blank">http://opendesa.id</a>
                            <li align="justify">Website Resmi OpenSID: </li>
                            <a href="http://opensid.my.id" target="_blank">Website Resmi
                                OpenSID</a>
                            <li align="justify">Grup Facebook, tempat mendapatkan bantuan dan berbagi pengalaman: </li>
                            <a href="https://www.facebook.com/groups/opensid" target="_blank">Forum Pengguna dan
                                Pegiat OpenSID</a>
                            <li align="justify">Tempat mengunduh rilis OpenSID:</li>
                            <a href="https://github.com/OpenSID/OpenSID/releases"
                                target="_blank">https://github.com/OpenSID/OpenSID/releases</a>
                            <li align="justify">Panduan OpenSID:</li>
                            <a href="https://github.com/OpenSID/OpenSID/wiki"
                                target="_blank">https://github.com/OpenSID/OpenSID/wiki</a>
                            <li align="justify">Channel Youtube OpenSID: </li>
                            <a href="https://www.youtube.com/channel/UCvZuSYtrWYuE8otM4SsdT0Q"
                                target="_blank">Kumpulan tutorial video OpenSID</a>
                            <li align="justify">Forum OpenDesa:</li>
                            <a href="https://forum.opendesa.id" target="_blank">https://forum.opendesa.id</a>
                            <li align="justify">Tempat mendaftarkan masalah dan usulan fitur:</li>
                            <a href="https://github.com/OpenSID/OpenSID/issues" target="_blank"
                                sclass="text-green">https://github.com/OpenSID/OpenSID/issues</a>
                            <li align="justify">Forum diskusi teknis pengembangan OpenSID:
                            </li>
                            <a href="https://opensid.slack.com" target="_blank">https://opensid.slack.com</a>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="panel box box-default">
                <div class="box-header with-border">
                    <h4 class="box-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#donasi">Donasi</a>
                    </h4>
                </div>
                <div id="donasi" class="panel-collapse collapse">
                    <div class="box-body">
                        <h4>OpenSID SELALU GRATIS</h4>
                        <div>
                            <p align="justify">OpenSID selalu gratis dan bebas digunakan
                                dan dikembangkan desa. OpenSID                                berlisensi GNU General Public License Version 3, yaitu Open Source, di mana scriptnya
                                selalu bebas diperoleh dan disesuaikan desa.</p>
                        </div>
                        <h4>OpenSID DIKEMBANGKAN KOMUNITAS</h4>
                        <div>
                            <p align="justify">OpenSID dikembangkan oleh komunitas relawan
                                yang peduli dan meluangkan
                                waktu dan keahlian mereka secara sukarela untuk terus mengembangkan
                                OpenSID.</p>
                            <p align="justify">Selain menyumbangkan waktu mereka, ada kalanya relawan
                                OpenSID juga
                                mengeluarkan dana pribadi untuk mendukung kegiatan OpenSID.
                            </p>
                        </div>
                        <h4>OpenSID MEMERLUKAN BANTUAN</h4>
                        <div>
                            <p align="justify">Untuk terus berkembang, OpenSID memerlukan
                                bantuan komunitas SID,
                                termasuk donasi. Semua donasi bersifat sukarela dan sama sekali tidak ada keharusan.
                            </p>
                            <p align="justify">Donasi anda akan memungkinkan OpenSID                                dikembangkan terus secara
                                berkesinambungan, supaya bisa terus disempurnakan dan bisa dimanfaatkan oleh sebanyak
                                mungkin desa di seluruh Nusantara. </p>
                            <p align="justify">
                                Cara mengirimkan donasi dan informasi lebih lanjut ada di:
                            </p>
                            <a href="https://www.opendesa.id/donasi"
                                class="btn btn-social btn-primary btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                                title="Kembali Ke Daftar Suplemen"><i class="fa fa-heart"></i> Donasi Pengembangan
                                OpenSID</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
				</div>
				</div>

				<!-- jQuery 3 -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/jquery.min.js?vc9f5aeeca3ad37bf2aa006139b935f0a"></script>
				<!-- Jquery UI -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/jquery-ui.min.js?vc15b1008dec3c8967ea657a7bb4baaec"></script>
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/jquery.ui.autocomplete.scroll.min.js?v914bf2dcb9cb08c551b31ee90da9012b"></script>

				<script src="https://demosid.opendesa.id/assets/bootstrap/js/moment.min.js?vaeb7908241d9f6d5a45e504cc4f2ec15"></script>
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/moment-timezone.js?ve266b6769b9fb4189ae0695adbf5411d"></script>
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/moment-timezone-with-data.js?ve266b6769b9fb4189ae0695adbf5411d"></script>
				<!-- Bootstrap 3.3.7 -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/bootstrap.min.js?v5869c96cc8f19086aee625d670d741f9"></script>
				<!-- Select2 -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/select2.full.min.js?v0a96cf2d3a193019a91b76f2073f9214"></script>
				<!-- DataTables -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/jquery.dataTables.min.js?v0fa487036c15318753d118861cd3a55c"></script>
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/dataTables.bootstrap.min.js?v19b11075f9b46a3cd26fb39a6f252b5d"></script>
				<!-- bootstrap color picker -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/bootstrap-colorpicker.min.js?v9730eb5c9c1d945d025b3877085cbab4"></script>
				<!-- bootstrap Date time picker -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/bootstrap-datetimepicker.min.js?v8a36160a466cad1a9e414321f4784baf"></script>
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/id.js?vf5906d544f9f5fec43558999e8b3b3f7"></script>
				<!-- bootstrap Date picker -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/bootstrap-datepicker.min.js?v0be86366093cd030f08426c89547fed2"></script>
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/bootstrap-datepicker.id.min.js?v77beed0d1402226bdaec79a8423c6bef"></script>
				<!-- Bootstrap WYSIHTML5 -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/bootstrap3-wysihtml5.all.min.js?v5bfd046765d586701ae5333710ea87fc"></script>
				<!-- Slimscroll -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/jquery.slimscroll.min.js?vf1dbc7920f93bd2b1dcfede95b473e4e"></script>
				<!-- FastClick -->
				<script src="https://demosid.opendesa.id/assets/bootstrap/js/fastclick.js?v6e9d3b0da74f2a4a7042b494cdaa7c2e"></script>
				<!-- AdminLTE App -->
				<script src="https://demosid.opendesa.id/assets/js/adminlte.min.js?ve921ddb54382ff58ed3cb5ec99731042"></script>
				<script src="https://demosid.opendesa.id/assets/js/validasi.js?v4d098a511d3cb9dabddd476eb478296c"></script>
				<script src="https://demosid.opendesa.id/assets/js/jquery.validate.min.js?v1a8dc8a74a2bb8fee9bbb298385174a3"></script>
				<script src="https://demosid.opendesa.id/assets/js/localization/messages_id.js?vc36d3dbfc8e5a7d22a5601604aee8f8f"></script>
				<!-- Numeral js -->
				<script src="https://demosid.opendesa.id/assets/js/numeral.min.js?v9a47e71ab1b7f7dd9100b32acc36f8d5"></script>
				<!-- Script-->
				<script src="https://demosid.opendesa.id/assets/js/script.js?v51920065fc8fc4fe8e914eb3df5a474d"></script>
				<script src="https://demosid.opendesa.id/assets/js/custom-select2.js?v62112edf6aba11feb3224025cc7a77cc"></script>
				<script src="https://demosid.opendesa.id/assets/js/custom-datetimepicker.js?v87766e9af122b5ddcc0061a5e603026d"></script>

				<!-- numeral js -->
				<script src="https://demosid.opendesa.id/assets/js/numeraljs/numeral.min.js?v9a47e71ab1b7f7dd9100b32acc36f8d5"></script>
				<script type="text/javascript">
					numeral.register("locale", "id-id", {
						delimiters: {
							thousands: ".",
							decimal: ","
						},
						abbreviations: {
								thousand: 'k',
								million: 'm',
								billion: 'b',
								trillion: 't'
							},
						currency: {
							symbol: "Rp." //The currency for UAE is called the Dirham
						}
					});
					numeral.locale('id-id');
					numeral.defaultFormat('0,0.00');
					console.log(numeral.locale())
				</script>

				<!-- Token Field -->

									<script src="https://demosid.opendesa.id/assets/js/demo.js?v8a46660a28ebda3b639aa761b5197383"></script>

				<!-- set timezone -->
				<script>
					$.extend($.fn.datetimepicker.defaults, {
						timeZone: `Asia/Jakarta`
					});

					moment.tz.setDefault(`Asia/Jakarta`);
				</script>

				<!-- NOTIFICATION-->
				<script type="text/javascript">
					$('document').ready(function() {
						var koneksi = '';

						if (koneksi) {
							cek_koneksi();
						}

						var success = '';
						var message = '';

						if (success == 1) {
							notify = 'success';
							notify_msg = 'Data berhasil disimpan';
						} else if (success == -1) {
							notify = 'error';
							notify_msg = 'Data gagal disimpan ' + message;
						} else if (success == -2) {
							notify = 'error';
							notify_msg = 'Data gagal disimpan, nama id sudah ada!';
						} else if (success == -3) {
							notify = 'error';
							notify_msg = 'Data gagal disimpan, nama id sudah ada!';
						} else if (success == 4) {
							notify = 'success';
							notify_msg = 'Data berhasil dihapus';
						} else if (success == -4) {
							notify = 'error';
							notify_msg = 'Data gagal dihapus';
						} else if (success == 5) {
							notify = 'success';
							notify_msg = 'Data berhasil diunggah';
						} else if (success == 6) {
							notify = 'success';
							notify_msg = 'Silahkan Cek Pesan di Email Anda';
						} else {
							notify = success;
							notify_msg = message;
						}
						notification(notify, notify_msg);

						// Sidebar
						if (typeof(Storage) !== 'undefined' && localStorage.getItem('sidebar') === 'false') {
							$("#sidebar_collapse").addClass('sidebar-collapse');
						}

						$('.sidebar-toggle').on('click', function() {
							localStorage.setItem('sidebar', $("#sidebar_collapse").hasClass('sidebar-collapse'));
						});
					});
				</script>

				</body>

				</html>

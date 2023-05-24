<?php

namespace App\Http\Controllers;

class PendudukController extends Controller {

    public function index()
    {
        return view('penduduk.index');
    }
    public function form_penduduk_lahir()
    {
        return view('penduduk.form_penduduk_lahir');
    }
    public function form_penduduk_masuk()
    {
        return view('penduduk.form_penduduk_masuk');
    }

    public function cetak() {
        return view('penduduk.cetak');
    }
    public function cetak_biodata() {
        return view('penduduk.cetak_biodata');
    }

    public function detail() {
        return view('penduduk.detail');
    }
    public function dokumen() {
        return view('penduduk.dokumen');
    }
    public function ubah() {
        return view('penduduk.form_ubah');
    }
    public function lokasi_warga() {
        return view('penduduk.lokasi_warga');
    }
}



?>

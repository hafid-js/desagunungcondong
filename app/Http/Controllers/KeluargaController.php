<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index(){
        return view('keluarga.index');
    }
    public function anggota_keluarga(){
        return view('keluarga.anggota_keluarga');
    }
    public function form_keluarga_lahir(){
        return view('keluarga.form_keluarga_lahir');
    }
    public function form_kepala_keluarga(){
        return view('keluarga.form_kepala_keluarga');
    }
    public function form_keluarga_masuk(){
        return view('keluarga.form_keluarga_masuk');
    }
    public function kartu_keluarga(){
        return view('keluarga.kartu_keluarga');
    }

    public function calon_pemilih(){
        return view('keluarga/calon_pemilih');
    }

    public function cetak(){
        return view('keluarga.cetak');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdentitasDesaController extends Controller
{
    public function index(){
        return view('identitas-desa.index');
    }
    public function ubah(){
        return view('identitas-desa.ubah');
    }
    public function lokasi_kantor(){
        return view('identitas-desa.lokasi-kantor-desa');
    }

    public function wilayah_administratif() {
        return view ('identitas-desa.wilayah-administratif');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function index(){
        return view('statistik.kependudukan.index');
    }
    public function laporanBulanan(){
        return view('statistik.laporan-bulanan.index');
    }
}

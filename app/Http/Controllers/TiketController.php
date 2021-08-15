<?php

namespace App\Http\Controllers;

use App\JenisTransaksi;
use App\KodeJurnal;
use Illuminate\Http\Request;

class TiketController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index(){

        $jenis_transaksi = JenisTransaksi::all();
        $kode_jurnal = KodeJurnal::all();

        return view('tiket.index',compact('jenis_transaksi','kode_jurnal'));
    }
}

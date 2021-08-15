<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KirimBarangController extends Controller
{
    public function index(){
        return view('kirim_barang.index');
    }
}

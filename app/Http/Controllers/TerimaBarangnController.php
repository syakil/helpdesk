<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerimaBarangnController extends Controller
{
    public function index(){
        return view('terima_barang.index');
    }
}

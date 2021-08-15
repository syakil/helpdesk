<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    public function index(){
        return view('angsuran.index');
    }
}

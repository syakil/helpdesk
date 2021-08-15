<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SetoranController extends Controller
{
    public function index(){
        return view('setoran.index');
    }
}

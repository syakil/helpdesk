<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakalahController extends Controller
{
    public function index(){
        return view('wakalah.index');
    }
}

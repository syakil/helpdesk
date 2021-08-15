<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailMurabahahController extends Controller
{
    public function index(){
        return view('detail_murabahah.index');
    }
}

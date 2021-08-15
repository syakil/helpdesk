<?php

namespace App\Http\Controllers;

use App\ParamTgl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $param_tgl = ParamTgl::where('user_id',Auth::user()->id)->first();

        if(Auth::user()->level == 1) return view('home.admin', compact('param_tgl'));
          elseif(Auth::user()->level == 3) return view('home.accounting', compact('param_tgl'));
          elseif(Auth::user()->level == 2) return view('home.helpdesk', compact('param_tgl'));
          elseif(Auth::user()->level == 4) return view('home.spvs_helpdesk', compact('param_tgl'));
          else return redirect()->route('login');
    }
}

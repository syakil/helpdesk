<?php

namespace App\Http\Controllers;

use App\JenisTransaksi;
use App\TiketToko;
use DB;
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

        return view('tiket.index',compact('jenis_transaksi','kode_jurnal'));
    }

    public function data(){

        $tiket = TiketToko::select('tiket.*','jenis_transaksi.keterangan_transaksi','users.name')->where('status_tiket','pending')->leftJoin('users','users.id','tiket.user_id')->leftJoin('jenis_transaksi','jenis_transaksi.kode_transaksi','tiket.jenis_transaksi')->get();




        $no = 0;
        $data = array();
        foreach($tiket as $list){

            $row = array();
            $row[] = $list->no_tiket;
            $row[] = $list->name;
            $row[] = $list->cif;
            $row[] = $list->tanggal_transaksi;
            $row[] = $list->keterangan_transaksi;
            $row[] = $list->kode_transaksi;
            $row[] = $list->keterangan;
            $row[] = $list->fu_helpdesk == 'done'? '<span class="badge badge-success">Done</span>' : '<span class="badge badge-danger">Pending</span>';
            $row[] = $list->status_tiket == 'done'? '<span class="badge badge-success">Done</span>' : '<span class="badge badge-danger">Pending</span>';
            $row[] = '<div class="btn-group">
            <a class="btn btn-success" onClick="done('.$list->id.')" role="button"><i class="fa fa-check"></i>&ensp; Done</a>
            </div>';
            
            $data[] = $row;
            
        }

        $output = array("data" => $data);
        return response()->json($output);

    }

    public function done($id){

        $tiket = TiketToko::findOrFail($id);
        $tiket->fu_helpdesk = 'done';
        $tiket->update();

        return back()->with(["success" => "Tiket Anda Berhasil Diselesaikan!"]);

    }

}

<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('sekolah.beranda');
    }

    public function landing()
    {
        // $datas = DB::table('kehadirans')
        //         ->join('users', 'users.id', '=', 'kehadirans.sekolah_id')
        //         ->whereDate('kehadirans.created_at', date('Y-m-d'))
        //         ->select('kehadirans.*', 'users.name as nama_sekolah')
        //         ->get();

        return view('landing');
    }
}

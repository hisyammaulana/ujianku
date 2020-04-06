<?php

namespace App\Http\Controllers\Sekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exports\Siswa\SiswaExport;
use App\Siswa;
use Excel;
use Auth;
use DB;

class SekolahDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function exportExcelAll()
    {
        $data = Siswa::where('sekolah_id', Auth::user()->id)->get();

        return Excel::download(new SiswaExport($data), 'DAFTAR SISWA '.Auth::user()->name.'.xlsx');
    }

    public function exportExcelGender(Request $request)
    {
        $jenis_kelamin = $request->jenis_kelamin;

        $data = Siswa::where([['sekolah_id', Auth::user()->id], ['jenis_kelamin', '=', $jenis_kelamin]])->get();

        return Excel::download(new SiswaExport($data), 'Daftar siswa pada '.Auth::user()->name.'.xlsx');
    }
}

<?php

namespace App\Http\Controllers\Cabang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use DB;
use Auth;
use App\User;
use App\Siswa;
use App\Imports\SekolahImport;
use App\Exports\Cabang\SekolahExport;
use App\Exports\Cabang\SekolahRayonExport;
use App\Exports\Cabang\SiswaRayonExport;

class CabangDataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getSekolah()
    {
        $rayons = DB::table('rayons')
                  ->join('users', 'users.kode_rayon', '=', 'rayons.kd_rayon')
                  ->where('users.user_id', Auth::user()->id)
                  ->distinct('rayons.nama_rayon', 'rayons.kd_rayon')
                  ->select('nama_rayon', 'kd_rayon')->get();
                //   dd($rayons);

        return view('cabang.eksim.sekolahdata', compact('rayons'));
    }

    public function import_sekolah(Request $request)
    {
        // $this->validate($request, [
        //     'file' => 'required|mimes:xls,xlsx'
        // ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new SekolahImport, $file);

            return back()->with(['success' => 'Data Berhasil Disimpan!']);
        }

        return back()->with(['error' => 'Pilih file dulu!']);
    }

    public function exportAllSchools()
    {
        $data = DB::table('users')
                ->join('profils', 'users.id', '=', 'profils.user_id')
                ->join('rayons', 'users.kode_rayon', '=', 'rayons.kd_rayon')
                ->where('users.user_id', Auth::user()->id)
                ->select('users.*', 'profils.*', 'rayons.nama_rayon')
                ->get();

        return Excel::download(new SekolahExport($data), 'DAFTAR SEKOLAH.xlsx');
    }

    public function exportRayonSchools(Request $request)
    {
        $kode_rayon = $request->kode_rayon;

        $data = DB::table('users')
                ->join('profils', 'users.id', '=', 'profils.user_id')
                ->join('rayons', 'users.kode_rayon', '=', 'rayons.kd_rayon')
                ->where('users.kode_rayon', '=', $kode_rayon)
                ->get();
                // dd($data);
        return Excel::download(new SekolahRayonExport($data), 'DAFTAR SEKOLAH.xlsx');
    }

    public function getSiswa()
    {
        $rayons = DB::table('rayons')
                  ->join('users', 'users.kode_rayon', '=', 'rayons.kd_rayon')
                  ->where('users.user_id', Auth::user()->id)
                  ->distinct('rayons.nama_rayon', 'rayons.kd_rayon')
                  ->select('nama_rayon', 'kd_rayon')->get();
        $sekolahs = User::where('user_id', Auth::user()->id)->get();

        return view('cabang.eksim.siswadata', compact('rayons', 'sekolahs'));
    }

    public function exportRayonStudents(Request $request)
    {
        $kode_rayon = $request->rayon;
        $kode_sekolah = $request->sekolah;

        $data = Siswa::where([['kode_sekolah', $kode_sekolah], ['kode_rayon', $kode_rayon]])->get();
        // dd($data);

        return Excel::download(new SiswaRayonExport($data), 'DAFTAR SISWA.xlsx');
    }

    public function getKehadiran()
    {
        return view('cabang.eksim.kehadiran');
    }


}

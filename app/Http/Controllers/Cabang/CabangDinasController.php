<?php

namespace App\Http\Controllers\Cabang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Auth;

class CabangDinasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home()
    {
        $rayon = DB::table('rayons')
                ->join('users', 'users.kode_rayon', '=', 'rayons.kd_rayon')
                ->where('users.user_id', Auth::user()->id)
                ->pluck('rayons.nama_rayon', 'rayons.kd_rayon')->count();

        $sekolah = DB::table('users')->where('user_id', Auth::user()->id)->count();

        $siswa = DB::table('siswas')
                ->join('users', 'users.id', '=', 'siswas.sekolah_id')
                ->join('rayons', 'rayons.kd_rayon', '=', 'siswas.kode_rayon')
                ->where('users.user_id', Auth::user()->id)
                ->count();

        $kehadiran = DB::table('kehadirans')
                    ->join('users', 'users.id', '=', 'kehadirans.sekolah_id')
                    ->join('siswas', 'siswas.id', '=', 'kehadirans.siswa_id')
                    ->join('rayons', 'rayons.kd_rayon', '=', 'kehadirans.kode_rayon')
                    ->where('users.user_id', Auth::user()->id)
                    ->count();

        return view('cabang.beranda', compact('rayon', 'sekolah', 'siswa', 'kehadiran'));
    }

    public function index()
    {
        $sekolahs = DB::table('users')
                    ->join('profils', 'users.id', '=', 'profils.user_id')
                    ->join('rayons', 'users.kode_rayon', '=', 'rayons.kd_rayon')
                    ->where('users.user_id', Auth::user()->id)
                    ->select('users.*', 'profils.*', 'rayons.nama_rayon')
                    ->get();

        return view('cabang.cabangsekolah', compact('sekolahs'));
    }

    public function create()
    {
        return view('cabang.tambahsekolah');
    }

    public function store(Request $request)
    {
        User::create([
            'user_id' => $request->user_id,
            'role_id' => $request->role_id,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        $sekolah = User::find($id);
        return view('cabang.editsekolah', compact('sekolah'));
    }

    public function update(Request $request, User $sekolah)
    {
        $sekolah->update([
            'user_id' => $request->user_id,
            'role_id' => $request->role_id,
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return back()->with(['warning' => 'Data Berhasil Perbaharui!']);
    }

    public function destroy(User $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function getSiswa()
    {
        $siswas = DB::table('siswas')
                  ->join('users', 'users.id', '=', 'siswas.sekolah_id')
                  ->join('rayons', 'rayons.kd_rayon', '=', 'siswas.kode_rayon')
                  ->where('users.user_id', Auth::user()->id)
                  ->select('users.name as nama_sekolah', 'siswas.*', 'rayons.nama_rayon')
                  ->get();

        return view('cabang.cabangsiswa', compact('siswas'));
    }

    public function getKehadiran()
    {
        $kehadiranTodays = DB::table('kehadirans')
                          ->join('users', 'users.id', '=', 'kehadirans.sekolah_id')
                          ->join('siswas', 'siswas.id', '=', 'kehadirans.siswa_id')
                          ->join('rayons', 'rayons.kd_rayon', '=', 'kehadirans.kode_rayon')
                          ->where('users.user_id', Auth::user()->id)
                          ->whereDate('kehadirans.created_at', date('Y-m-d'))
                          ->select('kehadirans.*', 'users.name as nama_sekolah', 'siswas.*', 'rayons.*')
                          ->get();

        $kehadiranAlls = DB::table('kehadirans')
                          ->join('users', 'users.id', '=', 'kehadirans.sekolah_id')
                          ->join('siswas', 'siswas.id', '=', 'kehadirans.siswa_id')
                          ->join('rayons', 'rayons.kd_rayon', '=', 'kehadirans.kode_rayon')
                          ->where('users.user_id', Auth::user()->id)
                          ->select('kehadirans.*', 'kehadirans.created_at as waktu_absen', 'users.name as nama_sekolah', 'siswas.*', 'rayons.nama_rayon')
                          ->orderBy('kehadirans.created_at', 'DESC')
                          ->get();
                        //   dd($kehadiranAlls);
        return view('cabang.cabangkehadiran', compact('kehadiranTodays', 'kehadiranAlls'));
    }
}

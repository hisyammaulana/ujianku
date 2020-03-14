<?php

namespace App\Http\Controllers\Sekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use App\Kehadiran;
use Auth;
use DB;

class SekolahKehadiranController extends Controller
{

    public function index()
    {
        $kehadirans = DB::table('kehadirans')
                      ->join('users', 'users.id', '=', 'kehadirans.sekolah_id')
                      ->where('kehadirans.sekolah_id', Auth::user()->id)
                      ->whereDate('kehadirans.created_at', date('Y-m-d'))
                      ->select('kehadirans.*', 'users.name as nama_sekolah')
                      ->get();

        return view('sekolah.kehadiran', compact('kehadirans'));
    }

    public function create()
    {
        return view('sekolah.tambahabsen');
    }

    public function store(Request $request)
    {
        $rule = $request->validate([
            'no_ujian' => 'required|numeric'
        ]);

        Kehadiran::create([
            'sekolah_id' => $request->sekolah_id,
            'name' => $request->name,
            'no_peserta' => $request->no_ujian,
            'hari' => $request->hari,
            'pelajaran' => $request->mata_pelajaran,
            'keterangan' => $request->keterangan
        ], $rule);

        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $kehadiran = Kehadiran::find($id);
        return view('sekolah.editabsen', compact('kehadiran'));
    }

    public function update(Request $request, Kehadiran $kehadiran)
    {
        $request->validate([
            'no_ujian' => 'required|numeric'
        ]);

        $kehadiran->update([
            'sekolah_id' => $request->sekolah_id,
            'name' => $request->name,
            'no_peserta' => $request->no_ujian,
            'hari' => $request->hari,
            'pelajaran' => $request->mata_pelajaran,
            'keterangan' => $request->keterangan
        ]);

        return back()->with(['warning' => 'Data Berhasil Perbaharui!']);
    }

    public function destroy(Kehadiran $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }
}

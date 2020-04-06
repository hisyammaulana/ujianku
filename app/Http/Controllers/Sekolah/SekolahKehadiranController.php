<?php

namespace App\Http\Controllers\Sekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use App\Kehadiran;
use App\Siswa;
use App\Pelajaran;
use Auth;
use DB;

class SekolahKehadiranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $kehadirans = DB::table('kehadirans')
                      ->join('users', 'users.id', '=', 'kehadirans.sekolah_id')
                      ->join('siswas', 'siswas.id', '=', 'kehadirans.siswa_id')
                      ->where('kehadirans.sekolah_id', Auth::user()->id)
                      ->select('kehadirans.id as kehadiran_id', 'kehadirans.pelajaran',
                                'kehadirans.keterangan', 'kehadirans.created_at',
                                'users.*', 'siswas.*')
                      ->get();
                    //   dd($kehadirans);

        return view('sekolah.kehadiran', compact('kehadirans'));
    }

    public function create()
    {
        $pelajarans = Pelajaran::all();
        return view('sekolah.tambahabsen', compact('pelajarans'));
    }

    public function store(Request $request)
    {
        Kehadiran::create([
            'sekolah_id' => $request->sekolah_id,
            'kode_rayon' => $request->kode_rayon,
            'siswa_id' => $request->siswa_id,
            'pelajaran' => strtoupper($request->pelajaran),
            'keterangan' => strtoupper($request->keterangan),
        ]);

        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        $kehadiran = Kehadiran::find($id);
        return view('sekolah.editabsen', compact('kehadiran'));
    }

    public function update(Request $request, Kehadiran $kehadiran)
    {
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

    public function search(Request $request)
    {
        $siswas = Siswa::where([['sekolah_id', Auth::user()->id],['name', 'LIKE', '%'.$request->input('term', '').'%']])
                  ->get(['id', 'name as text', 'no_peserta']);
        return ['results' => $siswas];
    }
}

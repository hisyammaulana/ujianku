<?php

namespace App\Http\Controllers\Sekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use Auth;

class SekolahController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $siswas = Siswa::where('sekolah_id', Auth::user()->id)->get();
        return view('sekolah.daftarsiswa', compact('siswas'));
    }

    public function create()
    {
        return view('sekolah.tambahsiswa');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'no_ujian' => 'required|numeric'
        ]);

        Siswa::create([
            'sekolah_id' => $request->sekolah_id,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_ujian' => $request->no_ujian,
            'alamat' => $request->alamat,
        ]);

        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('sekolah.editsiswa', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nisn' => 'required|numeric',
            'no_ujian' => 'required|numeric'
        ]);

        $siswa->update([
            'sekolah_id' => $request->sekolah_id,
            'name' => $request->name,
            'nisn' => $request->nisn,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_ujian' => $request->no_ujian,
            'alamat' => $request->alamat,
        ]);

        return back()->with(['warning' => 'Data Berhasil Perbaharui!']);
    }

    public function destroy(Siswa $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }
}

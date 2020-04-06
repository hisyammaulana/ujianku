<?php

namespace App\Http\Controllers\Sekolah;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Siswa;
use App\Imports\SiswaImport;
use Excel;
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
            'no_induk' => 'required|numeric',
        ]);

        Siswa::create([
            'sekolah_id' => $request->sekolah_id,
            'kode_rayon' => $request->kode_rayon,
            'kode_sekolah' => $request->kode_sekolah,
            'kode_studi' => $request->kode_studi,
            'kode_peserta_sekolah' => $request->kode_peserta_sekolah,
            'no_peserta' => $request->no_peserta,
            'nisn' => $request->nisn,
            'no_induk' => $request->no_induk,
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ortu' => $request->nama_ortu,
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
            'no_induk' => 'required|numeric',
        ]);

        $siswa->update([
            'sekolah_id' => $request->sekolah_id,
            'kode_rayon' => $request->kode_rayon,
            'kode_sekolah' => $request->kode_sekolah,
            'kode_studi' => $request->kode_studi,
            'kode_peserta_sekolah' => $request->kode_peserta_sekolah,
            'no_peserta' => $request->no_peserta,
            'nisn' => $request->nisn,
            'no_induk' => $request->no_induk,
            'name' => $request->name,
            'jenis_kelamin' => $request->jenis_kelamin,
            'nama_ortu' => $request->nama_ortu,
        ]);

        return back()->with(['warning' => 'Data Berhasil Perbaharui!']);
    }

    public function destroy(Siswa $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }

    public function getImport()
    {
        return view('sekolah.eksimp.importsiswa');
    }

    public function import_excel(Request $request)
    {
        // $this->validate($request, [
        //     'file' => 'required|mimes:xls,xlsx'
        // ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            Excel::import(new SiswaImport, $file);

            return back()->with(['success' => 'Data Berhasil Disimpan!']);
        }
    }
}

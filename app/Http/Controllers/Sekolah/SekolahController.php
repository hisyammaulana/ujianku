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

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

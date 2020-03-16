<?php

namespace App\Http\Controllers\Cabang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
use Auth;

class CabangDinasController extends Controller
{

    public function index()
    {
        $sekolahs = User::where('user_id', Auth::user()->id)->get();
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

    public function show($id)
    {
        //
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
        $siswa = DB::table('siswas')
                  ->join('users', 'users.id', '=', 'siswas.sekolah_id')
                  ->where('users.user_id', Auth::user()->id)
                  ->select('users.name as nama_sekolah', 'siswas.*')
                  ->get();

        return view('cabang.cabangsiswa', compact('siswa'));
    }

    public function getKehadiran()
    {
        return view('cabang.cabangkehadiran');
    }
}

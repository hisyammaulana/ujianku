<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelajaran;

class PelajaranController extends Controller
{
    public function index()
    {
        $pelajarans = Pelajaran::all();
        return view('admin.pelajaran', compact('pelajarans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:pelajarans|min:3'
        ]);

        Pelajaran::create([
            'name' => $request->name,
        ]);

        return back()->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(Pelajaran $id)
    {
        $id->delete();

        return back()->with(['danger' => 'Data Berhasil Dihapus!']);
    }
}

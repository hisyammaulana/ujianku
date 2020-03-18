<?php

namespace App\Http\Controllers\Cabang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Excel;
use App\Imports\SekolahImport;

class CabangDataController extends Controller
{
    public function getSekolah()
    {
        return view('cabang.eksim.sekolahdata');
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
}

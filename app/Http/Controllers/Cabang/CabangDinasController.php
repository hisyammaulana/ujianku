<?php

namespace App\Http\Controllers\Cabang;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CabangDinasController extends Controller
{

    public function index()
    {
        return view('cabang.cabangsekolah');
    }

    public function create()
    {
        return view('cabang.tambahsekolah');
    }

    public function store(Request $request)
    {
        //
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

    public function getSiswa()
    {
        return view('cabang.cabangsiswa');
    }

    public function getKehadiran()
    {
        return view('cabang.cabangkehadiran');
    }
}

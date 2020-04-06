<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCabang()
    {
        return view('admin.admincabang');
    }

    public function getSekolah()
    {
        return view('admin.admincabang');
    }

    public function getSiswa()
    {
        return view('admin.admincabang');
    }
}

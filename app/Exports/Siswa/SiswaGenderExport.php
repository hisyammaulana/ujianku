<?php

namespace App\Exports\Siswa;

use App\Siswa;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Exportable;

class SiswaGenderExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data =$data;
    }

    public function view(): View
    {
        return view('sekolah.export.jeniskelaminsiswa', [
            'data' => $this->data
        ]);
    }
}

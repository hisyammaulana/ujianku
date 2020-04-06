<?php

namespace App\Exports\Cabang;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Exportable;

class SekolahRayonExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data =$data;
    }

    public function view(): View
    {
        return view('cabang.eksim.sekolah.rayonsekolah',[
            'data' => $this->data
        ]);
    }
}

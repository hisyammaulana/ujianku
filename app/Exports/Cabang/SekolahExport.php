<?php

namespace App\Exports\Cabang;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Exportable;

class SekolahExport implements FromView
{
    protected $data;

    public function __construct($data)
    {
        $this->data =$data;
    }

    public function view(): View
    {
        return view('cabang.eksim.sekolah.semuasekolah',[
            'data' => $this->data
        ]);
    }
}

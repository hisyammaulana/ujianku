<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\User;
use Auth;

class SekolahImport implements ToModel
{

    public function model(array $row)
    {
        return new User([
            'user_id' => Auth::user()->id,
            'kode_prov' => $row[1],
            'kode_rayon' => $row[3],
            'kode_sekolah' => trim($row[5]),
            'name' => $row[6],
            'password' => bcrypt(trim($row[5])),
            'role_id' => 4
        ]);
    }
}

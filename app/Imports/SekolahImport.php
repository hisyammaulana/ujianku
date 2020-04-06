<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\User;
use App\Profil;
use Auth;

class SekolahImport implements ToCollection
{

    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
           $sekolah = User::create([
                    'user_id' => Auth::user()->id,
                    'kode_prov' => trim($row[1]),
                    'kode_rayon' => trim($row[3]),
                    'kode_sekolah' => trim($row[5]),
                    'name' => $row[6],
                    'username' => trim($row[3]).trim($row[5]),
                    'password' => bcrypt("un".trim($row[3]).trim($row[5])),
                    'jenis' => $row[8],
                    'role_id' => 4
            ]);

            $detail = Profil::create([
                    'user_id' => $sekolah->id,
                    'npsn' => $row[7],
                    'sts_sek' => $row[9],
                    'kurikulum' => $row[11],
                    'ikut_un' => $row[12],
            ]);
        }
    }
}

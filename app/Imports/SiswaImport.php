<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Siswa;
use Auth;

class SiswaImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Siswa::create([
                'sekolah_id' => Auth::user()->id,
                'kode_rayon' => Auth::user()->kode_rayon,
                'kode_sekolah' => Auth::user()->kode_sekolah,
                'kode_studi' => trim($row[4]),
                'kode_peserta_sekolah' => $row[5],
                'no_peserta' => $row[6],
                'nisn' => trim($row[7]),
                'no_induk' => trim($row[8]),
                'name' => $row[9],
                'jenis_kelamin' => $row[10],
                'nama_ortu' => $row[11],
            ]);
        }
    }
}

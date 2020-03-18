<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangDinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin1',
                'name' => 'Cabang Dinas 1',
                'password' => bcrypt('cabdin1'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin2',
                'name' => 'Cabang Dinas 2',
                'password' => bcrypt('cabdin2'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin3',
                'name' => 'Cabang Dinas 3',
                'password' => bcrypt('cabdin3'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin4',
                'name' => 'Cabang Dinas 4',
                'password' => bcrypt('cabdin4'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin5',
                'name' => 'Cabang Dinas 5',
                'password' => bcrypt('cabdin5'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin6',
                'name' => 'Cabang Dinas 6',
                'password' => bcrypt('cabdin6'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin7',
                'name' => 'Cabang Dinas 7',
                'password' => bcrypt('cabdin7'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin8',
                'name' => 'Cabang Dinas 8',
                'password' => bcrypt('cabdin8'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin9',
                'name' => 'Cabang Dinas 9',
                'password' => bcrypt('cabdin9'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin10',
                'name' => 'Cabang Dinas 10',
                'password' => bcrypt('cabdin10'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin11',
                'name' => 'Cabang Dinas 11',
                'password' => bcrypt('cabdin11'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin12',
                'name' => 'Cabang Dinas 12',
                'password' => bcrypt('cabdin12'),
                'role_id' => 3
            ],
        ]);
    }
}

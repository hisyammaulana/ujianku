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
                'username' => 'cabdin1',
                'password' => bcrypt('cabdin1'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin2',
                'name' => 'Cabang Dinas 2',
                'username' => 'cabdin2',
                'password' => bcrypt('cabdin2'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin3',
                'name' => 'Cabang Dinas 3',
                'username' => 'cabdin3',
                'password' => bcrypt('cabdin3'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin4',
                'name' => 'Cabang Dinas 4',
                'username' => 'cabdin4',
                'password' => bcrypt('cabdin4'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin5',
                'name' => 'Cabang Dinas 5',
                'username' => 'cabdin5',
                'password' => bcrypt('cabdin5'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin6',
                'name' => 'Cabang Dinas 6',
                'username' => 'cabdin6',
                'password' => bcrypt('cabdin6'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin7',
                'name' => 'Cabang Dinas 7',
                'username' => 'cabdin7',
                'password' => bcrypt('cabdin7'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin8',
                'name' => 'Cabang Dinas 8',
                'username' => 'cabdin8',
                'password' => bcrypt('cabdin8'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin9',
                'name' => 'Cabang Dinas 9',
                'username' => 'cabdin9',
                'password' => bcrypt('cabdin9'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin10',
                'name' => 'Cabang Dinas 10',
                'username' => 'cabdin10',
                'password' => bcrypt('cabdin10'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin11',
                'name' => 'Cabang Dinas 11',
                'username' => 'cabdin11',
                'password' => bcrypt('cabdin11'),
                'role_id' => 3
            ],
            [
                'user_id' => 0,
                'kode_prov' => '',
                'kode_rayon' => '',
                'kode_sekolah' => 'cabdin12',
                'name' => 'Cabang Dinas 12',
                'username' => 'cabdin12',
                'password' => bcrypt('cabdin12'),
                'role_id' => 3
            ],
        ]);
    }
}

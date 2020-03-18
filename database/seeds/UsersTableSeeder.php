<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
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
                'kode_sekolah' => 'developer',
                'name' => 'Developer',
                'password' => bcrypt('developer'),
                'role_id' => 1
            ],
            [
                'user_id' => 0,
                'kode_prov' => '03',
                'kode_rayon' => '',
                'kode_sekolah' => 'adminprov',
                'name' => 'Admin Provinsi',
                'password' => bcrypt('adminprov'),
                'role_id' => 2
            ]
        ]);
    }
}

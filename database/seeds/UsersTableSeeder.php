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
        DB::table('users')->insert([[
            'name' => 'Developer',
            'user_id' => 0,
            'username' => 'dev_user',
            'email' => 'dev@mail.com',
            'password' => bcrypt('1234567890'),
            'role_id' => 1,
        ],
        [   'name' => 'Admin Provinsi',
            'user_id' => 1,
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('1234567890'),
            'role_id' => 2,
        ],
        [
            'name' => 'Cabang Dinas',
            'user_id' => 2,
            'username' => 'cabang_dinas',
            'email' => 'cabang@mail.com',
            'password' => bcrypt('1234567890'),
            'role_id' => 3,
        ],
        [
            'name' => 'Sekolah 1 Tegal',
            'user_id' => 3,
            'username' => 'sekolah1',
            'email' => 'sekolah1@mail.com',
            'password' => bcrypt('1234567890'),
            'role_id' => 4,
        ],
        [
            'name' => 'Sekolah 2 Tegal',
            'user_id' => 3,
            'username' => 'sekolah2',
            'email' => 'sekolah2@mail.com',
            'password' => bcrypt('1234567890'),
            'role_id' => 4,
        ]
        ]);
    }
}

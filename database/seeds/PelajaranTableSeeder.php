<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelajarans')->insert([
            [
                'name' => 'Matematika'
            ],
            [
                'name' => 'Bahasa Indonesia'
            ],
            [
                'name' => 'Bahasa Inggris'
            ],
            [
                'name' => 'Kejuruan'
            ]
        ]);
    }
}

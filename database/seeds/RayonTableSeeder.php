<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RayonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rayons')->insert([
            [
                'kd_prov' => 03,
                'kd_rayon' => 01,
                'name' => 'Kota Semarang'
            ],
            [
                'kd_prov' => 03,
                'kd_rayon' => 02,
                'name' => 'Kota Surakarta'
            ],
            [
                'kd_prov' => 03,
                'kd_rayon' => 03,
                'name' => 'Kota Tegal'
            ],
            [
                'kd_prov' => 03,
                'kd_rayon' => 04,
                'name' => 'Kota Pekalongan'
            ],
            [
                'kd_prov' => 03,
                'kd_rayon' => 05,
                'name' => 'Kota Salatiga'
            ],
            [
                'kd_prov' => 03,
                'kd_rayon' => 06,
                'name' => 'Kota Magelang'
            ],
            [
                'kd_prov' => 03,
                'kd_rayon' => 07,
                'name' => 'Kabupaten Banyumas'
            ]
        ]);
    }
}

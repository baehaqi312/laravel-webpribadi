<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('educaion')->insert([
            'sekolah' => 'Sekolah Menenah Kejurusan',
            'namasekolah' => 'SMK Pertiwi Kuningan',
            'tahun' => '2017 - 2020',
        ]);

        DB::table('educaion')->insert([
            'sekolah' => 'Sekolah Menenah Pertama',
            'namasekolah' => 'MTs Al - Munthohir',
            'tahun' => '2014 - 2017',
        ]);

        DB::table('educaion')->insert([
            'sekolah' => 'Sekolah Dasar',
            'namasekolah' => 'SDN 2 Winduhaji',
            'tahun' => '2008 - 2014',
        ]);
        
    }
}

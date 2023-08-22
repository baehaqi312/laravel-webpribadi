<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PortofolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portofolio')->insert([
            'judul' => 'Laravel 8',
            'title' => 'Ujian Akhir Semester 3.',
            'gambar' => 'portofolio1',
        ]);

        DB::table('portofolio')->insert([
            'judul' => 'Laravel 7',
            'title' => 'Ujian Tengah Semester 3.',
            'gambar' => 'portofolio2',
        ]);

        DB::table('portofolio')->insert([
            'judul' => 'HTML & CSS',
            'title' => 'Ujian Akhir Semester 3.',
            'gambar' => 'portofolio3',
        ]);

    }
}

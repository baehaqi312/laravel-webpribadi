<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'nama' => 'Luthfi Baehaqi',
            'title' => 'Halo, Nama Saya Luthfi Baehaqi, Pengembang Situs Web Junior, Saya suka Membuat Situs Web Beatifull, Dan Saya Juga Suka Melakukan Logika Memikirkan Aplikasi Situs Web.',
            'umur' =>  20,
            'project' =>  1,
            'ig' =>  750,
            'created_at' => Carbon::now(),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kerja')->insert([
            'kerja' => 'Mitra Kerja - Instalasi E-Voting',
            'namakerja' => 'PT Inti Konten Indonesia',
            'tahunkerja' => '2019 - 2020',
        ]);
        DB::table('kerja')->insert([
            'kerja' => 'Prakerin Kerja Lapang',
            'namakerja' => 'PT Inti Persero Bandung',
            'tahunkerja' => '2019',
        ]);
    }
}

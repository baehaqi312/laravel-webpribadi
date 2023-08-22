<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            'type' => 'all',
            'gambar' => 'all1',
        ]);

        DB::table('gallery')->insert([
            'type' => 'all',
            'gambar' => 'all2',
        ]);

        DB::table('gallery')->insert([
            'type' => 'cowo',
            'gambar' => 'cowo1',
        ]);

        DB::table('gallery')->insert([
            'type' => 'cowo',
            'gambar' => 'cowo2',
        ]);

        DB::table('gallery')->insert([
            'type' => 'cowo',
            'gambar' => 'cowo3',
        ]);
        
        DB::table('gallery')->insert([
            'type' => 'cewe',
            'gambar' => 'cewe1',
        ]);

        DB::table('gallery')->insert([
            'type' => 'cewe',
            'gambar' => 'cewe2',
        ]);
    }
}

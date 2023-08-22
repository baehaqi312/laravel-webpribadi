<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutSeeder::class);
        $this->call(BlogSeeder::class);
        $this->call(KerjaSeeder::class);
        $this->call(EducationSeeder::class);
        $this->call(PortofolioSeeder::class);
        $this->call(GallerySeeder::class);
    }
}

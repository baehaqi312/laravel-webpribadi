<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog')->insert([
            'nama' => 'Luthfi Baehaqi',
            'gambar' => 'html',
            'title' => 'Html & Css',
            'subtitle' => 'HTML adalah, (HyperText Markup Language) sebuah bahasa standar',
            'body' => 'HTML adalah, (HyperText Markup Language) sebuah bahasa standar yang digunakan oleh browser Internet untuk membuat halaman dan dokumen pada sebuah Web yang kemudian dapat diakses dan dibaca layaknya sebuah artikel. HTMLjuga dapat digunakan sebagai link link antara file-file dalam situs atau dalam komputer dengan menggunakan localhost, atau link yang menghubungkan antar situs dalam dunia internet.

            <p>Cascading Style Sheet (CSS) merupakan salah satu bahasa pemrograman web untuk mengendalikan beberapa komponen dalam sebuah web sehingga akan lebih terstruktur dan seragam. Sama halnya styles dalam aplikasi pengolahan kata seperti Microsoft Word yang dapat mengatur beberapa style, misalnya heading, subbab, bodytext, footer, images, dan style lainnya untuk dapat digunakan bersama-sama dalam beberapa file. Pada umumnya CSS dipakai untuk memformat tampilan halaman web yang dibuat dengan bahasa HTML dan XHTML.</p>',
            'created_at' => Carbon::now(),
        ]);

        DB::table('blog')->insert([
            'nama' => 'Luthfi Baehaqi',
            'gambar' => 'javascript',
            'title' => 'Java Script',
            'subtitle' => 'JavaScript adalah bahasa pemrograman populer yang digunakan untuk',
            'body' => 'JavaScript adalah bahasa pemrograman populer yang digunakan untuk membuat situs dengan konten website yang dinamis. 
            Konten dinamis artinya konten dapat bergerak atau berubah di depan layar tanpa perlu mereload halaman. Misalnya saja, fitur slideshow foto, gambar animasi, pengisian poling, dan lainnya.  
            JavaScript sendiri sebenarnya biasanya dikolaborasikan dengan HTML dan CSS. Di mana belajar HTML adalah untuk membuat struktur website dan CSS adalah bahasa untuk merancang style halaman website. Lalu, JavaScript berperan menambahkan elemen interaktif untuk meningkatkan engagement pengguna. 
            Sebagai contoh, ketika Anda memberikan like dan komentar di Twitter. Anda bisa melihat munculnya jumlah like dan komentar yang terus bertambah secara real time, tanpa direload.  ',
            'created_at' => Carbon::now(),
        ]);

        DB::table('blog')->insert([
            'nama' => 'Luthfi Baehaqi',
            'gambar' => 'php',
            'title' => 'PHP',
            'subtitle' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Totam eveniet odit quod dicta quisquam enim voluptatum magnam ea nisi reiciendis iusto eos ad dolore aspernatur exercitationem officia officiis, tempore quos eligendi? Minima aut alias fugit sequi excepturi dicta, ut, maxime vitae perspiciatis ipsam hic voluptatibus pariatur voluptas. Quo quam perferendis excepturi necessitatibus eum, exercitationem illo ipsa ab, nihil ratione dicta tempore delectus, molestias fugit. Adipisci veniam cupiditate voluptatibus itaque delectus dicta debitis nostrum eligendi assumenda corporis, autem omnis, est reprehenderit quos officia sit ducimus sapiente praesentium amet dignissimos a quibusdam molestiae deserunt commodi. Enim tempore iste dolorem modi! Aliquam, tempora.',
            'created_at' => Carbon::now(),
        ]);
    }
}

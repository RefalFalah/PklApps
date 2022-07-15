<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ["title" => "Tips cepat nikah", "content" => "Assalaam Studio"],
            ["title" => "Harus menunda nikah?", "content" => "Assalaam Studio"],
            ["title" => "Membangun visi misi keluarga", "content" => "Assalaam Studio"]
        ];

        // Masukan ke database
        DB::table('posts')->insert($sample);
    }
}

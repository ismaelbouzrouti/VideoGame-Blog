<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'userId' => 1,
            'title' => 'Fifa24',
            'cover_image' => 'storage/avatars/22b37959aedcda65054b38b77cd98838b8a498ab72245d1e_(1)_1705354402.jpg',
            'content' => 'Great Game!',
            'publishing_date' => now(),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}

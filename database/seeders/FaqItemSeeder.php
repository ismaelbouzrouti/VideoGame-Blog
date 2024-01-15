<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq_items')->insert([

            'categoryId' => 1,
            'question' => 'Is it child friendly?',
            'answer' => 'No it is not!',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}

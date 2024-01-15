<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faq_categories')->insert([

            'categoryName' => 'RPG',
            'created_at' => now(),
            'updated_at' => now()

        ]);
    }
}

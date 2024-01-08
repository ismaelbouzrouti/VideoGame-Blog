<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'email' => 'admin@ehb.be',
            'password' => Hash::make('Password!321'),
            'isAdmin' => 1,
            'remember_token' => Str::random(60),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

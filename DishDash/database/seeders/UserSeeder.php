<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user')->insert([
            'email' => 'dishdash@gmail.com',
            'status' => 1,
            'password' => Hash::make('dishdash'),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),

        ]);
    }
}

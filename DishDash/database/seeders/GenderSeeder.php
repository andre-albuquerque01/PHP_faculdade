<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gender')->insert(
            [
                [
                    'name' => 'Masculino',
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),

                ],
                [
                    'name' => 'Feminino',
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),

                ],
                [
                    'name' => 'Outro',
                    'created_at' => Date::now(),
                    'updated_at' => Date::now(),

                ]
            ]
        );
    }
}

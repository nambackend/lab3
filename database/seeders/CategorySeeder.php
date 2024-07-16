<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(
            [
                ['name' => 'Ngoại ngữ'],
                ['name' => 'Tự nhiên'],
                ['name' => 'Lịch sử'],
                ['name' => 'Tiếng anh'],
                ['name' => 'Địa lí']
            ]
        );
    }

}
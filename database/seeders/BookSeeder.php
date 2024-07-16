<?php

namespace Database\Seeders;


use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++){
            DB::table('books')->insert([
                'title'=>$faker->text(200),
                'thumbnail' =>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwOfbpKwLRP91JD52SV4ptdAUSqhcFcFYjDg&s',
                'author'=>$faker->text(50),
                'publisher'=>$faker->text(50),
                'publication'=>$faker->date(),
                'price'=>rand(1,100),
                'quantity'=>rand(1,200),
                'category_id'=>rand(1,5)
            ]);
        }
    }
}
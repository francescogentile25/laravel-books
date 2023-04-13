<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_book = new Book();
            $new_book->title = $faker->text(20);
            $new_book->copy_number = $faker->randomNumber(1, 99);
            $new_book->save();
        }
    }
}

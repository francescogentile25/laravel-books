<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Genre;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        $genre_ids = Genre::all()->pluck('id')->all();
        $author_ids = Author::all()->pluck('id')->all();

        for ($i = 0; $i < 20; $i++) {
            $new_book = new Book();
            $new_book->title = $faker->text(20);
            $new_book->copy_number = $faker->randomNumber(1, 99);
            $new_book->genre_id = $faker->randomElement($genre_ids);
            $new_book->save();
            $new_book->authors()->attach($faker->randomElements($author_ids, rand(0, 10)));
        }
    }
}

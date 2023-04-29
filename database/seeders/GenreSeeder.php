<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $generes = ['Giallo', 'Horror', 'Manga', 'Fumetto'];
        foreach ($generes as $genre_name) {
            $new_genre = new Genre();
            $new_genre->title = $genre_name;
            $new_genre->save();
        }
    }
}

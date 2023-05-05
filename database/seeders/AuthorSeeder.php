<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authors = [
            "J.K. Rowling",
            "Stephen King",
            "Harper Lee",
            "Ernest Hemingway",
            "Jane Austen",
            "F. Scott Fitzgerald",
            "George Orwell",
            "Charles Dickens",
            "Mark Twain",
            "Virginia Woolf"
        ];
        foreach ($authors as $author_name) {
            $new_author = new Author();
            $new_author->name = $author_name;
            $new_author->slug = Str::slug($author_name);
            $new_author->save();
        }
    }
}

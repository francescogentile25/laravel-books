<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run()
    {
        $books=[
            ['title' => 'Harry Potter', 'copy_number' => 10 ],
            ['title' =>'bootsrap is better', 'copy_number' => 9],
        ];
        
    }
}
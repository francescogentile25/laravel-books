<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $books = Book::all();
        $data = [
            'books' => $books
        ];
        return view('welcome', $data);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Certificate;
use App\Models\Record;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {

        return view('admin.index');
    }

    public function home()
    {
        // return view('front.home');
        $books = Book::paginate(8);
        return view('front.books', compact('books'));
    }

    public function books()
    {
        $books = Book::paginate(8);
        return view('front.books', compact('books'));
    }

    public function bookDetails($slug)
    {
        $model = Book::where('slug', $slug)->first();
        return view('front.book-details', compact('model'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Certificate;
use App\Models\Record;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        dd('welocme');
        return view('front.index', compact('books'));
    }

    public function books()
    {
        $books = Book::get();
        // return view('front.books', compact('books'));
        // dd($books);
        return view('front.index', compact('books'));
    }
    public function contactUs()
    {
        // return view('front.books', compact('books'));
        return view('front.contact');
    }

    public function bookDetails($slug)
    {
        $model = Book::where('slug', $slug)->first();
        return view('front.book-details', compact('model'));
    }
}

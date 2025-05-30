<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Certificate;
use App\Models\Record;
use App\Models\Multimedia;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function dashboard()
    {
        $total_books = Book::count();
        $total_media = Multimedia::count();
        return view('admin.index', compact('total_books', 'total_media'));
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
        $books = Book::take(10)->orderBy('id', 'desc')->get();
        $multimedia = Multimedia::take(10)->orderBy('id', 'desc')->get();

        return view('front.index', compact('books'));
    }
    public function all_books()
    {
        $books = Book::paginate(10);
        return view('front.books-gird', compact('books'));
    }
    public function contactUs()
    {
        // return view('front.books', compact('books'));
        return view('front.contact');
    }

    public function showPdf($id)
    {

        $file = Book::find($id);
        $filePath = $file->file_path;
        $fileName = $file->name;
        $mimeType = 'application/pdf';

        $fileContents = File::get(public_path($filePath));

        return response()->make($fileContents, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => "inline; filename=\"$fileName\"",
        ]);
    }

    public function bookDetails($slug)
    {
        $data = Book::where('slug', $slug)->firstOrFail();
        return view('front.books-media-detail', compact('data'));
    }
    
    public function blog()
    {
        return view('front.blog');
    }
    
    public function audios()
    {
        $audios = Multimedia::where('type', 'audio')->get();
        return view('front.audios', compact('audios'));
    }

    public function videos()
    {
        $videos = Multimedia::where('type', 'video')->get();
        $audios = Multimedia::where('type', 'audio')->get();
        return view('front.videos', compact('videos', 'audios'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.books.index', ['books' => Book::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Category::all();
        return view('admin.books.create', compact('users', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'isbn' => 'nullable',
            'publication_date' => 'nullable|date',
            'summary' => 'nullable',
            'cover_image' => 'nullable|image',
            'file_path' => 'nullable|file',
            'pages' => 'nullable|integer',
            'publisher' => 'nullable',
        ]);

        $book = new Book();
        $book->title = $request->title;
        $book->user_id = $request->user_id;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn;
        $book->publication_date = $request->publication_date;
        $book->summary = $request->summary;
        $book->pages = $request->pages;
        $book->publisher = $request->publisher;
        $book->save();

        $book->addAllMediaFromTokens();

        return redirect()->route('books.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail(decrypt($id));
        $users = User::all();
        $categories = Category::all();
        return view('admin.books.edit', compact('book', 'users', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:categories,id',
            'isbn' => 'nullable',
            'publication_date' => 'nullable|date',
            'summary' => 'nullable',
            'cover_image' => 'nullable|image',
            'file_path' => 'nullable|file',
            'pages' => 'nullable|integer',
            'publisher' => 'nullable',
        ]);

        $book = Book::findOrFail(decrypt($id));
        $book->title = $request->title;
        $book->user_id = $request->user_id;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn;
        $book->publication_date = $request->publication_date;
        $book->summary = $request->summary;
        $book->pages = $request->pages;
        $book->publisher = $request->publisher;
        $book->save();

        $book->addAllMediaFromTokens();

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail(decrypt($id));

        if ($book->cover_image) {
            Storage::delete($book->cover_image);
        }

        if ($book->file_path) {
            Storage::delete($book->file_path);
        }

        $book->delete();
        return redirect()->route('books.index');
    }
}
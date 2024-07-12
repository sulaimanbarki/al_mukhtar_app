<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
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
            'pages' => 'nullable|integer',
            'publisher' => 'nullable',
        ]);

        $filePath = null;
        if ($request->hasFile('file_path')) {
            // Get the uploaded file
            $file = $request->file('file_path');
            // Create a unique name for the file
            $fileName = time() . '_' . $file->getClientOriginalName();
            // Define the path where the file should be saved
            $destinationPath = public_path('pdf');
            // Move the file to the public/pdf directory
            $file->move($destinationPath, $fileName);
            // Construct the file path to be stored in the database
            $filePath = 'pdf/' . $fileName;
        }

        $book = new Book();
        $book->title = $request->title;
        $book->slug = Str::slug($request->title);
        $book->user_id = $request->user_id;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn;
        $book->publication_date = $request->publication_date;
        $book->summary = $request->summary;
        $book->pages = $request->pages;
        $book->publisher = $request->publisher;
        $book->file_path = $filePath;
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
        $book->slug = Str::slug($request->title);
        $book->user_id = $request->user_id;
        $book->category_id = $request->category_id;
        $book->isbn = $request->isbn;
        $book->publication_date = $request->publication_date;
        $book->summary = $request->summary;
        $book->pages = $request->pages;
        $book->publisher = $request->publisher;

        if ($request->hasFile('file_path')) {
            // Delete the old file if it exists
            if ($book->file_path) {
                $oldFilePath = public_path(str_replace(env('APP_URL') . '/', '', $book->file_path));
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            // Store the new file
            $file = $request->file('file_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = 'pdf/' . $fileName;
            $file->move(public_path('pdf'), $fileName);
            $book->file_path = env('APP_URL') . '/' . $filePath;
        }

        $book->save();

        $book->addAllMediaFromTokens();

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
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

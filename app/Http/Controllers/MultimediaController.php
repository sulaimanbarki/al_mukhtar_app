<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Multimedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MultimediaController extends Controller
{
    public function index()
    {
        return view('admin.multimedia.index', ['multimedia' => Multimedia::with('category')->get()]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.multimedia.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|in:audio,video',
            // 'path' => 'nullable|url',
            'audio_file' => 'nullable|file|mimes:mp3,wav,ogg,flac',
        ]);

        $multimedia = new Multimedia();
        $multimedia->title = $request->title;
        $multimedia->description = $request->description;
        $multimedia->category_id = $request->category_id;
        $multimedia->type = $request->type;
        $multimedia->path = $request->path;
        $multimedia->save();

        if ($request->type == 'audio' && $request->path) {
            $multimedia->addMediaFromRequest('path')->toMediaCollection('audio_file');
        }

        return redirect()->route('multimedia.index');
    }

    public function edit($id)
    {
        $multimedia = Multimedia::findOrFail(decrypt($id));
        $categories = Category::all();
        return view('admin.multimedia.edit', compact('multimedia', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|in:audio,video',
            'path' => $request->type == 'audio' ? 'nullable' : 'required|url',
        ]);

        $multimedia = Multimedia::findOrFail(decrypt($id));
        $multimedia->title = $request->title;
        $multimedia->description = $request->description;
        $multimedia->category_id = $request->category_id;
        $multimedia->type = $request->type;
        $multimedia->path = $request->path;
        $multimedia->save();

        if ($request->type == 'audio' && $request->has('audio_file')) {
            $multimedia->addMediaFromTokens('audio_file')->toMediaCollection('audio_file');
        } elseif ($request->type == 'video') {
            // Handle video update logic if needed
        }

        return redirect()->route('multimedia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $multimedia = Multimedia::findOrFail(decrypt($id));

        // Delete associated media files if any
        if ($multimedia->getMedia('audio_file')->count() > 0) {
            $multimedia->getMedia('audio_file')->each(function ($file) {
                $file->delete();
            });
        }

        $multimedia->delete();

        return redirect()->route('multimedia.index');
    }
}

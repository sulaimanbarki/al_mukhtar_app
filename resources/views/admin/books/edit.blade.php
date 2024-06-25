@extends('admin.layout')
@section('app')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Books</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('books.index') }}">Books</a></li>
            <li class="breadcrumb-item active">Edit Book</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Book</h3>
                    <a href="{{ route('books.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="app">
                    <form action="{{ route('books.update', encrypt($book->id)) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <select name="user_id" class="form-control">
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $book->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category_id" class="form-control">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" name="isbn" class="form-control" value="{{ $book->isbn }}">
                        </div>
                        <div class="form-group">
                            <label>Publication Date</label>
                            <input type="date" name="publication_date" class="form-control" value="{{ $book->publication_date }}">
                        </div>
                        <div class="form-group">
                            <label>Summary</label>
                            <textarea name="summary" class="form-control" rows="3">{{ $book->summary }}</textarea>
                        </div>
                        <div>
                            <file-uploader
                                    :unlimited="false"
                                    collection="cover_image"
                                    :tokens="{{ json_encode(old('cover_image', [])) }}"
                                    label="Cover Image"
                                    notes="Supported types: jpeg, png,jpg,gif"
                                    accept="image/jpeg,image/png,image/jpg,image/gif"
                            ></file-uploader>
                        </div>
                        <div>
                            <file-uploader
                                    :unlimited="false"
                                    collection="file_path"
                                    :tokens="{{ json_encode(old('file_path', [])) }}"
                                    label="File (PDF or other)"
                                    notes="Supported types: pdf"
                                    accept="application/pdf"
                            ></file-uploader>
                        </div>
                        <div class="form-group">
                            <label>Pages</label>
                            <input type="number" name="pages" class="form-control" value="{{ $book->pages }}">
                        </div>
                        <div class="form-group">
                            <label>Publisher</label>
                            <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection

@extends('admin.layout')
@section('app')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Multimedia</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Multimedia</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Multimedia List</h3>
                    <a href="{{ route('multimedia.create') }}" class="btn btn-primary btn-sm float-right">Create Multimedia</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Path</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($multimedia as $media)
                            <tr>
                                <td>{{ $media->id }}</td>
                                <td>{{ $media->title }}</td>
                                <td>{{ $media->description }}</td>
                                <td>{{ ucfirst($media->type) }}</td>
                                <td>{{ $media->category->name }}</td>
                                <td>
                                    @if($media->type == 'audio')
                                        <a href="{{ $media->path }}" target="_blank">Listen</a>
                                    @else
                                        <a href="{{ $media->path }}" target="_blank">Watch</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('multimedia.destroy', encrypt($media->id)) }}" method="POST">
                                        <a href="{{ route('multimedia.edit', encrypt($media->id)) }}" class="btn btn-primary btn-sm mr-1">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection

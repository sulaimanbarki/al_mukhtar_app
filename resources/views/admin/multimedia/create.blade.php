@extends('admin.layout')
@section('app')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Create Multimedia</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Create Multimedia</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Multimedia</h3>
                </div>
                <!-- /.card-header -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body" id="app">
                    <form action="{{ route('multimedia.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category_id">Category</label>
                            <select name="category_id" class="form-control" required>
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select name="type" class="form-control" required>
                                <option value="">Select Type</option>
                                <option value="audio">Audio</option>
                                <option value="video">Video</option>
                            </select>
                        </div>
                        {{-- <div id="audio-file" style="display: none;">
                            <file-uploader
                                    :unlimited="false"
                                    collection="audio_file"
                                    :tokens="{{ json_encode(old('audio_file', [])) }}"
                                    label="Audio File"
                                    notes="Supported types: mp3"
                                    accept="audio/mp3,audio/mpeg,audio/mp4,audio/wav,audio/ogg,audio/flac,audio/aac,audio/aacp,audio/x-m4a,audio/x-m4p,audio/x-m4b,audio/x-m4r,audio/x-m4v,audio/x-mp3,audio/x-mp4,audio/x-wav,audio/x-ogg,audio/x-flac,audio/x-aac,audio/x-aacp,audio/x-x-m4a,audio/x-x-m4p,audio/x-x-m4b,audio/x-x-m4r,audio/x-x-m4v,audio/x-x-mp3,audio/x-x-mp4,audio/x-x-wav,audio/x-x-ogg,audio/x-x-flac,audio/x-x-aac,audio/x-x-aacp"
                            ></file-uploader>
                        </div> --}}

                        {{-- // audio_file=input=file --}}
                        <div class="form-group" id="audio-file" style="display: none;">
                            <label for="path">Audio File</label>
                            <input type="file" name="path" class="form-control" accept="audio/mp3,audio/mpeg">
                        </div>
                        <div class="form-group" id="video-link" style="display: none;">
                            <label for="path">Video Link</label>
                            <input type="url" name="path" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Create</button>
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

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const typeSelect = document.querySelector('select[name="type"]');
        const audioFile = document.getElementById('audio-file');
        const videoLink = document.getElementById('video-link');

        typeSelect.addEventListener('change', function () {
            if (this.value === 'audio') {
                audioFile.style.display = 'block';
                videoLink.style.display = 'none';
            } else if (this.value === 'video') {
                audioFile.style.display = 'none';
                videoLink.style.display = 'block';
            } else {
                audioFile.style.display = 'none';
                videoLink.style.display = 'none';
            }
        });
    });
</script>
@endpush

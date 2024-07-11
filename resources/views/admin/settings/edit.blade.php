@extends('admin.layout')
@section('app')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Settings</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('settings.index') }}">Settings</a></li>
            <li class="breadcrumb-item active">Edit Setting</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Setting</h3>
                    <a href="{{ route('settings.index') }}" class="btn btn-primary btn-sm float-right">Back</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="app">
                    <form action="{{ route('settings.update', encrypt($setting->id)) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Key</label>
                            <input type="text" name="key" class="form-control" value="{{ $setting->key }}" required>
                        </div>
                        <div class="form-group">
                            <label>Value</label>
                            <input type="text" name="value" class="form-control" value="{{ $setting->value }}" required>
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <input type="file" name="logo" class="form-control">
                            @if($setting->logo_path)
                                <img src="{{$setting->logo_path }}" alt="Current Logo" width="150" class="mt-2">
                            @endif
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

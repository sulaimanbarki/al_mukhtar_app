@extends('admin.layout')
@section('app')

<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Books</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Books</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Books List</h3>
                    <a href="{{ route('books.create') }}" class="btn btn-primary btn-sm float-right">Create Book</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Category</th>
                                <th>ISBN</th>
                                <th>Publication Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->user->name }}</td>
                                <td>{{ $book->category?->name }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td>{{ $book->publication_date }}</td>
                                <td>
                                    <a href="{{ route('books.edit', encrypt($book->id)) }}" class="btn btn-primary btn-sm mr-1">Edit</a>
                                    <button type="button" class="btn btn-danger btn-sm deleteBtn" data-toggle="modal" data-target="#deleteModal" data-id="{{ encrypt($book->id) }}">Delete</button>
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

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this book?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let deleteBtn = document.querySelectorAll('.deleteBtn');
        let confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        let form = document.createElement('form');
        form.method = 'POST';

        deleteBtn.forEach(button => {
            button.addEventListener('click', function () {
                let bookId = this.getAttribute('data-id');
                let action = '{{ route("books.destroy", ":id") }}';
                action = action.replace(':id', bookId);
                form.action = action;

                form.innerHTML = `
                    @csrf
                    @method('DELETE')
                `;
            });
        });

        confirmDeleteBtn.addEventListener('click', function () {
            document.body.appendChild(form);
            form.submit();
        });
    });
</script>
@endpush

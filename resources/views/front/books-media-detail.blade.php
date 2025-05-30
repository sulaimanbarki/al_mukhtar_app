@extends('front.layout.master')
@section('content')
    <style>
        .booksmedia-detail-box {
            background: #fff;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .booksmedia-detail-box h2 {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }

        .booksmedia-detail-box ul {
            font-size: 0.95rem;
            color: #333;
        }

        .booksmedia-detail-box .btn {
            border-radius: 6px;
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }

        .book-overview iframe {
            border: 1px solid #ccc;
            border-radius: 8px;
        }
    </style>
    <!-- Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header text-center">
                <h2>Book Details</h2>
                <span class="underline center"></span>
            </div>
        </div>
    </section>

    <!-- Book Details Section -->
    <div id="content" class="site-content py-5">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="booksmedia-detail-box shadow-lg rounded-lg p-4 bg-white">
                        <div class="row g-4 align-items-start">
                            <!-- Book Info -->
                            <div class="col-md-5">
                                <img src="{{ $data->getFirstMediaUrl('cover_image') }}" alt="{{ $data->title }}"
                                    class="img-fluid rounded shadow">
                            </div>
                            <div class="col-md-7">
                                <h2 class="mb-3">{{ $data->title }}</h2>
                                <ul class="list-unstyled mb-4">
                                    <li><strong>Author:</strong> {{ $data->user->name }}</li>
                                    <li><strong>ISBN:</strong> {{ $data->isbn }}</li>
                                    <li><strong>Publisher:</strong> {{ $data->publisher }}</li>
                                    <li><strong>Pages:</strong> {{ $data->pages }}</li>
                                </ul>

                                <div class="entry-content d-flex gap-2 flex-wrap mb-4">
                                    <a href="{{ route('files.pdf', $data->id) }}" class="btn btn-primary">Read Book</a>
                                    <a href="{{ route('files.pdf', $data->id) }}" download
                                        class="btn btn-outline-secondary">Download PDF</a>
                                </div>

                                <div>
                                    <strong>Summary:</strong>
                                    <p class="text-muted mt-2">{{ $data->summary }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Book Iframe Preview -->
                        @php
                            $file_path = '/laraview/#../' . $data->file_path;
                        @endphp
                        <div class="book-overview mt-5">
                            <iframe src="{{ asset($file_path) }}" width="100%" height="600px"
                                class="rounded border"></iframe>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection

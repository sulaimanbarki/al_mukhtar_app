@extends('front.layout.master')
@section('content')
    <style>
        .books-gird ul {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            padding: 0;
            list-style: none;
            margin: 2rem 0;
        }

        .category-item {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .category-item:hover {
            transform: translateY(-5px);
        }

        .category-item figure {
            margin: 0;
            overflow: hidden;
            height: 320px;
            position: relative;
        }

        .category-item figure img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .category-item figcaption {
            padding: 1rem;
            font-size: 0.95rem;
            background-color: #f8f9fa;
            border-top: 1px solid #ddd;
        }

        .single-book-box {
            padding: 1rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .entry-header h3 {
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
        }

        .entry-header ul {
            padding: 0;
            margin: 0 0 0.5rem;
            list-style: none;
            font-size: 0.9rem;
        }

        .entry-header ul li {
            margin-bottom: 0.25rem;
        }

        .entry-content {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 1rem;
        }

        .entry-footer .btn {
            padding: 0.5rem 1rem;
            border-radius: 6px;
            background-color: #007bff;
            border: none;
            text-decoration: none;
            color: white;
            transition: background-color 0.3s;
        }

        .entry-footer .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books & Media Listing</h2>

            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="books-media-gird">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="books-gird">
                                    <ul>
                                        @foreach ($books as $data)
                                            {{-- @dump($data); --}}
                                            <li class="category-item adults">
                                                <figure>
                                                    <img src="{{ $data->getFirstMediaUrl('cover_image') }}"
                                                        alt="{{ $data->title }}">
                                                    <figcaption>
                                                        <p><strong>{{ $data->title }}</strong></p>
                                                        <p><strong>Author:</strong> {{ $data->user->name }}</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <header class="entry-header">
                                                            <h3 class="entry-title">
                                                                <a
                                                                    href="{{ route('book-details', $data->slug) }}">{{ $data->title }}</a>
                                                            </h3>
                                                            <ul>
                                                                <li><strong>Author:</strong> {{ $data->user->name }}</li>
                                                                <li><strong>ISBN:</strong> {{ $data->isbn }}</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>{{ Str::limit($data->summary, 200) }}</p>
                                                        </div>
                                                        <footer class="entry-footer">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('book-details', $data->slug) }}">Read
                                                                More</a>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>

                                </div>
                                <nav class="navigation pagination text-center">
                                    <h2 class="screen-reader-text">Posts navigation</h2>
                                    <div class="nav-links">
                                        {{ $books->links() }}
                                    </div>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->
@endsection
@section('js')
    <script></script>
@endsection

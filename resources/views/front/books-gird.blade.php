@extends('front.layout.master')
@section('content')
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
                                                    <img
                                                        src="{{ $data->getFirstMediaUrl('cover_image') }}"alt="New Releaase">
                                                    <figcaption>
                                                        <p><strong>{{ $data->title }}</strong></p>
                                                        <p><strong>Author:</strong> {{ $data->user->name }}</p>
                                                    </figcaption>
                                                </figure>
                                                <div class="single-book-box">
                                                    <div class="post-detail">
                                                        <header class="entry-header">
                                                            <h3 class="entry-title"><a
                                                                    href="{{ route('book-details', $data->slug) }}">{{ $data->title }}</a>
                                                            </h3>
                                                            <ul>
                                                                <li><strong>Author:</strong>{{ $data->title }}</li>
                                                                <li><strong>ISBN:</strong> {{ $data->isbn }}</li>
                                                            </ul>
                                                        </header>
                                                        <div class="entry-content">
                                                            <p>{{ Str::limit($data->summary, 200) }}</p>
                                                            </p>
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

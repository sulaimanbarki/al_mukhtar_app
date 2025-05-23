@extends('front.layout.master')
@section('content')
    <!-- End: Header Section -->


    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books & Media Listing</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('front.home') }}">Home</a></li>
                    <li>Books & Media</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Products Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container">
                        <div class="row">
                            <!-- Start: Search Section -->
                            <section class="search-filters">
                                <div class="container">
                                    <div class="filter-box">
                                        <h3>What are you looking for at the library?</h3>
                                        <form action="http://libraria.demo.presstigers.com/index.html" method="get">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <label class="sr-only" for="keywords">Search by Keyword</label>
                                                    <input class="form-control" placeholder="Search by Keyword"
                                                        id="keywords" name="keywords" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="catalog" id="catalog" class="form-control">
                                                        <option>Search the Catalog</option>
                                                        <option>Catalog 01</option>
                                                        <option>Catalog 02</option>
                                                        <option>Catalog 03</option>
                                                        <option>Catalog 04</option>
                                                        <option>Catalog 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="form-group">
                                                    <select name="category" id="category" class="form-control">
                                                        <option>All Categories</option>
                                                        <option>Category 01</option>
                                                        <option>Category 02</option>
                                                        <option>Category 03</option>
                                                        <option>Category 04</option>
                                                        <option>Category 05</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-6">
                                                <div class="form-group">
                                                    <input class="form-control" type="submit" value="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </section>
                            <!-- End: Search Section -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="booksmedia-detail-box">
                                    <div class="single-book-box">
                                        <div class="post-thumbnail">
                                            <div class="book-list-icon yellow-icon"></div>
                                            {{-- <img alt="Book"
                                                src="{{ asset('front/images/books-media/list-view/book-media-01.jpg') }}" /> --}}
                                            <img {{-- src="{{ asset('front_assets/images/category-filter/home-v1/category-filter-img-02.jpg') }}"> <img --}}
                                                src="{{ $data->getFirstMediaUrl('cover_image') }}"alt="New Releaase">

                                        </div>
                                        <div class="post-detail">
                                            <div class="books-social-sharing">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                                                    </li>
                                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="optional-links">
                                                <ul>
                                                    {{-- <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Add To Cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                        </a>
                                                    </li> --}}
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Like">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Mail"><i
                                                                class="fa fa-envelope"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Search">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" target="_blank" data-toggle="blog-tags"
                                                            data-placement="top" title="Print">
                                                            <i class="fa fa-print"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <header class="entry-header">
                                                <h2 class="entry-title">{{ $data->title }}</h2>
                                                <ul>

                                                    <li><strong>Author:</strong>{{ $data->user->name }}</li>
                                                    <li><strong>ISBN:</strong> {{ $data->isbn }}</li>
                                                    <li>
                                                        <div class="rating">
                                                            <strong>Rating:</strong>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                            <span>☆</span>
                                                        </div>
                                                    </li>
                                                    <li><strong>Edition:</strong> First edition</li>
                                                    <li><strong>Publisher:</strong> {{ $data->publisher }}
                                                    </li>
                                                </ul>
                                            </header>
                                            <div class="entry-content post-buttons">
                                                <a href="#." class="btn btn-dark-gray">Place a Hold</a>
                                                <!-- file.blade.php -->

                                                <a href="{{ route('files.pdf', $data->id) }}"
                                                    class="btn btn-dark-gray">Read Book</a>
                                                <a href="#." class="btn btn-dark-gray">Download PDF</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p><strong>Summary:</strong>{{ $data->summary }} </p>
                                    <ul class="detail-page-listing">
                                        <li><strong>Length:</strong> {{ $data->pages }} pages.</li>
                                        <li><strong>Language Note:</strong> Icelandic dialogue; English subtitles.</li>
                                        <li><strong>Genre :</strong> Feature films, Fiction films, Drama</li>
                                        <li><strong>Topics:</strong> Friendship, Bullies, Pranks, School</li>
                                    </ul>


                                    @php
                                        $file_path = '/laraview/#../' . $data->file_path;
                                    @endphp
                                    <section class="book-overview">
                                        <iframe src ="{{ asset($file_path) }}" width="100%" height="600px"></iframe>
                                    </section>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Products Section -->

    <!-- Start: Social Network -->
    <section class="social-network section-padding">
        <div class="container">
            <div class="center-content">
                <h2 class="section-title">Follow Us</h2>
                <span class="underline center"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <ul>
                <li>
                    <a class="facebook" href="#" target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="#" target="_blank">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="google" href="#" target="_blank">
                        <span>
                            <i class="fa fa-google-plus"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="rss" href="#" target="_blank">
                        <span>
                            <i class="fa fa-rss"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="linkedin" href="#" target="_blank">
                        <span>
                            <i class="fa fa-linkedin"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="#" target="_blank">
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
@endsection
@section('js')
    <script></script>
@endsection

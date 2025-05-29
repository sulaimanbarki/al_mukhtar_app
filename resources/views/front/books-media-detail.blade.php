@extends('front.layout.master')
@section('content')
    <!-- End: Header Section -->


    <!-- Start: Page Banner -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Books Reading</h2>
                <span class="underline center"></span>
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
                            <div class="col-md-12">
                                <div class="booksmedia-detail-box">
                                    <div class="single-book-box">
                                       
                                        <div class="post-detail">
                                            
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
@endsection
@section('js')
    <script></script>
@endsection

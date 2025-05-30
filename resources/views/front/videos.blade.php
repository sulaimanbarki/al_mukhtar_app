@extends('front.layout.master')
@section('content')
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header text-center">
                <h2>Videos</h2>
                <span class="underline center"></span>
                <p class="lead">Watch our latest video content from our official YouTube channel.</p>
            </div>
        </div>
    </section>

    <div class="site-content py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($videos as $video)
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 h-100">
                            @php
                                // Extract video ID from full YouTube URL
                                preg_match('/(?:v=|\/)([0-9A-Za-z_-]{11}).*/', $video->path, $matches);
                                $videoId = $matches[1] ?? null;
                            @endphp

                            @if ($videoId)
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://www.youtube.com/embed/{{ $videoId }}"
                                        allowfullscreen></iframe>
                                </div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($video->title, 50) }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($video->description, 120) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('front.layout.master')
@section('content')
<section class="page-banner services-banner">
    <div class="container">
        <div class="banner-header text-center">
            <h2>Audio Files</h2>
            <span class="underline center"></span>
            <p class="lead">Listen to our latest lectures, talks, and recitations.</p>
        </div>
    </div>
</section>

<div class="site-content py-5">
    <div class="container">
        <div class="row g-4">
            @foreach ($audios as $audio)
                @php $media = $audio->getFirstMedia('audio_file'); @endphp
                @if ($media)
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ Str::limit($audio->title, 50) }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($audio->description, 120) }}</p>
                                <audio controls class="w-100 mt-2">
                                    <source src="{{ $media->getUrl() }}" type="{{ $media->mime_type }}">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
@endsection

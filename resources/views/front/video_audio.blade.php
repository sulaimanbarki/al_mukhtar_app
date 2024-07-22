@extends('front.layout.master')
@section('content')
    <!-- End: Header Section -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Contact Us</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('front.home') }}">Home</a></li>
                    <li>Video &amp; Audio </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="booksmedia-detail-main">
                    <div class="container mt-4">

                        <div class="row mt-4">
                            @foreach ($videos as $video)
                                {{-- @dump($video->path) --}}
                                <div class="col-md-4">
                                    <div class="card " style="margin-top: 50px">


                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.youtube.com/embed/'{{ str_replace('watch?v=', 'embed/', $video->path) }}"
                                                allowfullscreen></iframe>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ Str::limit($video->title, 50, '...') }}</h5>
                                            <p class="card-text">{{ Str::limit($video->description, 200, '...') }}
                                            </p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            @foreach ($audios as $audio)
                            @endforeach
                        </div>

                    </div>
            </main>

        </div>
    </div>


    <!-- End: Contact Us Section -->

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
                    <a class="facebook" href="https://m.facebook.com/darulemaanotaqwaof?wtsid=rdr_02DpNTiScv6K9PNYQ"
                        target="_blank">
                        <span>
                            <i class="fa fa-facebook-f"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="twitter" href="https://x.com/emaanotaqwaoff?t=_weFiq_nXPYU2AJQfUP8Yw&s=09" target="_blank">
                        <span>
                            <i class="fa fa-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="insta"
                        href="https://www.instagram.com/darul_eman_o_taqwa?utm_source=qr&igsh=MXQzbGw0c2VoYmY1aw=="
                        target="_blank">
                        <span>
                            <i class="fa fa-instagram"></i>
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
                    <a class="linkedin" href="#" target="_blank">
                        <span>
                            <i class="fa fa-linkedin"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a class="youtube" href="https://youtube.com/@darulemaanotaqwa?si=4PxImuQ81S2JdOnL" target="_blank">
                        <span>
                            <i class="fa fa-youtube"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- End: Social Network -->
@endsection

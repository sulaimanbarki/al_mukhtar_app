@extends('front.layout.master')
@section('content')
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Blog Posts</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('front.home') }}">Home</a></li>
                    <li>Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Blog Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="blog-main-list">
                    <div class="container">
                        <div class="row">
                            <div class="blog-page grid">
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-01.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-02.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-03.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-05.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-04.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-06.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-07.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-08.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                                <article>
                                    <div class="grid-item blog-item">
                                        <div class="post-thumbnail">
                                            <div class="post-date-box">
                                                <div class="post-date">
                                                    <a class="date" href="#.">07</a>
                                                </div>
                                                <div class="post-date-month">
                                                    <a class="month" href="#.">Mar</a>
                                                </div>
                                            </div>
                                            <a href="blog-detail.html"><img alt="blog"
                                                    src="images/blog/blog-09.jpg" /></a>
                                            <div class="post-share">
                                                <a href="#."><i class="fa fa-comment"></i> 37</a>
                                                <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                                                <a href="#."><i class="fa fa-eye"></i> 180</a>
                                                <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                                            </div>
                                        </div>
                                        <div class="post-detail">
                                            <header class="entry-header">
                                                <div class="blog_meta_category">
                                                    <span class="arrow-right"></span>
                                                    <a href="#." rel="category tag">Design</a>,
                                                    <a href="#." rel="category tag">art</a>
                                                </div>
                                                <h3 class="entry-title"><a href="blog-detail.html">Here each week my
                                                        friends</a></h3>
                                                <div class="entry-meta">
                                                    <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                                                    <span><i class="fa fa-comment"></i> <a href="#">15
                                                            Comments</a></span>
                                                </div>
                                            </header>
                                            <div class="entry-content">
                                                <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac
                                                    quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus
                                                    tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis
                                                    eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem
                                                    laoreet venenatis.....</p>
                                            </div>
                                            <footer class="entry-footer">
                                                <a class="btn btn-default" href="blog-detail.html">Read More</a>
                                            </footer>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <a href="#" id="loadmore">Load More Posts</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Blog Section -->

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
@endsection
@section('js')
    <script></script>
@endsection

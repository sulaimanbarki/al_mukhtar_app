@extends('front.front-layout')

@section('title', 'Books')

@push('styles')
    <link rel="stylesheet" href="{{ asset('front/Pages/book-filter.css') }}" />
@endpush

@section('content')
    <div class="breadcrumb-container">
        <ul class="breadcrumb">
            <li><a href="{{ route('front.home')}}">Home</a></li>
            <li><a href="{{ route('front.books') }}" style="color: #6c5dd4">Books</a></li>
            <li><a href="#">{{ $model->title }}</a></li>
        </ul>
    </div>

    <section class="book-overview">
        <div class="img">
            <img src="{{ $model->getMedia('cover_image')->first()?->getUrl() ?? '#' }}" alt="" />
        </div>
        <div class="book-content">
            <h4>{{ $model->title }}</h4>
            <div class="meta">
                <div class="review">
                    <div class="rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>4.0</span>
                    </div>
                    {{-- <div class="comment-like">
                        <small><img src="../images/comment.png" alt="" /> <span>256 Reviews</span></small>
                        <small><img src="../images/like.png" alt="" /> <span>456k Likes</span></small>
                    </div> --}}
                </div>
                <div class="social-btn">
                    <a href=""><i class="fa-brands fa-facebook-f"></i>Facebook</a>
                    <a href=""><i class="fa-brands fa-twitter"></i>Twitter</a>
                    <a href=""><i class="fa-brands fa-whatsapp"></i>Whatsapp</a>
                    <a href=""><i class="fa-regular fa-envelope"></i>Email</a>
                </div>
            </div>
            <p>
                {{ $model->summary }}
            </p>
            {{-- <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident,
                nihil delectus est laborum, aliquid facere aliquam necessitatibus
                nobis consectetur error expedita? Atque unde consequuntur voluptate
                consectetur fugit cupiditate quam excepturi!
            </p> --}}
            <div class="footer">
                {{-- <div class="author-detail">
                    <div class="author">
                        <small>Written by</small>
                        <strong>{{ $model->author }}</strong>
                    </div>
                    <div class="publisher">
                        <small>Publisher</small>
                        <strong>Printarea Studios</strong>
                    </div>
                    <div class="year">
                        <small>Year</small>
                        <strong>2019</strong>
                    </div>
                </div>
                <div class="badge">
                    <span><i class="fa-solid fa-bolt-lightning"></i>free shipping</span>
                    <span><i class="fa-solid fa-shield"></i>in stocks</span>
                </div> --}}
            </div>
            {{-- <div class="book-price">
                <div class="price">
                    <strong>$15.63</strong>
                    <strike>$16.99</strike>
                    <span>2%</span>
                </div>
                <div class="input-group">
                    <div class="quantity">
                        <input type="button" value="-" class="button-minus" data-field="quantity" />
                        <input type="text" step="1" min="1" value="1" name="quantity"
                            class="quantity-field" style="width: 4.5rem" />
                        <input type="button" value="+" class="button-plus" data-field="quantity" />
                    </div>
                    <button class="cartbtn"><i class="fa-solid fa-cart-shopping"></i>Add to Cart</button>
                    <button class="like"><i class="fa-regular fa-heart"></i></button>
                </div>
            </div> --}}
        </div>
    </section>

    {{-- <iframe src ="{{ asset('/laraview/#../pdf/Muhammad-Suliman-Full-stack-developer.docx.pdf') }}" width="1000px" height="600px"></iframe> --}}

    {{-- // display the above iframe in a section  --}}
    @php
        $file_path = '/laraview/#../' . $model->file_path;
    @endphp
    <section class="book-overview">
        <iframe src ="{{ asset($file_path) }}" width="100%" height="600px"></iframe>
    </section>


    {{-- <section class="book-info">
        <div class="detail-customer">
            <div class="tabbtns">
                <button class="tablink" data-btn="detail">Details Product</button>
                <button class="tablink" data-btn="customer">Customer Reviews</button>
            </div>
            <div class="book-detail tabcontent" id="detail">
                <div class="detail-line">
                    <strong>Book Title</strong><span>Harry Potter</span>
                </div>
                <div class="detail-line">
                    <strong>Author</strong><span>Kevin Smiley</span>
                </div>
                <div class="detail-line">
                    <strong>ISBN</strong><span>121341381648(ISBN13: 121341381648)</span>
                </div>
                <div class="detail-line">
                    <strong>Edition Language</strong><span>English</span>
                </div>
                <div class="detail-line">
                    <strong>Book Format</strong><span>Paperback, 450 Pages</span>
                </div>
                <div class="detail-line">
                    <strong>Date Published</strong><span>August 10th 2019</span>
                </div>
                <div class="detail-line">
                    <strong>Publisher</strong><span>Webpress Inc.</span>
                </div>
                <div class="detail-line tag-line">
                    <strong>Tags</strong>
                    <div class="tags">
                        <span>Drama</span>
                        <span>Adventure</span>
                        <span>Survival</span>
                        <span>Biography</span>
                        <span>Bestseller</span>
                    </div>
                </div>
            </div>
            <div class="customer-review tabcontent" id="customer">
                <div class="rating">
                    <div class="rating-info">
                        <h5>Rating Information</h5>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. In dolore, repudiandae sint omnis ipsum
                            quae doloribus reprehenderit saepe veniam repellat.</p>
                    </div>
                    <div class="star">
                        <small><span>4.7</span>out of 5</small>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <strong>Showing 4 of 20 reviews</strong>
                <div class="reviewer-container">
                    <div class="review">
                        <div class="img-detail">
                            <img src="../images/man1.png" alt="">
                            <div class="name">
                                <h5>David Here</h5>
                                <small>Jan 4th, 2020</small>
                            </div>
                        </div>
                        <div class="review-footer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem porro similique et
                                expedita atque. Rerum facilis nobis voluptates dolore. Tenetur, corporis consequatur veniam
                                obcaecati illo quibusdam! Eveniet in iure quis?</p>
                            <div class="rating-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="img-detail">
                            <img src="../images/man1.png" alt="">
                            <div class="name">
                                <h5>David Here</h5>
                                <small>Jan 4th, 2020</small>
                            </div>
                        </div>
                        <div class="review-footer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem porro similique et
                                expedita atque. Rerum facilis nobis voluptates dolore. Tenetur, corporis consequatur veniam
                                obcaecati illo quibusdam! Eveniet in iure quis?</p>
                            <div class="rating-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="img-detail">
                            <img src="../images/man1.png" alt="">
                            <div class="name">
                                <h5>David Here</h5>
                                <small>Jan 4th, 2020</small>
                            </div>
                        </div>
                        <div class="review-footer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem porro similique et
                                expedita atque. Rerum facilis nobis voluptates dolore. Tenetur, corporis consequatur veniam
                                obcaecati illo quibusdam! Eveniet in iure quis?</p>
                            <div class="rating-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.0</span>
                            </div>
                        </div>
                    </div>
                    <div class="review">
                        <div class="img-detail">
                            <img src="../images/man1.png" alt="">
                            <div class="name">
                                <h5>David Here</h5>
                                <small>Jan 4th, 2020</small>
                            </div>
                        </div>
                        <div class="review-footer">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem porro similique et
                                expedita atque. Rerum facilis nobis voluptates dolore. Tenetur, corporis consequatur veniam
                                obcaecati illo quibusdam! Eveniet in iure quis?</p>
                            <div class="rating-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.0</span>
                            </div>
                        </div>
                    </div>
                    <button>View More</button>
                </div>
            </div>
        </div>
        <div class="related-book">
            <h4>Related Books</h4>
            <div class="book-container">
                <div class="book">
                    <div class="img">
                        <img src="../images/book-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5>The Giver</h5>
                        <div class="badge">
                            <span>thriller,</span><span>drama,</span><span>horror</span>
                        </div>
                        <div class="rating-review">
                            <span><i class="fa-solid fa-star"></i>4.7</span>
                            <span>244 Reviews</span>
                        </div>
                        <div class="price">
                            <strong>$45.5</strong>
                            <strike>$98.4</strike>
                        </div>
                        <div class="btn">
                            <button class="cartbtn"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="book">
                    <div class="img">
                        <img src="../images/book-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5>The Giver</h5>
                        <div class="badge">
                            <span>thriller,</span><span>drama,</span><span>horror</span>
                        </div>
                        <div class="rating-review">
                            <span><i class="fa-solid fa-star"></i>4.7</span>
                            <span>244 Reviews</span>
                        </div>
                        <div class="price">
                            <strong>$45.5</strong>
                            <strike>$98.4</strike>
                        </div>
                        <div class="btn">
                            <button class="cartbtn"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="book">
                    <div class="img">
                        <img src="../images/book-1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5>The Giver</h5>
                        <div class="badge">
                            <span>thriller,</span><span>drama,</span><span>horror</span>
                        </div>
                        <div class="rating-review">
                            <span><i class="fa-solid fa-star"></i>4.7</span>
                            <span>244 Reviews</span>
                        </div>
                        <div class="price">
                            <strong>$45.5</strong>
                            <strike>$98.4</strike>
                        </div>
                        <div class="btn">
                            <button class="cartbtn"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
                        </div>
                    </div>
                </div>
                <div class="morebtn">
                    <button class="view-more">View More</button>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="book-sale">
        <div class="heading">
            <h4>Books On Sale</h4>
            <div class="arrowbtn">
                <i id="left" class="fa-solid fa-angle-left"></i>
                <i id="right" class="fa-solid fa-angle-right"></i>
            </div>
        </div>
        <div class="book-container">
            <div class="wrapper">
                <ul class="carousel">
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-1.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>The Giver</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-2.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>The Wright ...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-9.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>The Ruins Of...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-10.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>Percy Jackson</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-5.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>To kill a...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-6.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>Horry Potter</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                    <li class="card">
                        <div class="img">
                            <img src="../images/book-7.jpg" alt="" />
                            <span class="badge">50%</span>
                        </div>
                        <h5>Heroes of ...</h5>
                        <div class="genre">
                            <span>adventure,</span><span>survival</span>
                        </div>
                        <div class="footer">
                            <span class="star"><i class="fa fa-star"></i> 4.7</span>
                            <div class="price">
                                <span>$45.4</span>
                                <span><strike>$90.4</strike></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section> --}}

    {{-- <section class="service">
        <div class="service-container">
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-bolt-lightning"></i>
                </div>
                <div class="service-content">
                    <h5>Quick Delivery</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <div class="service-content">
                    <h5>Secure Payment</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-thumbs-up"></i>
                </div>
                <div class="service-content">
                    <h5>Best Quality</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
            <div class="service-card">
                <div class="icon">
                    <i class="fa-solid fa-star"></i>
                </div>
                <div class="service-content">
                    <h5>Return Guarantee</h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Id,
                        exercitationem.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <section class="subscription">
        <div class="container">
            <h4>Subscribe our newsletter for Latest <br> books updates</h4>
            <div class="input">
                <input type="text" placeholder="Type your email here">
                <button>subscribe</button>
            </div>
        </div>
        <div class="circle-1"></div>
        <div class="circle-2"></div>
    </section> --}}
@endsection

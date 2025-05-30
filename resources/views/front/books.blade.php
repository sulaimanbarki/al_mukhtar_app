@extends('front.front-layout')

@section('title', 'Books')

@push('styles')
<link rel="stylesheet" href="{{ asset('front/Pages/book-filter.css') }}" />
@endpush

@section('content')
<div class="breadcrumb-container">
    <ul class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li><a href="#">Books</a></li>
    </ul>
</div>
<section class="filter">
    <div class="book-grid-container">
        <div class="filter-option">
            <div class="filter-group">
                <h4>Filter Options</h4>
                <div class="editor-pick select-box">
                    <div class="opt-title">
                        <h4>Editor Picks</h4>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <div class="option">
                        <ul>
                            <li><a href="">Best Sales</a></li>
                            <li><a href="">Most Recommended</a></li>
                            <li><a href="">Newest Books</a></li>
                            <li><a href="">Featured</a></li>
                        </ul>
                    </div>
                </div>
                <div class="select-date dropdown">
                    <div class="opt-title">
                        <h4>Select Date</h4>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <div class="option">
                        <input type="date" name="" id="" />
                    </div>
                </div>
                <div class="genre-category select-box">
                    <div class="opt-title">
                        <h4>Shop By Category</h4>
                        <i class="fa-solid fa-caret-down"></i>
                    </div>
                    <div class="option">
                        <div class="category">
                            <input type="checkbox" />
                            <small>Action</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Fantasy</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Adventure</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>History</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Animation</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Horror</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Biography</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Mystery</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Comedy</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Romance</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Crime</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Sci-fi</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Documentry</small>
                        </div>
                        <div class="category">
                            <input type="checkbox" />
                            <small>Sport</small>
                        </div>
                    </div>
                </div>
                <div class="range-slider dropdown">
                    <div class="opt-title">
                        <h4>Price Range</h4>
                    </div>
                    <div class="option">
                        <div class="price-input">
                            <div class="field">
                                <span>Min</span>
                                <input type="number" class="input-min" value="2500">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                                <span>Max</span>
                                <input type="number" class="input-max" value="7500">
                            </div>
                        </div>
                        <div class="slider">
                            <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000"
                                value="2500" step="100">
                            <input type="range" class="range-max" min="0" max="10000"
                                value="7500" step="100">
                        </div>
                    </div>
                </div>
                <div class="footer-btn">
                    <button>Refine Search</button>
                    <button>Reset Filter</button>
                </div>
            </div>
            <i class="fa fa-chevron-right rightbtn"></i>
        </div>
        <div class="book-collections">
            <h4>Books</h4>
            {{-- <div class="category">
                <div class="category-list">
                    <button>Today</button>
                    <button>This Week</button>
                    <button>This Month</button>
                </div>
            </div> --}}
            <div class="books">
                @foreach ($books as $book)
                <div class="book-card">
                    <div class="img">
                        <a href="{{ route('book-details', $book->slug)}}"><img src="{{ $book->getMedia('cover_image')->first()?->getUrl() ?? '#' }}" alt="" /></a>
                        <button class="like" id="likebtn">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                    <h5>
                        <a href="{{ route('book-details', $book->slug)}}">
                        {{ $book->title }}
                        </a>
                    </h5>
                    {{-- <small><a href="">Adventure,</a><a href="">Thriller,</a><a
                            href="">Drama</a></small> --}}
                    <small><a href="">{{ $book->category->name }}</a></small>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                @endforeach
                {{-- <div class="book-card">
                    <div class="img">
                        <a href="book-detail.html"><img src="../images/book-1.jpg" alt="" /></a>
                        <button class="like" id="likebtn">
                            <i class="fa-regular fa-heart"></i>
                        </button>
                    </div>
                    <h5>The Giver</h5>
                    <small><a href="">Adventure,</a><a href="">Thriller,</a><a
                            href="">Drama</a></small>
                    <div class="star-rating">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="footer">
                <div class="data-shown">
                    <p>Showing 8 from 50 data</p>
                </div>
                <div class="pagination">
                    <button><i class="fa fa-chevron-left"></i>Previous</button>
                    <div class="number">
                        <a href="">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                    </div>
                    <button>Next<i class="fa fa-chevron-right"></i></button>
                </div>
            </div> --}}
        </div>
    </div>
</section>

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
                        <a href="book-detail.html"><img src="../images/book-1.jpg" alt="" /></a>
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
                        <a href="book-detail.html"><img src="../images/book-2.jpg" alt="" /></a>
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
                        <a href="book-detail.html"><img src="../images/book-9.jpg" alt="" /></a>
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
                        <a href="book-detail.html"><img src="../images/book-10.jpg" alt="" /></a>
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
                        <a href="book-detail.html"><img src="../images/book-5.jpg" alt="" /></a>
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
                        <a href="book-detail.html"><img src="../images/book-6.jpg" alt="" /></a>
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
                        <a href="book-detail.html"><img src="../images/book-7.jpg" alt="" /></a>
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
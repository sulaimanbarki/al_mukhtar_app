@extends('front.layout.master')
@section('content')
    <!-- End: Header Section -->
    <section class="page-banner services-banner">
        <div class="container">
            <div class="banner-header">
                <h2>Book Details</h2>
                <span class="underline center"></span>
                <p class="lead">Proin ac eros pellentesque dolor pharetra tempo.</p>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="index-2.html">Home</a></li>
                    <li>Book Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End: Page Banner -->

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="contact-us">
                        <div class="container">
                            <div class="contact-location">
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>121 King Street, Melbourne </li>
                                                <li>Victoria 3000 Australia</li>
                                                <li>PO Box 16122</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li>121 King Street, Melbourne </li>
                                                <li>Victoria 3000 Australia</li>
                                                <li>PO Box 16122</li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="tel:+123-456-7890">Local: +123-456-7890</a></li>
                                                <li><a href="fax:(001)-254-7359">Fax: (001)-254-7359</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>www.libraria.com</li>
                                                <li>support@libraria.com</li>
                                                <li>info@libraria.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="http://www.libraria.com/">www.libraria.com </a></li>
                                                <li><a href="mailto:support@libraria.com">support@libraria.com</a></li>
                                                <li><a href="mailto:info@libraria.com">info@libraria.com</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="contact-area">
                                    <div class="container">
                                        <div class="col-md-5 col-md-offset-1 border-gray-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-map bg-light margin-left">
                                                        <div class="company-map" id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5 border-gray-right">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="contact-form bg-light margin-right">
                                                        <h2>Send us a message</h2>
                                                        <span class="underline left"></span>
                                                        <div class="contact-fields">
                                                            <form id="contact" name="contact"
                                                                action="http://libraria.demo.presstigers.com/contact.html"
                                                                method="post">
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="First Name" name="first-name"
                                                                                id="first-name" size="30"
                                                                                value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="Last Name" name="last-name"
                                                                                id="last-name" size="30"
                                                                                value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="email"
                                                                                pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                                                placeholder="Email" name="email"
                                                                                id="email" size="30"
                                                                                value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input class="form-control" type="text"
                                                                                placeholder="Phone Number" name="phone"
                                                                                id="phone" size="30"
                                                                                value="" aria-required="true" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" placeholder="Your message" id="message" aria-required="true"></textarea>
                                                                            <div class="clearfix"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group form-submit">
                                                                            <input class="btn btn-default"
                                                                                id="submit-contact-form" type="button"
                                                                                name="submit" value="Send Message" />
                                                                        </div>
                                                                    </div>
                                                                    <div id="success">
                                                                        <span>Your message was sent successfully! Our team
                                                                            will contact you soon.</span>
                                                                    </div>

                                                                    <div id="error">
                                                                        <span>Something went wrong, try refreshing and
                                                                            submitting the form again.</span>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Contact Us Section -->

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
    <!-- End: Social Network -->
@endsection

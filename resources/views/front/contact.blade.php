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
                    <li>Contact</li>
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
                                                        {{-- <div class="company-map" id="map"></div> --}}
                                                        <div style="width: 100%"><iframe width="100%" height="525"
                                                                frameborder="0" scrolling="no" marginheight="0"
                                                                marginwidth="0"
                                                                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=kpITboard%20peshwar+(Al%20Mukhtar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a
                                                                    href="https://www.gps.ie/">gps trackers</a></iframe>
                                                        </div>
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
                                                            <form id="contact" name="contact" action="#"
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

    <!-- Start: Social Network -->
    <section class="social-network py-5">
        <div class="container">
            <div class="text-center mb-4">
                <h2 class="section-title">Follow Us</h2>
                <span class="d-block mx-auto my-2" style="width: 50px; height: 3px; background-color: #000;"></span>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <ul class="list-unstyled d-flex justify-content-center gap-3">
                <li>
                    <a class="text-primary" href="https://m.facebook.com/darulemaanotaqwaof?wtsid=rdr_02DpNTiScv6K9PNYQ"
                        target="_blank" aria-label="Facebook">
                        <i class="fab fa-facebook-f fs-3"></i>
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="https://x.com/emaanotaqwaoff?t=_weFiq_nXPYU2AJQfUP8Yw&s=09"
                        target="_blank" aria-label="Twitter">
                        <i class="fab fa-twitter fs-3"></i>
                    </a>
                </li>
                <li>
                    <a class="text-primary"
                        href="https://www.instagram.com/darul_eman_o_taqwa?utm_source=qr&igsh=MXQzbGw0c2VoYmY1aw=="
                        target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram fs-3"></i>
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="#" target="_blank" aria-label="Google Plus">
                        <i class="fab fa-google-plus-g fs-3"></i>
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="#" target="_blank" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in fs-3"></i>
                    </a>
                </li>
                <li>
                    <a class="text-primary" href="https://youtube.com/@darulemaanotaqwa?si=4PxImuQ81S2JdOnL"
                        target="_blank" aria-label="YouTube">
                        <i class="fab fa-youtube fs-3"></i>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!-- End: Social Network -->
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $settings['app_name'] ?? 'Al Mukhtar' }} | @yield('title', '')</title>

    <!--- google font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="manifest" href="../favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="icon" href="{{ asset('assets/Asset 12@12x.png') }}" type="image/x-icon" />

    @stack('styles')
</head>

<body>
    <header>
        <nav class="navbar-2">
            <div class="logo">
                <div class="img">
                    <a href="{{ route('front.home') }}"><img src="{{ $logo_path->logo_path }}" alt="" /></a>
                </div>
                <div class="title">
                    <h4>{{ $settings['app_name'] ?? 'Al Mukhtar' }}<i class="fa-solid fa-grid"></i></h4>
                    <small>Book Store Website</small>
                </div>
            </div>
            <div class="search-box">
                <div class="search-field">
                    <input type="text" placeholder="Search over 30 million Book titles" />
                    <button class="search-icon">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </div>
            </div>
            <div class="nav-end">
                <button class="likebtn">
                    <i class="fa-regular fa-heart"></i> <span>35</span>
                </button>
                <button class="cart">
                    <a href="cart-item.html"><i class="fa-solid fa-cart-shopping"></i> <span>4</span></a>
                </button>
                <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiM0o_5tIn0DAmbB2wKS4GvurHctTwxD5om2vi4NOsj1ODDSGULrviZ-QV3ul8JYEMfO0&usqp=CAU"
                        alt="" />
                </div>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <div class="logo-description">
                <div class="logo">
                    <div class="img">
                        <a href="../index.html"><img src="../images/logo.png" alt=""></a>
                    </div>
                    <div class="title">
                        <h4>Bookie</h4>
                        <small>Book Store Website</small>
                    </div>
                </div>
                <div class="logo-body">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam voluptates eius quasi reiciendis
                        recusandae provident veritatis sequi, dolores architecto dolor possimus quos</p>
                </div>
                <div class="social-links">
                    <h4>Follow Us</h4>
                    <ul class="links">
                        <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="categories list">
                <h4>Book Categories</h4>
                <ul>
                    <li><a href="">Action</a></li>
                    <li><a href="">Adventure</a></li>
                    <li><a href="">Comedy</a></li>
                    <li><a href="">Crime</a></li>
                    <li><a href="">Drama</a></li>
                    <li><a href="">Fantasy</a></li>
                    <li><a href="">Horror</a></li>
                </ul>
            </div>
            <div class="quick-links list">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="../index.html">About Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="book-filter.html">Products</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="registration.html">Sign Up</a></li>
                    <li><a href="cart-item.html">Cart</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                </ul>
            </div>
            <div class="our-store list">
                <h4>Our Store</h4>
                <div class="map" style="margin-top: 1rem;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6310.594819201665!2d-122.42768319999999!3d37.73616639999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e60a337d5f5%3A0xfa0bb626904e5ab2!2z4KSV4KWJ4KSy4KWH4KScIOCkueCkv-Cksiwg4KS44KS-4KSoIOCkq-CljeCksOCkvuCkguCkuOCkv-CkuOCljeCkleCliywg4KSV4KWI4KSy4KWA4KSr4KWL4KSw4KWN4KSo4KS_4KSv4KS-LCDgpK_gpYLgpKjgpL7gpIfgpJ_gpYfgpKEg4KS44KWN4KSf4KWH4KSf4KWN4oCN4KS4!5e0!3m2!1shi!2sin!4v1686917463994!5m2!1shi!2sin"
                        height="70" style="width: 100%;border: none;border-radius: 5px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul>
                    <li><a href=""><i class="fa-solid fa-location-dot"></i>832 Thompson Drive,San Fransisco CA
                            94 107,United States</a></li>
                    <li><a href=""><i class="fa-solid fa-phone"></i>+12 1345678991</a></li>
                    <li><a href=""><i class="fa-solid fa-envelope"></i>support@bookoe.id</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <button class="back-to-top"><i class="fa-solid fa-chevron-up"></i></button>

    <script>
        let filterdiv = document.querySelector(".filter-option");
        let iconbtn = document.querySelector(".rightbtn");

        iconbtn.addEventListener("click", () => {
            filterdiv.classList.toggle("active-div");
            iconbtn.classList.toggle("active-btn");
        })





        let editorpick = document.getElementsByClassName("select-box");
        let icon = document.querySelectorAll(".select-box .opt-title i");
        let answer = document.querySelectorAll(".select-box .option");
        for (let i = 0; i < editorpick.length; i++) {
            editorpick[i].addEventListener("click", () => {
                if (icon[i].classList.contains("active")) {
                    icon[i].classList.remove("active");
                    answer[i].style.maxHeight = null;
                    answer[i].style.marginTop = "0rem";
                    answer[i].style.padding = "0px";
                } else {
                    icon[i].classList.add("active");
                    answer[i].style.maxHeight = answer[i].scrollHeight + "px";
                    answer[i].style.padding = "0px 20px 20px 20px";
                }
            });
        }

        let selectdate = document.querySelector(".select-date .opt-title");
        let downarrow = document.querySelector(".select-date .opt-title i");
        let option = document.querySelector(".select-date .option");
        selectdate.addEventListener("click", () => {
            if (downarrow.classList.contains("active")) {
                downarrow.classList.remove("active");
                option.style.display = "none";
                option.style.padding = "0px";
            } else {
                downarrow.classList.add("active");
                option.style.display = "block";
                option.style.maxHeight = option.scrollHeight + "px";
                option.style.padding = "0px 20px 20px 20px";
            }
        })

        let likebtn = document.getElementsByClassName("like");
        for (let i = 0; i < likebtn.length; i++) {
            likebtn[i].addEventListener("click", () => {
                likebtn[i].classList.toggle("liked");
            });
        }

        const rangeInput = document.querySelectorAll(".range-input input"),
            priceInput = document.querySelectorAll(".price-input input"),
            range = document.querySelector(".slider .progress");
        let priceGap = 1000;

        priceInput.forEach(input => {
            input.addEventListener("input", e => {
                let minPrice = parseInt(priceInput[0].value),
                    maxPrice = parseInt(priceInput[1].value);

                if ((maxPrice - minPrice >= priceGap) && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "input-min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = ((minPrice / rangeInput[0].max) * 100) + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }
            });
        });

        rangeInput.forEach(input => {
            input.addEventListener("input", e => {
                let minVal = parseInt(rangeInput[0].value),
                    maxVal = parseInt(rangeInput[1].value);

                if ((maxVal - minVal) < priceGap) {
                    if (e.target.className === "range-min") {
                        rangeInput[0].value = maxVal - priceGap
                    } else {
                        rangeInput[1].value = minVal + priceGap;
                    }
                } else {
                    priceInput[0].value = minVal;
                    priceInput[1].value = maxVal;
                    range.style.left = ((minVal / rangeInput[0].max) * 100) + "%";
                    range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
                }
            });
        });
    </script>

    <script src="{{ asset('front/js/repeat-js.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('front/js/back-to-top.js') }}"></script>
</body>

</html>

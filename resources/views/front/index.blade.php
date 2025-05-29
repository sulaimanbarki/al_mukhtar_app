@extends('front.layout.master')
@section('content')
    <!-- End: Header Section -->
    <!-- hero section start -->
    <section class="main_hero p-5">
        <div class="container">
            <div class="row hero_vector_image">
                <div class=" col-sm-12 col-md-12 col-lg-6 kalma_image">
                    <div class="hero_heading">
                        <h2 class="text-white">Find Your Favorite <br> hadith </h2>
                    </div>
                    <div class="input-group mb-3 search_bar">
                        <input type="text" class="form-control p-2 border" id="hadithSearchInput"
                            placeholder="برائے مہربانی اردو زبان میں تلاش کریں۔">
                        <span class="input-group-text">
                            <i class="fa-solid fa-sliders"></i>
                        </span>
                        <button class="btn btn-secondary hero_search_btn" type="button" id="hadithSearchBtn">
                            <i class="fa-solid fa-magnifying-glass"></i> Search
                        </button>
                    </div>
                    <div class="hero_paragraph">
                        <div id="hadithResult" class="p-3 bg-light rounded shadow-sm">
                            <p class="hero-para">Search to see a hadith here...</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-6 sub-hero-bg-image">
                    <div class="hero_top_contents">
                        <img src="{{ asset('front_new/assets/images/right_hero_mosque.svg') }}" alt=""
                            class="img-fluid hero-mosque">
                    </div>
                    <div class="hero-image">
                        <img src="{{ asset('front_new/assets/images/Group 1171274966.png') }}" alt=""
                            class="img-fluid hero-mobile-image position-relative">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->


    <!-- book of hadith section start -->
    <section class="book0f_hadith  py-5">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <a href="{{ route('front.all_books') }}" class="btn btn-outline  text-decoration-none hadith_btn"> <i
                        class="fa-brands fa-slack me-1 al_hadith_icons_before"></i> All Hadith books <i
                        class="fa-solid fa-arrow-right al_hadith_icons ms-2" style="width: 20px;"></i></a>
                <div class="hadith_headings mt-5">
                    <h3 class="text-center">Books of <span class="hadith_sub_heading"> Hadis</span></h3>
                </div>
                <p class="hadith_paragraph mt-4">The books of hadith are an important source of guidance and inspiration for
                    <br class="hadith_br"> Muslims. These books provide insight into the Seerat (biography) and guidance of
                    the <br class="hadith_br">Prophet Muhammad (peace be upon him).
                </p>
            </div>
            <div class="row">
                @foreach ($books as $data)
                    <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                        <a href="{{ route('book-details', $data->slug) }}" class="text-decoration-none">
                            <div class="card  hadith_card">
                                <img class="card-img-top" src="{{ $data->getFirstMediaUrl('cover_image') }}"
                                    alt="Card image cap ">
                                <h5 class="text-center">{{ $data->title ?? '' }}</h5>
                                <p class="text-center"><strong>ISBN:</strong> {{ $data->isbn }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
    </section>

    <!-- prophet message section -->
    <section class="prophet_message py-5">
        <div class="container message_container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        {{-- <div class="carousel-indicators custom-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div> --}}

                        <div class="mt-4 text-white" id="randomHadithContainer">
                            <h5 id="topicHeading">موضوع: انتظار کریں...</h5>
                            <p id="hadithText">انتظار کریں...</p>
                            <small id="hadithReference"></small>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- booke of hadith section -->
    <section class="book0f_hadith">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="hadith_headings mt-5">
                    <h3 class="text-center">Subjective <span class="hadith_sub_heading"> Hadith</span></h3>
                </div>
                <p class="hadith_paragraph mt-4">Thematic hadiths are collections of hadiths organized by topic rather than
                    by
                    narrator or chain of transmission. Through this, it is possible to easily gain knowledge on certain
                    topics of
                    Islam. This compilation can also be helpful for scholars and teachers who want <br> to teach specific
                    subjects.</p>
            </div>


            <div class="row d-flex justify-content-center">
                @foreach ($books as $data)
                    <div class=" col-sm-12 col-md-6 col-lg-3 mt-3">
                        <a href="{{ route('book-details', $data->slug) }}" class="text-decoration-none">
                            <div class="card w-100 subjective_card">
                                <svg width="40" height="40" viewBox="0 0 100 100"
                                    style="margin-left: 10px; margin-top:5px">
                                    <polygon points="50,10 90,40 70,90 30,90 10,40" fill="#DDDDDD" />
                                    <text x="50%" y="50%" text-anchor="middle" fill="white" font-size="40"
                                        font-family="Arial" dy=".5em">৭</text>
                                </svg>
                                <img class="card-img-top img-fluid"
                                    src="{{ asset('front_new/assets/images/حقوق الحيوان.png') }}">
                                <h5 class="mt-5 ms-3">{{ $data->title ?? '' }}</h5>
                                <p class="ms-3"> </p>
                            </div>
                        </a>
                    </div>
                @endforeach

                <a href="{{ route('front.all_books') }}" class="btn btn-outline  text-decoration-none hadith_btn mt-4">
                    <i class="fa-brands fa-slack me-1 al_hadith_icons_before"></i> View All categories<i
                        class="fa-solid fa-arrow-right al_hadith_icons ms-2" style="width: 20px;"></i></a>
                {{-- <a href="{{ route('front.all_books') }}" class="btn btn-primary">View More</a> --}}

            </div>
        </div>
    </section>

    <!-- app marketing section -->
    <section class="app_marketing py-5">
        <div class="container custom_marketing_container">
            <div class="row download_app_vector_image">
                <div class=" col-sm-12 col-md-8">
                    <div class="marketing_heading mt-4">
                        <h3 class="">Download <br class="marketing_br">
                            Al Mukhtar Mobile App</h3>
                        <p class="marketing_paragraph">With Al Mukhtar app, you can easily do many things including <br>
                            reading
                            Hadith, bookmarking, online syncing. Download our app now!</p>
                        <div class="app_paltform ">
                            <a href="" class="text-decoration-none"> <img
                                    src="{{ asset('front_new/assets/images/AppstoreAvailabl.svg') }}" alt=""
                                    class="img-fluid app_store_image"></a>
                            <a href="" class="text-decoration-none"> <img
                                    src="{{ asset('front_new/assets/images/Google_play_dark.svg') }}" alt=""
                                    class="img-fluid google_play_image"> </a>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-4 main_mobile_image">
                    <img src="{{ asset('front_new/assets/images/mokup phone tengah (1).png') }}" alt=""
                        class="img-fluid mobile_image" style="height: 370px;">
                </div>
            </div>
        </div>
    </section>
    <!-- end -->


    <!-- End: Social Network -->
@endsection

@section('js')
    <script>
        const apiKey = '$2y$10$yRd9ITzqmMvtNh58MGxP824uSdG1tD3dRUWSq3va8DtxVsBPe';
        const hadithTextElement = document.getElementById('hadithText');
        const hadithReferenceElement = document.getElementById('hadithReference');
        const topicHeadingElement = document.getElementById('topicHeading');

        async function fetchRandomHadith() {
            try {
                const randomPage = Math.floor(Math.random() * 1619) + 1;
                const url = `https://hadithapi.com/api/hadiths?apiKey=${apiKey}&page=${randomPage}`;
                const response = await fetch(url);
                const json = await response.json();
                const hadiths = json?.hadiths?.data || [];

                if (hadiths.length > 0) {
                    const randomIndex = Math.floor(Math.random() * hadiths.length);
                    const hadith = hadiths[randomIndex];

                    hadithTextElement.innerText = hadith.hadithUrdu || 'کوئی حدیث اردو میں نہیں ملی';
                    hadithReferenceElement.innerText =
                        `${hadith.book?.bookName || ''} – ${hadith.chapter?.chapterUrdu || ''}`;
                    topicHeadingElement.innerText = `موضوع: ${hadith.chapter?.chapterUrdu || 'نامعلوم'}`;
                } else {
                    hadithTextElement.innerText = 'کوئی حدیث دستیاب نہیں ہے';
                    hadithReferenceElement.innerText = '';
                    topicHeadingElement.innerText = 'موضوع: دستیاب نہیں';
                }
            } catch (error) {
                hadithTextElement.innerText = 'خرابی ہوگئی، دوبارہ کوشش کریں';
                topicHeadingElement.innerText = 'موضوع: خرابی';
                console.error('API Error:', error);
            }
        }

        fetchRandomHadith();
        setInterval(fetchRandomHadith, 30000);
    </script>
    <script>
        const searchBtn = document.getElementById("hadithSearchBtn");
        const searchInput = document.getElementById("hadithSearchInput");
        const hadithResult = document.getElementById("hadithResult");

        async function searchHadith(query) {
            if (!query.trim()) return;

            hadithResult.innerHTML = `<p class="hero-para">Loading...</p>`;

            try {
                const response = await fetch(
                    `https://hadithapi.com/api/hadiths?apiKey=${apiKey}&hadithUrdu=${encodeURIComponent(query)}`);
                const json = await response.json();
                const hadiths = json?.hadiths?.data;

                if (!hadiths || hadiths.length === 0) {
                    hadithResult.innerHTML =
                        `<p class="hero-para text-danger">کوئی حدیث نہیں ملی۔ دوبارہ کوشش کریں۔</p>`;
                    return;
                }

                // Pick a random hadith from the list
                const randomIndex = Math.floor(Math.random() * hadiths.length);
                const hadith = hadiths[randomIndex];

                hadithResult.innerHTML = `
                <p class="hero-para">${hadith.hadithUrdu}</p>
                <p class="hero-para"><strong>${hadith.book?.bookName || ''}</strong>: ${hadith.hadithNumber}</p>
            `;
            } catch (err) {
                hadithResult.innerHTML =
                    `<p class="hero-para text-danger">کچھ غلط ہو گیا۔ براہ کرم بعد میں کوشش کریں۔</p>`;
                console.error(err);
            }
        }

        searchBtn.addEventListener("click", () => {
            const query = searchInput.value;
            searchHadith(query);
        });

        searchInput.addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                searchBtn.click();
            }
        });
    </script>
@endsection

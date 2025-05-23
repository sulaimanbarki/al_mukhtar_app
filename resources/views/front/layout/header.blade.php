<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="{{ route('front.home') }}">
            <img src="{{ $logo_path->logo_path }}" alt="" style="height: 50px; width: auto;"  /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active ms-3" aria-current="page" href="{{ route('front.home') }}">
                        <i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.all_books') }}">Go to Hadith</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hadith Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.blog') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.contact.us') }}">Contact</a>
                </li>

            </ul>
            <div class="nav_buttons">
                <i class="fa-solid fa-moon  nav_moon_icon"></i>
                <button class="btn btn-outline nav_btn " type="submit">Support <i
                        class="fa-solid fa-hand-holding-heart text-white nav_button_hand"></i></button>
            </div>
        </div>
    </div>
</nav>

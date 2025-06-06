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
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('front.home') }}">
                        <i class="fa-solid fa-house"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('all/books*') ? 'active' : '' }}" href="/all/books">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('audio-lectures*') ? 'active' : '' }}" href="{{ route('front.audio-lectures') }}">Audios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  {{ Request::is('videos-bayanaat*') ? 'active' : '' }}" href="{{ route('front.video-bayanaat') }}">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.blog') }}">Announcements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.contact.us') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('front.contact.us') }}">Contact</a>
                </li>

            </ul>
            <div class="nav_buttons">
                <button class="btn btn-outline nav_btn " type="submit">Support </button>
            </div>
        </div>
    </div>
</nav>

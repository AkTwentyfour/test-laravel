<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('aset/logo-biru-2.png') }}" height="60">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-3 me-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->is('home') ? 'active' : '' }}" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold {{ request()->is('ticket') ? 'active' : '' }}" href="/ticket">Ticket</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a class="nav-link fw-bold {{ request()->is('ordered') ? 'active' : '' }}"
                                    href="/ordered">Ordered</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link fw-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link fw-bold dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Welcome, <span class="text-primary">{{ Auth::user()->name }}</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <div class="mt-5" style="background-color: rgb(1, 1, 37); min-height: 50vh; margin-top:100px;">
            <div class="container pb-5 container-footer gx-0">
                <div class="row gx-0">
                    <div class="col-xl-3 col-md-12 mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="nav-link mb-3" style="color: white;">Services</h5>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" aria-current="page"
                                    href="/services/service.html#web-development">Web
                                    Development</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="/services/service.html#Fotografi-videografi">Fotografy &
                                    Video</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="/services/service.html#digital-printing">Digital Printing</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="/services/service.html#editing">Editing</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-md-12 mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="nav-link mb-3" style="color: white;">Company</h5>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" aria-current="page"
                                    href="/about/about.html#developer-profile">Developer
                                    Profile</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="/about/about.html#portofolio">Portofolio</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="/about/about.html#story">Our Story</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="/about/about.html#story">About Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-12 mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="nav-link mb-3" style="color: white;">Address</h5>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link active" aria-current="page" href="#">Kemantran</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="#">Griya Unik</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="#">Tegal, Indonesia</a>
                            </li>
                            <li class="nav-item footer-link-hover">
                                <a class="nav-link" href="#">+62 823 2456 7890</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 col-sm-12 mt-5">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <h5 class="nav-link mb-3" style="color: white;">Contact Us</h5>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link link-wrap footer-link-hover" href="/contact/contact.html#contact">
                                    <div class="me-2 img-wrap"><img src="/assets/gmail-black.png" height="25">
                                    </div>
                                    <div class="link">YuruGraphy@gmail.com</div>
                                </a>
                            </li>
                            <li class="nav-item nav-item-wrap">
                                <a class="nav-link link-wrap footer-link-hover" href="/contact/contact.html#contact">
                                    <div class="me-2 img-wrap"><img src="/assets/instagram-black.png" height="25">
                                    </div>
                                    <div class="link">Yuru_Graphy</div>
                                </a>
                            </li>
                            <li class="nav-item nav-item-wrap">
                                <a class="nav-link link-wrap footer-link-hover" href="/contact/contact.html#contact">
                                    <div class="me-2 img-wrap"><img src="/assets/facebook-black.png" height="25">
                                    </div>
                                    <div class="link">YuruGraphy</div>
                                </a>
                            </li>
                            <li class="nav-item nav-item-wrap">
                                <a class="nav-link link-wrap footer-link-hover" href="/contact/contact.html#contact">
                                    <div class="me-2 img-wrap"><img src="/assets/whatsapp-black.png" height="25">
                                    </div>
                                    <div class="link">+62 0910 9234 5678</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center align-items-center "
                style="height: 60px; border-top: 2px solid #53589D;">
                <div style="color: #53589D;">Copyright Yuru Graphy Team. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="/assets/css/animate.css">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="/assets/css/meanmenu.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.edit', [auth()->id()]) }}">
                                        Edit Profile
                                    </a>

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
    </div>
</body>

</html>
<script src="/assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="/assets/js/bootstrap.min.js"></script>
<!-- Counter Up JS -->
<script src="/assets/js/jquery.counterup.min.js"></script>
<!-- Popper JS -->
<script src="/assets/js/popper.min.js"></script>
<!-- Progressbar JS -->
<script src="/assets/js/progressbar.min.js"></script>
<!-- Magnific Popup JS -->
<script src="/assets/js/jquery.magnific-popup.min.js"></script>
<!-- Swiper Bundle JS -->
<script src="/assets/js/swiper-bundle.min.js"></script>
<!-- Isotope JS -->
<script src="/assets/js/isotope.pkgd.min.js"></script>
<!-- Waypoints JS -->
<script src="/assets/js/jquery.waypoints.min.js"></script>
<!-- Mean Menu JS -->
<script src="/assets/js/jquery.meanmenu.min.js"></script>
<!-- Custom JS -->
<script src="/assets/js/custom.js"></script>

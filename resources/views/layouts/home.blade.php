<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RK FOOD SYSTEM') }}</title>

    <!-- Fonts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Swiper Bundle CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <div class="theme-loader">
        <div class="spinner">
            <div class="spinner-bounce one"></div>
            <div class="spinner-bounce two"></div>
            <div class="spinner-bounce three"></div>
        </div>
    </div>
    <!-- Preloader End -->
    <!-- Dark Light Start -->
    <div class="switch__tab">
        <span class="switch__tab-btn active light-mode-title">Light</span>
        <span class="mode__switch" onclick="darkLight()"><span></span></span>
        <span class="switch__tab-btn dark-mode-title">Dark</span>
    </div>
    <!-- Dark Light End -->
    <!-- Top Bar Start -->
    <div class="top__bar">
        <div class="container custom__container">
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="top__bar-left">
                        <a href="mailto:{{ config('details.email') }}"><i
                                class="fas fa-envelope"></i>{{ config('details.email') }}</a>
                    </div>


                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="top__bar-right">
                        @foreach (config('details.contacts') as $key => $phone)
                            @if ($key == 1)
                                <div class="top__bar-right-social top__bar-right">
                            @endif

                            <a href="tel:{{ $phone }}"><i class="fas fa-phone"></i>{{ $phone }}</a>
                            @if ($key == 1)
                    </div>
                    @endif
                    {{-- <a href="tel:{{ $phone}}">{{ $phone}}</a><br> --}}
                    @endforeach
                    {{-- <a href="+971 55 757 1009"><i class="fas fa-phone"></i>+971 55 757 1009</a> --}}

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Top Bar End -->
    <!-- Header Area Start -->
    <div class="header__area header__sticky header__sticky-sticky-menu">
        <div class="container custom__container">
            <div class="header__area-menubar">
                <div class="header__area-menubar-left">
                    <div class="header__area-menubar-left-logo">
                        <a href="/"><img class="dark-n" src="images/logo-transparent.png" alt=""><img
                                class="light-n" src="images/logo-transparent.png" alt=""></a>
                    </div>
                </div>
                <div class="header__area-menubar-center">
                    <div class="header__area-menubar-center-menu menu-responsive">
                        <ul id="mobilemenu">
                            <li class="menu-item-has-children"><a href="/">Home</a>
                            </li>
                            <li class="menu-item-has-children"><a href="about">About Us</a>

                            </li>
                            <li class="menu-item-has-children"><a href="our-products">Our Products</a>

                            </li>
                            <li class="menu-item-has-children"><a href="ceo-message">Ceo Message</a>

                            </li>
                            <li class="menu-item-has-children"><a href="our-team">Our Team</a>

                            </li>
                            <li class="menu-item-has-children"><a href="contact-us">Contact</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a id="navbarDropdown" class="nav-link " href="/home">
                                    {{ Auth::user()?->name }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="responsive-menu"></div>

            </div>
        </div>
    </div>
    <!-- Header Area End -->
    <!-- Header Area End -->

    @yield('content')


    <!-- Footer One Area Start -->
    <div class="footer__one">
        <img class="footer__one-shape" src="images/footer-bg.png" alt="">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-7 xl-mb-30">
                    <div class="footer__one-widget">
                        <div class="footer__one-widget-about">
                            <a href="#"><img src="images/logo-transparent.png" alt=""></a>


                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-5 sm-mb-30">
                    <div class="footer__one-widget border-one">
                        <h4>Our Solution</h4>
                        <div class="footer__one-widget-solution">
                            <ul>
                                <li><a href="index"><i class="fas fa-chevron-double-right"></i>Home</a></li>
                                <li><a href="about-us"><i class="fas fa-chevron-double-right"></i>About Us</a></li>
                                <li><a href="products"><i class="fas fa-chevron-double-right"></i>Our Products</a></li>
                                <li><a href="our-staff"><i class="fas fa-chevron-double-right"></i>Our Staff</a></li>
                                <li><a href="ceo-message"><i class="fas fa-chevron-double-right"></i>Ceo Message</a>
                                </li>
                                <li><a href="contact"><i class="fas fa-chevron-double-right"></i>Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 col-sm-6">
                    <div class="footer__one-widget border-one tow">
                        <h4>Follow Us</h4>
                        <div class="footer__one-widget-about-social">
                            <ul class="social">
                                @foreach (config('details.social') as $social => $link)
                                    <li><a href="{{ $link }}"><img src="{{ $social }}"
                                                class="img-fluid rounded" alt="client image"></a>
                                    </li>
                                @endforeach

                                {{-- <li><a href="{{ config('details.office_address')}}"><img src="images/insta.png" class="img-fluid rounded" alt="client image"></a>
											</li>
											<li><a href="{{ config('details.office_address')}}"><img src="images/linkedin.png" class="img-fluid rounded" alt="client image"></a>
											</li> --}}
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-6 sm-mb-30">
                    <div class="footer__one-widget border-one">
                        <h4>Office Location</h4>
                        <div class="footer__one-widget-location">
                            <div class="footer__one-widget-location-item">
                                <div class="footer__one-widget-location-item-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="footer__one-widget-location-item-info">
                                    <a href="#">{{ config('details.office_address') }}</a>
                                </div>
                            </div>

                            <div class="footer__one-widget-location-item">
                                <div class="footer__one-widget-location-item-icon">
                                    <i class="fas fa-solid fa-envelope"></i>
                                </div>
                                <div class="footer__one-widget-location-item-info">
                                    <a href="mailto:{{ config('details.email') }}">{{ config('details.email') }}</a>
                                </div>
                            </div>


                            <div class="footer__one-widget-location-item">
                                <div class="footer__one-widget-location-item-icon">
                                    <i class="fas fa-solid fas fa-phone"></i>
                                </div>
                                <div class="footer__one-widget-location-item-info">
                                    @foreach (config('details.contacts') as $social => $phone)
                                        <a href="tel:{{ $phone }}">{{ $phone }}</a><br>
                                    @endforeach

                                    {{-- <br><a href="#">+971 58 672 4436</a> --}}
                                </div>
                            </div>


                            {{-- <div class="footer__one-widget-location-item">
								<div class="footer__one-widget-location-item-icon">
									<i class="fas fa-sharp fa-solid fa-phone-office"></i>
								</div>
								<div class="footer__one-widget-location-item-info">
									<a href="#">+971 4 390 8172</a>
								</div>
							</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p>{{ config('details.copyright') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer One Area End -->
    <!-- Scroll Btn Start -->
    <div class="scroll-up">
        <svg class="w-6 h-6 text-gray-800 dark:text-white scroll-circle svg-content" width="100%" height="100%"
            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6v13m0-13 4 4m-4-4-4 4" />
        </svg>


    </div>
</body>

</html>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Counter Up JS -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- Popper JS -->
<script src="assets/js/popper.min.js"></script>
<!-- Progressbar JS -->
<script src="assets/js/progressbar.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Swiper Bundle JS -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Isotope JS -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- Waypoints JS -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<!-- Mean Menu JS -->
<script src="assets/js/jquery.meanmenu.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>

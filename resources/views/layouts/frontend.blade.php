<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $config['author'] }}</title>
    <meta name="description" content="{{ $config['description'] }}">
    <meta name="keywords" content="{{ $config['keywords'] }}">
    <meta name="author" content="{{ $config['author'] }}">
    <meta name="robots" content="{{ $config['robots'] }}">
    <meta name="language" content="{{ $config['robots'] }}">
    <meta name="og:type" content="{{ $config['og_type'] }}">
    <meta name="og:title" content="{{ $config['og_title'] }}">
    <meta property="og:description" content="{{ $config['og_description'] }}">
    <meta property="og:image" content="none">
    <meta property="og:url" content="none">
    <meta property="og:locale" content="{{ $config['og_locale'] }}">
    <meta property="og:site_name" content="{{ $config['author'] }}">

    <!-- Favicons -->
    <link href="{{ asset('frontend/assets/img/logo/logoatj.svg') }}" rel="icon">
    <link href="{{ asset('frontend/assets/img/logo/logoatj.svg') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('frontend/assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="index-page">
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div
            class="header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <h1 class="sitename">{{ $config['sitename'] }}</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/">Home</a></li>
                    {{-- <li><a href="#about">About</a></li> --}}
                    <li><a href="{{ url('vehicle') }}">Price</a></li>
                    <li><a href="{{ url('tour_package') }}">Tour Package</a></li>
                    <li><a href="{{ url('regulation') }}">Term of Conditions</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="https://wa.me/62895391474416?text=Hi kak?" target="_black">WhatsApp</a>

        </div>
    </header>



    @yield('content')

    <!-- Section Footer Start -->
    <!-- footer Start -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">{{ $config['author'] }}</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>{{ $config['location'] }}</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>{{ $config['phone'] }}</span></p>
                        <p><strong>Email:</strong> <span>{{ $config['email'] }}</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('vehicle') }}">Price</a></li>
                        <li><a href="#">Reservation</a></li>
                        <li><a href="{{ url('tour_package') }}">Tour Package</a></li>
                        <li><a href="{{ url('regulation') }}">Terms of condition</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Hic solutasetp</h4>
                    <ul>
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Nobis illum</h4>
                    <ul>
                        <li><a href="#">Ipsam</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexo</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ $config['author'] }}</strong> <span>All
                    Rights Reserved</span></p>

        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    @stack('js')

</body>

</html>

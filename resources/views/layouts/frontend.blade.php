<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4">

    <!-- theme meta -->
    <meta name="theme-name" content="gymfit" />
    <meta name="author" content="Themefisher.com">

    {{-- <title>{{ $config['blogname'] }}</title> --}}

    <!-- Favicons -->
    <link href="{{ asset('JMT/assets/img/logo.jpg') }}" rel="icon">
    <link href="{{ asset('JMT/assets/img/logo.jpg') }}" rel="apple-touch-icon">

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/bootstrap/css/bootstrap.min.css') }}">
    <!-- Icofont Css -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/icofont/icofont.min.css') }}">
    <!-- Themify Css -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/themify/css/themify-icons.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet"
        href="{{ asset('frontend/plugins/animate-css/animate.css') }}plugins/animate-css/animate.css">
    <!-- Magnify Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/magnific-popup/dist/magnific-popup.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

</head>

<!-- Section Menu Start -->
<!-- Header Start -->
<nav class="navbar navbar-expand-lg navigation fixed-top" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <h2 class="text-white text-capitalize"></i>JB<span class="text-color">Trans</span></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsid"
            aria-controls="navbarsid" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-view-list"></span>
        </button>
        <div class="collapse text-center navbar-collapse" id="navbarsid">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ asset('/') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('infowisata') }}">Info Wisata</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="pricing.html">Artikel</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Blog.</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="blog.html">Blog Grid</a></li>
                        <li><a class="dropdown-item" href="blog-sidebar.html">Blog Sidebar</a></li>
                        <li><a class="dropdown-item" href="blog-single.html">Blog Details</a></li>
                    </ul>
                </li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li> --}}
            </ul>
            <div class="my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0">
                <a href="tel:+23-345-67890">
                    <h3 class="text-color mb-0"><i class="ti-mobile mr-2"></i>+23-563-5688</h3>
                </a>
            </div>
        </div>
    </div>
</nav>

@yield('content')

<!-- Section Footer Start -->
<!-- footer Start -->
<footer class="footer bg-black-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                <h2 class="text-white mb-4">GymFit</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores, sint
                    nostrum omnis eaque cumque dolorum.</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>


            <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                <div class="footer-widget recent-blog">
                    <h4 class="mb-4 text-white letter-spacing text-uppercase">Recents Posts</h4>
                    <div>
                        <a href="blog-single.html"class="text-white">Claritas est etiam processus dynamicus</a>
                        <p class="text-sm mt-2 text-white-50">30 february 2019</p>
                    </div>
                    <div class="mt-4">
                        <a href="blog-single.html"class="text-white">Claritas est etiam processus dynamicus</a>
                        <p class="text-sm mt-2 text-white-50">30 february 2019</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-2 col-md-5 mb-5 mb-lg-0">
                <div class="footer-widget">
                    <h4 class="mb-4 text-white letter-spacing text-uppercase">Quick Links</h4>
                    <ul class="list-unstyled footer-menu lh-40 mb-0">
                        {{-- <li><a href="about.html"><i class="ti-angle-double-right mr-2"></i>{{ $config['footer'] }}</a> --}}
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-5">
                <div class="footer-widget">
                    <h4 class="mb-4 text-white letter-spacing text-uppercase">Home location</h4>
                    <p>Washington 6036 Richmond
                        hwy., Alexandria, VA USA 22303 </p>
                    <span class="text-white">+1 (409) 987–5874</span>
                    <span class="text-white">info@demolink.org</span>
                </div>
            </div>
        </div>

        <div class="row align-items-center mt-5 px-3 bg-black mx-1">
            <div class="col-lg-4">
                <p class="text-white mt-3">Gymfit © 2019 , Theme By <a href="https://themefisher.com/"
                        class="text-color">Themefisher.com</a></p>
            </div>
            <div class="col-lg-6 ml-auto text-right">
                <ul class="list-inline mb-0 footer-socials">
                    <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/themefisher/"><i
                                class="ti-github"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!--  Essential Scripts =====================================-->
<!-- Main jQuery -->
<script src="{{ asset('frontend/plugins/jquery/jquery.js') }}"></script>
<!-- Bootstrap 4.3.1 -->
<script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Slick Slider -->
<script src="{{ asset('frontend/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<!--  Magnific Popup-->
<script src="{{ asset('frontend/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}"></script>
<!-- Form Validator -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
<script src="{{ asset('frontend/plugins/plugins/google-map/gmap.js') }}"></script>

<script src="{{ asset('frontend/js/script.js') }}"></script>

</body>

</html>

@extends('layouts.frontend')

@section('content')
    <!-- Page Title -->
    <div class="page-title bg-gray">
        <div class="container">
            <h1>Tour Package</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Tour-Package Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    <!-- Clients Section -->
    <section id="clients" class="clients section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
          {
            "loop": true,
            "speed": 600,
            "autoplay": {
              "delay": 5000
            },
            "slidesPerView": "auto",
            "pagination": {
              "el": ".swiper-pagination",
              "type": "bullets",
              "clickable": true
            },
            "breakpoints": {
              "320": {
                "slidesPerView": 2,
                "spaceBetween": 40
              },
              "480": {
                "slidesPerView": 3,
                "spaceBetween": 60
              },
              "640": {
                "slidesPerView": 4,
                "spaceBetween": 80
              },
              "992": {
                "slidesPerView": 6,
                "spaceBetween": 120
              }
            }
          }
        </script>
                <div class="swiper-wrapper align-items-center">

                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/1.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/2.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/3.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/4.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/1.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/2.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/3.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                    <div class="swiper-slide">
                        <img src="/frontend/images/jenisMobil/carCity/4.png" class="img-fluid" alt=""
                            style="width: 100%; height: auto;">
                    </div>
                </div>

                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->
@endsection

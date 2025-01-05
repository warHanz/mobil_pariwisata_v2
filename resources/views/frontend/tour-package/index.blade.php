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
    <section id="clients" class="clients section light-background">

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
                "slidesPerView": 1,
                "spaceBetween": 10
              },
              "480": {
                "slidesPerView": 2,
                "spaceBetween": 10
              },
              "640": {
                "slidesPerView": 2,
                "spaceBetween": 10
              },
              "992": {
                "slidesPerView": 3,
                "spaceBetween": 30
              }
            }
          }
        </script>

                <div class="text-center mb-5">
                    <h2>{{ $packageCategoryName ?? 'Daftar Paket Wisata' }}</h2>
                </div>

                <div class="text-center mb-4">
                    <h3>Paket 1 Hari</h3>
                </div>
                <div class="swiper-wrapper align-items-center">
                    @foreach ($oneDay as $item)
                        <div class="swiper-slide">
                            <a href="{{ url('p/tour-package/' . $item->slug) }}"> <img
                                    src="{{ asset('storage/' . $item->img) }}" class="img-fluid" alt="{{ $item->title }}"
                                    style="width: 100%; height: auto;">
                                <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}</h5>
                            </a>
                        </div>
                    @endforeach
                </div> <br>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Clients Section -->
@endsection

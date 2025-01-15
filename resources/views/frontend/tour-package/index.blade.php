@extends('layouts.frontend')

@section('title', 'Harga Paket Wisata Mobil Jogja 2025 - JayaBaruTrans')
@section('description', $config['tp_description'])
@section('keywords', $config['tp_keywords'])
@section('og_description', '')

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
        @php
            $packageCategories = [
                ['title' => 'Paket 1 Hari', 'data' => $oneDay],
                ['title' => 'Paket 2 Hari', 'data' => $twoDay],
                ['title' => 'Paket 3 Hari', 'data' => $threeDay],
                ['title' => 'Paket 4 Hari', 'data' => $fourDay],
            ];
        @endphp

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            @foreach ($packageCategories as $category)
                @if ($category['data']->isNotEmpty())
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

                        <div class="container section-title">
                            <h2>{{ $category['title'] }}</h2>
                        </div><br>

                        <div class="swiper-wrapper align-items-center">
                            @foreach ($category['data'] as $item)
                                <div class="swiper-slide">
                                    <a href="{{ url('p/tour-package/' . $item->slug) }}">
                                        <img src="{{ asset('storage/' . $item->img) }}" class="img-fluid"
                                            alt="{{ $item->title }}" style="width: 100%; height: auto;">
                                        <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}
                                        </h5>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <br><br>
                        <div class="swiper-pagination"></div>
                    </div>
                @else
                    <div class="text-center mb-4">
                        <h3>{{ $category['title'] }} - Tidak ada paket tersedia</h3>
                    </div>
                @endif
            @endforeach
        </div> <br>
    </section><!-- /Clients Section -->
@endsection

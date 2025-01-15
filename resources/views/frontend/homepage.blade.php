@extends('layouts.frontend')


@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delays="200">
                            <h1 class="mb-4">
                                JB
                                <span class="accent-text mb-2">Trans</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                {{ $config['description'] }}
                            </p>

                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="{{ asset('frontend/assets/img/about-us.png') }}" alt="Hero Image" class="img-fluid">
                        </div>
                    </div>
                </div>

                <div class="row stats-row gy-4 mt-5 justify-content-center text-center" data-aos="fade-up"
                    data-aos-delay="500">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-file-earmark-text-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Article
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Tour Package</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <div class="stat-content">
                                <h4>Rent Car</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta">MORE ABOUT US</span>
                        <h2 class="about-title">{{ $config['sitename'] }}</h2>
                        <p class="about-description">{{ $config['about_us'] }}</p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Rent Car</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Tour Package</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Rent Cat Wedding</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Tranfer and Drop</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="{{ asset('frontend/assets/img/img-home.png') }}" alt="img-about-us"
                                    class="img-fluid main-image rounded-4">
                            </div>
                        </div>
                    </div>
                </div>

        </section><!-- /About Section -->

        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Mobil</h2>
                <p>Jenis-Jenis Mobil Yang Kami Sewa kan</p>
            </div><!-- End Section Title -->

            <div class="container">
                <div class="d-flex justify-content-center">
                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <h3>City Car</h3>
                            </a>
                        </li><!-- End tab nav item -->

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                <h3>MPV</h3>
                            </a><!-- End tab nav item -->

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                <h3>Micro Bus</h3>
                            </a>
                        </li><!-- End tab nav item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                                <h3>Bus</h3>
                            </a>
                        </li><!-- End tab nav item -->
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                                <h3>Truck</h3>
                            </a>
                        </li><!-- End tab nav item -->
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                    <!-- City Car -->
                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                            @foreach ($cityCars as $item)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                            alt="{{ $item->title }}" />
                                        <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}
                                        </h5>
                                        <div class="card-body">
                                            <p class="card-text">{!! $item->desc !!}</p>
                                            <div>
                                                <a href="https://wa.me/62895391474416?text=Hai%20Kak,%20saya%20tertarik%20untuk%20memesan%20{{ $item->title }}%20ini%20apakah%20masih%20ready?"
                                                    target="_blank" class="btn btn-success float-end">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End City Car -->

                    <!-- MPV -->
                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                            @foreach ($mpvs as $item)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                            alt="MPV 1" />
                                        <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}
                                        </h5>
                                        <div class="card-body">
                                            <p class="card-text">{!! $item->desc !!}</p>
                                            <div>
                                                <a href="https://wa.me/62895391474416?text=Hai%20Kak,%20saya%20tertarik%20untuk%20memesan%20{{ $item->title }}%20ini%20apakah%20masih%20ready?"
                                                    target="_blank" class="btn btn-success">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End MPV -->

                    <!-- Micro Bus -->
                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                            @foreach ($microBuses as $item)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                            alt="Micro Bus 1" />
                                        <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}
                                        </h5>
                                        <div class="card-body">
                                            <p class="card-text">{!! $item->desc !!}</p>
                                            <div>
                                                <a href="https://wa.me/62895391474416?text=Hai%20Kak,%20saya%20tertarik%20untuk%20memesan%20{{ $item->title }}%20ini%20apakah%20masih%20ready?"
                                                    target="_blank" class="btn btn-success">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Micro Bus -->

                    <!-- Bus -->
                    <div class="tab-pane fade" id="features-tab-4">
                        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                            @foreach ($buses as $item)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                            alt="Bus 1" />
                                        <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}
                                        </h5>
                                        <div class="card-body">
                                            <p class="card-text">{!! $item->desc !!}</p>
                                            <div>
                                                <a href="https://wa.me/62895391474416?text=Hai%20Kak,%20saya%20tertarik%20untuk%20memesan%20Bus%20ini%20apakah%20masih%20ready?"
                                                    target="_blank" class="btn btn-success">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Bus -->

                    <!-- Truck -->
                    <div class="tab-pane fade" id="features-tab-5">
                        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                            @foreach ($trucks as $item)
                                <div class="col">
                                    <div class="card">
                                        <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                            alt="Truck 1" />
                                        <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}
                                        </h5>
                                        <div class="card-body">
                                            <p class="card-text">{!! $item->desc !!}</p>
                                            <div>
                                                <a href="https://wa.me/62895391474416?text=Hai%20Kak,%20saya%20tertarik%20untuk%20memesan%20Truck%20ini%20apakah%20masih%20ready?"
                                                    target="_blank" class="btn btn-success">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!-- End Truck -->
                </div>

            </div>
        </section><!-- /Features Section -->

        <!-- Features Cards Section -->
        <section id="features-cards" class="features-cards section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-box orange">
                            <i class="bi bi-award"></i>
                            <h4>Daily Rent Car</h4>
                            <p>JayaBaruTrans menawarkan berbagai layanan, termasuk Penyewaan Mobil, Paket Wisata, Layanan
                                Antar-Jemput, Mobil Pernikahan</p>
                        </div>
                    </div><!-- End Feature Borx-->

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-box blue">
                            <i class="bi bi-patch-check"></i>
                            <h4>Harga Bersaing</h4>
                            <p>JayaBaruTrans menawarkan tarif layanan yang kompetitif tanpa mengurangi kualitas, disertai
                                berbagai promosi diskon yang menarik.</p>
                        </div>
                    </div><!-- End Feature Borx-->

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-box green">
                            <i class="bi bi-sunrise"></i>
                            <h4>Sumber Daya Manusia Yang Berpengalaman</h4>
                            <p>Seluruh tim JayaBaruTrans sangat berpengalaman di bidangnya, telah melalui proses seleksi dan
                                pelatihan yang ketat.</p>
                        </div>
                    </div><!-- End Feature Borx-->

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="feature-box red">
                            <i class="bi bi-shield-check"></i>
                            <h4>Kendaraan Kami</h4>
                            <p>Seluruh kendaraan Sabila Transport dirawat secara berkala untuk menjamin kenyamanan dan
                                keselamatan Anda dalam setiap perjalanan.</p>
                        </div>
                    </div><!-- End Feature Borx-->

                </div>

            </div>

        </section><!-- /Features Cards Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row content justify-content-center align-items-center position-relative">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-4 mb-4">Mengapa Harus Sewa Mobil Di JayaBaruTrans</h2>
                        <p class="mb-4">JayaBaruTrans menawarkan berbagai jenis kendaraan yang terawat dengan baik, harga
                            yang bersaing, serta pelayanan yang ramah dan profesional. Kami memastikan kenyamanan dan
                            keamanan Anda selama perjalanan dengan armada terbaru dan tim yang berpengalaman. Pilih
                            JayaBaruTrans untuk pengalaman sewa mobil terbaik.</p>
                        <a href="https://wa.me/6288225381206" class="btn btn-cta">Segera Hubungi Kami</a>
                    </div>

                    <!-- Abstract Background Elements -->
                    <div class="shape shape-1">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>

                    <div class="shape shape-2">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>

                    <!-- Dot Pattern Groups -->
                    <div class="dots dots-1">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="dot-pattern" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            </pattern>
                            <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
                        </svg>
                    </div>

                    <div class="dots dots-2">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            </pattern>
                            <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
                        </svg>
                    </div>

                    <div class="shape shape-3">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>
                </div>

            </div>

        </section><!-- /Call To Action Section -->



        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Discover the wide range of services we offer to make your travel experience unforgettable.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <div>
                                <h3>Rent Car</h3>
                                <p>JayaBaruTrans offers a variety of well-maintained cars for daily rental. Enjoy a smooth
                                    and comfortable ride with our reliable vehicles.</p>
                                {{-- <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-map-fill"></i>
                            </div>
                            <div>
                                <h3>Tour Package</h3>
                                <p>Explore beautiful destinations with our comprehensive tour packages. We provide guided
                                    tours to ensure you have a memorable experience.</p>
                                {{-- <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <div>
                                <h3>Wedding Car</h3>
                                <p>Make your special day even more memorable with our elegant wedding car rental service.
                                    Arrive in style and luxury with JayaBaruTrans.</p>
                                {{-- <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </div>
                            <div>
                                <h3>Transfer and Drop</h3>
                                <p>Enjoy hassle-free transfers with our reliable transfer and drop services. We ensure
                                    timely and comfortable transportation to your destination.</p>
                                {{-- <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a> --}}
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                </div>

            </div>

        </section><!-- /Services Section -->


        {{-- <!-- Call To Action 2 Section -->
        <section id="call-to-action-2" class="call-to-action-2 section dark-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum.</p>
                            <a class="cta-btn" href="#">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action 2 Section --> --}}

    </main>
@endsection

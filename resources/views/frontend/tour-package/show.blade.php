@extends('layouts.frontend')

@section('title', $package_tour->title . '- ATJogja')

@section('content')

    <!-- Page Title -->
    <div class="page-title bg-gray">
        <div class="container">
            <h1>Tour Package</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Tour Package Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    <section id="client" class="clients section light-background">
        <div class="container py-3">
            <div class="row">
                <div class="card col-md-12 p-3">
                    <div class="row">
                        <div class="col-md-5">
                            <a href="{{ url('p/tour-package/' . $package_tour->slug) }}">
                                <img class="card-img-top single-img" src="{{ asset('storage/' . $package_tour->img) }}"
                                    alt="{{ $package_tour->title }}" /></a>
                        </div>
                        <div class="col-md-7">
                            <p class="card-text">
                                {!! $package_tour->price !!}
                            </p>
                            <div class="">
                                <a class="btn btn-success" href="https://api.whatsapp.com/send?text" target="_blank">
                                    <i class="fab fa-whatsapp"></i> whatsapp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features" class="features section light-background">
        <div class="container">
            <div class="d-flex justify-content-center">
                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active text-primary fw-bold" data-bs-toggle="tab"
                            data-bs-target="#features-tab-1" style="cursor: default;">
                            <h4 class="mb-0">Rencana Perjalanan</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item">
                        <a class="nav-link text-primary fw-bold" data-bs-toggle="tab" data-bs-target="#features-tab-2"
                            style="cursor: default;">
                            <h4 class="mb-0">Syarat dan Ketentuan</h4>
                        </a>
                    </li><!-- End tab nav item -->
                </ul>
            </div>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="features-tab-1">
                    <div class="col-mb">
                        <p class="card-text">
                            {!! $package_tour->itinerary !!}
                        </p>
                    </div>
                </div>
                <div class="tab-pane fade" id="features-tab-2">
                    <div class="col-mb">
                        <p class="card-text">
                            {!! $package_tour->desc !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

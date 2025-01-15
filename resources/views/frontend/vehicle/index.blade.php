@extends('layouts.frontend')


@section('title', 'Harga Rental Mobil Jogja 2025 - JayaBaruTrans')
@section('description', $config['ac_description'])
@section('keywords', $config['ac_keywords'])
@section('og_description', '')

@section('content')
    <!-- Page Title -->
    <div class="page-title bg-gray">
        <div class="container">
            <h1>All Car</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Price</a></li>
                    <li class="current">Price Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <section id="clients" class="price section light-background">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center mb-5">
                <h1>{{ $vehicleCategoryName ?? 'Daftar Kendaraan' }}</h1>
            </div>

            <!-- City Car -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h1>City Car</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                    @foreach ($cityCars as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                                <div class="card-body">
                                    <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {!! $item->desc !!}
                                    </p>
                                    <div class="text-center">
                                        <a href="https://wa.me/62895391474416?text=Hi kak,saya tertarik ingin menyewa kendaraan {{ $item->title }}, apakah bisa?"
                                            target="_blank">
                                            <button class="btn btn-success">WhatsApp</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- MPV -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h1>MPV</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                    @foreach ($mpvs as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                                <div class="card-body">
                                    <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {!! $item->desc !!}
                                    </p>
                                    <div class="text-center">
                                        <a href="https://wa.me/62895391474416?text=Hi kak,saya tertarik ingin menyewa kendaraan {{ $item->title }}, apakah bisa?"
                                            target="_blank">
                                            <button class="btn btn-success">WhatsApp</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Micro Bus -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h1>Micro Bus</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                    @foreach ($microBuses as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                                <div class="card-body">
                                    <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {!! $item->desc !!}
                                    </p>
                                    <div class="text-center">
                                        <a href="https://wa.me/62895391474416?text=Hi kak,saya tertarik ingin menyewa kendaraan {{ $item->title }}, apakah bisa?"
                                            target="_blank">
                                            <button class="btn btn-success">WhatsApp</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Bus -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h1>Bus</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                    @foreach ($buses as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                                <div class="card-body">
                                    <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {!! $item->desc !!}
                                    </p>
                                    <div class="text-center">
                                        <a href="https://wa.me/62895391474416?text=Hi kak,saya tertarik ingin menyewa kendaraan {{ $item->title }}, apakah bisa?"
                                            target="_blank">
                                            <button class="btn btn-success">WhatsApp</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Truck -->
            <div class="mb-5">
                <div class="text-center mb-4">
                    <h1>Truck</h1>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
                    @foreach ($trucks as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . $item->img) }}" class="card-img-top"
                                    alt="{{ $item->title }}">
                                <div class="card-body">
                                    <h5 class="card-title text-center bg-primary text-white py-2">{{ $item->title }}</h5>
                                    <p class="card-text">
                                        {!! $item->desc !!}
                                    </p>
                                    <div class="text-center">
                                        <a href="https://wa.me/62895391474416?text=Hi kak,saya tertarik ingin menyewa kendaraan {{ $item->title }}, apakah bisa?"
                                            target="_blank">
                                            <button class="btn btn-success">WhatsApp</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

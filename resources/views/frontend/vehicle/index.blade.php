@extends('layouts.frontend')

@section('content')

    <body>
        <div class="main-wrapper ">
            <section class="page-title bg-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="index.html"
                                        class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a>
                                </li>
                                <li class="list-inline-item"><span class="text-white">|</span></li>
                                <li class="list-inline-item"><a href="#"
                                        class="text-color text-uppercase text-sm letter-spacing">vehicle</a></li>
                            </ul>
                            <h1 class="text-lg text-white mt-2">blog mobil</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section Blog start -->
            <section class="section blog bg-gray">
                <div class="container">
                    <div class="row">
                        <!-- Blog entries-->
                        <div class="col-lg-8">
                            <!-- Featured blog post-->
                            <div class="card mb-4 shadow">
                                <a href="{{ url('p/' . $latest_post->slug) }}"><img class="card-img-top featured-img"
                                        src="{{ asset('storage/back/' . $latest_post->img) }}" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">
                                        <span class="ml-2">{{ $latest_post->created_at->format('d-m-Y') }}</span>
                                        <span class="ml-2"><a
                                                href="{{ url('category/' . $latest_post->Category->slug) }}">{{ $latest_post->Category->name }}</a></span>
                                        <span class="ml-2">{{ $latest_post->views }}</span>x
                                        <span class="ml-2">|{{ $latest_post->User->name }}</span>
                                    </div>
                                    <h2 class="card-title">{{ $latest_post->title }}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 200, '....') }}</p>
                                    <a class="btn btn-primary" href="{{ url('p/' . $latest_post->slug) }}">Read more →</a>
                                </div>
                            </div>
                            <!-- Nested row for non-featured blog posts-->
                            <div class="row">
                                @foreach ($articles as $item)
                                    <div class="col-lg-6">
                                        <!-- Blog post-->
                                        <div class="card mb-4">
                                            <a href="{{ url('p/' . $item->slug) }}"><img class="card-img-top post-img"
                                                    src="{{ asset('storage/back/' . $item->img) }}" alt="..." /></a>
                                            <div class="card-body card-height">
                                                <div class="small text-muted">
                                                    {{ $item->created_at->format('d-m-Y') }}
                                                    <a
                                                        href="{{ url('category/' . $item->Category->slug) }}">{{ $item->Category->name }}</a>|{{ $item->User->name }}
                                                </div>
                                                <h2 class="card-title h4">{{ $item->title }}</h2>
                                                <p class="card-text">{{ Str::limit(strip_tags($item->desc), 150, '....') }}
                                                </p>
                                                <a class="btn btn-primary" href="{{ url('p/' . $item->slug) }}">Read more
                                                    →</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <!-- Pagination-->
                            <div class="pagination justify-content-center my-4">
                                {{ $articles->links() }}
                            </div>
                        </div>

                        <!-- Side widgets-->
                        @include('layouts.side-widgets')

                    </div>
                </div>
            </section>

        </div>

    </body>

    </html>
@endsection

@extends('layouts.frontend')

@section('content')
    <div class="main-wrapper">
        <section class="page-title bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a href="{{ url('/') }}"
                                    class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a>
                            </li>
                            <li class="list-inline-item"><span class="text-white">|</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-color text-uppercase text-sm letter-spacing">Our Blog</a></li>
                        </ul>
                        <h1 class="text-lg text-white mt-2">Blog Articles</h1>
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
                            <a href="{{ url('p/' . $latest_post->slug) }}">
                                <img class="card-img-top featured-img" src="{{ asset('storage/' . $latest_post->img) }}"
                                    alt="{{ $latest_post->title }}" />
                            </a>
                            <div class="card-body">
                                <div class="small text-muted">
                                    <span class="ml-2">{{ $latest_post->created_at->format('d-m-Y') }}</span>
                                    <span class="ml-2">
                                        <a href="{{ url('article-category/' . $latest_post->ArticleCategory->slug) }}">
                                            {{ $latest_post->ArticleCategory->name }}
                                        </a>
                                    </span>
                                    <span class="ml-2">{{ $latest_post->views }}x</span>
                                    <span class="ml-2">| {{ $latest_post->User->name }}</span>
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
                                        <a href="{{ url('p/' . $item->slug) }}">
                                            <img class="card-img-top post-img" src="{{ asset('storage/' . $item->img) }}"
                                                alt="{{ $item->title }}" />
                                        </a>
                                        <div class="card-body card-height">
                                            <div class="small text-muted">
                                                {{ \Carbon\Carbon::parse($item->publish_date)->format('d-m-Y') }}
                                                <a
                                                    href="{{ url('article-category/' . $item->ArticleCategory->slug) }}">{{ $item->ArticleCategory->name }}</a>
                                                |
                                                {{ $item->User->name }}
                                            </div>
                                            <h2 class="card-title h4">{{ $item->title }}</h2>
                                            <p class="card-text">{{ Str::limit(strip_tags($item->desc), 150, '....') }}</p>
                                            <a class="btn btn-primary" href="{{ url('p/' . $item->slug) }}">Read more →</a>
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
@endsection

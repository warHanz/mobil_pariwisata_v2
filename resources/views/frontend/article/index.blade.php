@extends('layouts.frontend')

@section('content')
    <!-- Page Title -->
    <div class="page-title bg-gray">
        <div class="container">
            <h1>Blog</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="current">Blog Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Section Blog start -->
    <section class="section blog light-background">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8 ">
                    <!-- Featured blog post-->
                    {{-- <div class="card mb-4 shadow-sm">
                        <a href="{{ url('p/' . $latest_post->slug) }}">
                            <!-- Gambar yang lebih kecil dan responsif -->
                            <img class="card-img-top post-img" src="{{ asset('storage/' . $latest_post->img) }}"
                                alt="{{ $latest_post->title }}" />
                        </a>
                        <div class="card-body card-height">
                            <div class="small text-muted mb-3">
                                <!-- Mengurangi margin antara elemen -->
                                <span>{{ $latest_post->created_at->format('d-m-Y') }}</span>
                                <span class="mx-2">|</span>
                                <a href="{{ url('article-category/' . $latest_post->ArticleCategory->slug) }}"
                                    class="text-primary">
                                    {{ $latest_post->ArticleCategory->name }}
                                </a>
                                <span class="mx-2">|</span>
                                <span>{{ $latest_post->views }}x</span>
                                <span class="mx-2">|</span>
                                <span>{{ $latest_post->User->name }}</span>
                            </div>
                            <!-- Judul dengan ukuran lebih kecil -->
                            <h2 class="card-title h5">{{ $latest_post->title }}</h2>
                            <!-- Deskripsi dengan lebih sedikit teks -->
                            <p class="card-text">{{ Str::limit(strip_tags($latest_post->desc), 150, '...') }}</p>
                            <!-- Tombol dengan ukuran lebih kecil -->
                            <a class="btn btn-primary btn-sm" href="{{ url('p/' . $latest_post->slug) }}">Read more
                                →</a>
                        </div>
                    </div> --}}


                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($articles as $item)
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="{{ url('p/blog/' . $item->slug) }}">
                                        <img class="card-img-top post-img" src="{{ asset('storage/' . $item->img) }}"
                                            alt="{{ $item->title }}" />
                                    </a>
                                    <div class="card-body card-height">
                                        <div class="small text-muted">
                                            {{ \Carbon\Carbon::parse($item->publish_date)->format('d-m-Y') }}
                                            <a href="{{ url('article-category/' . $item->ArticleCategory->slug) }}"> |
                                                {{ $item->ArticleCategory->name }}</a>
                                            |
                                            <span>{{ $item->views }}x</span>
                                        </div>
                                        <h2 class="card-title h4">{{ $item->title }}</h2>
                                        <p class="card-text">{{ Str::limit(strip_tags($item->desc), 150, '....') }}</p>
                                        <a class="btn btn-primary" href="{{ url('p/blog/' . $item->slug) }}">Read more
                                            →</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <!-- Pagination-->
                    <div class="pagination justify-content-center my-6">
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

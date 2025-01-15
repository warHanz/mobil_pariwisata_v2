@extends('layouts.frontend')

@section('title', 'Article-Category' . $article_category . '- ATJogja')

@section('content')
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    @stack('css')


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
    <section class="section blog light-background">
        {{-- Page content --}}
        <div class="container">

            <div class="row">
                <!-- Articles Header -->
                <p>Showing articles in category: <strong>{{ $article_category }}</strong></p>

                <!-- Articles List -->
                <div class="row">
                    @forelse ($articles as $item)
                        <div class="col-lg-4 mb-4">
                            <!-- Blog Post -->
                            <div class="card shadow-sm">
                                <a href="{{ url('p/blog/' . $item->slug) }}">
                                    <img class="card-img-top post-img" src="{{ asset('storage/' . $item->img) }}"
                                        alt="Article Image" />
                                </a>
                                <div class="card-body card-height">
                                    <div class="small text-muted">
                                        {{ $item->created_at->format('d-m-Y') }}
                                        <a href="{{ url('article-category/' . $item->ArticleCategory->slug) }}">
                                            {{ $item->ArticleCategory->name }}
                                        </a>
                                        | {{ $item->User->name }}
                                    </div>
                                    <h2 class="card-title h4">{{ $item->title }}</h2>
                                    <p class="card-text">{{ Str::limit(strip_tags($item->desc), 150, '...') }}</p>
                                    <a class="btn btn-primary" href="{{ url('p/' . $item->slug) }}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <h3>No articles found</h3>
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center">
                    {{ $articles->links() }}
                </div>
            </div>

        </div>
    </section>


    @push('js')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('ceo-article/js/scripts.js') }}"></script>
    @endpush
@endsection

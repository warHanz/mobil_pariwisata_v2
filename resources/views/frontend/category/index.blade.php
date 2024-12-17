@extends('layouts.frontend')

@section('title', 'Article-Category' . $article_category . '- ATJogja')

@section('content')
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    @stack('css')

    <body>
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
        {{-- page content --}}
        <div class="container">
            <div class="mb-3">
                <form action="{{ route('search') }}" method="POST">
                    <div class="input-group">
                        <input class="form-control" type="text" name="keyword" placeholder="Search articles...">
                        <button class="btn btn-primary" id="button-search" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Page content-->
        <p>Showing articles with article-category : <b>{{ $article_category }}</b></p>
        <div class="row">
            @forelse ($articles as $item)
                <div class="col-lg-4">
                    <!-- Blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ url('p/' . $item->slug) }}"><img class="card-img-top post-img"
                                src="{{ asset('storage/back/' . $item->img) }}" alt="..." /></a>
                        <div class="card-body card-height">
                            <div class="small text-muted">
                                {{ $item->created_at->format('d-m-Y') }}
                                <a
                                    href="{{ url('article-category/' . $item->ArticleCategory->slug) }}">{{ $item->ArticleCategory->name }}</a>
                                |{{ $item->User->name }}
                            </div>
                            <h2 class="card-title h4">{{ $item->title }}</h2>
                            <p class="card-text">{{ Str::limit(strip_tags($item->desc), 150, '....') }}</p>
                            <a class="btn btn-primary" href="{{ url('p/' . $item->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
            @empty
                <h3>Not Fount</h3>
            @endforelse

            {{ $articles->links() }}
        </div>

        @push('js')
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="{{ asset('ceo-article/js/scripts.js') }}"></script>
        @endpush
    </body>

    </html>
@endsection

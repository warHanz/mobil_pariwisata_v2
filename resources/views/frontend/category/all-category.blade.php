@extends('layouts.frontend')

@section('title', 'All Article Category - ATJogja')

@section('content')
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    @stack('css')

    <body>
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

        <!-- Page content-->
        <p>Showing articles with all-article-category :</p>
        <div class="row">
            @foreach ($article_category as $item)
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <span>
                                    <a href="{{ url('article-category/' . $item->slug) }}"
                                        class="text-decoration-none text-dark">
                                        <i class="fas fa-folder fa-5x"></i>
                                    </a>
                                </span>

                                <h5 class="catd-title"><a href="{{ url('article-category/' . $item->slug) }}"
                                        class="text-decoration-none text-dark">{{ $item->name }}
                                        ({{ $item->articles_count }})
                                    </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- {{ $articles->links() }} --}}
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

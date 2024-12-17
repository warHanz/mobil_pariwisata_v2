@extends('layouts.frontend')

@section('title', 'All Article Category - ATJogja')

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

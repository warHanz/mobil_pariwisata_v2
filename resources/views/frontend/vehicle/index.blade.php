@extends('layouts.frontend')

@section('content')
    <!-- Page Title -->
    <div class="page-title bg-gray">
        <div class="container">
            <h1>Blog</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ url('/') }}">Price</a></li>
                    <li class="current">Price Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Section Blog start -->
    <section class="section blog light-background">
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8">
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        @foreach ($vehicles as $item)
                            <div class="col-lg-6">
                                <!-- Blog post-->
                                <div class="card mb-4">
                                    <a href="{{ url('p/' . $item->slug) }}"><img class="card-img-top post-img"
                                            src="{{ asset('storage/' . $item->img) }}" alt="..." /></a>
                                    <div class="card-body card-height">
                                        <div class="small text-muted">
                                            {{ $item->created_at->format('d-m-Y') }}
                                            <a
                                                href="{{ url('vehicle-category/' . $item->VehicleCategory->slug) }}">{{ $item->VehicleCategory->name }}</a>
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
                        {{ $vehicles->links() }}
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

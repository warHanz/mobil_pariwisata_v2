@extends('layouts.frontend')

@section('title', $article->title . '- ATJogja')

@section('content')

    <!-- Page content-->
    <div class="main-wrapper">
        <section class="page-title bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="/"
                                    class="text-sm letter-spacing text-white text-uppercase font-weight-bold">Home</a>
                            </li>
                            <li class="list-inline-item"><span class="text-white">|</span></li>
                            <li class="list-inline-item"><a href="#"
                                    class="text-color text-uppercase text-sm letter-spacing">
                                    {{ url('p/' . $article->ArticleCategory->slug) }} </a>
                                {{ $article->ArticleCategory->name }}
                            </li>
                        </ul>
                        <h1 class="text-lg text-white mt-2">{{ $article->title }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-3">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-4 shadow">
                        <a href="{{ url('p/' . $article->slug) }}">
                            <img class="card-img-top single-img" src="{{ asset('storage/' . $article->img) }}"
                                alt="{{ $article->title }}" />
                        </a>
                        <div class="card-body">
                            <div class="small text-muted">
                                <span class="ml-2">{{ $article->created_at->format('d-m-Y') }}</span>
                                <span class="ml-2">
                                    <a
                                        href="{{ url('article-category/' . $article->ArticleCategory->slug) }}">{{ $article->ArticleCategory->name }}</a>
                                </span>
                                <span class="ml-2">{{ $article->views }}</span>x | {{ $article->User->name }}
                            </div>
                            <h1 class="card-title">{{ $article->title }}</h1>
                            <p class="card-text">
                                {!! $article->desc !!}
                            </p>

                            <div class="mt-5">
                                <p style="font-size: 15px"><b>Share this</b></p>
                                <a class="btn btn-primary"
                                    href="https://www.facebook.com/sharer.php?u={{ url()->current() }}" target="_blank">
                                    <i class="fab fa-facebook"></i> facebook
                                </a>
                                <a class="btn btn-success" href="https://api.whatsapp.com/send?text" target="_blank">
                                    <i class="fab fa-whatsapp"></i> whatsapp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widgets-->
                @include('layouts.side-widgets')
            </div>
        </div>
    </div>



@endsection

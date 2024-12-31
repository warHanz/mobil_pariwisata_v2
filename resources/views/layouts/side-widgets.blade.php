<div class="col-lg-4">
    <div class="card border-0 rounded-0 mb-5">
        <form action="{{ route('search') }}" method="POST" class="search position-relative">
            <input type="text" placeholder="Search" class="form-control">
            <i class="ti-search"></i>
        </form>
    </div>

    <div class="mb-3 follow">
        <h5 class="font-secondary mb-4"><i class="ti-minus mr-2 text-color"></i>Follow us</h5>

        <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
    </div>


    <div class="mb-5">
        <h5 class="font-secondary mb-4"><i class="ti-minus mr-2 text-color"></i>Popular posts</h5>

        @foreach ($popular_posts as $item)
            <div class="card mb-4">
                <div class="row">
                    <div class="col-md-4"><img src="{{ asset('storage/' . $item->img) }}" alt=""
                            class="img-fluid"></div>
                    <div class="col-md-8">
                        <p class="card-title">
                            <a href="{{ 'p/' . $item->slug }}" class="text-black d-block lh-25">
                                {{ $item->title }}</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mb-5" search></div>


    <div class="mb-5 article_categories">
        <h5 class="font-secondary mb-4"><i class="ti-minus mr-2 text-color"></i>Categories</h5>

        <ul class="list-group">
            @foreach ($article_categories as $item)
                <li class="list-group-item d-flex justify-content-between align-items-center rounded-0 border-0">
                    <a href="{{ url('article-category/' . $item->slug) }}" class="text-muted">{{ $item->name }}
                    </a>
                    <span class="badge bg-primary badge-pill text-white border-0">{{ $item->articles_count }}</span>
            @endforeach
            </li>
        </ul>
    </div>

    <div class="mb-5 tags">
        <h5 class="font-secondary mb-4"><i class="ti-minus mr-2 text-color"></i>Tags</h5>
        {{--
        <a href="#">body</a>
        <a href="#">fitness</a>
        <a href="#">health</a>
        <a href="#">diet</a>
        <a href="#">plan</a>
        <a href="#">gym</a>
        <a href="#">trainer</a>
        <a href="#">tutorials</a> --}}
    </div>

</div>

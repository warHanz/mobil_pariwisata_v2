<div class="col-lg-3">
    <div class="card border-0 rounded-0 mb-5">
        <form action="{{ route('search') }}" method="POST" class="search position-relative">
            <input type="text" placeholder="Search" class="form-control">
            <i class="ti-search"></i>
        </form>
    </div>

    <div class="mb-5 follow">
        <h5 class="font-secondary mb-4"><i class="ti-minus mr-2 text-color"></i>Follow us</h5>

        <a href="#" class="text-muted"><i class="ti-facebook"></i></a>
        <a href="#" class="text-muted"><i class="ti-twitter"></i></a>
        <a href="#" class="text-muted"><i class="ti-linkedin"></i></a>
        <a href="#" class="text-muted"><i class="ti-pinterest"></i></a>
        <a href="#" class="text-muted"><i class="ti-dribbble"></i></a>
    </div>


    <div class="mb-5">
        <h5 class="font-secondary mb-4"><i class="ti-minus mr-2 text-color"></i>Popular posts</h5>

        <div class="media mb-4">
            <img src="images/blog/blog-post-5.jpg" alt="" class="img-fluid pr-4 w-50 align-self-center">
            <div class="media-body">
                <a href="#" class="text-black d-block lh-25"> Track your daily body
                    fitness</a>
            </div>
        </div>

        <div class="media mb-4">
            <img src="images/blog/blog-post-6.jpg" alt="" class="img-fluid pr-4 w-50 align-self-center">
            <div class="media-body">
                <a href="#" class="text-black d-block lh-25">Keep your body fitness
                    track</a>
            </div>
        </div>

        <div class="media mb-4">
            <img src="images/blog/post1.jpg" alt="" class="img-fluid pr-4 w-50 align-self-center">
            <div class="media-body">
                <a href="#" class="text-black d-block lh-25">Keep your body fitness
                    track</a>
            </div>
        </div>
    </div>

    <div class="mb-5" search></div>


    <div class="mb-5 categories">
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

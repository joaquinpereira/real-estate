<!-- BLOG START -->
<div class="col-lg-8">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-6 col-lg-6 pb-4">
                <div class="blog__grid mt-0">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <div class="card__image-header h-250">
                            <img src="{{ $post->poster }}" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> event</div>
                        </div>
                        <div class="card__image-body">
                            <span class="badge badge-secondary p-1 text-capitalize mb-3">
                                {{ optional($post->published_at)->format('M d, Y') }}
                            </span>
                            <h6 class="text-capitalize">
                                <a href="#">{{ $post->title }} </a>
                            </h6>
                            <p class=" mb-0">
                                {{ $post->summary }}
                            </p>
                        </div>
                        <div class="card__image-footer">
                            <figure>
                                <img src="{{asset('assets/real_estate/images/profile-blog.jpg')}}" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item">
                                    <a href="#">
                                        {{ $post->user->name }}
                                    </a>
                                </li>
                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-sm btn-primary ">
                                        <small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
            </div>
        @empty
            <h6 class="text-capitalize">No posts</h6>
        @endforelse
    </div>
    <br>
    {{ $posts->links() }}
</div>
<!-- END BLOG  -->

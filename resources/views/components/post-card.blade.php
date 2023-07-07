<div class="card__image">
    <div class="card__image-header h-250">
        <img src="{{ $post->poster }}" alt="{{ $post->title }}" class="img-fluid w100 img-transition">
        {{-- <div class="info"> event</div> --}}
    </div>
    <div class="card__image-body">
        <span class="badge badge-secondary p-1 text-capitalize mb-3">
            {{ optional($post->published_at)->format('M d, Y') }}
        </span>
        <h6 class="text-capitalize">
            <a href="blog-single.html">{{ Str::of($post->title)->limit(25, '...') }}</a>
        </h6>
        <p class=" mb-0">
            {{ Str::of($post->summary)->limit(60, '...') }}
        </p>
    </div>
    <div class="card__image-footer">
        <figure>
            <img src="{{ $post->user->profile_picture }}" alt="{{ $post->user->name }}" class="img-fluid rounded-circle">
        </figure>
        <ul class="list-inline my-auto">
            <li class="list-inline-item ">
                <a href="#">
                    {{ Str::of($post->user->name)->limit(15, '...') }}
                </a>
            </li>
        </ul>
        <ul class="list-inline my-auto ml-auto">
            <li class="list-inline-item ">
                <a href="{{ route('post.show', $post) }}" class="btn btn-sm btn-primary ">
                    <small class="text-white ">read more <i class="fa fa-angle-right ml-1"></i></small>
                </a>
            </li>
        </ul>
    </div>
</div>

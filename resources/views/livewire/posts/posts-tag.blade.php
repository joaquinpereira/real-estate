<div class="container py-5">

    <h3 class="text-capitalize pb-5">Tag: {{ $tag->title }}</h3>

    <div class="row">

        @include('layouts.partials.blog.posts')

        @include('layouts.partials.blog.side_bar')

    </div>
</div>

@push('breadcrumbs')
    {{ Breadcrumbs::render('posts.tag', $tag) }}
@endpush

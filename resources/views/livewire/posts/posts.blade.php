<div>
    <div class="container py-5">
        <div class="row pb-5">
            @include('layouts.partials.blog.posts')

            @include('layouts.partials.blog.side_bar')
        </div>
    </div>
</div>

@push('breadcrumbs')
    {{ Breadcrumbs::render('blog') }}
@endpush

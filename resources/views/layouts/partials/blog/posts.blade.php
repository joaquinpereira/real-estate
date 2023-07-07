<!-- BLOG START -->
<div class="col-lg-8">
    <div class="row">
        @forelse ($posts as $post)
            <div class="col-md-6 col-lg-6 pb-4">
                <div class="blog__grid mt-0">
                    <x-post-card :post='$post'></x-post-card>
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

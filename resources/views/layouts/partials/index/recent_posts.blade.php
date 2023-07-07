<section class="blog__home">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        lastest news
                    </h2>
                    <p class="text-center text-capitalize">find of the most popular real estate company all around
                        indonesia. </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            @forelse ($lastest_news as $post)
                <div class="col-md-4">
                    <x-post-card :post='$post'></x-post-card>
                </div>
            @empty
                <div></div>
            @endforelse
        </div>
    </div>
</section>

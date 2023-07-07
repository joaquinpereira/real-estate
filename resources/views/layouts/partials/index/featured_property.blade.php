<section class="featured__property ">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        featured properties
                    </h2>
                    <p class="text-center text-capitalize">handpicked exclusive properties by our team.</p>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="featured__property-carousel owl-carousel owl-theme">
                    @forelse ($featured_properties as $property)
                        <x-property-card :property="$property"></x-property-card>
                    @empty
                        <div></div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
</section>

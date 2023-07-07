<section class="featured__property bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        Recent Property
                    </h2>
                    <p class="text-center text-capitalize">We provide full service at every step.</p>

                </div>
            </div>
        </div>
        <div class="featured__property-carousel owl-carousel owl-theme">
            @forelse ($recent_properties as $property)
                <x-property-card :property="$property"></x-property-card>
            @empty
                <div></div>
            @endforelse
        </div>
    </div>
</section>

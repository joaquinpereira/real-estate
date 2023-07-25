<!-- SLIDER IMAGE DETAIL -->
<div class="slider__image__detail-large owl-carousel owl-theme">
    @foreach ($property->photos as $photo)
        <div class="item">
            <div class="slider__image__detail-large-one">
                <img src="{{$photo}}" alt="" class="img-fluid w-100 img-transition">
                {{-- <div class="description">
                    <figure>
                        <img src="images/profile-blog.jpg" alt="" class="img-fluid">
                    </figure>
                    <span class="badge badge-primary text-capitalize mb-2">house</span>
                    <div class="price">
                        <h5 class="text-capitalize">$13,000/mo</h5>
                    </div>
                    <h4 class="text-capitalize">Luxury Family Home</h4>
                </div> --}}
            </div>
        </div>
    @endforeach
</div>

<div class="slider__image__detail-thumb owl-carousel owl-theme">
    @foreach ($property->photos as $photo)
        <div class="item">
            <div class="slider__image__detail-thumb-one">
                <img src="{{$photo}}" alt="" class="img-fluid w-100 img-transition">
            </div>
        </div>
    @endforeach
</div>
<!-- END SLIDER IMAGE DETAIL -->

<div class="single__detail-features">
    <h6 class="text-capitalize detail-heading">property video {{count($property->videos)}}</h6>

    <div class="slider__image__detail-large owl-carousel owl-theme">
        @foreach ($property->videos as $video)
            <div class="item">
                <div class="slider__image__detail-large-one">
                    <div class="single__detail-features-video">
                        <figure class=" mb-0">
                            <div class="home__video-area text-center">
                                <iframe width="100%" height="400" src="{{$video}}"  frameborder="0"  allowfullscreen></iframe>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

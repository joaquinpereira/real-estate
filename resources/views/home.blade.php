@extends('layouts.front')

@section('header')
    @include('layouts.partials.index.header')
@endsection

@section('content')
<div>

    <!-- FEATURED PROPERTIES -->
    @include('layouts.partials.index.featured_property')
    <!-- END FEATURED PROPERTIES -->

    <!-- RECENT PROPERTY -->
    @include('layouts.partials.index.recent_property')
    <!-- END RECENT PROPERTY -->

    <!-- MOST POPULAR PLACES -->
    @include('layouts.partials.index.most_popular_places')
    <!-- END MOST POPULAR PLACES -->

    <!-- ABOUT -->
    @include('layouts.partials.index.about')


    <!-- OUR PARTNERS -->
    @include('layouts.partials.index.partners')
    <!-- END OUR PARTNERS -->

    <!-- TESTIMONIAL -->
    @include('layouts.partials.index.testimonials')
    <!-- END TESTIMONIAL -->

    <!-- CALL TO ACTION -->
    <section class="bg-theme-v1">
        <div class="cta">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-12 text-center">
                        <h2 class="text-uppercase text-white">signup & build your dream house</h2>
                        <p class="text-capitalize text-white">We'll help you to grow your career and growth, please
                            contact
                            team
                            walls real estate and get this offer promo</p>
                        <a href="#" class="btn btn-primary text-uppercase ">request a quote
                            <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BLOG -->
    @include('layouts.partials.index.blog')
    <!-- END BLOG -->

</div>
@endsection

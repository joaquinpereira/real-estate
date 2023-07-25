<div>
    @section('header')
        @include('layouts.partials.properties.header-single-property')
    @endsection

    <!-- SINGLE DETAIL -->
    <section class="single__Detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    <!-- PHOTOS -->
                    @if (count($property->photos) > 1)
                        @include('layouts.partials.properties.carousel')
                    @else
                        <div class="card__image-header h-250">
                            <img src="{{ $property->poster }}" alt="{{ $property->title }}" class="img-fluid w100 img-transition">
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="single__detail-title mt-4">
                                <h3 class="text-capitalize">{{ $property->title }}</h3>
                                <p>{{ $property->address }}</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="single__detail-price mt-4">
                                <h3 class="text-capitalize text-gray">{{ $property->price }}</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="badge badge-primary p-2 rounded"><i
                                                class="fa fa-print"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="badge badge-primary p-2 rounded"><i
                                                class="fa fa-exchange"></i></a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#" class="badge badge-primary p-2 rounded"><i
                                                class="fa fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- DESCRIPTION -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single__detail-desc">
                                <h6 class="text-capitalize detail-heading">description</h6>
                                <div class="show__more">
                                    {!! $property->description !!}
                                    <a href="javascript:void(0)" class="show__more-button ">read more</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- PROPERTY DETAILS SPEC -->
                            <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">property details</h6>
                                <!-- INFO PROPERTY DETAIL -->
                                <div class="property__detail-info">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>Property ID:</b> {{ $property->uuid }}</li>
                                                <li><b>Price:</b> {{ $property->price }}</li>
                                                <li><b>Property Size:</b> {{ $property->property_size }}</li>
                                                <li><b>Bedrooms:</b> {{ $property->bedrooms }}</li>
                                                <li><b>Bathrooms:</b> {{ $property->bathrooms }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>Garage:</b> {{ $property->garage }}</li>
                                                <li><b>Garage Size:</b> {{ $property->garage_size }}</li>
                                                <li><b>Year Built:</b> {{ $property->year_built }}</li>
                                                <li><b>Property Type:</b> {{ $property->type->name }}</li>
                                                <li><b>Property Status:</b> {{ $property->propertyStatus->name }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END INFO PROPERTY DETAIL -->
                            </div>
                            <!-- END PROPERTY DETAILS SPEC -->
                            <div class="clearfix"></div>

                            @if (count($property->features) > 0)
                                <!-- FEATURES -->
                                <div class="single__detail-features">
                                    <h6 class="text-capitalize detail-heading">features</h6>
                                    <ul class="list-unstyled icon-checkbox">
                                        @foreach ($property->features as $feature)
                                            <li>{{ $feature->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- END FEATURES -->
                            @endif

                            <!-- FLOR PLAN -->
                            {{-- <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">floor plan</h6>
                                <!-- FLOR PLAN IMAGE -->
                                <div id="accordion" class="floorplan" role="tablist">
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingOne">
                                            <a class="text-capitalize" data-toggle="collapse" href="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                first floor <span class="badge badge-light rounded p-1 ml-2">460 sq
                                                    ft</span>
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" role="tabpanel"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <figure>
                                                    <img src="images/floorplan.jpg" alt="" class="img-fluid">
                                                </figure>

                                                Excepteur sint ocaec at cupdatat proident suntin culpa qui officia
                                                deserunt mol anim id esa laborum
                                                perspiciat.
                                                Duis aute irure dolor reprehenderit in voluptate velit essle cillum
                                                dolore eu fugiat nulla pariatur.

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">

                                            <a class="collapsed text-capitalize" data-toggle="collapse"
                                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                second floor <span class="badge badge-light rounded p-1 ml-2">460 sq
                                                    ft</span>
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" role="tabpanel"
                                            aria-labelledby="headingTwo" data-parent="#accordion">
                                            <div class="card-body">
                                                <figure>
                                                    <img src="images/floorplan2.jpg" alt="" class="img-fluid">
                                                </figure>
                                                They offers a host of logistic management services and supply chain . We
                                                provide innovative solutions
                                                with the best. tempor incididunt ut labore et dolor empor tempor
                                                incididunt innovative solutions

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <a class="collapsed text-capitalize" data-toggle="collapse"
                                                href="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                garage <span class="badge badge-light rounded p-1 ml-2">460 sq ft</span>
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" role="tabpanel"
                                            aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <figure>
                                                    <img src="images/floorplan3.jpg" alt="" class="img-fluid">
                                                </figure>
                                                They offers a host of logistic management services and supply chain . We
                                                provide innovative solutions
                                                with the best. tempor incididunt ut labore et dolor empor tempor
                                                incididunt innovative solutions

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div> --}}
                            <!-- END FLOR PLAN -->

                            <!-- VIDEOS -->
                            @if (count($property->videos) > 0)
                                @include('layouts.partials.properties.carousel-video')
                            @endif

                            @isset($property->location)
                                <!-- LOCATION -->
                                <div class="single__detail-features">
                                    <h6 class="text-capitalize detail-heading">location</h6>

                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-map-location" role="tabpanel"
                                            aria-labelledby="pills-map-location-tab">
                                            <div id="map-canvas">
                                                {!! $property->location !!}
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END FILTER VERTICAL -->
                                </div>
                                <!-- END LOCATION -->
                            @endisset


                            {{-- <!-- PROPERTY VIEWS -->
                            <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">property views</h6>
                                <!-- CANVAS -->
                                <div class="wrapper">
                                    <canvas id="myChart" class="chart"></canvas>
                                </div>
                            </div>

                            <!-- END PROPERTY VIEWS --> --}}

                            <!-- NEARBY -->
                            @if (count($property->nearbyPlaces))
                                <div class="single__detail-features">
                                    <h6 class="text-capitalize detail-heading">what's nearby</h6>
                                    <div class="single__detail-features-nearby">
                                        <ul class="list-unstyled">
                                            @foreach ($property->nearbyPlaces as $nearby)
                                                <li>{!! $nearby->type->tag_title !!} &nbsp;{{$nearby->title}}</li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            @endif

                            <!-- END NEARBY -->


                        </div>
                    </div>
                    <!-- END DESCRIPTION -->
                </div>
                <div class="col-lg-4">
                    @include('layouts.partials.properties.side-bar')
                </div>
            </div>

            <!-- FEATURED PROPERTIES -->
            @include('layouts.partials.index.featured_property')
            <!-- END FEATURED PROPERTIES -->
        </div>
    </section>
    <!-- END SINGLE DETAIL -->
</div>

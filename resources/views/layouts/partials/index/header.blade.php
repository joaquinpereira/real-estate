<header class="jumbotron bg-theme">
    <div class="bg-overlay"></div>
    <!-- NAVBAR -->
    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
        <div class="container">
            <a class="navbar-brand" href="homepage-v1.html">
                <img src="{{asset('assets/real_estate/images/logo-blue.png')}}" alt="">
                <img src="{{asset('assets/real_estate/images/logo-blue-stiky.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav99">

                {{-- Nav Bar --}}
                @include('layouts.partials.nav-bar')


                <!-- Search bar.// -->
                <ul class="navbar-nav ">
                    <li>
                        <a href="#" class="btn btn-primary text-capitalize">
                            <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                    </li>
                </ul>
                <!-- Search content bar.// -->
                <div class="top-search navigation-shadow">
                    <div class="container">
                        <div class="input-group ">
                            <form action="#">

                                <div class="row no-gutters mt-3">
                                    <div class="col">
                                        <input class="form-control border-secondary border-right-0 rounded-0"
                                            type="search" value="" placeholder="Search " id="example-search-input4">
                                    </div>
                                    <div class="col-auto">
                                        <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                            href="search-result.html">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- Search content bar.// -->
            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- HERO -->
    <div class="wrap__intro d-flex align-items-md-center ">
        <div class="container  ">
            <div class="row align-items-center justify-content-start flex-wrap">
                <div class="col-md-10 mx-auto">
                    <div class="wrap__intro-heading text-center" data-aos="fade-up">
                        <!-- <h4>the walls property</h4> -->
                        <h1>
                            Find Your Dream House </h1>
                        <p>Your Property, Our Priority and From as low as $10 per day with limited time offer
                            discounts</p>

                        <!-- SEARCH BAR -->
                        <div class="wrapper__section">
                            <div class="wrapper__section__components">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- <h3 class="section_heading mt-4">Form Search with Categories</h3> -->
                                        <div class=" search__container">
                                            <div class="row input-group no-gutters">
                                                <div class="col-sm-12 col-md-5">
                                                    <input type="text" class="form-control" aria-label="Text input"
                                                        placeholder="Search for Homes by Address, City . . . .">
                                                </div>


                                                <div class="col-sm-12 col-md-4 input-group">

                                                    <select class="select_option form-control" name="select"
                                                        id="categories">
                                                        <option selected>All Categories</option>
                                                        <option>House</option>
                                                        <option>Apartement </option>
                                                        <option>Hotel</option>
                                                        <option>Residential</option>
                                                        <option>Land</option>
                                                        <option>Luxury</option>

                                                    </select>

                                                </div>
                                                <div class="col-sm-12 col-md-3 input-group-append">
                                                    <button class="btn btn-primary btn-block" type="submit">
                                                        <i class="fa fa-search"></i> <span
                                                            class="ml-1 text-uppercase">Search</span>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HERO -->
</header>

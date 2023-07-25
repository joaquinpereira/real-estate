<header class="bg-theme-overlay">
    <!-- <div class="bg-overlay-one"></div> -->
    <!-- NAVBAR -->
    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
        <div class="container">
            <a class="navbar-brand" href="homepage-v1.html">
                <img src="images/logo-blue.png" alt="">
                <img src="images/logo-blue-stiky.png" alt="">
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
    <!-- BREADCRUMB -->
    <!-- BREADCRUMB -->
    <section class="section__breadcrumb ">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-capitalize text-white ">Properties</h2>
                    @stack('breadcrumbs_property')
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB -->
    <!-- END BREADCRUMB -->
</header>

<header class="bg-theme-overlay">
    <!-- <div class="bg-overlay-one"></div> -->
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
                    <h2 class="text-capitalize"><a href="{{route('property.index')}}" class="text-white">Properties</a></h2>
                    @stack('breadcrumbs_property')
                </div>
            </div>
        </div>
    </section>
    <!-- END BREADCRUMB -->
    <!-- END BREADCRUMB -->
</header>

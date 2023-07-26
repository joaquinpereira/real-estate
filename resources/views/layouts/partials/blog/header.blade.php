<!-- HEADER -->
<header>
    <!-- NAVBAR TOP -->
    <div class="topbar d-none d-sm-block">
        <div class="container ">
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="topbar-left">
                        <div class="topbar-text">
                            {{Carbon\Carbon::now()->format('l, F d, Y')}}
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="list-unstyled topbar-right">
                        <ul class="topbar-link">
                            <li><a href="#" title="">Career</a></li>
                            <li><a href="#" title="">Contact Us</a></li>
                            <li><a href="#" title="">Login / Register</a></li>
                        </ul>
                        <ul class="topbar-sosmed">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAVBAR TOP -->
    <!-- NAVBAR -->
    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/real_estate/images/logo-blue-stiky.png')}}" alt="" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav99">

                {{-- Nav Bar --}}
                @include('layouts.partials.nav-bar')

            </div> <!-- navbar-collapse.// -->
        </div>
    </nav>
    <!-- END NAVBAR -->
    <!-- BREADCRUMB -->
    <div class="bg-theme-overlay">
        <section class="section__breadcrumb ">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="text-capitalize"><a href="{{route('blog')}}" class="text-white">Blog</a></h2>
                        @stack('breadcrumbs')
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- END BREADCRUMB -->
</header>
<div class="clearfix"></div>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="{{asset('assets/real_estate/css/stylesbd04.css?8918068d71def746395d')}}" rel="stylesheet">
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body>
    <!-- HEADER -->
    @yield('header')
    <!-- END HEADER -->

<div class="main">

    <!-- content start -->
    @yield('content')
    <!-- content end -->

</div>

    <!-- Footer  -->
    @include('layouts.partials.footer')


    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="{{asset('assets/real_estate/js/index.bundlebd04.js?8918068d71def746395d')}}"></script>
</body>
</html>

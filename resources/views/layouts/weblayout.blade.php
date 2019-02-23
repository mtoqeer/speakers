<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
   @include('layouts.partials.head')
   @yield('customstyles')
</head>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Start -->
        @include('layouts.partials.header')
        <!-- Header End -->

    
   {{-- main Content --}}
    
   @yield('main-content')

   {{-- main Content --}}
    

    <!-- footer area start -->
   @include('layouts.partials.footer')
    <!-- Footer End -->
   @yield('customjs')
    
</body>

</html>

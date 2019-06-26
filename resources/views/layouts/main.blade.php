<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>

    @include('partials._head')

        @yield('stylesheets')
      
</head>

<body>

    @include('partials._header')
    @include('partials._home-navbar')
    @include('partials._banner')
    @include('partials._bottom-banner')
    @include('partials._bottom-banner-1')
    @include('partials._special-deals')
    @include('partials._new-products')
    @include('partials._top-brands')
    @include('partials._newsletter')
    @include('partials._footer-section')
        
        <!-- PAGE CONTENT-->

    <div>

        @yield('content')

    </div>

    <!-- END PAGE CONTENT-->

    @include('partials._footer')

        @yield('scripts')

</body>
 
</html>
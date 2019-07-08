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
        
        <!-- PAGE CONTENT-->

    <div>

        @yield('content')

    </div>

    <!-- END PAGE CONTENT-->

    @include('partials._footer')

        @yield('scripts')

</body>
 
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>

    @include('partials._auth-head')

        @yield('stylesheets')
      
</head>

<body>
        
        <!-- PAGE CONTENT-->

    <div>

        @yield('content')

    </div>

    <!-- END PAGE CONTENT-->

    @include('partials._auth-footer')

        @yield('scripts')

</body>
 
</html>
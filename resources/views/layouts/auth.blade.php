<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<html lang="{{ config('app.locale') }}">
    <head>
        @include('includes._head')
    </head>
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid" style="background-color: white">
    {{--@include('includes._header')--}}
    <div class="page-container">
        {{--@include('includes._sidebar')--}}
        {{--Page content--}}
        @yield('content')
    </div>
    {{--</div>--}}
    {{--@include('includes._footer')--}}
    <!-- Scripts -->
    @include('includes._foot')
    </body>
</html>

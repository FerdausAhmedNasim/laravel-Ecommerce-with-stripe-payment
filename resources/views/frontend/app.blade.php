<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('frontend.partials.styles')
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        @include('frontend.partials.header')

        <!--main container-->
        @yield('content')
        <!-- Footer --and-- Copyright -->

        @include('frontend.partials.footer')
    </div>

    @include('frontend.partials.scripts')
</body>


</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body id="page-top">
    @include('layout.partials.nav')
    @yield('header')
    @yield('content')
    @include('layout.partials.footer')
    @include('layout.partials.footer-scripts')
</body>
</html>

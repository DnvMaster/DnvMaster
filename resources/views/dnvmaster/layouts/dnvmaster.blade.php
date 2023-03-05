<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ (isset($title)) ? $title : 'DnvMaster - Веб разработка' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ (isset($description)) ? $description : 'Блог о программировании и создании Веб-сайтов. Всё о Веб-разработке...' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : 'BOOTSTRAP, LARAVEL, MySQL' }}">
    <link rel="shortcut icon" href="{{ asset(env('DNVMASTER')) }}/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset(env('DNVMASTER')) }}/img/favicon.png">
    <link rel="stylesheet" href="{{ asset(env('DNVMASTER')) }}/css/vendor.css">
    <link rel="stylesheet" href="{{ asset(env('DNVMASTER')) }}/css/main.css">
</head>
<body>
<!-- Main Wrapper Start -->
<div class="wrapper">
    <!-- Header Start -->
    <header class="header">
        <div class="header__inner fixed-header">
            @yield('topBar')
            @yield('navMenu')
        </div>
    </header>
    <!-- Header End -->
    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        @yield('sliders')
    </main>
    <!-- Main Content Wrapper End -->
    @yield('footer')
    @yield('menuStart')
    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <a class="scroll-to-top" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
    <!-- Global Overlay End -->
</div>
<!-- Main Wrapper End -->
<script src="{{ asset(env('DNVMASTER')) }}/js/vendor.js"></script>
<script src="{{ asset(env('DNVMASTER')) }}/js/main.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('master/images/favicon.png') }}" rel="shortcut icon" >
    <title>{{ (isset($title)) ? $title : 'DnvMaster - Всё о веб-разработке' }}</title>
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : 'HTML, CSS, JavaScript, PHP, Laravel, Bootstrap' }}">
    <meta name="description" content="{{ (isset($description)) ? $description : 'Если Вам нужен современный, высококачественный и функциональный веб-сайт, заходите к нам' }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/icon-moon.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/pogo-slider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('DnvMaster/css/default.css') }}">
</head>
<body>
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    @yield('top')
    @yield('navigation')
    @yield('sliders')
    <div class="container" style="margin-top: 90px; margin-bottom: 90px;">
        <div class="row">
            @yield('content')
        </div>
    </div>
    @yield('footer')

    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>

    <script src="{{ asset('DnvMaster/js/popper.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/jquery.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/jquery.pogo-slider.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/pogo-main.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/wow.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/jquery.counter-up.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{ asset('DnvMaster/js/isotope.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/tabs.min.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/modernizr.js') }}"></script>
    <script src="{{ asset('DnvMaster/js/set-file.js') }}"></script>

</body>
</html>

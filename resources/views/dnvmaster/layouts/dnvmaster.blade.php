<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ (isset($title)) ? $title : 'DnvMaster - Веб разработке' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ (isset($description)) ? $description : 'Блог о программировании и создании Веб-сайтов. Всё о Веб-разработке...' }}">
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : 'BOOTSTRAP, LARAVEL, MySQL' }}">
    <link rel="shortcut icon" href="{{ asset(env('DNVMASTER')) }}/images/icon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset(env('DNVMASTER')) }}/images/icon.png">
    <link href="{{ asset(env('DNVMASTER')) }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset(env('DNVMASTER')) }}/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="{{ asset(env('DNVMASTER')) }}/css/default.css" rel="stylesheet">
    <link href="{{ asset(env('DNVMASTER')) }}/css/style.css" rel="stylesheet">
</head>
<body>
    @yield('topBar')
<!-- Include Js files -->
    <script src="{{ asset(env('DNVMASTER')) }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>

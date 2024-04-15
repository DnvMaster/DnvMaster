<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('master/images/favicon.png') }}" rel="shortcut icon" >
    <title>{{ (isset($title)) ? $title : 'DnvMaster - Всё о веб-разработке' }}</title>
    <meta name="keywords" content="{{ (isset($keywords)) ? $keywords : 'HTML, CSS, JavaScript, PHP, Laravel, Bootstrap' }}">
    <meta name="description" content="{{ (isset($description)) ? $description : 'Если Вам нужен современный, высококачественный и функциональный веб-сайт, заходите к нам' }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row-auto">
        <h2 class="mt-20 text-center">Hello world !</h2>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

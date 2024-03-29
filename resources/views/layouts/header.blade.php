<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/plugins/jquery.rateyo.css') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tools.css') }}" rel="stylesheet">
    @yield('css')
</head>
<body>
<header>
    <div class="container">
        <div class="media-display" id="mediaHeader">
        </div>
        <div class="text-display">
            <div>
                <h1 class="main_title">{{ env('APP_NAME') }}</h1>
                <div class="subtitle">
                    <p>Доверься мастеру, а сам отдохни</p>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container" id="styickyNav">
    <ul class="nav custom-main_navigation">
        <li class="nav-item"><a class="nav-link" href="{{ route('main') }}">Главная</a></li>
        <li class="nav-item"><a class="nav-link application" href="#" data-url="{{route('request.form.get')}}"
                                data-toggle="modal" data-target="#modal-application">Оставить заявку</a></li>
        <li class="nav-item"><a class="nav-link application" href="#" data-url="{{route('review.form.get')}}"
                                data-toggle="modal" data-target="#modal-application">Отзывы</a></li>
        <li class="nav-item"><a class="nav-link application" href="#" data-url="{{route('question.form.get')}}"
                                data-toggle="modal" data-target="#modal-application">Задать вопрос</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('offers.all.active') }}">Открытые предложения</a></li>
    </ul>
</div>
<div id="app">

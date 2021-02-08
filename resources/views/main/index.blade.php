@extends('layouts.main')
@section('title', 'Main')

@section('css')
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/review.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="info-block">
            <h4>Что такое Мастер?</h4>
            <div class="content">
                <p>Мастер - ремонт, отделка, сборка мебели. Сделаем ремонт, быстро, качественно, недорого</p>
            </div>
        </div>

        <div class="info-block">
            <h4>Зачем нужен Мастер?</h4>
            <div class="content">
                <p>Строительные работы по дому порой занимают много времени и услилий, а результат
                    может и не оправдать ожиданий... Тогда зачем себя мучать? Закажи услуги по ремонту прямо здесь и
                    прямо
                    сейчас, и в скором времени будешь доволен - Мастер не заставит тебя ждать!
                </p>
            </div>
        </div>

        <div class="info-block">
            <h4 id="services">
                <span>Услуги</span>
                <img src="{{ asset('/img/icons/info.svg') }}" data-toggle="tooltip" data-placement="top"
                     title="Приведены не все услуги, подробно уточняйте у специалистов">
            </h4>
            @include('main.components.services_slider')
        </div>

        <div class="info-block">
            <div id="reviews">
                <h4>Отзывы</h4>
                @include('main.reviews')
            </div>
        </div>
    </div>

{{--    @include('layouts.forms.form')--}}
@endsection


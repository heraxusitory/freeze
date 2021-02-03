@extends('layouts.main')
@section('title', 'Main')

@section('css')
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
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
                    может и не оправдать ожиданий... Тогда зачем себя мучать? Закажи услуги по ремонту прямо здесь и прямо
                    сейчас, и в скором времени будешь доволен - Мастер не заставит тебя ждать!
                </p>
            </div>
        </div>

        <div class="info-block">
            <div class="slider">

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/main/index.js') }}"></script>
@endsection

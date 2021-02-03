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
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active title-absolute">
                        <div class="absolute-obj">
                            <h3 class="title hight">Зал</h3>
                        </div>
                        <div class="media">
                            <img src="{{ asset('/img/slider/remont-zala.jpg') }}" class="d-block w-100"
                                 alt="Ремонт зала">
                        </div>
                    </div>
                    <div class="carousel-item title-absolute">
                        <div class="absolute-obj">
                            <h3 class="title hight">Спальни</h3>
                        </div>
                        <div class="media">
                            <img src="{{ asset('/img/slider/remont-spalny.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item title-absolute">
                        <div class="absolute-obj">
                            <h3 class="title hight">Кухни</h3>
                        </div>
                        <div class="media">
                            <img src="{{ asset('/img/slider/remont-kuhny.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item title-absolute">
                        <div class="absolute-obj">
                            <h3 class="title hight">Санузел</h3>
                        </div>
                        <div class="media">
                            <img src="{{ asset('/img/slider/remont-vanna.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('/js/main/index.js') }}"></script>
@endsection

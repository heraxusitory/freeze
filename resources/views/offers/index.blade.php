@extends('layouts.main')
@section('title', 'Открытые предложения')

@section('css')
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        <div class="info-block">
            <h4>Открытые предложения.</h4>
            <div class="content">
                <p>Иногда на нашем сайте появляются определенные <strong>открытые предложения</strong>, как,
                например, по подбору мастеров в бригаду
                </p>
            </div>
        </div>
        <div class="offer-list">
            <div class="empty">На данный момент, к сожалению, предложений нет</div>
        </div>
    </div>
@endsection

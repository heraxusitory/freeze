@extends('layouts.main')
@section('title', 'Main')
@section('content')
    <div class="container">
        <div class="info-block">
            <h2>Что такое Мастер?</h2>
            <div class="content">
                <p>Мастер - ремонт, отделка, сборка мебели. Сделаем ремонт, быстро, качественно, недорого</p>
            </div>
        </div>

        <div class="info-block">
            <h2>Зачем нужен Мастер?</h2>
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

{{--    @include('layouts.forms.form')--}}
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            $('.modal-content').on('submit', '#formID', function() {

            })

            // $('').on('click', '#sendForm')
            // $('#formID').on('sub')
            $('.application').click(function() {
                let form = $(this);
                $.ajax({
                    url: form.attr('data-url'),
                    method: "GET",
                    data: "",
                    beforeSend: () => {
                        $('.modal-body').html(
                            "<div class='spinner-border text-success' role='status'> <span class='sr-only'>Loading...</span> </div>"
                        )
                    },
                    dataType: "json",
                    success: (data) => {
                        $('.modal-body').html(data.form);
                        console.log(data)

                        // $('.modal-body').find('#formID')
                            // console.log(";;;dsdsdsd")
                            // alert('121212')
                            let form = $('#formID');
                            console.log(form)
                            form.submit(function (e) {
                                console.log(form)
                                // e.preventDefault()
                                $.ajax({
                                    action: form.attr('data-url'),
                                    method: "POST",
                                    data: form.serialize(),
                                    dataType: "json",
                                    success: (data) => {
                                        console.log('success', data)
                                        $('#modal-application').modal('hide');
                                    },
                                    error: (error) => {
                                        console.log('error', error)
                                    }

                                });
                                return false;
                            })

                    },
                    complete: () => {
                    },
                    error: (error) => {

                    }
                })
            })
            console.log($('#formID'))
            $('.modal-content').on('click', '#sendForm', function() {
                console.log($('#formID'))
                $('#formID').submit();
            })

        })
    </script>s
@endsection

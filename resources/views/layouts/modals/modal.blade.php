<!-- Button trigger modal -->
{{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form">--}}
{{--    Заполнить форму--}}
{{--</button>--}}

<!-- Modal -->
<div class="modal fade" id="modal-application" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title ?? '' }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-success" id="sendForm">Отправить</button>
            </div>
        </div>
    </div>
</div>

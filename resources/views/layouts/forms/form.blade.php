<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form">
    Заполнить форму
</button>

<!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заголовок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">

                        <label for="firstName">Имя</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Иван">

                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Иванов">

                        <label for="phoneNumber">Телефон</label>
                        <input type="number" class="form-control" id="phoneNumber" placeholder="+7(999)-999-99-99">

                        <label for="exampleFormControlInput1">@-mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect1">Example select</label>--}}
{{--                        <select class="form-control" id="exampleFormControlSelect1">--}}
{{--                            <option>1</option>--}}
{{--                            <option>2</option>--}}
{{--                            <option>3</option>--}}
{{--                            <option>4</option>--}}
{{--                            <option>5</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <label for="exampleFormControlSelect2">Example multiple select</label>--}}
{{--                        <select multiple class="form-control" id="exampleFormControlSelect2">--}}
{{--                            <option>1</option>--}}
{{--                            <option>2</option>--}}
{{--                            <option>3</option>--}}
{{--                            <option>4</option>--}}
{{--                            <option>5</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label for="review">Напишите отзыв</label>
                        <textarea class="form-control" id="review" rows="3"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

    })
</script>

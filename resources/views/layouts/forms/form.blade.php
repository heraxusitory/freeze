<form action="{{route('form.store')}}" method="POST" id="formID">
    @csrf
    <div class="form-group">

        <label for="firstName">Имя</label>
        <input type="text" class="form-control" id="firstName" placeholder="Иван">

        {{--                        <label for="lastName">Фамилия</label>--}}
        {{--                        <input type="text" class="form-control" id="lastName" placeholder="Иванов">--}}

        <label for="phoneNumber">Телефон</label>
        <input type="number" class="form-control" id="phoneNumber" placeholder="+7(999)-999-99-99">

        <label for="email">@-mail</label>
        <input type="email" class="form-control" id="email" placeholder="name@example.com">
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
        <label for="service">Напишите нам</label>
        <textarea class="form-control" id="service" rows="3"></textarea>
    </div>
</form>

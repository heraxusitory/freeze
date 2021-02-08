<form action="{{route('form.store')}}" method="POST" id="formID">
    @csrf
    <div class="form-group">

        <label for="firstName">Имя</label>
        <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" placeholder="Иван">
        @error('firstName')
        <div class="alert alert-danger">{{ $errors->first('firstName') }}</div>
        @enderror

        {{--                        <label for="lastName">Фамилия</label>--}}
        {{--                        <input type="text" class="form-control" id="lastName" placeholder="Иванов">--}}

        <label for="phoneNumber">Телефон</label>
        <input type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" id="phoneNumber" value="{{ isset($number) ? $number: '' }}">

        @error('phoneNumber')
        <div class="alert alert-danger">{{ $errors->first('phoneNumber')  }}</div>
        @enderror

        <label for="email">@-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="name@example.com" value="{{ isset($email) ? $email: '' }}">

        @error('email')
        <div class="alert alert-danger">{{ $errors->first('email')  }}</div>
        @enderror
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
        <textarea class="form-control" name="service" rows="3"></textarea>
    </div>
</form>

<form action="{{route('request.form.store')}}" method="POST" id="requestForm">
    @csrf
    <div class="form-group">

        <label for="firstName">Имя</label>
        <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName"
               placeholder="Иван" value="{{ isset($fields['name']) ? $fields['name'] : '' }}">
        @error('firstName')
        <div class="alert alert-danger">{{ $errors->first('firstName') }}</div>
        @enderror

        {{--                        <label for="lastName">Фамилия</label>--}}
        {{--                        <input type="text" class="form-control" id="lastName" placeholder="Иванов">--}}

        <label for="phoneNumber">Телефон</label>
        <input type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber"
               id="phoneNumber" value="{{ isset($fields['number']) ? $fields['number'] : '' }}">

        @error('phoneNumber')
        <div class="alert alert-danger">{{ $errors->first('phoneNumber')  }}</div>
        @enderror

        <label for="email">@-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
               placeholder="name@example.com" value="{{ isset($fields['email']) ? $fields['email'] : '' }}">

        @error('email')
        <div class="alert alert-danger">{{ $errors->first('email')  }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="service">Напишите нам</label>
        <textarea class="form-control @error('request') is-invalid @enderror" name="request"
                  rows="3">{{ isset($fields['request']) ? $fields['request'] : '' }}</textarea>
    </div>

    @error('request')
    <div class="alert alert-danger">{{ $errors->first('request')  }}</div>
    @enderror
</form>

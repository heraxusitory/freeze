<form action="{{route('review.form.store')}}" method="POST" id="reviewForm">
    @csrf
    <div class="form-group">

        <label for="firstName">Имя</label>
        <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" placeholder="Иван" value="{{ isset($fields['name']) ? $fields['name'] : '' }}">
        @error('firstName')
        <div class="alert alert-danger">{{ $errors->first('firstName') }}</div>
        @enderror

        {{--                        <label for="lastName">Фамилия</label>--}}
        {{--                        <input type="text" class="form-control" id="lastName" placeholder="Иванов">--}}

        <label for="phoneNumber">Телефон</label>
        <input type="tel" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" id="phoneNumber" value="{{ isset($fields['number']) ? $fields['number'] : '' }}">

        @error('phoneNumber')
        <div class="alert alert-danger">{{ $errors->first('phoneNumber')  }}</div>
        @enderror

        <label for="email">@-mail</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="name@example.com" value="{{ isset($fields['email']) ? $fields['email'] : '' }}">

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
        <label for="service">Отзыв</label>
        <textarea class="form-control @error('review') is-invalid @enderror" name="review" rows="3">{{ isset($fields['review']) ? $fields['review'] : '' }}</textarea>
    </div>
    @error('review')
    <div class="alert alert-danger">{{ $errors->first('review')  }}</div>
    @enderror

    <div id="rating"></div>
    @error('rating')
    <div class="alert alert-danger">{{ $errors->first('rating')  }}</div>
    @enderror
    <input type="hidden" name="rating" value="{{ isset($fields['rating']) ? $fields['rating'] : '1' }}">
</form>

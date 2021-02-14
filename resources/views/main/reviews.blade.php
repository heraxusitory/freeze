<div class="container">
    <div class="row">
        @if(!$isExistRecords)
               <div> Здесь может появиться Ваш отзыв!</div>
        @else
        @foreach($reviews as $review)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="review">
                    <h5>{{$review->name}} <span>{{$review->email}}</span></h5>
{{--                    <span>{{$review->rating}}</span>--}}
                    <div class="star-rating" style="display: flex; justify-content: left">
                        @for($count = 1; $count <= $review->rating; $count++)
                            <img src="{{ asset('/img/icons/star-rating.svg') }}">
                        @endfor
                    </div>
                    <p>{{$review->review}}</p>
                </div>

            </div>
        @endforeach
        {{--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
        {{--            <div class="review">--}}
        {{--                <h5>Name <span>(почтовый адрес скрыт)</span></h5>--}}
        {{--                <span>rating</span>--}}
        {{--                <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
        {{--            <div class="review">--}}
        {{--                <h5>Name <span></span></h5>--}}
        {{--                <span>rating</span>--}}
        {{--                <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">--}}
        {{--            <div class="review">--}}
        {{--                <h5>Name <span>(example@email.com)</span></h5>--}}
        {{--                <span>rating</span>--}}
        {{--                <p>Lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
    @endif
</div>

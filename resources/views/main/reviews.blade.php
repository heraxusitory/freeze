<div class="container">
    <div class="row">
        @if(!$isExistRecords)
               <div> Здесь может появиться Ваш отзыв!</div>
        @else
        @foreach($reviews as $review)
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <div class="review" style="word-break: break-word">
                    <h5>{{$review->name}} <span>{{($review->email) ? "({$review->email})" : "" }}</span></h5>
                    <div class="star-rating" style="display: flex; justify-content: left">
                        @for($count = 1; $count <= $review->rating; $count++)
                            <img src="{{ asset('/img/icons/star-rating.svg') }}">
                        @endfor
                    </div>
                    <p>{{$review->review}}</p>
                </div>

            </div>
        @endforeach
    </div>
    @endif
</div>

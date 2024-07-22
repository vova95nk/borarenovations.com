<div id="feedback">
    <h3>What our customers say</h3>
    <div class="site-section bg-left-half mb-5">
        <div class="container owl-2-style">
            <div class="owl-carousel owl-2">
                @foreach($feedbacks as $feedback)
                    <div id="feedback__item">
                        <h3><a href="#">{{$feedback['name']}}</a></h3>
                        <p>{{$feedback['comment']}}</p>
                        <div class="rating-result">
                            @for($i = 0; $i < 5; $i++)
                                @if($i < $feedback['rating'])
                                    <span class="active"></span>
                                @else
                                    <span></span>
                                @endif
                            @endfor
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div id="feedback__buttons">
        <a href="#feedback-modal">
            <button id="write-feedback">
                Write a feedback
            </button>
        </a>
        <a href="#">
            <button id="quote-btn">
                Get a quote
            </button>
        </a>
    </div>

    <div id="feedback-modal">
        <div class="line"></div>
        <h4>Send feedback</h4>
        <form action="/send-feedback" method="post" class="feedback-form">
            @csrf
            <input type="text" placeholder="First name" id="fb_user_first_name">
            <input type="text" placeholder="Last name" id="fb_user_last_name">
            <textarea cols="30" rows="5" placeholder="Your message" id="fb_user_message"></textarea>
            <br>
            <div id="full-stars-example">
                <div class="rating-group">
                    <label aria-label="1 star" class="rating__label" for="rating-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-1" value="1" type="radio" checked>
                    <label aria-label="2 stars" class="rating__label" for="rating-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                </div>
            </div>
            <input type="button" name="send_feedback" id="send_feedback" value="SEND">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf_token">
        </form>
        <div class="line"></div>
    </div>
</div>

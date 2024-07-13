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
        <button>
            Write a feedback
        </button>
        <button id="quote-btn">
            Get a quote
        </button>
    </div>
</div>

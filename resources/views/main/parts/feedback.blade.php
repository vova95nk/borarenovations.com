<div id="feedback">
    <div class="part_header">
        <h1>What Our Customers Say</h1>
        <div class="part_header_line"></div>
    </div>
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
                                    ⭐️
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
    </div>

    <div id="feedback-modal">
        <div class="line"></div>
        <div class="feedback_social">
            <h4>Send feedback</h4>
            <div>
                <a href="https://www.google.com/search?sca_esv=59944d6273687f66&rlz=1C5CHFA_enUS880US880&sxsrf=ADLYWIIotrVsBl1yN14RhwwBUbLdRTzmww:1724439711206&q=bora+cabinet+renovations+linwood+%D0%BE%D1%82%D0%B7%D1%8B%D0%B2%D1%8B&uds=ADvngMguQLgI-yzRB5jS3dgoDg9InXeTxjWGm3r5UbX5DeFe5745ts2Y8YNZXvhNJsrYOXZzxZR_WfD-EwnGCS9it9Bs_sgvLYYz4kcOa1TtPBfLc1dMONwv84uxx2TCySNoIlOxh0_3hZWeKdmKi5Y_KgtU7HJVoIxUye5409MRV8s54sn5NM_f7b_rDb-NsgsvaC-nZQ1ExsE_vr1BaspNDBbcPeYJNJYeHaW5P6BiCjJY5PpVKWF9fOOI7rO7h-llLcBK_XyOivRSvMtH77pbhbHKXkq1CjhqRbqtsZMCvcpC9MsYLT2j1NhbWH5SBYOt4v9YulUZESHfJWDuyCo-YCba0TVGaD4fhj16g1YaV1zTkOKrKADmKVtBkrM3417BYxWwIyylFtg_iwoNpQbcyqztAR8reaCn2m43E2g5a6ClAkTHHb5E3sK_Rgmj64hn2haAezsupVaRmZFkFujSG-YsFAsxB72_RxT6zIthua-dbZLAWtKNvwdFyNHGadj4IG--Yi_5LyC-Ls0xNnVheJL9AnMxNvh1cmVRTGEF5KzqjVUOJFuD8Lcjq3vRYPQF_wnCl3vwdXOFZ4i92nnyrbxfmINrHDf17sWnqj7z73ivn0Z8RKs&si=ACC90nwjPmqJHrCEt6ewASzksVFQDX8zco_7MgBaIawvaF4-7l5qw3HuyZyXcy8yl6QxpwmfpMTGjuvyGdg800nHSTa-Jv-mWyO1IU5-_139QsErEFgk7S8wQuaeiZYF_HsYqnztT-FNUUhJ3Std9ro4QhFMoDzmUPAEvwOrgQfYT3Ld_zRaa2s%3D&sa=X&ictx=1&lei=n9zIZquaDO-g5NoPmp-BgQ0"><i
                            class="fa-brands fa-google"></i></a>
                <a href="https://www.facebook.com/BoraRenovations"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
        </div>
        <form action="/send-feedback" method="post" class="feedback-form">
            @csrf
            <input type="text" placeholder="First name" id="fb_user_first_name">
            <input type="text" placeholder="Last name" id="fb_user_last_name">
            <textarea cols="30" rows="5" placeholder="Your message" id="fb_user_message"></textarea>
            <br>
            <div id="full-stars-example">
                <div class="rating-group">
                    <label aria-label="1 star" class="rating__label" for="rating-1"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-1" value="1" type="radio" checked>
                    <label aria-label="2 stars" class="rating__label" for="rating-2"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-2" value="2" type="radio">
                    <label aria-label="3 stars" class="rating__label" for="rating-3"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-3" value="3" type="radio">
                    <label aria-label="4 stars" class="rating__label" for="rating-4"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-4" value="4" type="radio">
                    <label aria-label="5 stars" class="rating__label" for="rating-5"><i
                                class="rating__icon rating__icon--star fa fa-star"></i></label>
                    <input class="rating__input" name="rating" id="rating-5" value="5" type="radio">
                </div>
            </div>
            <input type="button" name="send_feedback" id="send_feedback" value="SEND">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf_token">
        </form>
        <div class="line"></div>
    </div>
</div>

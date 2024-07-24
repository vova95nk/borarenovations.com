<div class="main-view"
     style="background-image: url('{{ $prodPrefix }}kitch1.jpeg')">
    <div class="main-info">
        <div id="quote_block">
            <p>Get a quote</p>
            <form action="/get-quote" method="post" id="quote_form">
                @csrf
                <div class="username_inputs">
                    <input type="text" name="name" placeholder="First name" id="user_first_name">
                    <input type="text" name="name" placeholder="Last name" id="user_last_name">
                </div>
                <input type="text" name="phone" placeholder="Phone number" id="user_phone">
                <input type="email" name="email" placeholder="Email" id="user_email">
                <textarea name="message" cols="30" rows="4" placeholder="Your message" id="user_message"></textarea>
                <br>
                <input type="button" name="send_quote" id="send_quote" value="SEND">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf_token">
            </form>
        </div>
    </div>
    {{--    <div class="main-info">--}}
    {{--        <p>--}}
    {{--            The only company that knows how to make your old kitchen a master piece...--}}
    {{--        </p>--}}
    {{--        <button class="quote-button" id="quote-btn">Get a quote</button>--}}
    {{--    </div>--}}
</div>

@include('main/parts/about-us')
@include('main/parts/services-preview')
@include('main/parts/user-check-board')
@include('main/parts/why-us')
@include('main/parts/feedback')
@include('main/parts/google-map')

<div class="header">
    <img src="{{ $prodPrefix }}images/main2.jpeg" alt="Main_picture" class="main-bg">
    <div class="header_social">
        <div>
            <i class="fa-solid fa-location-dot"></i>
            Serving DE, PA, NJ & MD
        </div>
        <div class="header_social_phone">
            <a href="tel:+13022441338">
                <i class="fa-sharp fa-solid fa-phone"></i>
                (302) 244-1338
            </a>
        </div>
    </div>
    <div class="header-nav">
        <img class="main-logo" src="{{ $prodPrefix }}images/logo/transparent-logo.svg" alt="main-logo">
        <div class="site-navbar">
            <nav class="site-navigation">
                <ul class="site-menu main-menu d-none d-lg-block">
                    <li @if($active === 'home') class="active" @endif>
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li @if($active === 'about') class="active" @endif>
                        <a href="#about" class="nav-link">About Us</a>
                    </li>
                    <li class="has-children @if($active === 'services') active @endif">
                        <a href="#services" class="nav-link">Our Services</a>
                        <ul class="dropdown arrow-top">
                            <li>
                                <a href="#services" class="nav-link">Refinishing</a>
                            </li>
                            <li>
                                <a href="#services" class="nav-link">Redooring</a>
                            </li>
                            <li>
                                <a href="#services" class="nav-link">Custom Finishes</a>
                            </li>
                            <li>
                                <a href="#services" class="nav-link">More Updates</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="/gallery" class="nav-link">Gallery</a></li>
                    <li><a href="#footer" class="nav-link">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="header-items">
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
        <div class="main_info_text">
            <p class="main_info_small_text">Have an idea?</p>
            <p class="main_info_big_text">We'll bring your dream cabinets to life without a full remodel</p>
        </div>
    </div>
</div>
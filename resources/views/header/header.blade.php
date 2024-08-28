<div class="header">
    <img src="{{ $prodPrefix }}images/test-bg-1.jpeg" alt="Main_picture" class="main-bg">
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
                                <a href="#services/refinishing" class="nav-link">Refinishing</a>
                            </li>
                            <li>
                                <a href="#services/redooring" class="nav-link">Redooring</a>
                            </li>
                            <li>
                                <a href="#services/installation" class="nav-link">Installation</a>
                            </li>
                            <li>
                                <a href="#services/custom-finishes" class="nav-link">Custom Finishes</a>
                            </li>
                            <li>
                                <a href="#services/more-updates" class="nav-link">More Updates</a>
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
        <p class="main_info_text">The only company </br>that knows how to make your old kitchen</br> a master piece...</p>
    </div>
</div>
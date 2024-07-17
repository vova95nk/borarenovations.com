<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>
<div class="site-navbar-wrap">
    <div class="site-navbar-top">
        <div class="row align-items-center justify-content-between">
            <img class="main-logo" src="@if(env('APP_ENV') === 'prod') ./public/black-logo.svg @endif @if (env('APP_ENV') !== 'prod')./black-logo.svg @endif" alt="main-logo">
            <div class="col-8 flex-column justify-content-between">
                <div class="site-navbar site-navbar-target js-sticky-header">
                    <div class="container d-flex justify-content-end">
                        <nav class="site-navigation text-center justify-content-end">
                            <div class="container">
                                <ul class="site-menu main-menu d-none d-lg-block">
                                    <li @if($active === 'home') class="active" @endif>
                                        <a href="/" class="nav-link">Home</a>
                                    </li>
                                    <li @if($active === 'about') class="active" @endif>
                                        <a href="/about" class="nav-link">About Us</a>
                                    </li>
                                    <li class="has-children @if($active === 'services') active @endif">
                                        <a href="/services" class="nav-link">Our Services</a>
                                        <ul class="dropdown arrow-top">
                                            <li>
                                                <a href="/services/refinishing" class="nav-link">Refinishing</a>
                                            </li>
                                            <li>
                                                <a href="/services/redooring" class="nav-link">Redooring</a>
                                            </li>
                                            <li>
                                                <a href="/services/installation" class="nav-link">Installation</a>
                                            </li>
                                            <li>
                                                <a href="/services/custom-finishes" class="nav-link">Custom Finishes</a>
                                            </li>
                                            <li>
                                                <a href="/services/more-updates" class="nav-link">More Updates</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li @if($active === 'gallery') class="active" @endif><a href="/gallery" class="nav-link">Gallery</a></li>
                                    <li @if($active === 'contact') class="active" @endif><a href="/contact" class="nav-link">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

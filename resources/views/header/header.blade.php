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
        <div class="container py-3">
            <div class="row align-items-center justify-content-between">
                <div class="col-5">
                    <div class="d-flex mr-auto">
                        <img class="bg-transparent" src="./black-logo.svg" alt="main-logo" width="250px" height="125px">
                    </div>
                </div>
                <div class="col-6 text-right flex-column justify-content-between short-contacts">
                    <div class="d-flex flex-row justify-content-end head-contacts text-nowrap">
                        <a href="tel:+13022441338" class="d-flex align-items-center">
                            <span class="icon-phone mr-2"></span>
                            <span class="d-md-inline-block">+1 302-244-1338</span>
                        </a>
                        <a href="#" class="nav-link">
                            <div class="quote-button" id="quote-btn">
                                Get a quote
                            </div>
                        </a>
                    </div>
                    <div class="site-navbar site-navbar-target js-sticky-header">
                        <div class="container d-flex justify-content-end">
                            <div class="row align-items-end text-nowrap">
                                <div class="col-10">
                                    <nav class="site-navigation text-center justify-content-end" role="navigation">
                                        <div class="container">
                                            <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
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
        </div>
    </div>
</div>

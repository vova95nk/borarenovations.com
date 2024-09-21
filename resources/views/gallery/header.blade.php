<div class="header" style="margin-bottom: 130px">
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
</div>
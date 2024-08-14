<div id="services"></div>
<div class="services-preview">
    <div class="services">
        <h1>Our Services</h1>
        <div class="site-section bg-left-half mb-5">
            <div class="container owl-2-style">
                <div class="owl-carousel owl-2">
                    @foreach($services as $service)
                        <div id="feedback__item">
                            <h3>{{$service['name']}}</h3>
                            <p>{{$service['info']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
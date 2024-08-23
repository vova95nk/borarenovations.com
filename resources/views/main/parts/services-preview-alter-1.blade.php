<div class="container alter-services">
    <h1>Our services</h1>

    <div class="gallery-wrap">
        @foreach($alterServices as $service)
            <div class="service-item item-{{$service['num']}}">
                <h3>{{$service['name']}}</h3>
                <p>{{$service['info']}}</p>
            </div>
        @endforeach
    </div>
</div>

<div class="social">
    <a href="https://twitter.com/StefCharle" target="_blank">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/149103/twitter.svg" alt="">
    </a>
</div>
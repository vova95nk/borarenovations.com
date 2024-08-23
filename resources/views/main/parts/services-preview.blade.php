<div class="services_preview">
    <h1>Our Services</h1>
    <div class="services_items">
        @foreach($services as $service)
            <div class="service_item">
                @if($service['num'] == 'odd')
                    <div class="service_item_info_left">
                        <h3>{{$service['name']}}</h3>
                        <p>{{$service['info']}}</p>
                    </div>
                    <div class="service_item_picture">
                        <img src="{{ $prodPrefix }}images/gallery/ba/1a.jpeg" alt="re-f">
                    </div>
                @else
                    <div class="service_item_picture">
                        <img src="{{ $prodPrefix }}images/gallery/re-dooring/1.jpeg" alt="re-f">
                    </div>
                    <div class="service_item_info_right">
                        <h3>{{$service['name']}}</h3>
                        <p>{{$service['info']}}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
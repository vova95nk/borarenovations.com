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
                        <div class="gallery_box_item_ba_container">
                            <div class="sl-container">
                                <div class="view view-after">
                                    <p>After</p>
                                    <img src="{{$service['img_path_after']}}"/>
                                </div>
                                <div class="view view-before">
                                    <p>Before</p>
                                    <img src="{{$service['img_path_before']}}"/>
                                </div>
                                <div class="dragme"><div class="dr-circle"></div></div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="service_item_picture" id="service_item_picture" style="background-image: url({{$service['img_path_after']}})">
                        <span style="display: none" id="after_img">{{$service['img_path_after']}}</span>
                        <span style="display: none" id="before_img">{{$service['img_path_before']}}</span>
                        <div class="switch_img" id="switch_img_button">
                            <p id="switch_img_text">Switch to before</p>
                        </div>
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
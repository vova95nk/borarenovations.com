<div class="services_preview alter_bg_color overall_padding">
    <div class="part_header">
        <h1>Our Services</h1>
        <div class="part_header_line"></div>
    </div>
    <div class="services_items">
        @foreach($services as $service)
            <div class="service_item">
                @if($service['num'] == 'odd')
                    <div class="service_item_info_left">
                        <h3>{{$service['name']}}</h3>
                        <p>{{$service['info']}}</p>
                    </div>
                    @if($service['type'] == 'slider')
                        <div class="service_item_picture" id="service_item_picture" style="background-image: url({{$service['img_path_after']}})">
                            <span style="display: none" id="after_img">{{$service['img_path_after']}}</span>
                            <span style="display: none" id="before_img">{{$service['img_path_before']}}</span>
                            <div class="switch_block">
                                <div class="switch_img" id="switch_img_button">
                                    <i class="fa-solid fa-repeat"></i><span id="switch_img_text">Before</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="service_item_picture" id="service_item_picture" style="background-image: url({{$service['img']}})"></div>
                    @endif
                @else
                    @if($service['type'] == 'slider')
                        <div class="service_item_picture" id="service_item_picture" style="background-image: url({{$service['img_path_after']}})">
                            <span style="display: none" id="after_img">{{$service['img_path_after']}}</span>
                            <span style="display: none" id="before_img">{{$service['img_path_before']}}</span>
                            <div class="switch_block">
                                <div class="switch_img" id="switch_img_button">
                                    <i class="fa-solid fa-repeat"></i><span id="switch_img_text">Before</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="service_item_picture" id="service_item_picture" style="background-image: url({{$service['img']}})"> </div>
                    @endif
                    <div class="service_item_info_right">
                        <h3>{{$service['name']}}</h3>
                        <p>{{$service['info']}}</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
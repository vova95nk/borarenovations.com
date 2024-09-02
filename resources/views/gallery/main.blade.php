<div class="gallery_box">
    <div class="gallery_box_item">
        <div class="gallery_box_item_info">
            <div class="gallery_box_item_info_box">
                <h1>Refinishing</h1>
                <div class="gallery_box_line"></div>
                <h2>Before&After</h2>
            </div>
        </div>
        <div class="gallery_box_item_slider">
            <div class="gallery_box_item_slider_img" style="background-image: url({{$refinishingFirstImg}})">
                <div class="slider_switch_button" id="refinishing_switcher"><i class="fa-solid fa-repeat"></i> <span id="refinishing_switch_text">Before</span></div>
                <div class="gallery_box_item_slider_img_changer">
                    <div class="slider_prev_button"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="slider_next_button"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
            </div>
            <div class="gallery_box_item_slider_shortcut"></div>
        </div>
    </div>
    <div class="gallery_box_item">
        <div class="gallery_box_item_info">
            <div class="gallery_box_item_info_box">
                <h1>ReDooring</h1>
                <div class="gallery_box_line"></div>
                <h2>Before&After</h2>
            </div>
        </div>
        <div class="gallery_box_item_slider">
            <div class="gallery_box_item_slider_img" style="background-image: url({{$reDooringFirstImg}})">
                <div class="slider_switch_button" id="redooring_switcher"><i class="fa-solid fa-repeat"></i> <span id="redooring_switch_text">Before</span></div>
                <div class="gallery_box_item_slider_img_changer">
                    <div class="slider_prev_button"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="slider_next_button"><i class="fa-solid fa-arrow-right"></i></div>
                </div>
                {{--                @foreach($refinishingPictures as $item)--}}
                {{--                    <span style="display: none" id="after_img">{{$service['img_path_after']}}</span>--}}
                {{--                    <span style="display: none" id="before_img">{{$service['img_path_before']}}</span>--}}
                {{--                    <div class="switch_img" id="switch_img_button">--}}
                {{--                        <p id="switch_img_text">Switch to before</p>--}}
                {{--                    </div>--}}
                {{--                @endforeach--}}
            </div>
            <div class="gallery_box_item_slider_shortcut"></div>
        </div>
    </div>
</div>
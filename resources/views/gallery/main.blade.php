<div class="gallery_header">
    <h1>Gallery</h1> <p> Before&After</p>
</div>
<div class="gallery_box">
    @foreach($pictures as $item)
        <div id="gallery_item">
            <img src="{{ $item['after'] }}" alt="After pic example">
            @if(isset($item['before']))
                <img src="{{ $item['before'] }}" alt="Before pic example" style="display: none">
                <div class="slider_switch_button" id="refinishing_switcher"><i class="fa-solid fa-repeat"></i> <span id="refinishing_switch_text">Before</span></div>
            @endif
        </div>
    @endforeach
{{--    <div class="gallery_box_item">--}}
{{--        <div class="gallery_box_item_slider">--}}
{{--            <div class="gallery_box_item_slider_img" style="background-image: url({{$refinishingFirstImg}})">--}}
{{--                <div class="slider_switch_button" id="refinishing_switcher"><i class="fa-solid fa-repeat"></i> <span id="refinishing_switch_text">Before</span></div>--}}
{{--                <div class="gallery_box_item_slider_img_changer">--}}
{{--                    <div class="slider_prev_button"><i class="fa-solid fa-arrow-left"></i></div>--}}
{{--                    <div class="slider_next_button"><i class="fa-solid fa-arrow-right"></i></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="gallery_box_item_slider_shortcut"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
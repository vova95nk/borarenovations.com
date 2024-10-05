<div class="gallery_header">
    <h1>Gallery</h1> <p> Before&After</p>
</div>
<div class="gallery_box">
    @foreach($pictures as $key => $item)
        <div class="gallery_item" @if($key > 8) style="display: none" @endif>
            <img src="{{ $item['after'] }}" alt="After pic example">
            @if(isset($item['before']))
                <img src="{{ $item['before'] }}" alt="Before pic example" style="display: none">
                <div class="pic_buttons">
                    <div class="slider_switch_button" id="refinishing_switcher"><i class="fa-solid fa-repeat"></i> <span id="refinishing_switch_text">Before</span></div>
                    <div class="full_size_button" id="full_size_button"><i class="fa-solid fa-expand"></i></div>
                </div>
            @endif
            <div class="full_size_gallery" style="display: none;">
                <div class="full_size_gallery_interactive">
                    <div class="gallery_item_full_size">
                        <img src="{{ $item['after'] }}" alt="After pic example">
                        @if(isset($item['before']))
                            <img src="{{ $item['before'] }}" alt="Before pic example" style="display: none">
                            <div class="pic_buttons">
                                <div class="slider_switch_button" id="refinishing_switcher"><i class="fa-solid fa-repeat"></i> <span id="refinishing_switch_text">Before</span></div>
                                <div class="full_size_close_button"><i class="fa-solid fa-xmark"></i></div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div id="gallery_lm_btn_box">
    <p id="gallery_lm_btn">Load More <i class="fa-regular fa-plus"></i></p>
</div>
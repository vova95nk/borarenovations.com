(function($) {
    var $dragMe = $(".dragme"),
        $container = $(".sl-container"),
        $viewAfter = $(".view-after");
    $dragMe.draggable({
        containment: "parent",
        drag: function() {
            $viewAfter.css({
                width : parseFloat($(this).css('left')) + 5
            });
        }
    });
    $container.on("click", function(event) {
        var eventLeft = event.pageX - $container.offset().left - 15;
        animateTo(eventLeft);
    });
    animateTo("30%");
    function animateTo(_left) {
        $dragMe.animate({
            left: _left
        }, 'slow', 'linear');
        $viewAfter.animate({
            width: _left
        }, 'slow', 'linear');
    }
})(jQuery);

$('#lightSlider').lightSlider({
    gallery: true,
    item: 1,
    loop:true,
    slideMargin: 0,
    thumbItem: 9
});
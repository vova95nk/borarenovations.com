(function ($) {
    let dragMe = document.getElementsByClassName("dragme")

    for (let d = 0; d < dragMe.length; d++) {
        let $dragMe = $(dragMe[d]),
            $container = $(dragMe[d].parentElement[1]),
            $viewAfter = $(dragMe[d].parentElement.children[0]);

        $dragMe.draggable({
            containment: "parent",
            drag: function () {
                $viewAfter.css({
                    width: parseFloat($(this).css('left')) + 5
                });
            }
        });
        $container.on("click", function (event) {
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
    }
})(jQuery);

let switchImgButton = document.getElementById("switch_img_button")

if (switchImgButton) {
    switchImgButton.onclick = function () {
        let imgBlock = document.getElementById("service_item_picture")
        let afterImgPath = document.getElementById("after_img").textContent
        let beforeImgPath = document.getElementById("before_img").textContent
        let switchText = document.getElementById("switch_img_text")
        if (imgBlock.style.backgroundImage === "url(\"" + afterImgPath + "\")") {
            imgBlock.style.backgroundImage = "url(\"" + beforeImgPath + "\")"
            switchText.textContent = "Switch to after"
        } else {
            imgBlock.style.backgroundImage = "url(\"" + afterImgPath + "\")"
            switchText.textContent = "Switch to before"
        }
    }
}
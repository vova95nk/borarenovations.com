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

let switchImgButtons = document.getElementsByClassName("switch_img")

if (switchImgButtons) {
    for (let b = 0; b < switchImgButtons.length; b++) {
        let item = switchImgButtons[b]
        item.onclick = function () {
            let imgBlock = item.parentNode.parentNode
            let afterImgPath = imgBlock.children[0].textContent
            let beforeImgPath = imgBlock.children[1].textContent
            let switchText = imgBlock.children[2].children[0].children[1]

            if (imgBlock.style.backgroundImage === "url(\"" + afterImgPath + "\")") {
                imgBlock.style.backgroundImage = "url(\"" + beforeImgPath + "\")"
                switchText.textContent = "After"
            } else {
                imgBlock.style.backgroundImage = "url(\"" + afterImgPath + "\")"
                switchText.textContent = "Before"
            }
        }
    }
}
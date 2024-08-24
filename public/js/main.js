let pushUpButton = document.getElementById("go_to_quote")

window.onscroll = function() {
    let posTop = window.scrollY;

    console.log(posTop)
    if(posTop > 200) {
        pushUpButton.style.right = "-98px"
    } else {
        pushUpButton.style.right = "-500px"
    }
}

$(function () {

    if ($('.owl-2').length > 0) {
        $('.owl-2').owlCarousel({
            center: false,
            items: 1,
            loop: true,
            stagePadding: 0,
            margin: 20,
            smartSpeed: 1000,
            autoplay: true,
            nav: true,
            dots: true,
            pauseOnHover: false,
            responsive: {
                600: {
                    margin: 20,
                    nav: true,
                    items: 2
                },
                1000: {
                    margin: 20,
                    stagePadding: 0,
                    nav: true,
                    items: 3
                }
            }
        });
    }

})

const itemsPerPage = 9

let switchButtons = document.getElementsByClassName("slider_switch_button")

if (switchButtons) {
    for (let i = 0; i < switchButtons.length; i++) {
        let button = switchButtons[i]
        let beforeImg = button.parentElement.parentElement.children[0]
        let afterImg = button.parentElement.parentElement.children[1]

        button.onclick = function () {
            let btnState = button.children[1]
            if (btnState.textContent === 'Before') {
                beforeImg.style.display = 'none'
                afterImg.style.display = 'block'
                btnState.textContent = 'After'
            } else {
                beforeImg.style.display = 'block'
                afterImg.style.display = 'none'
                btnState.textContent = 'Before'
            }
        }
    }
}

let loadMoreBtn = document.getElementById("gallery_lm_btn")
if (loadMoreBtn) {
    loadMoreBtn.onclick = function () {
        getNextGalleryItems()
    }
}

function getNextGalleryItems() {
    let rawItems = document.getElementsByClassName("gallery_item")

    if (rawItems) {
        let counter = 0
        for (let i = 0; i < rawItems.length; i++) {
            let galleryItem = rawItems[i]

            if (galleryItem.style.display === 'none') {
                galleryItem.style.display = 'block'
                counter++

                if (counter === itemsPerPage) {
                    break
                }
            }
        }

        if (counter < itemsPerPage) {
            document.getElementById("gallery_lm_btn_box").style.display = 'none'
        }
    }
}
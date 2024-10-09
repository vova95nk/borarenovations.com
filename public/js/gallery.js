// Gallery | Before&After
const itemsPerPage = 9

let switchButtons = document.getElementsByClassName("slider_switch_button")

if (switchButtons) {
    for (let i = 0; i < switchButtons.length; i++) {
        let button = switchButtons[i]
        let beforeImg = button.parentElement.parentElement.children[0]
        let afterImg = button.parentElement.parentElement.children[1]

        button.onclick = function () {
            let btnState = button.children[1]
            if (btnState.textContent === 'After') {
                beforeImg.style.display = 'none'
                afterImg.style.display = 'block'
                btnState.textContent = 'Before'
            } else {
                beforeImg.style.display = 'block'
                afterImg.style.display = 'none'
                btnState.textContent = 'After'
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

// Gallery | Full size
let fullSizeButtons = document.getElementsByClassName("full_size_button")

if (fullSizeButtons) {
    for (let i = 0; i < fullSizeButtons.length; i++) {
        let button = fullSizeButtons[i]

        button.onclick = function () {
            showFullSizeGalleryItem(button.parentElement.parentElement.children[3])
        }
    }
}

function showFullSizeGalleryItem(item) {
    item.style.display = 'block'
}

// Gallery | Close full size
let closeFullSizeButtons = document.getElementsByClassName("full_size_close_button")

if (closeFullSizeButtons) {
    for (let i = 0; i < closeFullSizeButtons.length; i++) {
        let button = closeFullSizeButtons[i]

        button.onclick = function () {
            closeFullSizeGalleryItem(button.parentElement.parentElement.parentElement.parentElement)
        }
    }
}

function closeFullSizeGalleryItem(item) {
    item.style.display = 'none'
}
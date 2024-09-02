const refinishingKey = "refinishing"
const reDooringKey = "redooring"
const afterKey = "after"
const beforeKey = "before"
let refinishingSwitcher = document.getElementById("refinishing_switcher")
let prodPathPrefix = "public/"
let refinishingGalleryConfig = new Map([
    [0, new Map([[afterKey, "images/gallery/refinishing/1a.jpeg"], [beforeKey, "images/gallery/refinishing/1b.jpeg"]])],
    [1, new Map([[afterKey, "images/gallery/refinishing/2a.jpeg"], [beforeKey, "images/gallery/refinishing/2b.jpeg"]])],
    [2, new Map([[afterKey, "images/gallery/refinishing/3a.jpeg"], [beforeKey, "images/gallery/refinishing/3b.jpeg"]])]
])

let prevSwipeBtn = document.getElementById("slider_prev_button")
let nextSwipeBtn = document.getElementById("slider_next_button")
let refinishingSwitchText = document.getElementById("refinishing_switch_text")

prevSwipeBtn.onclick = function () {
    let galleryPart = prevSwipeBtn.parentNode.parentNode.children[0].id

    if (galleryPart === 'refinishing_switcher') {
        let picNow = refinishingSwitcher.parentElement
        let pageNum = 120
        for (let p = 0; p < refinishingGalleryConfig.size; p++) {
            let galleryPage = refinishingGalleryConfig.get(p)
            let afterImg = "url(\"./" + galleryPage.get(afterKey) +"\")"
            let beforeImg = "url(\"./" + galleryPage.get(beforeKey) +"\")"

            if (afterImg === picNow.style.backgroundImage || beforeImg === picNow.style.backgroundImage) {
                pageNum = p

                break
            }
        }

        if (pageNum === 0) {
            pageNum = refinishingGalleryConfig.size - 1
        } else if (pageNum > 0) {
            pageNum--
        }

        console.log(pageNum)

        let galleryPage = refinishingGalleryConfig.get(pageNum)
        let afterImg = "url(\"./" + galleryPage.get(afterKey) +"\")"
        picNow.style.backgroundImage = afterImg
        refinishingSwitchText.textContent = "Before"
    }
}

nextSwipeBtn.onclick = function () {
    let galleryPart = nextSwipeBtn.parentNode.parentNode.children[0].id

    if (galleryPart === 'refinishing_switcher') {
        let picNow = refinishingSwitcher.parentElement
        let pageNum = 120
        for (let p = 0; p < refinishingGalleryConfig.size; p++) {
            let galleryPage = refinishingGalleryConfig.get(p)
            let afterImg = "url(\"./" + galleryPage.get(afterKey) +"\")"
            let beforeImg = "url(\"./" + galleryPage.get(beforeKey) +"\")"

            if (afterImg === picNow.style.backgroundImage || beforeImg === picNow.style.backgroundImage) {
                pageNum = p

                break
            }
        }

        if (pageNum === refinishingGalleryConfig.size - 1) {
            pageNum = 0
        } else if ((pageNum + 1) < refinishingGalleryConfig.size) {
            pageNum++
        }

        console.log(pageNum)

        let galleryPage = refinishingGalleryConfig.get(pageNum)
        let afterImg = "url(\"./" + galleryPage.get(afterKey) +"\")"
        picNow.style.backgroundImage = afterImg
        refinishingSwitchText.textContent = "Before"
    }
}

refinishingSwitcher.onclick = function () {
    let picNow = refinishingSwitcher.parentElement

    for (let p = 0; p < refinishingGalleryConfig.size; p++) {
        let galleryPage = refinishingGalleryConfig.get(p)
        let afterImg = "url(\"./" + galleryPage.get(afterKey) +"\")"
        let beforeImg = "url(\"./" + galleryPage.get(beforeKey) +"\")"

        if (afterImg === picNow.style.backgroundImage) {
            picNow.style.backgroundImage = beforeImg
            refinishingSwitchText.textContent = "After"

            break
        }

        if (beforeImg === picNow.style.backgroundImage) {
            picNow.style.backgroundImage = afterImg
            refinishingSwitchText.textContent = "Before"

            break
        }
    }
}
const refinishingKey = "refinishing"
const reDooringKey = "redooring"
const afterKey = "after"
const beforeKey = "before"
let refinishingSwitcher = document.getElementById("refinishing_switcher")
let redooringSwitcher = document.getElementById("redooring_switcher")
let prodPathPrefix = "public/"
let refinishingGalleryConfig = new Map([
    [0, new Map([[afterKey, "images/gallery/refinishing/1a.jpeg"], [beforeKey, "images/gallery/refinishing/1b.jpeg"]])],
    [1, new Map([[afterKey, "images/gallery/refinishing/2a.jpeg"], [beforeKey, "images/gallery/refinishing/2b.jpeg"]])],
    [2, new Map([[afterKey, "images/gallery/refinishing/3a.jpeg"], [beforeKey, "images/gallery/refinishing/3b.jpeg"]])],
    [3, new Map([[afterKey, "images/gallery/refinishing/4a.jpeg"], [beforeKey, "images/gallery/refinishing/4b.jpeg"]])],
    [4, new Map([[afterKey, "images/gallery/refinishing/5a.jpeg"], [beforeKey, "images/gallery/refinishing/5b.jpeg"]])],
    [5, new Map([[afterKey, "images/gallery/refinishing/6a.jpeg"], [beforeKey, "images/gallery/refinishing/6b.jpeg"]])],
    [6, new Map([[afterKey, "images/gallery/refinishing/7a.jpeg"], [beforeKey, "images/gallery/refinishing/7b.jpeg"]])],
    [7, new Map([[afterKey, "images/gallery/refinishing/8a.jpeg"], [beforeKey, "images/gallery/refinishing/8b.jpeg"]])],
    [8, new Map([[afterKey, "images/gallery/refinishing/9a.jpeg"], [beforeKey, "images/gallery/refinishing/9b.jpeg"]])],
    [9, new Map([[afterKey, "images/gallery/refinishing/10a.jpeg"], [beforeKey, "images/gallery/refinishing/10b.jpeg"]])],
    [10, new Map([[afterKey, "images/gallery/refinishing/11a.jpeg"], [beforeKey, "images/gallery/refinishing/11b.jpeg"]])],
    [11, new Map([[afterKey, "images/gallery/refinishing/12a.jpeg"], [beforeKey, "images/gallery/refinishing/12b.jpeg"]])],
    [12, new Map([[afterKey, "images/gallery/refinishing/13a.jpeg"], [beforeKey, "images/gallery/refinishing/13b.jpeg"]])],
    [13, new Map([[afterKey, "images/gallery/refinishing/14a.jpeg"], [beforeKey, "images/gallery/refinishing/14b.jpeg"]])],
    [14, new Map([[afterKey, "images/gallery/refinishing/15a.jpeg"], [beforeKey, "images/gallery/refinishing/15b.jpeg"]])],
    [15, new Map([[afterKey, "images/gallery/refinishing/16a.jpeg"], [beforeKey, "images/gallery/refinishing/16b.jpeg"]])],
    [16, new Map([[afterKey, "images/gallery/refinishing/17a.jpeg"], [beforeKey, "images/gallery/refinishing/17b.jpeg"]])],
    [17, new Map([[afterKey, "images/gallery/refinishing/18a.jpeg"], [beforeKey, "images/gallery/refinishing/18b.jpeg"]])],
    [18, new Map([[afterKey, "images/gallery/refinishing/19a.jpeg"], [beforeKey, "images/gallery/refinishing/19b.jpeg"]])],
    [19, new Map([[afterKey, "images/gallery/refinishing/20a.jpeg"], [beforeKey, "images/gallery/refinishing/20b.jpeg"]])],
    [20, new Map([[afterKey, "images/gallery/refinishing/21a.jpeg"], [beforeKey, "images/gallery/refinishing/21b.jpeg"]])],
    [21, new Map([[afterKey, "images/gallery/refinishing/22a.jpeg"], [beforeKey, "images/gallery/refinishing/22b.jpeg"]])],
    [22, new Map([[afterKey, "images/gallery/refinishing/23a.jpeg"], [beforeKey, "images/gallery/refinishing/23b.jpeg"]])],
])
let reDooringGalleryConfig = new Map([
    [0, new Map([[afterKey, "images/gallery/re-dooring/1a.jpeg"], [beforeKey, "images/gallery/re-dooring/1b.jpeg"]])],
    [1, new Map([[afterKey, "images/gallery/re-dooring/2a.jpeg"], [beforeKey, "images/gallery/re-dooring/2b.jpeg"]])],
])

let prevSwipeBtn = document.getElementsByClassName("slider_prev_button")
let nextSwipeBtn = document.getElementsByClassName("slider_next_button")
let refinishingSwitchText = document.getElementById("refinishing_switch_text")
let redooringSwitchText = document.getElementById("redooring_switch_text")
let isProduction = true

for (let s = 0; s < prevSwipeBtn.length; s++) {
    prevSwipeBtn[s].onclick = function () {
        let galleryPart = prevSwipeBtn[s].parentNode.parentNode.children[0].id

        if (galleryPart === 'refinishing_switcher') {
            let picNow = refinishingSwitcher.parentElement
            let pageNum = 120
            for (let p = 0; p < refinishingGalleryConfig.size; p++) {
                let galleryPage = refinishingGalleryConfig.get(p)
                let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
                let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

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
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
            refinishingSwitchText.textContent = "Before"
        }

        if (galleryPart === 'redooring_switcher') {
            let picNow = redooringSwitcher.parentElement
            let pageNum = 120
            for (let p = 0; p < reDooringGalleryConfig.size; p++) {
                let galleryPage = reDooringGalleryConfig.get(p)
                let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
                let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

                if (afterImg === picNow.style.backgroundImage || beforeImg === picNow.style.backgroundImage) {
                    pageNum = p

                    break
                }
            }

            if (pageNum === 0) {
                pageNum = reDooringGalleryConfig.size - 1
            } else if (pageNum > 0) {
                pageNum--
            }

            console.log(pageNum)

            let galleryPage = reDooringGalleryConfig.get(pageNum)
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
            redooringSwitchText.textContent = "Before"
        }
    }

    nextSwipeBtn[s].onclick = function () {
        let galleryPart = nextSwipeBtn[s].parentNode.parentNode.children[0].id

        if (galleryPart === 'refinishing_switcher') {
            let picNow = refinishingSwitcher.parentElement
            let pageNum = 120
            for (let p = 0; p < refinishingGalleryConfig.size; p++) {
                let galleryPage = refinishingGalleryConfig.get(p)
                let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
                let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

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
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
            refinishingSwitchText.textContent = "Before"
        }

        if (galleryPart === 'redooring_switcher') {
            let picNow = redooringSwitcher.parentElement
            let pageNum = 120
            for (let p = 0; p < reDooringGalleryConfig.size; p++) {
                let galleryPage = reDooringGalleryConfig.get(p)
                let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
                let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

                if (afterImg === picNow.style.backgroundImage || beforeImg === picNow.style.backgroundImage) {
                    pageNum = p

                    break
                }
            }

            if (pageNum === reDooringGalleryConfig.size - 1) {
                pageNum = 0
            } else if ((pageNum + 1) < reDooringGalleryConfig.size) {
                pageNum++
            }

            console.log(pageNum)

            let galleryPage = reDooringGalleryConfig.get(pageNum)
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
            redooringSwitchText.textContent = "Before"
        }
    }
}

refinishingSwitcher.onclick = function () {
    let picNow = refinishingSwitcher.parentElement

    for (let p = 0; p < refinishingGalleryConfig.size; p++) {
        let galleryPage = refinishingGalleryConfig.get(p)
        let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
        let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

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

redooringSwitcher.onclick = function () {
    let picNow = redooringSwitcher.parentElement

    for (let p = 0; p < reDooringGalleryConfig.size; p++) {
        let galleryPage = reDooringGalleryConfig.get(p)
        let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
        let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

        if (afterImg === picNow.style.backgroundImage) {
            picNow.style.backgroundImage = beforeImg
            redooringSwitchText.textContent = "After"

            break
        }

        if (beforeImg === picNow.style.backgroundImage) {
            picNow.style.backgroundImage = afterImg
            redooringSwitchText.textContent = "Before"

            break
        }
    }
}
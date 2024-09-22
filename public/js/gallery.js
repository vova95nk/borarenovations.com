const afterKey = "after"
const beforeKey = "before"
let refinishingSwitcher = document.getElementById("refinishing_switcher")
let redooringSwitcher = document.getElementById("redooring_switcher")
let customFinishesSwitcher = document.getElementById("custom_finishes_switcher")
let prodPathPrefix = "public/"

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


            let galleryPage = reDooringGalleryConfig.get(pageNum)
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
            redooringSwitchText.textContent = "Before"
        }

        if (galleryPart === 'custom_finishes_switcher') {
            let picNow = customFinishesSwitcher.parentElement
            let pageNum = 120
            for (let p = 0; p < customFinishesGalleryConfig.size; p++) {
                let galleryPage = customFinishesGalleryConfig.get(p)
                let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
                let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

                if (afterImg === picNow.style.backgroundImage || beforeImg === picNow.style.backgroundImage) {
                    pageNum = p

                    break
                }
            }

            if (pageNum === 0) {
                pageNum = customFinishesGalleryConfig.size - 1
            } else if (pageNum > 0) {
                pageNum--
            }

            let galleryPage = customFinishesGalleryConfig.get(pageNum)
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
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

            let galleryPage = reDooringGalleryConfig.get(pageNum)
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
            redooringSwitchText.textContent = "Before"
        }

        if (galleryPart === 'custom_finishes_switcher') {
            let picNow = customFinishesSwitcher.parentElement
            let pageNum = 120
            for (let p = 0; p < customFinishesGalleryConfig.size; p++) {
                let galleryPage = customFinishesGalleryConfig.get(p)
                let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
                let beforeImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(beforeKey) +"\")" : "url(\"./" + galleryPage.get(beforeKey) +"\")"

                if (afterImg === picNow.style.backgroundImage || beforeImg === picNow.style.backgroundImage) {
                    pageNum = p

                    break
                }
            }

            if (pageNum === customFinishesGalleryConfig.size - 1) {
                pageNum = 0
            } else if ((pageNum + 1) < customFinishesGalleryConfig.size) {
                pageNum++
            }

            let galleryPage = customFinishesGalleryConfig.get(pageNum)
            let afterImg = isProduction ? "url(\"./" + prodPathPrefix + galleryPage.get(afterKey) +"\")" : "url(\"./" + galleryPage.get(afterKey) +"\")"
            picNow.style.backgroundImage = afterImg
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
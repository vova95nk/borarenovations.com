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
                switchText.textContent = "Before"
            } else {
                imgBlock.style.backgroundImage = "url(\"" + afterImgPath + "\")"
                switchText.textContent = "After"
            }
        }
    }
}
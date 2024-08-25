let refSwitcher = document.getElementById("refinishing_switcher")
let picturesPath = ""
let galleryConfig = []

const xhr = new XMLHttpRequest();
xhr.open('GET', '/gallery/list', false);
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
        galleryConfig = xhr.response
    }
};
xhr.send();

function objectToArray(obj) {
    let array = [];
    for (prop in obj) {
        if (obj.hasOwnProperty(prop)) {
            array.push(obj[prop]);
        }
    }

    return array;
}

let obj = JSON.parse(galleryConfig);
galleryConfig = objectToArray(obj);

let switcherFn = function () {
    console.log(refSwitcher.parentElement.style.backgroundImage)
    console.log(galleryConfig)

}

if (refSwitcher) {
    refSwitcher.onclick = switcherFn
}
var showVideoText = 'Show video'
var hideVideoText = 'Hide video'

document.getElementById('show_video_btn').onclick = function () {
    if (document.getElementById('show_video_btn').textContent == showVideoText) {
        document.getElementById('video_block').style.display = 'block'
        document.getElementById('show_video_btn').textContent = hideVideoText
    } else {
        document.getElementById('video_block').style.display = 'none'
        document.getElementById('show_video_btn').textContent = showVideoText
    }
}

document.getElementById('quote_btn').onclick = function () {
    document.getElementById('send_quote').style.display = 'block'
    document.getElementById('quote_btn').style.display = 'none'
}

if (document.getElementById('quote_btn')) {
    document.getElementById('quote_btn').onclick = function () {
        document.getElementById('quote-block').style.display = 'flex'
        document.getElementById('quote_btn').style.display = 'none'
    }
}

if (document.getElementById('write-feedback')) {
    document.getElementById('write-feedback').onclick = function () {
        document.getElementById('feedback-modal').style.display = 'flex'
    }
}


const USER_FIRST_NAME = 'user_first_name'
const USER_LAST_NAME = 'user_last_name'
const USER_PHONE = 'user_phone'
const USER_EMAIL = 'user_email'
const USER_MESSAGE = 'user_message'

const INPUTS = [
    USER_FIRST_NAME,
    USER_LAST_NAME,
    USER_PHONE,
    USER_EMAIL,
    USER_MESSAGE
]

const FEEDBACK_PREFIX = 'fb_'

const FEEDBACK_INPUTS = [
    FEEDBACK_PREFIX + USER_FIRST_NAME,
    FEEDBACK_PREFIX + USER_LAST_NAME,
    FEEDBACK_PREFIX + USER_MESSAGE
]

document.getElementById('send_feedback').onclick = function () {
    let hasEmpty = false

    for (let i = 0; i < FEEDBACK_INPUTS.length; i++) {
        let input = document.getElementById(FEEDBACK_INPUTS[i])
        if (input.value === '') {
            hasEmpty = true

            console.log("test")
            input.style.borderColor = 'red'
            setTimeout(function () {
                input.style.borderColor = 'black'
            }, 5000)
        }
    }

    if (hasEmpty) {
        return
    }

    let rating = 5
    for (let i = 1; i < 6; i++) {
        let isChecked = document.getElementById('rating-' + i).checked
        if (isChecked) {
            rating = i

            break
        }
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/send-feedback', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function () {
        if (xhr.status === 200) {
            document.getElementById('send_feedback').style.backgroundColor = 'green'
            document.getElementById('send_feedback').style.color = 'white'
            document.getElementById('send_feedback').value = 'DONE'
        } else {
            document.getElementById('send_feedback').style.backgroundColor = 'red'
            document.getElementById('send_feedback').value = 'ERROR'
        }

        setTimeout(function () {
            document.getElementById('send_feedback').style.backgroundColor = '#3B454E'
            document.getElementById('send_feedback').style.color = 'white'
            document.getElementById('send_feedback').value = 'SEND'
        }, 1500)
    };

    xhr.send(JSON.stringify(
        {
            first_name: document.getElementById(FEEDBACK_PREFIX + USER_FIRST_NAME).value,
            last_name: document.getElementById(FEEDBACK_PREFIX + USER_LAST_NAME).value,
            message: document.getElementById(FEEDBACK_PREFIX + USER_MESSAGE).value,
            rating: rating,
            _token: document.getElementById('csrf_token').value
        }
    ));
}

document.getElementById('send_quote').onclick = function () {
    let hasEmpty = false

    for (let i = 0; i < INPUTS.length; i++) {
        let input = document.getElementById(INPUTS[i])
        if (input.value === '') {
            hasEmpty = true

            input.style.borderColor = 'red'
            setTimeout(function () {
                input.style.borderColor = 'black'
            }, 5000)
        }
    }

    if (hasEmpty) {
        return
    }

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '/get-quote', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById('send_quote').style.backgroundColor = 'green'
            document.getElementById('send_quote').style.color = 'white'
            document.getElementById('send_quote').value = 'DONE'
        } else {
            document.getElementById('send_quote').style.backgroundColor = 'red'
            document.getElementById('send_quote').value = 'ERROR'
        }

        setTimeout(function () {
            document.getElementById('send_quote').style.backgroundColor = '#3B454E'
            document.getElementById('send_quote').style.color = 'white'
            document.getElementById('send_quote').value = 'SEND'
        }, 1500)
    };

    xhr.send(JSON.stringify(
        {
            first_name: document.getElementById(USER_FIRST_NAME).value,
            last_name: document.getElementById(USER_LAST_NAME).value,
            phone: document.getElementById(USER_PHONE).value,
            email: document.getElementById(USER_EMAIL).value,
            message: document.getElementById(USER_MESSAGE).value,
            _token: document.getElementById('csrf_token').value
        }
    ));
}

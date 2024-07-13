document.getElementById('quote_btn').onclick = function () {
    document.getElementById('quote-block').style.display = 'flex'
    document.getElementById('quote_btn').style.display = 'none'
}

document.getElementById('send_quote').onclick = function () {
    let userName = document.getElementById('user_name').value
    let userPhone = document.getElementById('user_phone').value
    let userEmail = document.getElementById('user_email').value
    let userMessage = document.getElementById('user_message').value

    if (userName !== '') {
        if (userPhone === '' && userEmail === '') {
            document.getElementById('user_phone').style.borderColor = 'red'
            document.getElementById('user_email').style.borderColor = 'red'

            setTimeout(function () {
                document.getElementById('user_phone').style.borderColor = 'black'
                document.getElementById('user_email').style.borderColor = 'black'
            }, 5000)

            return
        }
    } else {
        document.getElementById('user_name').style.borderColor = 'red'
        document.getElementById('user_phone').style.borderColor = 'red'
        document.getElementById('user_email').style.borderColor = 'red'

        setTimeout(function () {
            document.getElementById('user_name').style.borderColor = 'black'
            document.getElementById('user_phone').style.borderColor = 'black'
            document.getElementById('user_email').style.borderColor = 'black'
        }, 5000)

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
            document.getElementById('send_quote').style.backgroundColor = 'white'
            document.getElementById('send_quote').style.color = 'black'
            document.getElementById('send_quote').value = 'SEND'
        }, 1500)
    };
    xhr.send(JSON.stringify(
        {
            name: userName,
            phone: userPhone,
            email: userEmail,
            message: userMessage,
            _token: document.getElementById('csrf_token').value
        }
    ));
}

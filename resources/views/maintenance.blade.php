<html>
<head>
    <meta charset="UTF-8">
    <title>BoraRenovations</title>
    <link rel="stylesheet" href="{{ $prodPrefix }}css/maintenance-page.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<div class="maintenance">
    <img src="{{ $prodPrefix }}black-logo.svg" alt="Company logo must be here =)" width="360" height="250">
    <div class="line"></div>
    <h1>Maintenance</h1>
    <p>Our new website is currently in progress. Please accept our apologies for any inconvenience this may cause. You can contact us using the links below or fill out the contact form, and we will get back to you as soon as possible.
    </p>
    <div class="line"></div>
    <div class="maintenance_contacts">
        <a href="tel:+12323123213">
            <i class="fa-solid fa-phone fa-lg fa-beat"></i>
        </a>
        <a href="mailto:borarernovations@gmail.com">
            <i class="fa-regular fa-envelope fa-lg fa-beat"></i>
        </a>
        <a href="https://www.facebook.com/BoraRenovations">
            <i class="fa-brands fa-facebook-f fa-lg fa-beat"></i>
        </a>
        <a href="https://instagram.com/bora_renovations">
            <i class="fa-brands fa-instagram fa-lg fa-beat"></i>
        </a>
    </div>
    <div id="quote-block">
        <form action="/get-quote" method="post">
            @csrf
            <input type="text" name="name" placeholder="First name" id="user_first_name">
            <input type="text" name="name" placeholder="Last name" id="user_last_name">
            <input type="text" name="phone" placeholder="Phone number" id="user_phone">
            <input type="email" name="email" placeholder="Email" id="user_email">
            <textarea name="message" cols="30" rows="4" placeholder="Your message" id="user_message"></textarea>
            <br>
            <input type="button" name="send_quote" id="send_quote" value="SEND">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf_token">
        </form>
    </div>
    <button id="quote_btn">Contact us</button>
</div>
<script src="{{ $prodPrefix }}js/quote-form.js"></script>
<script src="{{ $prodPrefix }}js/bootstrap/bootstrap.min.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ $prodPrefix }}bora-fav.svg">

    <title> {{ $title }} </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ $prodPrefix }}fonts/icomoon/style.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ $prodPrefix }}css/bootstrap/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ $prodPrefix }}css/style.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/header.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/main.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/footer.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/ut.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/gallery.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/buttons.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/about-us.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/why-us.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/our-services.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/user-checkboard.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/testimonial-slider.css">
    <link rel="stylesheet" href="{{ $prodPrefix }}css/feedback-modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
@include('./header/alter-header')
@include('./main/gallery')
@include('./footer/footer')
<script src="{{ $prodPrefix }}js/services-preview.js"></script>
<script src="{{ $prodPrefix }}js/quote-form.js"></script>
<script src="{{ $prodPrefix }}js/jquery-3.3.1.min.js"></script>
<script src="{{ $prodPrefix }}js/bootstrap/bootstrap.min.js"></script>
<script src="{{ $prodPrefix }}js/owl.carousel.min.js"></script>
<script src="{{ $prodPrefix }}js/jquery.sticky.js"></script>
<script src="{{ $prodPrefix }}js/main.js"></script>
</body>
</html>
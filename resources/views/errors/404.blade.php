<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>page non trouvée | EPF </title>
    <meta name="author" content="Amath">
    <meta name="description" content="L&#039;EPF est une grande école d&#039;ingénieur-e-s généraliste et polytechnique située à Cachan, Troyes, Montpellier et Dakar, qui propose une formation complète d&#039;ingénieur en 3 et 5 ans.">
    <meta name="keywords" content="Edura - Online Courses & Education HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" href="{{ asset('front/assets/img/favicon-epf_0.png') }}" type="image/png" />
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Montserrat:wght@300;400;500;600;700;800;900&amp;family=Playfair+Display:wght@100;300;400;500;700&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">

    @isset($meta)
        {{ $meta }}
    @endisset
</head>
<body>
<div class="preloader"><button class="th-btn style3 preloaderCls">Annuler le chargement</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>

<section class="">
    <div class="container">
        <div class="error-page">
            <div class="error-content">
                <div class="error-img"><img src="{{ asset("front/assets/img/normal/error.svg") }}" alt="404 image"></div>
                <h2 class="error-title"><span class="text-theme">Page non trouvée</span> </h2>
                <p class="error-text">La page demandée n'a pas pu être trouvée. <br>
                    Le lien n'est peut-être plus valide ou l'adresse a pu être mal écrite.</p>
                <a href="{{ route('home',app()->getLocale()) }}" class="th-btn">Retourner à l'accueil</a>
            </div>
        </div>
    </div>
</section>
<!-- General JS Scripts -->
<script src="{{ asset('front/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('front/assets/js/app.min.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>

</body>
</html>

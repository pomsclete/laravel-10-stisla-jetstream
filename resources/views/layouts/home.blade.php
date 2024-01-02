<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
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
    <livewire:styles />
    @stack('styles')
    <!-- Scripts -->
    <script defer src="{{ asset('vendor/alpine.js') }}"></script>
</head>
<body>
<div class="preloader"><button class="th-btn style3 preloaderCls">Annuler le chargement</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>

<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="search" placeholder="Rechercher sur le site">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
@include('extends.menu-mobile')
@include('extends.header')
       {{ $slot }}
@stack('modals')
@include('extends.footer')
<!-- General JS Scripts -->
<script defer src="{{ asset('front/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script defer src="{{ asset('front/assets/js/app.min.js') }}"></script>
<script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
<script defer src="{{ asset('front/assets/js/main.js') }}"></script>

<livewire:scripts />

@isset($script)
    {{ $script }}
@endisset
@stack('scripts')
<script>
    var SwalModal = (icon, title, html) => {
        Swal.fire({
            icon,
            title,
            html
        })
    }

    var SwalAvert = (title, text,icon,button)=>{
        Swal.fire({
            title,
            text,
            icon,
            button,
        });
    }

    var SwalConfirm = (icon, title, html, confirmButtonText, method, params, callback) => {
        swal.fire({
            icon,
            title,
            html,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText,
        }).then((result) => {
            if (result.isConfirmed) {
                return livewire.emit(method, params),
                    Swal.fire(
                        'Supprimé!',
                        'La suppression a été éffectué avec succés.',
                        'success'
                    )
            }

            if (callback) {
                return livewire.emit(callback)
            }
        })
    }

    var SwalConfirmAr = (icon, title, html, confirmButtonText, method, params, callback) => {
        Swal.fire({
            icon,
            title,
            html,
            showCancelButton: true,
            confirmButtonColor: '#47C363',
            cancelButtonColor: '#FC544B',
            confirmButtonText,
        }).then((result) => {
            if (result.isConfirmed) {
                return livewire.emit(method, params),
                    Swal.fire(
                        'Archivé!',
                        'Le bon a été archivé.',
                        'success'
                    )
            }

            if (callback) {
                return livewire.emit(callback)
            }
        })
    }

    var SwalAlert = (icon, title, timeout = 7000) => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: timeout,
            onOpen: toast => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon,
            title
        })
    }
    document.addEventListener('DOMContentLoaded', () => {
        this.livewire.on('swal:modal', data => {
            SwalModal(data.icon, data.title, data.text)
        })

        this.livewire.on('swal:confirm', data => {
            SwalConfirm(data.icon, data.title, data.text, data.confirmText, data.method, data.params, data.callback)
        })

        this.livewire.on('swal:confirmar', data => {
            SwalConfirmAr(data.icon, data.title, data.text, data.confirmText, data.method, data.params, data.callback)
        })

        this.livewire.on('swal:alert', data => {
            SwalAlert(data.icon, data.title, data.timeout)
        })

        this.livewire.on('swal:avert', data => {
            SwalAvert(data.title,data.text,data.icon,data.button)
        })
    })

    document.addEventListener('DOMContentLoaded', ()  =>{
        this.livewire.on('urlChange', (url) => {
            history.pushState(null, null, url);
        });
    });
    document.addEventListener('DOMContentLoaded', ()  =>{
        this.livewire.on('closeModal', (name) => {
            $('#'+name).modal('hide')
        });
    });
    document.addEventListener('DOMContentLoaded', ()  =>{
        this.livewire.on('openModal', (name) => {
            $('#'+name).modal('show')
        });
    });

    document.addEventListener('DOMContentLoaded', ()  =>{
        this.livewire.on('redirectOn', (url) => {
            setTimeout(function() {
                window.location.href = url;
            }, 200);
        });
    });
</script>
</body>
</html>

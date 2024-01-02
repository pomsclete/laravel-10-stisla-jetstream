<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>EPF | Engenering of future</title>

        @isset($meta)
            {{ $meta }}
        @endisset

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('stisla/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('stisla/css/components.css') }}">
        <link rel="stylesheet" href="{{ asset('vendor/notyf/notyf.min.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all">
        <link rel="stylesheet" href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all">

        <livewire:styles />

        <!-- Scripts -->
        <script defer src="{{ asset('vendor/alpine.js') }}"></script>
    </head>
    <body class="antialiased">
        <div id="app">
            <div class="main-wrapper">
                @include('components.navbar')
                @include('components.sidebar')

                <!-- Main Content -->
                <div class="main-content">
                    <section class="section">
                      <div class="section-header">
                        @isset($header_content)
                            {{ $header_content }}
                        @else
                            {{ __('Profil') }}
                        @endisset
                      </div>

                      <div class="section-body">
                        {{ $slot }}
                      </div>
                    </section>
                  </div>
            </div>
        </div>

        @stack('modals')

        <!-- General JS Scripts -->
        <script src="{{ asset('stisla/js/modules/jquery.min.js') }}"></script>
        <script defer async src="{{ asset('stisla/js/modules/popper.js') }}"></script>
        <script defer async src="{{ asset('stisla/js/modules/tooltip.js') }}"></script>
        <script src="{{ asset('stisla/js/modules/bootstrap.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/jquery.nicescroll.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/moment.min.js') }}"></script>
        <script defer src="{{ asset('stisla/js/modules/marked.min.js') }}"></script>
        <script defer src="{{ asset('vendor/notyf/notyf.min.js') }}"></script>
        <script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>

        <script src="{{ asset('stisla/js/stisla.js') }}"></script>
        <script src="{{ asset('stisla/js/scripts.js') }}"></script>

        <livewire:scripts />
        {{-- <script src="{{ mix('js/app.js') }}" defer></script> --}}

        @isset($script)
            {{ $script }}
        @endisset

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
                    }, 2200);
                });
            });
        </script>
    </body>
</html>

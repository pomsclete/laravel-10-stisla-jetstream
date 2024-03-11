<div>
    <div>
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('front/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="title" data-opacity="8">
            <div class="breadcumb-shape" data-bg-src="{{ asset('front/assets/img/bg/breadcumb_shape_1_1.png') }}"></div>
            <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px"><img
                    src="{{ asset('front/assets/img/bg/breadcumb_shape_1_2.png') }}" alt="shape"></div>
            <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
                <img src="{{ asset('front/assets/img/bg/breadcumb_shape_1_3.png') }}" alt="shape"></div>
            <div class="container">
                <div class="breadcumb-content text-center">
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Mot du directeur": "Message from director" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Une école responsable" : "A responsible school" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom space-top about-sec bg-bottom-right" data-bg-src="{{ asset('front/assets/img/update1/bg/about_bg_1.jpg') }}"
         id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 mb-40 mb-xl-0">
                    <div class="img-box7 tilt-active">
                        <img class="w-100" src="{{ asset('front/assets/img/dg/emanuel.jpg') }}" alt="DIRECTEUR G2N2RAL DE L'EPF"></div>
                </div>
                <div class="col-xxl-7 col-xl-8 align-self-end">
                    <div class="about-content2">
                        <p class="justifyText mt-n2 mb-20 mb-xl-3">{!! __('mot1') !!}</p>
                        <p class="mt-n2 mb-30 mb-xl-5 justifyText">
                        {!! __('mot2') !!}
                        </p>
                        <p class="justifyText mt-n2 mb-20 mb-xl-3">{!! __('mot3') !!}</p>
                        <p class="justifyText">{!! __('mot4') !!}</p>

                        <div class="title-area mt-40">
                            <h2 class="fs-40 fw-medium mt-n2">Emmanuel Duflos</h2>
                            <span class="sub-title">{{ __('mot5') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

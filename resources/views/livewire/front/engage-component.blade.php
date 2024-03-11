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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Des campus inclusives et engagés": "Inclusive and socially committed campuses" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Une école responsable" : "A responsible school" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row gy-10 gx-70">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <p class="mb-20 justifyText">{!! __('engage1') !!}</p>
                    <p class="history justifyText">
                        {!! __('engage2') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="space" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box9">
                        <div class="img1"><img src="{{ asset('front/assets/img/update1/normal/about_3_1.png') }}" alt="about"></div>
                        <div class="shape"><img src="{{ asset('front/assets/img/update1/normal/about_shape_1.png') }}" alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        <h2 class="sec-title fw-semibold">{!! __('engage3') !!}</h2>
                    </div>
                    <p class="mt-n2 mt-30 mb-25 puce">
                        <ul class="puce">
                            <li>{!! __('engage4') !!}</li>
                            <li>{!! __('engage5') !!}</li>
                            <li>{!! __('engage6') !!}</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
        <div class="shape-mockup" data-top="0%" data-right="0"
        ><img src="{{ asset('front/assets/img/update1/shape/cloud_3.png') }}"  alt="shape"></div>
    </div>

    <section class="space">
        <div class="container">
            <div class="row gy-10 gx-70">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <p class="history justifyText">
                        {!! __('engage7') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>

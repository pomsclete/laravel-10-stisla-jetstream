<div wire:ignore>
    <div>
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('front/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="title" data-opacity="8">
            <div class="breadcumb-shape" data-bg-src="{{ asset('front/assets/img/bg/breadcumb_shape_1_1.png') }}"></div>
            <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px"><img
                    src="{{ asset('front/assets/img/bg/breadcumb_shape_1_2.png') }}" alt="shape"></div>
            <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
                <img src="{{ asset('front/assets/img/bg/breadcumb_shape_1_3.png') }}" alt="shape"></div>
            <div class="container">
                <div class="breadcumb-content text-center">
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Nouer un partenariat": "Be a partenership" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Entreprise" : "Society" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top">
        <div class="container">
            <div class="row gy-10 gx-70">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <p>{!!  __('PartAdd1') !!}</p>
                    <p>{!! __('PartAdd2') !!}</p>
                </div>
            </div>
        </div>
    </section>
    <div class="overflow-hidden space" id="devenir">
        <div class="shape-mockup jump d-md-block d-none" data-right="0" data-bottom="10%"><img
                src="{{ asset('front/assets/img/normal/about_2_shape1.png') }}" alt="shapes"></div>
        <div class="shape-mockup jump d-md-block d-none" data-right="76px" data-bottom="10%"><img
                src="{{ asset('front/assets/img/normal/about_1_shape1.png') }}" alt="shapes"></div>
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xl-6 mb-50 mb-xl-0">
                    <div class="img-box2">
                        <div class="img1"><img src="{{ asset('front/assets/img/normal/about_2_1.png') }}" alt="About"></div>
                        <div class="img2 tilt-active"><img src="{{ asset('front/assets/img/normal/about_2_2.png') }}" alt="About"></div>
                        <div class="about-experience-wrap">
                            <div class="about-experience-icon"><img src="{{ asset('front/assets/img/icon/logo-icon.svg') }}" alt="img"></div>
                            <div class="about-experience-tag"><span class="about-title-anime">24+ YEARS
                                    EXPERIENCE</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about2-title-wrap">
                        <div class="title-area mb-30">
                            <h2 class="sec-title">{{ __('PartText3') }}</h2>
                        </div>
                        <p>{{ __('PartAdd4') }}</p>
                        <p class="mt-n2 mb-35">
                            {!! __('PartAdd5') !!}
                        </p>
                        <a href="mailto:partnership@epf-africa.com" class="th-btn">{{ __('PartBtn1') }}<i class="far fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="team-area-5 space" id="booster" data-bg-src="{{ asset('front/assets/img/update1/bg/team_bg_1.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-5 mb-xl-0">
                    <div class="title-area mb-30 text-center text-xl-start">
                        <h2 class="sec-title">{{ __('PartText4') }}</h2>
                    </div>
                    <p>{!!   __('PartAdd6') !!}</p>
                    <p>{!!   __('PartAdd7') !!}</p>
                    <p class="mb-30 text-center text-xl-start">
                        {!! __('PartAdd8') !!}
                    </p>
                    <div class="text-center text-xl-start">
                        <a href="#partners" class="th-btn">{{ __('PartBtn2') }}<i
                                class="fas fa-arrow-right ms-2"></i></a></div>
                </div>
                <div class="col-xl-6">
                    <div class="row th-carousel" data-slide-show="2" data-md-slide-show="2">
                        <div class="col-md-6 col-lg-4">
                            <div class="team-box">
                                <div class="team-img"><img src="{{ asset(('front/assets/img/update1/team/team_1_1.jpg')) }}" alt="Team">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="team-box">
                                <div class="team-img"><img src="{{ asset(('front/assets/img/update1/team/team_1_2.jpg')) }}" alt="Team">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="space" id="force">
        <div class="container z-index-common">
            <div class="row flex-row-reverse">
                <div class="col-xl-8 mb-35 mb-xl-0">
                    <div class="img-box8">
                        <div class="img1"><img src="{{ asset('front/assets/img/update1/normal/mockup_1_1.jpg') }}" alt="mockup"></div>
                        <div class="img2"><img src="{{ asset('front/assets/img/update1/normal/mockup_1_2.jpg') }}" alt="mockup"></div>
                        <div class="shape"><img src="{{ asset('front/assets/img/update1/normal/mockup_shape.png') }}" alt="shape"></div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="title-area mb-30">
                        <h2 class="sec-title">{{ __('PartText5') }}</h2>
                    </div>
                    <p>{{ __('PartAdd10') }}</p>
                    <p class="mb-30">
                        {{ __('PartAdd11') }}
                    </p>
                    <a href="mailto:partnership@epf-africa.com" class="th-btn">{{ __('PartBtn3') }}<i
                            class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="shape-mockup big-shape" data-top="0%" data-right="0%">
            <img src="{{ asset('front/assets/img/update1/shape/line_2.png') }}" alt="shapes"></div>
    </section>

    <section class="cta-area-4 position-relative overflow-hidden" id="partners">
        <div class="cta-bg-img" data-bg-src="{{ asset('front/assets/img/bg/cta-bg4.png') }}"></div>
        <div class="shape-mockup cta4-shape1 jump-reverse d-lg-block d-none" data-right="10%" data-top="12%"><img
                src="{{ asset('front/assets/img/normal/cta_4_shape1.png') }}" alt="img"></div>
        <div class="shape-mockup cta4-shape2 d-lg-block d-none" data-right="0" data-bottom="0%"><img
                src="{{ asset('front/assets/img/normal/cta_4_shape2.png') }}" alt="img"></div>
        <div class="shape-mockup cta4-shape3 d-md-block d-none" data-right="0" data-top="0%"><img
                src="{{ asset('front/assets/img/normal/cta_4_shape3.png') }}" alt="img"></div>
        <div class="shape-mockup cta4-shape4"></div>
        <div class="ripple-shape cta-4-ripple-shape"><span class="ripple-1"></span><span class="ripple-2"></span><span
                class="ripple-3"></span><span class="ripple-4"></span><span class="ripple-5"></span><span
                class="ripple-6"></span></div>
        <div class="container" >
            <div class="row">
                <div class="col-lg-5">
                    <div class="cta-wrap4 space">
                        <div class="title-area mb-35">
                            <h2 class="sec-title text-white">
                                {{ __('PartAdd12') }}
                            </h2>
                        </div>
                        <a href="mailto:partnership@epf-africa.com" class="th-btn style3">{{ __('PartBtn4') }}<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 align-self-end d-lg-block d-none">
                    <div class="cta-4-thumb"><img src="{{ asset('front/assets/img/normal/cta_4_1.png') }}" alt="img"></div>
                </div>
            </div>
        </div>
    </section>
</div>

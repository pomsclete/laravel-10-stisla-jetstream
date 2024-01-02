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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Salons et forums": "Trade shows and forums" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="{{ route('blog',[app()->getLocale()]) }}">{{ (app()->getLocale() == 'fr') ? "Rencontrez-nous" : "Meet us at" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area overflow-hidden space" id="team-sec">
        <div class="shape-mockup team-bg-shape1 jump-reverse d-xxl-block d-none" data-left="-2%" data-top="0"><img
                src="{{ asset('front/assets/img/team/team-shape_1_1.png') }}" alt="img"></div>
        <div class="shape-mockup team-bg-shape2 jump d-xxl-block d-none" data-left="40%" data-top="20%"><img
                src="{{ asset('front/assets/img/team/team-shape_1_2.png') }}" alt="img"></div>
        <div class="shape-mockup team-bg-shape3 jump" data-left="5%" data-bottom="9%"><img
                src="{{ asset('front/assets/img/team/team-shape_1_3.png') }}" alt="img"></div>
        <div class="shape-mockup team-bg-shape4 spin" data-left="40%" data-bottom="20%"><img
                src="{{ asset('front/assets/img/team/team-shape_1_4.png') }}" alt="img"></div>
        <div class="shape-mockup team-bg-shape5 jump d-lg-block d-none" data-right="-7%" data-top="10%"><img
                src="{{ asset('front/assets/img/team/team-shape_1_5.png') }}" alt="img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 mb-40 mb-xl-0">
                    <div class="title-area mb-30"><span class="sub-title"><i class="fal fa-book me-2"></i> {{ __('SallonTitle1') }}</span>
                        <h2 class="sec-title">{{ __('SallonTitle2') }}</h2>
                        <p class="sec-text mt-20">{!! __('SallonDesc1') !!} </p>

                           <p class="sec-text mt-20"> {{ __('SallonDesc2') }}</p>
                    </div>
                    <div class="btn-group mt-30"><a href="course.html" class="th-btn">{{ __('SallonBtn1') }}<i
                                class="fas fa-arrow-right ms-2"></i></a> <a href="contact.html"
                                                                            class="th-btn style7">{{ __('SallonBtn2') }}<i class="fas fa-arrow-right ms-2"></i></a></div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-card team-card-1-1 team-card-1-1-active mt-0">
                        <div class="team-img-wrap">
                            <div class="team-img"><img src="{{ asset('front/assets/img/team/team_1_1.jpg') }}" alt="Team"></div>
                        </div>
                    </div>
                    <div class="team-card team-card-1-1">
                        <div class="team-img-wrap">
                            <div class="team-img"><img src="{{ asset('front/assets/img/team/team_1_2.jpg') }}" alt="Team"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="team-card team-card-1-2 mt-md-0">
                        <div class="team-img-wrap">
                            <div class="team-img"><img src="{{ asset('front/assets/img/team/team_1_3.jpg') }}" alt="Team"></div>
                        </div>
                    </div>
                    <div class="team-card team-card-1-2 team-card-1-2-active">
                        <div class="team-img-wrap">
                            <div class="team-img"><img src="{{ asset('front/assets/img/team/team_1_4.jpg') }}" alt="Team"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-smoke-half space">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 mb-30 mb-xl-0" wire:ignore>
                    <div class="cta-box" data-bg-src="{{ asset('front/assets/img/update1/bg/cta_bg_5.jpg') }}">
                        <h3 class="cta-title">{{ __('SallonTitle3') }}</h3>
                        <p class="cta-text">{{ __('SallonDesc3') }}</p>
                        <a href="" class="th-btn">{{ __('SallonBtn2') }}<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-xl-6" wire:ignore>
                    <div class="cta-box" data-bg-src="{{ asset('front/assets/img/update1/bg/cta_bg_6.jpg') }}">
                        <h3 class="cta-title">{{ __('SallonTitle4') }}</h3>
                        <p class="cta-text">{{ __('SallonDesc4') }}</p>
                        <a href="" class="th-btn">{{ __('SallonBtn2') }}<i class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

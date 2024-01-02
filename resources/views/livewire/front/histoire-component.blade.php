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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Histoire de l'école": "School story" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Découvrir l'EPF" : "Discover EPF" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="space-top">
        <div class="container">
            <div class="row gy-10 gx-70">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <p>{!! __('History1') !!}</p>
                    <p>
                        {!! __('History2') !!}
                    </p>
                    <p class="history">
                        {!! __('History3') !!}
                    </p>
                    <p>
                        {!! __('History4') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="space" id="about-sec">
        <div class="container">
            <div class="row flex-row-reverse align-items-center">
                <div class="col-xl-6">
                    <div class="img-box12">
                        <div class="img1"><img src="{{ asset('front/assets/img/update1/normal/mockup_3_1.jpg') }}" alt="Mockup"></div>
                        <div class="img2"><img src="{{ asset('front/assets/img/update1/normal/mockup_3_2.jpg') }}" alt="Mockup"></div>
                        <div class="student-count">
                            <div class="avater-list">
                                <div class="avater"><img src="{{ asset('front/assets/img/update1/normal/student_1_1.png') }}" alt="avater">
                                </div>
                                <div class="avater"><img src="{{ asset('front/assets/img/update1/normal/student_1_2.png') }}" alt="avater">
                                </div>
                                <div class="avater"><img src="{{ asset('front/assets/img/update1/normal/student_1_3.png') }}" alt="avater">
                                </div>
                                <div class="avater"><img src="{{ asset('front/assets/img/update1/normal/student_1_4.png') }}" alt="avater">
                                </div>
                            </div>
                            <p class="student-text">+ {!! __('History9') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-35">
                        <h2 class="sec-title fw-semibold"> {!! __('History5') !!}</h2>
                    </div>
                   <p>
                       {!! __('History6') !!}
                   </p>
                    <p class="mt-n2 mb-35">
                        {!! __('History7') !!}
                    </p>
                    <p>
                        {!! __('History8') !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

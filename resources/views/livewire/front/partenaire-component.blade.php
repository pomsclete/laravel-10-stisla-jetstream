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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Nos partenaires": "Our partners" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Entreprise" : "Society" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area overflow-hidden space-top">
        <div class="container">
            <div class="row align-items-center gy-4">
                @foreach ($partenaires as $tag)
                <div class="col-sm-6 col-lg-4 col-xl-3">
                    <div class="team-card style3">
                        <div class="team-img-wrap">
                            <div class="team-img">
                                <img src="{{ asset('storage/partenaires/'.$tag->logo) }}" alt="{{ $tag->nom }}">
                            </div>
                        </div>
                        <div class="team-hover-wrap">
                            <div class="team-content">
                                <h3 class="team-title">
                                    <a href="#">{{ $tag->nom }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="th-pagination text-center pt-50">
                <div class="col-lg-12 col-md-12 text-center">
                    <div wire:loading wire:target="loadMore">
                        <span class="loading"></span>
                    </div>
                    <div class="text-center mt-3">
                        <button style="display: {{ ($show == true) ? '' : 'none' }};"  class="btn btn-dark" wire:click="loadMore" rel="noopener">{{ __('plus') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden position-relative space bg-smoke" id="team-sec">
        <div class="shape-mockup instructor-bg-shape1 jump d-lg-block d-none" data-left="3%" data-bottom="30%"><img
                src="{{ asset('front/assets/img/normal/blog-3-bg-shape.png') }}" alt="partenariat"></div>
        <div class="instructor_bg_shape2 shape-mockup d-xl-block d-none" data-left="-15%" data-top="3%"><img
                src="{{ asset('front/assets/img/normal/instructor_1_shape1.png') }}" alt="partenariat"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 order-xl-2">
                    <div class="become-instructor-img mb-5 mb-xl-0 ms-xl-5"><img
                            src="{{ asset('front/assets/img/normal/become-instructor-thumb.png') }}" alt="partenariat"></div>
                </div>
                <div class="col-xl-6 order-xl-1">
                    <div class="title-area mb-30"><span class="sub-title"><i class="fal fa-book me-1"></i>
                            {{ __('PartText1') }}</span>
                        <h2 class="sec-title">{{ __('PartText2') }}</h2>
                    </div>
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            <a href="{{ route('addpartenaire', app()->getLocale()) }}#devenir" class="become-instructor-wrap cursor"><i class="fa-solid fa-badge-check"></i>
                                <h4 class="box-title">{{ __('PartText3') }}</h4>
                            </a>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('addpartenaire', app()->getLocale()) }}#booster" class="become-instructor-wrap cursor"><i class="fa-solid fa-badge-check"></i>
                                <h4 class="box-title">{{ __('PartText4') }}</h4>
                            </a>
                        </div>

                        <div class="col-sm-6">
                            <a href="{{ route('addpartenaire', app()->getLocale()) }}#force" class="become-instructor-wrap cursor"><i class="fa-solid fa-badge-check"></i>
                                <h4 class="box-title">{{ __('PartText5') }}</h4>
                            </a>
                        </div>
                    </div><a href="{{ route('addpartenaire',[app()->getLocale()]) }}" class="th-btn mt-40">{{ __('PartText6') }} <i
                            class="fa-regular fa-arrow-right ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>
@push('styles')
    <style>
        /* HTML: <div class="loader"></div> */
        .loaderi {
            height: 4px;
            width: 130px;
            --c:no-repeat linear-gradient(#6100ee 0 0);
            background: var(--c),var(--c),#d7b8fc;
            background-size: 60% 100%;
            animation: l16 3s infinite;
        }
        @keyframes l16 {
            0%   {background-position:-150% 0,-150% 0}
            66%  {background-position: 250% 0,-150% 0}
            100% {background-position: 250% 0, 250% 0}
        }

        .loading {
            width: 48px;
            height: 48px;
            display: inline-block;
            position: relative;
        }
        .loading::after,
        .loading::before {
            content: '';
            box-sizing: border-box;
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 2px solid #000;
            position: absolute;
            left: 0;
            top: 0;
            animation: animloader 2s linear infinite;
        }
        .loading::after {
            animation-delay: 1s;
        }

        @keyframes animloader {
            0% {
                transform: scale(0);
                opacity: 1;
            }
            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

    </style>
@endpush
@push('scripts')
    <script type="text/javascript">
        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                window.livewire.emit('load-more');
            }
        };
    </script>
@endpush

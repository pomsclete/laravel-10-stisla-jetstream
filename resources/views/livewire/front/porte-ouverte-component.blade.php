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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Portes ouvertes": "Open days" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="{{ route('blog',[app()->getLocale()]) }}">{{ (app()->getLocale() == 'fr') ? "Rencontrez-nous" : "Meet us at" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="overflow-hidden space">
        <div class="container">
            <div class="title-area text-center">
                <h2 class="sec-title">{{ __('PorteTitle') }}</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <p class="text-center"><b>{!! __('PorteDes1') !!}</p>

                    <p class="text-center">  {!! __('PorteDes2') !!}</b></p>
                </div>
            </div>
        </div>
    </section>
    <section class="cta-area-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-30 mb-lg-0" wire:ignore>
                    <div class="cta-card" data-bg-src="{{ asset('front/assets/img/bg/cta-bg_3_1.png') }}">
                        <div class="title-area mb-40"><span class="sub-title text-white"><i
                                    class="fal fa-book me-2"></i>Formations</span>
                            <h4 class="sec-title text-white">{!! __('PorteTitre2') !!}</h4>
                        </div><a href="contact.html" class="th-btn  styleam">{{ __('callToAct1') }}<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-6" wire:ignore>
                    <div class="cta-card" data-bg-src="{{ asset('front/assets/img/bg/cta-bg_3_2.png') }}">
                        <div class="title-area mb-40"><span class="sub-title text-white"><i
                                    class="fal fa-book me-2"></i>{{ __('PorteSous') }}</span>
                            <h4 class="sec-title text-white">{!! __('PorteTitle3') !!}</h4>
                        </div><a href="contact.html" class="th-btn styleam">{{ __('callToAct2') }}<i
                                class="fas fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-area-5 overflow-hidden bg-smoke space-bottom">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0"><span class="sub-title"><i class="fal fa-book me-2"></i>
                            {{ __('PorteTitle4') }}</span>
                            <h2 class="sec-title">{{ __('PorteTitle5') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
                 data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                @foreach($portes as $porte)
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img"><a href="#" wire:click="openModal({{ $porte->id }})">
                                <img style="object-fit: cover" src="{{ asset('storage/journee/'.$porte->image) }}"
                                     alt="{{ (app()->getLocale() == 'fr') ? $porte->titre : $porte->titre_en }}">
                            </a></div>
                        <div class="blog-content">
                            <h4 class="box-title"><a href="#" wire:click="openModal({{ $porte->id }})" >
                                    {{ (app()->getLocale() == 'fr') ? $porte->titre : $porte->titre_en }}
                                </a></h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="dayModal" tabindex="-1" aria-labelledby="dayModalLabel"  aria-hidden="true" style="z-index: 1000000">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dayModalLabel">{{ (app()->getLocale() == 'fr') ? $titre : $titre_en }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid justify-content-center">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6 offset-3">
                                <div class="th-blog blog-single" >
                                    <div class="blog-img"><img src="{{ asset('storage/journee/'.$image) }}" style="object-fit: cover"
                                                               alt="{{ (app()->getLocale() == 'fr') ? $titre : $titre_en }}"></div>
                                    <div class="blog-content">
                                        {!! (app()->getLocale() == 'fr') ? $description : $description_en !!}
                                        @if($inscription == 1)
                                            <p><strong>{{ __('PorteTitle7') }} : <a class="inscris" href="{{ $lien }}" target="_blank">{{ __('PorteTitle8') }}</a></strong></p>
                                        @endif
                                    </div>
                                    <div class="share-links clearfix mt-15">
                                        <div class="row justify-content-between">
                                            <div class="col-md-auto text-xl-end"><span class="share-links-title">Share:</span>
                                                <ul class="social-links">
                                                    <li><a href="https://facebook.com/" target="_blank"><i
                                                                class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="https://twitter.com/" target="_blank"><i
                                                                class="fab fa-twitter"></i></a></li>
                                                    <li><a href="https://linkedin.com/" target="_blank"><i
                                                                class="fab fa-linkedin-in"></i></a></li>
                                                    <li><a href="https://instagram.com/" target="_blank"><i
                                                                class="fab fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('PorteTitle9') }}</button>
                </div>
            </div>
        </div>
    </div>
</div>

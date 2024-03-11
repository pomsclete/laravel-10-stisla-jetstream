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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Accréditations et labels": "Accreditations and labels" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Une école responsable" : "A responsible school" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top mb-30">
        <div class="container">
            <div class="row gy-10 gx-70">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <p class="justifyText">{!! __('accreditation1') !!}</p>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden space-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <div class="me-xl-5">
                        <div class="accordion-area accordion" id="faqAccordion">
                            @foreach($accreditations as $accre)
                            <div class="accordion-card">
                                <div class="accordion-header" id="collapse-item-{{ $accre->id }}"><button
                                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-{{ $accre->id }}" aria-expanded="false"
                                        aria-controls="collapse-{{ $accre->id }}">
                                        {{ (app()->getLocale() == 'fr') ? $accre->libelle : $accre->libelle_en  }}
                                    </button>
                                </div>
                                <div id="collapse-1" class="accordion-collapse collapse"
                                     aria-labelledby="collapse-item-{{ $accre->id }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p class="faq-text">
                                            {!!  (app()->getLocale() == 'fr') ? $accre->description : $accre->description_en   !!}
                                        </p>
                                        <div class="d-flex justify-content-center">
                                            <img width="250px" src="{{ asset('storage/accreditation/'.$accre->logo) }}" alt="{!!  (app()->getLocale() == 'fr') ? $accre->description : $accre->description_en   !!}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</div>

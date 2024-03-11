<div>
    {{-- SECTION SLIDE --}}
    <div class="th-hero-wrapper hero-1" id="hero">
        <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1"
             data-dots="true">
            @foreach($slides as $slide)
                <div class="th-hero-slide">
                <div class="th-hero-bg" data-overlay="title" data-opacity="8"
                     data-bg-src="{{ asset('storage/slide/'.$slide->image_down) }}"></div>
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-6">
                            <div class="hero-style1"><span class="hero-subtitle" data-ani="slideinleft"
                                                           data-ani-delay="0.1s">
                                <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                    {{ (app()->getLocale() == 'fr') ? $slide->titre : $slide->titre_en }}
                                </h1>
                                <p class="hero-text" style="color:lightgrey" data-ani="slideinleft" data-ani-delay="0.6s">
                                    {!!  (app()->getLocale() == 'fr') ? $slide->description : $slide->description_en  !!}
                                </p>
                                <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.8s"><a
                                        href="{{ $slide->lien }}" class="th-btn style3">{{ (app()->getLocale() == 'fr') ? "En Savoir Plus" : "Read details" }}<i
                                            class="fas fa-arrow-right ms-2"></i></a></div>
                            </div>
                        </div>
                        <div class="col-md-6 text-lg-end text-center">
                            <div class="hero-img1"><img src="{{ asset('storage/slide/'.$slide->image_avant) }}" alt="hero"></div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape shape1"><img src="{{ asset('front/assets/img/hero/shape_1_1.png') }}" alt="shape"></div>
                <div class="hero-shape shape2"><img src="{{ asset('front/assets/img/hero/shape_1_2.png') }}" alt="shape"></div>
                <div class="hero-shape shape3"></div>
                <div class="hero-shape shape4 shape-mockup jump-reverse" data-right="3%" data-bottom="7%"><img
                        src="{{ asset('front/assets/img/hero/shape_1_3.png') }}" alt="shape"></div>
                <div class="hero-shape shape5 shape-mockup jump-reverse" data-left="0" data-bottom="0"><img
                        src="{{ asset('front/assets/img/hero/shape_1_4.png') }}" alt="shape"></div>
            </div>
            @endforeach
        </div>
    </div>
    {{-- END SECTION SLIDE --}}
    {{-- SECTION ACCREDITATION --}}
    <div class="space-top">
        <div class="container">
            <div class="category-sec-wrap">
                <div class="shape-mockup category-shape-arrow d-xl-block d-none"><img
                        src="{{ asset('front/assets/img/normal/category-arrow.svg') }}" alt="img"></div>
                <div class="row">
                    <div class="col-xl-4">
                        <div class="title-area mb-25 mb-lg-0 text-xl-start text-center"><span class="sub-title"><i
                                    class="fal fa-book me-2"></i> {{ (app()->getLocale() == 'fr') ? "Une école responsable" : "A responsible school" }}</span>
                            <h2 class="sec-title">{{ (app()->getLocale() == 'fr') ? "Accréditations et labels" : "Accréditations and labels" }}</h2>
                            <a href="{{ route('accreditation',[app()->getLocale()]) }}" class="th-btn">{{ (app()->getLocale() == 'fr') ? "Consulter" : "Explore" }}<i class="fa-regular fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row slider-shadow th-carousel category-slider" data-slide-show="4"
                             data-ml-slide-show="3" data-md-slide-show="3" data-sm-slide-show="2" data-arrows="true"
                             data-xl-arrows="true">
                            @foreach($accreditations as $accre)
                            <div class="col-md-6 col-xl-4">
                                <div class="category-card">
                                    <div class="category-card_content">
                                        <img src="{{ asset('storage/accreditation/'.$accre->logo) }}" alt="{{ $accre->libelle }}">
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
    {{-- END ACCREDITATION --}}
    <div class="space overflow-hidden" id="about-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="img-box1 mb-40 mb-xl-0">
                        <div class="img1"><img class="tilt-active" src="{{ asset('front/assets/img/normal/about_1_1.jpg') }}" loading="lazy" alt="EPF Africa">
                        </div>
                        <div class="about-grid" data-bg-src="{{ asset('front/assets/img/normal/about_1_3.png') }}">
                            <h3 class="about-grid_year"><span class="counter-number">35</span>%<!--<span
                                    class="text-theme">+</span>--></h3>
                            <p class="about-grid_text">{{ (app()->getLocale() == 'fr') ? "de femmes (élèves ingénieurs)" : "of women (engineering students)" }}</p>
                        </div>
                        <div class="img2"><img class="tilt-active" src="{{ asset('front/assets/img/normal/about_1_2.jpg') }}" alt="EPF Africa">
                        </div>
                        <div class="shape-mockup about-shape1 jump" data-left="-67px" data-bottom="0"><img
                                src="{{ asset('front/assets/img/normal/about_1_shape1.png') }}" alt="img"></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-30"><span class="sub-title"><i class="fal fa-book me-2"></i> Creating the future together</span>
                        <h2 class="sec-title">Bienvenue à EPF Engineering School.</h2>
                    </div>
                    <p class="mt-n2 mb-25">L'EPF Ecole d'Ingénieur.e.s est une grande école d'ingénieurs généraliste créée en 1925 dont les formations
                        sont habilités par la commission des Titres d'Ingénieurs (CTI)</p>
                    <p class="mb-30">
                        Première école polytechnique féminine au monde, l'EPF a fait de l'innovation une priorité en exposant ses élèves à la recherche et à la valorisation
                        industrielle. Elle déploie un modèle d'apprentissage hybride qui s'associe les technologies numériques et les pédagogies actives par projet... <br>

                    </p>
                    <div class="row align-items-center">
                        <div class="col-md-auto">
                            <div class="about-grid_img mb-30 mb-md-0">
                                <img src="{{ asset('front/assets/img/normal/about_1_4.jpg') }}" alt="img">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="checklist">
                                <ul>
                                    <li>4 campus durables en France et 1 à Dakar</li>
                                    <li>170 employés et enseignants-chercheurs</li>
                                    <li>800 entreprises partenaires</li>
                                    <li>
                                        +150 partenaires universitaires dans le monde
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group mt-40"><a href="{{ route('dakar',[app()->getLocale()]) }}" class="th-btn">En Savoir plus<i
                                class="fa-regular fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cta-area-1" data-bg-src="{{ asset('front/assets/img/bg/cta-bg1.png') }}">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-8">
                    <div class="cta-wrap title-area mb-0">
                        <div class="cta-icon"><img src="{{ asset('front/assets/img/normal/cta-icon1.png') }}" alt="icon"></div>
                        <div class="cta-content">
                            <h2 class="cta-title sec-title">Se préparer à une carrière internationale</h2>
                        </div><a href="about.html" class="th-btn style8" style="color: white;">Rejoignez-nous<i
                                class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-img-1" data-overlay="title" data-opacity="8">
            <img src="{{ asset('front/assets/img/normal/cta_1_1.png') }}" alt="Image">
            <a href="https://www.youtube.com/watch?v=Fjmvm2d9Mkg"
               class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i>
            </a>
        </div>
    </div>
    <div class="why-area-1 space overflow-hidden">
        <div class="shape-mockup why-shape-1 jump" data-top="10%" data-left="7%"><img
                src="{{ asset('front/assets/img/normal/about_1_shape1.png') }}" alt="img"></div>
        <div class="shape-mockup why-shape-2" data-bg-src="{{ asset('front/assets/img/normal/wcu_1_shape1.png') }}"></div>
        <div class="shape-mockup why-shape-3 jump-reverse" data-bottom="25%" data-right="-3%"><img
                src="{{ asset('front/assets/img/normal/wcu_1_shape2.png') }}" alt="img"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="wcu-img-1">
                        <div class="img1"><img src="{{ asset('front/assets/img/normal/wcu_1_1.jpg') }}" alt="img"></div>

                        <div class="text-end"><a class="th-btn mt-30" href="#">S'inscrire <i
                                    class="far fa-arrow-right ms-1"></i></a></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="wcu-wrap1">
                        <div class="title-area mb-25"><span class="sub-title"><i class="fal fa-book me-2"></i> Campus EPF Dakar</span>
                            <h2 class="sec-title">Intégrez une grande école d'ingénieurs francaise</h2>
                            <p class="sec-text mt-20">L'EPF Ecole d'Ingénieur.e.s est une grande école d'ingénieurs généraliste
                                avec une forte dimension internationale, membre de la conférence des Grandes Ecoles, de l'UGEI et de la CDEFI. <br>
                            Elle a pour vocation de former des cadres techniques de haut niveau et des ingénieurs généralistes innovants, responsables et de dimension internationale</p>
                        </div>
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon"><i class="fas fa-1"></i></div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Dépôt de candidature</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon"><i class="fas fa-2"></i></div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Etude du dossier</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon"><i class="fas fa-3"></i></div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Lettre d'admission</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wcu-box">
                                    <div class="wcu-box_icon"><i class="fas fa-4"></i></div>
                                    <div class="wcu-box_details">
                                        <h3 class="box-title">Inscription</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="counter-area-1 bg-theme" data-bg-src="{{ asset('front/assets/img/bg/counter-bg_1.png') }}">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">13</span>k<span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>Alumni</strong> en france <br> et à l'étranger</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">100</span>%</h2>
                        <p class="counter-card_text"><strong>des élèves</strong> partent <br> un semestre à l'étranger</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">150</span><span
                                class="fw-normal">+</span></h2>
                        <p class="counter-card_text"><strong>partenaires universitaires</strong> <br> dans le monde</p>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 counter-card-wrap">
                    <div class="counter-card">
                        <h2 class="counter-card_number"><span class="counter-number">97</span>%</h2>
                        <p class="counter-card_text">des diplômé-e-s EPF <strong>ont trouvé </strong><br> leur emploi en <strong>moins de 2 mois</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="cta-area-2 position-relative space-bottom">
        <div class="cta-bg-img" data-bg-src="{{ asset('front/assets/img/bg/cta-bg2.png')  }}"></div>
        <div class="cta-bg-img2" data-bg-src="{{ asset('front/assets/img/bg/cta-bg2-shape.png') }}"></div>
        <div class="shape-mockup cta-shape1 jump d-md-block d-none" data-left="-2%" data-bottom="-7%"><img
                src="{{ asset('front/assets/img/normal/cta_2_shape1.png') }}" alt="img"></div>
        <div class="shape-mockup cta-shape2 jump-reverse d-md-block d-none" data-right="-1%" data-top="-3%"><img
                src="{{ asset('front/assets/img/normal/cta_2_shape2.png') }}" alt="img"></div>
        <div class="shape-mockup cta-shape3 spin d-md-block d-none" data-right="20%" data-top="30%"><img
                src="{{ asset('front/assets/img/normal/cta_2_shape3.png') }}" alt="img"></div>
        <div class="container text-center">
            <div class="cta-wrap2">
                <div class="title-area text-center mb-35">
                    <h2 class="sec-title text-white"><span class="fw-normal">Le campus de Dakar propose plusieurs</span> <span class="text-theme2">formations </span><span class="fw-normal"><br>en deux programmes différents <br> qui inclus des mobilités</span><span class="fw-normal"> vers les campus d’EPF en France</span></h2>

                </div>
                <div class="btn-group justify-content-center"><a href="#" class="th-btn style3">Télécharger la Brochure<i
                            class="fas fa-arrow-right ms-2"></i></a> <a href="#" class="th-btn style2">Déposer votre candidature<i class="fas fa-arrow-right ms-2"></i></a></div>
            </div>
        </div>
    </section>
    {{-- SECTION AGENDA --}}
    <section class="space" data-bg-src="{{ asset('front/assets/img/bg/event-bg_1.png') }}">
        <div class="shape-mockup event-shape1 jump" data-top="0" data-left="-60px"><img
                src="{{ asset('front/assets/img/team/team-shape_1_1.png') }}" alt="img"></div>
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><i class="fal fa-book me-2"></i> Agenda</span>
                <h2 class="sec-title">Nos prochains événements</h2>
            </div>
            <div class="row slider-shadow event-slider-1 th-carousel gx-70" data-slide-show="3" data-lg-slide-show="3"
                 data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true">
                @foreach($agendas as $agenda)
                    <div class="col-lg-6 col-xl-4">
                        <div class="event-card">
                            <div class="event-card_img" data-mask-src="{{ asset('front/assets/img/event/event_img-shape.png') }}">
                                <img src="{{ asset('storage/agenda/'.$agenda->image) }}" alt="{{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}"></div>
                            <div class="event-card_content">
                                <div class="event-author">
                                    <div class="avater"><i class="fal fa-clock"></i></div>
                                    <div class="details"><span class="author-name">Horaire</span>
                                        <p class="author-desig">{{  \Carbon\Carbon::parse($agenda->date)->format('d M Y') }} à {{ \Carbon\Carbon::parse($agenda->date)->format('H:m') }}</p>
                                    </div>
                                </div>
                                <div class="event-meta">
                                    <p><i class="fal fa-location-dot"></i>{{ $agenda->lieu }}</p>
                                </div>
                                <h3 class="event-card_title">
                                    <a href="{{ route('detailEvent',[app()->getLocale(),'slug' => $agenda->slug]) }}">
                                        {{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}
                                    </a>
                                </h3>
                                <div class="event-card_bottom">
                                    <a href="{{ route('detailEvent',[app()->getLocale(),'slug' => $agenda->slug]) }}" class="th-btn">
                                        {{ (app()->getLocale() == 'fr') ? "En savoir plus" : "Learn more" }} <i
                                            class="far fa-arrow-right ms-1"></i></a></div>
                                <div class="event-card-shape jump">
                                    <img src="{{ asset('front/assets/img/event/event-box-shape1.png') }}"
                                         alt="img"></div>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    {{--SECTION BLOG--}}
    <section class="overflow-hidden space" id="blog-sec">
        <div class="container">
            <div class="mb-35 text-center text-md-start">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-8">
                        <div class="title-area mb-md-0"><span class="sub-title"><i class="fal fa-book me-2"></i>News & Blogs</span>
                            <h2 class="sec-title">Actualités de l'EPF</h2>
                        </div>
                    </div>
                    <div class="col-md-auto"><a href="{{ route('blog',[app()->getLocale()]) }}" class="th-btn">Toutes les actualités<i
                                class="fa-solid fa-arrow-right ms-2"></i></a></div>
                </div>
            </div>

                <div class="row slider-shadow th-carousel blog-slider-1" data-slide-show="3" data-lg-slide-show="2"
                 data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">

                @foreach($posts as $post)
                <div class="col-md-6 col-xl-4">
                    <div class="th-blog blog-single style2">
                        <div class="blog-img">
                            <a href="{{ route('detailBlog',[app()->getLocale(),'slug' => $post->slug_fr]) }}">
                                <img src="{{ asset('storage/actualite/'.$post->couverture) }}"
                                           alt="{{ (app()->getLocale() == 'fr') ? $post->titre : $post->titre_en }}">
                               </a></div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="{{ route('detailBlog',[app()->getLocale(),'slug' => $post->slug_fr]) }}">
                                    <i class="fa-light fa-clock"></i>{{ \Carbon\Carbon::parse($post->updated_at)->format('d M Y') }}
                                </a></div>
                            <h4 class="box-title">
                                <a href="{{ route('detailBlog',[app()->getLocale(),'slug' => $post->slug_fr]) }}"> {{ (app()->getLocale() == 'fr') ? $post->titre : $post->titre_en }}</a></h4>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section>
</div>

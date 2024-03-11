@section('title', (app()->getLocale() == 'fr') ? $form->titre : $form->titreEn ."| EPF")
<div>
    <div>
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('storage/formation/'.$form->couverture) }}" data-overlay="title" data-opacity="8">
            <div class="breadcumb-shape" data-bg-src="{{ asset('front/assets/img/bg/breadcumb_shape_1_1.png') }}"></div>
            <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px"><img
                    src="{{ asset('front/assets/img/bg/breadcumb_shape_1_2.png') }}" alt="shape"></div>
            <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
                <img src="{{ asset('front/assets/img/bg/breadcumb_shape_1_3.png') }}" alt="shape"></div>
            <div class="container">
                <div class="breadcumb-content text-center">
                    <h1 class="breadcumb-title" style="line-height:60px">{{ (app()->getLocale() == 'fr') ? $form->titre : $form->titreEn }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="{{ route('formations',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Nos formations" : "Our training" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="course-single">
                        <div class="course-single-bottom">
                            <ul class="nav course-tab" id="courseTab" role="tablist">
                                <li class="nav-item" role="presentation"><a class="nav-link active" id="description-tab"
                                                                            data-bs-toggle="tab" href="#Coursedescription" role="tab"
                                                                            aria-controls="Coursedescription" aria-selected="true"><i
                                            class="fa-regular fa-bookmark"></i>Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="curriculam-tab"
                                                                            data-bs-toggle="tab" href="#curriculam" role="tab" aria-controls="curriculam"
                                                                            aria-selected="false"><i class="fa-regular fa-book"></i>{{ (app()->getLocale() == 'fr') ? "Débouchés" : "Opportunities" }}</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" id="instructor-tab"
                                                                            data-bs-toggle="tab" href="#instructor" role="tab" aria-controls="instructor"
                                                                            aria-selected="false"><i class="fa-regular fa-user"></i>{{ (app()->getLocale() == 'fr') ? "Conditions d'admission" : "Conditions of admission" }}</a></li>

                            </ul>
                            <div class="tab-content" id="productTabContent">
                                <div class="tab-pane fade show active" id="Coursedescription" role="tabpanel"
                                     aria-labelledby="description-tab">
                                    <div class="course-description">
                                        <h5 class="h5">{{ (app()->getLocale() == 'fr') ? "Description" : "Description" }}</h5>
                                       {!! (app()->getLocale() == 'fr') ? $form->description : $form->descriptionEn !!}

                                        <h5 class="h5 mt-40">{{ (app()->getLocale() == 'fr') ? "5 raisons de choisir cette formation" : "5 reasons to choose this training" }}</h5>
                                        <div class="checklist mb-1 mt-40">
                                             {!! (app()->getLocale() == 'fr') ? $form->raison : $form->raisonEn !!}
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="curriculam" role="tabpanel"
                                     aria-labelledby="curriculam-tab">
                                    <div class="course-curriculam">
                                        {!! (app()->getLocale() == 'fr') ? $form->debauche : $form->debaucheEn !!}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="instructor" role="tabpanel"
                                     aria-labelledby="instructor-tab">
                                    <div class="course-instructor">
                                        <div class="checklist  mt-40 mb-40">
                                            {!! (app()->getLocale() == 'fr') ? $form->condition : $form->conditionEn !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <h3 class="widget_title">Informations</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-clock"></i> <strong>{{ (app()->getLocale() == 'fr') ? "Durée" : "Duration" }} : </strong>
                                        <span>{{ (app()->getLocale() == 'fr') ? $form->duree : $form->dureeEn }}</span></li>
                                    <li><i class="fa-light fa-file"></i> <strong>Admission : </strong>
                                        <span>{{ (app()->getLocale() == 'fr') ? $form->admission : $form->admissionEn }}</span></li>
                                </ul>
                            </div>
                            <a role="button" wire:click="openModal()" class="th-btn  mt-35 mb-0">Télécharger la brochure</a>
                            <a href="https://www.linkedin.com/" class="th-btn1  mt-25 mb-0">Demande pré-inscription</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <section class="space-bottom">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title"><i class="fal fa-book me-2"></i> Suggestions</span>
                <h2 class="sec-title">{{ (app()->getLocale() == 'fr') ? "Autres formations" : "Others formations" }}</h2>
            </div>
            <div class="row slider-shadow th-carousel course-slider-1" data-slide-show="4" data-ml-slide-show="3"
                 data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="true">
                @foreach($forms as $for)
                <div class="col-md-6 col-xl-4">
                    <div class="course-box style2">
                        <div class="course-img">
                            <img src="{{ asset('storage/formation/'.$for->couverture) }}" loading="lazy"
                                 alt="{{ (app()->getLocale() == 'fr') ? $for->titre : $for->titreEn }}"> <span
                                class="tag"><i class="fas fa-clock"></i>{{ (app()->getLocale() == 'fr') ? $for->duree : $for->dureeEn }}</span></div>
                        <div class="course-content">
                            <h3 class="course-title"><a href="{{ route('formation',[app()->getLocale(),'formation' => $for->slug])  }}">
                                    {{ (app()->getLocale() == 'fr') ? $for->titre : $for->titreEn }}
                                </a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">TÉLÉCHARGEZ LA BROCHURE  </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">
                                <b>{{ (app()->getLocale() == 'fr') ? $form->titre : $form->titreEn }}</b>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" required wire:model="nom" class="form-control" placeholder="{{ (app()->getLocale() == 'fr') ? 'Nom' : 'LastName'}}">
                            @error('nom')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" required wire:model="prenom" class="form-control"  placeholder="{{ (app()->getLocale() == 'fr') ? 'Prénom' : 'FisrtName'}}">
                            @error('prenom')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="email" required wire:model="email" class="form-control"  placeholder="Email">
                            @error('email')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" required wire:model="telephone"  class="form-control"  placeholder="{{ (app()->getLocale() == 'fr') ? 'Numéro de telephone' : 'Phone number'}}">
                            @error('telephone')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="button" wire:click.prevent="store()"  class="th-btn ml-20">Télécharger </button>
                    <div wire:loading wire:target="store" class="text-info">
                        {{ (app()->getLocale() == 'fr') ? 'Téléchargement en cours...' : 'Downloading...'}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@push('styles')
    <style>
        .widget_info .widget_title {
            margin: 0px;
        }
        .tutor-widget, .widget {
            padding: var(--blog-space-y, 20px) var(--blog-space-x, 40px);
        }
        .th-btn {
            padding: 13.5px 12px
        }
        .th-btn1 {
            padding: 7.5px 10px
        }
        .th-btn1 {
            position: relative;
            z-index: 2;
            overflow: hidden;
            vertical-align: middle;
            display: inline-block;
            border: none;
            text-transform: uppercase;
            text-align: center;
            background-color: black;
            color: var(--white-color);
            font-family: var(--title-font);
            box-shadow: 0px 6px 16px rgba(13, 94, 244, 0.24);
            border-radius: 5px;
        }
    </style>
@endpush

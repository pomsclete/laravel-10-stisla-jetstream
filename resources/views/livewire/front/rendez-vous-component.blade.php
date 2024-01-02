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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Les rendez-vous personnalisés": "Personalized appointments" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="{{ route('blog',[app()->getLocale()]) }}">{{ (app()->getLocale() == 'fr') ? "RV" : "RV" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-20 gx-70">
                <div class="col-lg-8 col-xl-8 offset-2">
                    <p>{{ __('textRv1') }}</p>
                    <p>{{ __('textRv2') }}</p>
                    <div class="textCente" style="margin-bottom: 3rem">
                        <h2>{{ __('textH1') }}</h2>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success mb-3">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="civilite" class="form-label">{{ __("labelCivilité") }} <span>(*)</span></label>
                        <select wire:model="civilite" id="civilite">
                            <option value="">...</option>
                            <option value="Monsieur">Monsieur</option>
                            <option value="Madame">Madame</option>
                        </select>
                        @error('civilite')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">{{ __("labelNom") }} <span>(*)</span></label>
                        <input type="text" wire:model="nom" class="form-control" id="nom">
                        @error('nom')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">{{ __("labelPrenom") }} <span>(*)</span></label>
                        <input type="text" wire:model="prenom" class="form-control" id="prenom">
                        @error('prenom')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __("labelEmail") }} <span>(*)</span></label>
                        <input type="email" wire:model="email" class="form-control" id="email" placeholder="name@example.com">
                        @error('email')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">{{ __("labelTelephone") }} <span>(*)</span></label>
                        <input type="text" wire:model="telephone" class="form-control" id="telephone" >
                        @error('telephone')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="niveau" class="form-label">{{ __("labelNiveau") }} <span>(*)</span></label>
                        <select wire:model="niveau" id="niveau">
                            <option value="">...</option>
                            <option value="Terminale">Terminale</option>
                            <option value="Licence 1">Licence 1</option>
                            <option value="Licence 2">Licence 2</option>
                            <option value="Licence 3">Licence 3</option>
                            <option value="Master 1">Master 1</option>
                            <option value="Master 2">Master 2</option>
                            <option value="1ère année Ecole d'ingénieurs">{{ __("Niv1") }}</option>
                            <option value="2ère année Ecole d'ingénieurs">{{ __("Niv2") }}</option>
                            <option value="3ère année Ecole d'ingénieurs">{{ __("Niv3") }}</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Autre">{{ __("NivOther") }}</option>
                        </select>
                        @error('niveau')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="formation" class="form-label">{{ __("labelFormation") }} <span>(*)</span></label>
                        <select wire:model="formation" id="formation">
                            <option value="">...</option>
                            <option value="Licence 1">Licence 1</option>
                            <option value="Licence 2">Licence 2</option>
                            <option value="Licence 3">Licence 3</option>
                            <option value="Master 1">Master 1</option>
                            <option value="Master 2">Master 2</option>
                            <option value="1ère année Ecole d'ingénieurs">{{ __("Niv1") }}</option>
                            <option value="2ère année Ecole d'ingénieurs">{{ __("Niv2") }}</option>
                            <option value="3ère année Ecole d'ingénieurs">{{ __("Niv3") }}</option>
                            <option value="Bachelor">Bachelor</option>
                            <option value="Autre">{{ __("NivOther") }}</option>
                        </select>
                        @error('formation')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="campus" class="form-label">{{ __("labelCampus") }} <span>(*)</span></label>
                        <select wire:model="campus"  id="campus">
                            <option value="">...</option>
                            <option value="Campus 1 / Siège">Campus 1 / Siège</option>
                            <option value="Campus 2">Campus 2</option>
                        </select>
                        @error('campus')
                        <mall class="text-danger">{{ $message }}</mall>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="oui" class="form-label">{{ __("labelAutorisation") }} <span>(*)</span></label>
                        <div>
                            <input id="oui" type="radio" wire:model="autorisation" name="autorisation" value="oui">
                            <label for="oui"><span></span>Oui</label>

                            <input id="non" type="radio"  wire:model="autorisation" name="autorisation" value="non">
                            <label for="non"><span></span>Non</label>
                        </div>
                        <small class="form-text text-muted">{{ __("AutorisationTxt") }}</small>
                        @error('autorisation')
                        <div><mall class="text-danger">{{ $message }}</mall></div>
                        @enderror
                    </div>

                    <div class="mb-4 btn-group">
                        <button  wire:click="store()" class="top-btn th-btn style3">Envoyer <i
                                class="fas fa-arrow-right ms-2"></i></button></div>
                </div>
            </div>
        </div>
    </section>

</div>

@push('scripts')
    <script>
        // Get the element
        let topBtn = document.querySelector(".top-btn");

        // On Click, Scroll to the page's top, replace 'smooth' with 'instant' if you don't want smooth scrolling
        topBtn.onclick = () => window.scrollTo({ top: 180, behavior: "smooth" });

        // On scroll, Show/Hide the btn with animation
        window.onscroll = () => topBtn.style.opacity = window.scrollY > 500 ? 1 : 0;
    </script>
@endpush

@push('styles')
    <style>
        .text-muted {
            color: #6c757d!important;
        }
        .form-text {
            display: block;
            margin-top: 0.25rem;
        }
        input[type="radio"]{
            display: none;
        }
        input[type="radio"] + label span {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: transparent;
            vertical-align: middle;
            border: 2px solid #f56;
            border-radius: 50%;
            padding: 2px;
            margin:0 5px;
        }
        input[type="radio"]:checked + label span {
            width: 20px;
            height: 20px;
            background: #f56;
            background-clip: content-box;
        }

    </style>
@endpush

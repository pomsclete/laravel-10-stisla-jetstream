@php
    $links = [

         [
            "href" => [
                [
                    "section_text" => "Découvrir l'EPF",
                    "section_list" => [
                        ["href" => "histoire", "text" => "Histoire","is_multi" => false],
                        ["href" => "motDg", "text" => "Mot du directeur","is_multi" => false],
                        ["href" => "blog", "text" => "Actualités","is_multi" => false],
                        ["href" => "accreditation", "text" => "Accréditations et labels","is_multi" => false],
                        ["href" => "engage", "text" => "L'EPF s'engage","is_multi" => false],
                        ["href" => "user.new", "text" => "Nos campus","is_multi"=> true,
                            "sous" => [
                                        "href" => "user.new", "text" => "Paris-Cachan"
                                        ]
                         ],
                    ]
                ]
            ],
            "text" => "",
            "is_multi" => true,
        ],
         [
            "href" => [
                [
                    "section_text" => "Admission",
                    "section_list" => [
                        ["href" => "dakar", "text" => "Pourquoi choisir l'EPF","is_multi" => false],
                        ["href" => "pourquoi", "text" => "Conditions d'admission","is_multi" => false],
                        ["href" => "blog", "text" => "Pré-inscription","is_multi" => false]
                    ]
                ]
            ],
            "text" => "",
            "is_multi" => true,
        ],
         [
            "href" => [
                [
                    "section_text" => "Formations",
                    "section_list" => [
                        ["href" => "formation.bachelor", "text" => "Bachelor Bac+3","is_multi" => false],
                        ["href" => "formation.cpge", "text" => "CPGE","is_multi" => false],
                    ]
                ]
            ],
            "text" => "",
            "is_multi" => true,
        ],
         [
            "href" => [
                [
                    "section_text" => "Entreprises",
                    "section_list" => [
                        ["href" => "partenaire", "text" => "Nos partenaires","is_multi" => false],
                        ["href" => "user.new", "text" => "Développer sa marque employeur","is_multi" => false],
                        ["href" => "addpartenaire", "text" => "Nouer un partenariat","is_multi" => false]
                    ]
                ]
            ],
            "text" => "",
            "is_multi" => true,
        ],
        [
            "href" => [
                [
                    "section_text" => "Rencontrez-nous",
                    "section_list" => [
                        ["href" => "portes", "text" => "Les portes ouvertes","is_multi" => false],
                        ["href" => "forums", "text" => "Salons et forums","is_multi" => false],
                        ["href" => "rv", "text" => "Demander un rendez-vous","is_multi" => false]
                    ]
                ]
            ],
            "text" => "",
            "is_multi" => true,
        ],
    ];
    $navigation_links = array_to_object($links);
@endphp

<header class="th-header header-layout-default">
    <div class="logo-bg-half"></div>
    <div class="header-top">
        <div class="container-fluid">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                <div class="col-auto d-none d-lg-block">
                    <div class="header-links">
                        <ul>
                            <li><i class="far fa-phone"></i><a href="tel:+22133868 60 08">+221 (33) 868 60 08</a></li>
                            <li class="d-none d-xl-inline-block"><i class="far fa-envelope"></i><a
                                    href="mailto:admission@epf.fr">admission@epf.fr</a></li>
                            <li><i class="far fa-clock"></i>{{ __("Lun") }} - {{ __("Ven") }} : 8:00 - 17:00</li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links header-right">
                        <ul>
                            <li>
                                <div class="header-social" style="margin-right: 10px;">
                                    <a @if(app()->getLocale() == "fr")
                                           style="font-weight: bold; text-decoration: underline"
                                       @endif  href="{{ route(request()->route()->getName(), ["fr"])  }}">FR</a>
                                    <a href="#">|</a>
                                    <a @if(app()->getLocale() == "en")
                                           style="font-weight: bold; text-decoration: underline"
                                       @endif class="lang" href="{{ route(request()->route()->getName(), ["en"])  }}">EN</a></div>
                            </li>
                            <li class="d-none d-lg-inline-block"><i class="far fa-user"></i><a
                                    href="contact.html">EPF Online</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="menu-area">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-auto">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo"><a href="{{ route('home', app()->getLocale()) }}">
                                        <img src="{{ asset('front/assets/img/logo/logo_white_l.png') }}"
                                                                          alt="Logo EPF" style="width: 182px;"></a></div>
                            </div>
                            <div class="col-auto">
                                <nav class="main-menu d-none d-lg-inline-block">
                                    <ul>
                                    @foreach ($navigation_links as $link)

                                            @if (!$link->is_multi)
                                                <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                                                    <a href="{{ route($link->href,app()->getLocale()) }}"><span>Dashboard</span></a>
                                                </li>
                                            @else
                                                @foreach ($link->href as $section)
                                                    @php
                                                        $routes = collect($section->section_list)->map(function ($child) {
                                                            return Request::routeIs($child->href);
                                                        })->toArray();

                                                        $is_active = in_array(true, $routes);
                                                    @endphp

                                                    <li class="menu-item-has-children {{ ($is_active) ? 'active' : '' }}">
                                                        <a href="#">{{ __($section->section_text) }}</a>
                                                        <ul class="sub-menu">
                                                            @foreach ($section->section_list as $child)
                                                                @if (!$child->is_multi)
                                                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}">
                                                                    <a style="{{ ($child->text == 'CPGE') ? 'text-transform:uppercase' : '' }}"  href="{{ route($child->href,app()->getLocale()) }}">{{ __($child->text) }}</a>
                                                                </li>
                                                                @else
                                                                <li class="menu-item-has-children"><a href="#"> {{ __("Nos campus") }}</a>
                                                                    <ul class="sub-menu">
                                                                        <li><a href="https://www.epf.fr/campus/paris-cachan" target="_blank">Paris-cachan</a></li>
                                                                        <li><a href="https://www.epf.fr/campus/troyes" target="_blank">Troyes</a></li>
                                                                        <li><a href="https://www.epf.fr/campus/montpellier" target="_blank">Montpellier</a></li>
                                                                        <li><a href="https://www.epf.fr/campus/saint-nazaire" target="_blank">Saint-Nazaire</a></li>
                                                                    </ul>
                                                                </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @endforeach
                                            @endif

                                    @endforeach
                                    </ul>
                                </nav>

                                <button type="button" class="th-menu-toggle d-block d-lg-none"><i
                                        class="far fa-bars"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="row">
                            <div class="col-auto">
                                <div class="header-button">
                                    <button type="button" class="icon-btn style2 searchBoxToggler "><i class="far fa-search"></i></button>
                                     <livewire:front.formation.brochure-component  />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>

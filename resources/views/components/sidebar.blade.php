@php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "icon" => "fa-fire",
        "is_multi" => false,
    ],
     [
        "href" => [
            [
                "section_text" => "Informations",
                "icon" => "fa-newspaper",
                "section_list" => [
                    ["href" => "information.actu", "text" => "Actualités"],
                    ["href" => "information.tag", "text" => "Tags actualité"],
                    ["href" => "information.slide", "text" => "Slides accueil"],
                    ["href" => "information.accre", "text" => "Accréditations"],
                    ["href" => "information.agenda", "text" => "Agendas"],
                    ["href" => "information.partenariat", "text" => "Partenariats"],
                ]
            ]
        ],
        "text" => "News",
        "is_multi" => true,
    ],
   [
        "href" => [
            [
                "section_text" => "Formations",
                "icon" => "fa-graduation-cap",
                "section_list" => [
                    ["href" => "formation.add", "text" => "Ajouter une formation"],
                    ["href" => "formation.liste", "text" => "Liste des formations"]
                ]
            ]
        ],
        "text" => "Etudes",
        "is_multi" => true,
    ],
      [
        "href" => "brochure",
        "text" => "Brochures télechargées",
        "icon" => "fa-download",
        "is_multi" => false,
    ],
    [
        "href" => [
            [
                "section_text" => "Rencontres",
                "icon" => "fa-restroom",
                "section_list" => [
                    ["href" => "rencontre.journe", "text" => "Portes ouvertes"],
                ]
            ]
        ],
        "text" => "Actions",
        "is_multi" => true,
    ],

    [
        "href" => [
            [
                "section_text" => "Paramétrage",
                "icon" => "fa-cogs",
                "section_list" => [
                    ["href" => "parametrage.campus", "text" => "Nos campus"],
                    ["href" => "parametrage.type", "text" => "Type d'actualités"],
                    ["href" => "parametrage.annee", "text" => "Années Académiques"],
                    ["href" => "parametrage.level", "text" => "Niveaux | Classes"],
                    ["href" => "user", "text" => "Utilisateurs"],
                ]
            ]
        ],
        "text" => "Configuration",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="" alt="">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">

            @if (!$link->is_multi)
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas {{ $link->icon }}"></i><span>{{ __($link->text) }}</span></a>
            </li>
            @else
                @if($link->text != "")
                    <li class="menu-header">{{ __($link->text) }}</li>
                @endif
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();

                    $is_active = in_array(true, $routes);
                    @endphp

                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown">
                            <i class="fas {{ $section->icon }}"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>

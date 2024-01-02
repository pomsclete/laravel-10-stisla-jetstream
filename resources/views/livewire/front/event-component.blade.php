@section('title', (app()->getLocale() == 'fr') ? "Agendas" : "Agendas")
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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Agendas": "Agendas" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="#">{{ (app()->getLocale() == 'fr') ? "Evènements" : "Events" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{-- BLOG NEWS --}}
    <section class="space-top space-extra2-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-xl-8 col-lg-8">

                    <div class="row gy-40">
                        @foreach($agendas as $agenda)
                            <div class="col-xl-12">
                                <div class="event-card2">
                                    <div class="event-card2_img">
                                        <img src="{{ asset('storage/agenda/'.$agenda->image) }}"
                                                     alt="{{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}">
                                    </div>
                                    <div class="event-card2_content">
                                        <div class="event-meta">
                                            <p><i class="fal fa-location-dot"></i>{{ $agenda->lieu }}</p>
                                            <p><i class="fal fa-clock"></i>{{  \Carbon\Carbon::parse($agenda->date)->format('d M Y') }} à {{ \Carbon\Carbon::parse($agenda->date)->format('H:m') }}</p>
                                        </div>
                                        <h3 class="event-card2_title"><a href="{{ route('detailEvent',[app()->getLocale(),'slug' => $agenda->slug]) }}">
                                                {{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}
                                            </a></h3>
                                        <div class="event-card2_bottom"><a href="{{ route('detailEvent',[app()->getLocale(),'slug' => $agenda->slug]) }}" class="th-btn">
                                                {{ (app()->getLocale() == 'fr') ? "Voir l'évènement" : "View Event" }}</a>

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
                            <div class="text-center mt-3"> {{-- $actus->links('pagination') --}}<button style="display: {{ ($show == true) ? '' : 'none' }};"  class="btn btn-dark" wire:click="loadMore" rel="noopener">Afficher plus</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <aside class="sidebar-area sidebar-shop">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input wire:model="search" type="text" placeholder="{{ (app()->getLocale() == 'fr') ? "Rechercher un évènement..." : "Search agenda..." }}">
                                <button><i class="far fa-search"></i></button>

                            </form>
                            <div wire:loading wire:target="search" class="text-center">
                                <div class="loaderi"></div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    {{-- END BLOG NEWS --}}
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

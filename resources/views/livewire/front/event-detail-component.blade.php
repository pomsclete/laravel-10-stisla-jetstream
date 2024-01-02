@section('title', (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en ."| EPF")
<div>
        <div class="breadcumb-wrapper" data-bg-src="{{ asset('front/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="title" data-opacity="8">
            <div class="breadcumb-shape" data-bg-src="{{ asset('front/assets/img/bg/breadcumb_shape_1_1.png') }}"></div>
            <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px"><img
                    src="{{ asset('front/assets/img/bg/breadcumb_shape_1_2.png') }}" alt="shape"></div>
            <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
                <img src="{{ asset('front/assets/img/bg/breadcumb_shape_1_3.png') }}" alt="shape"></div>
            <div class="container">
                <div class="breadcumb-content text-center">
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="{{ route('agenda',[app()->getLocale()]) }}">{{ (app()->getLocale() == 'fr') ? "Agendas" : "Diaries" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="event-details-wrap">
                        <div class="event-img"><img src="{{ asset('storage/agenda/'.$agenda->image) }}" alt="Event Image"></div>
                        {!!  (app()->getLocale() == 'fr') ? $agenda->description : $agenda->description_en  !!}
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_info">
                            <button class="th-btn" style="text-transform: capitalize" data-bs-toggle="modal" data-bs-target="#calendarModal">
                                {{ (app()->getLocale() == 'fr') ? "Ajouter à mon calendrier" : "Add To Calendar" }}
                            </button>
                            <h3 class="widget_title textCenter">{{ (app()->getLocale() == 'fr') ? "Informations" : "Event Information" }}</h3>
                            <div class="info-list">
                                <ul>
                                    <li><i class="fa-light fa-calendar-days"></i> <strong>Date: </strong><span>{{  \Carbon\Carbon::parse($agenda->date)->format('d M Y') }} à {{ \Carbon\Carbon::parse($agenda->date)->format('H:m') }}</span></li>
                                    <li><i class="fa-light fa-map"></i> <strong>Adresse: </strong><span>{{ $agenda->lieu }}</span></li>
                                </ul>
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="calendarModal"   data-bs-keyboard="false" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"> {{ (app()->getLocale() == 'fr') ? "Ajouter à mon" : "Calendar" }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <div class="list-group">
                        <a  href="http://www.google.com/calendar/render?action=TEMPLATE&text={{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}&dates={{ \Carbon\Carbon::parse($agenda->date)->format('Ymd\\THi00\\Z') }}/{{ \Carbon\Carbon::parse($agenda->date)->format('Ymd\\THi00\\Z') }}&location={{ $agenda->lieu }}&details={!!  (app()->getLocale() == 'fr') ? $agenda->description : $agenda->description_en  !!}"
                                target="_blank" rel="nofollow"
                           class="th-btn list-group-item list-group-item-action mb-1">
                            <i class="fa-brands fa-2x fa-google"></i> {{ (app()->getLocale() == 'fr') ? "Google agenda" : "Calendar" }}
                        </a>
                          <a href="https://outlook.office.com/calendar/0/deeplink/compose?subject={{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}&body={!!  (app()->getLocale() == 'fr') ? $agenda->description : $agenda->description_en  !!}&startdt={{ \Carbon\Carbon::parse($agenda->date)->format('Ymd\\THi00\\Z') }}&enddt={{ \Carbon\Carbon::parse($agenda->date)->format('Ymd\\THi00\\Z') }}&location={{ $agenda->lieu }}&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent"
                             target="_blank" rel="nofollow" class="th-btn list-group-item list-group-item-action mb-1">
                              <i class="fa-brands fa-2x fa-microsoft"></i> {{ (app()->getLocale() == 'fr') ? "Outlook Calendrier" : "Calendar" }}
                          </a>
                         <input type="hidden" wire:model="date_start" value="{{ \Carbon\Carbon::parse($agenda->date)->format('Ymd\\THi00\\Z') }}">
                            <input type="hidden" wire:model="date_end" value="{{ \Carbon\Carbon::parse($agenda->date)->format('Ymd\\THi00\\Z') }}">
                            <input type="hidden" wire:model="location" value="{{ $agenda->lieu }}">
                            <input type="hidden" wire:model="description" value="{!!  (app()->getLocale() == 'fr') ? $agenda->description : $agenda->description_en  !!}">
                            <input type="hidden" wire:model="summary" value="{{ (app()->getLocale() == 'fr') ? $agenda->titre : $agenda->titre_en }}">
                            <button data-bs-dismiss="modal" wire:click="downloadIcs()" class="th-btn" type="button" >{{ (app()->getLocale() == 'fr') ? "Calendrier Apple" : "Apple Calendrier" }}</button>

                     </div>
                </div>

            </div>
        </div>
    </div>
</div>

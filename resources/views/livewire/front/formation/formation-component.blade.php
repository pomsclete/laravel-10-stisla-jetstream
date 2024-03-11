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
                    <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? "Nos formations": "Ours courses" }}</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                        <li><a href="{{ route('formations',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Nos formations" : "Our training" }}</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="space">
        <div class="container">
            <div class="tab-menu2 pt-30 mb-40 filter-menu-active">
                <button data-filter="*" class="filter-btn active">{{ (app()->getLocale() == 'fr') ? "Tous les formations": "Ours courses" }}</button>
                @foreach($types as $type)
                    <button data-filter=".{{ $type->slug_type }}" class="filter-btn">{{ $type->libelle }}</button>
                @endforeach
            </div>
            <div class="row gy-40 filter-active">
                @foreach($formations as $bachelor)
                    <div class="col-md-6 col-xl-4 filter-item {{ $bachelor->slug_type }}">
                        <div class="video-course">
                            <div class="course-img">
                                <img src="{{ asset('storage/formation/'.$bachelor->couverture) }}" loading="lazy"
                                     alt="{{ (app()->getLocale() == 'fr') ? $bachelor->titre : $bachelor->titreEn }}">
                                <span
                                    class="tag">{{ (app()->getLocale() == 'fr') ? $bachelor->duree : $bachelor->dureeEn }}</span>
                            </div>
                            <div class="course-content">
                                <h3 class="course-title">
                                    <a href="">
                                        {{ (app()->getLocale() == 'fr') ? $bachelor->titre : $bachelor->titreEn }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>

@section('title', (app()->getLocale() == 'fr') ? $post->titre : $post->titre_en)
<div>
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('front/assets/img/bg/breadcumb-bg.jpg') }}" data-overlay="title" data-opacity="8">
        <div class="breadcumb-shape" data-bg-src="{{ asset('front/assets/img/bg/breadcumb_shape_1_1.png') }}"></div>
        <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px"><img
                src="{{ asset('front/assets/img/bg/breadcumb_shape_1_2.png') }}" alt="shape"></div>
        <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
            <img src="{{ asset('front/assets/img/bg/breadcumb_shape_1_3.png') }}" alt="shape"></div>
        <div class="container">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ (app()->getLocale() == 'fr') ? $post->titre : $post->titre_en }}</h1>
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('home',app()->getLocale()) }}">{{ (app()->getLocale() == 'fr') ? "Accueil" : "Home" }}</a></li>
                    <li><a href="{{ route('blog',[app()->getLocale()]) }}">{{ (app()->getLocale() == 'fr') ? "Actualités" : "News" }}</a> </li>
                </ul>
            </div>
        </div>
    </div>

    <section class="th-blog-wrapper blog-details space-top space-extra2-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="th-blog blog-single">
                        <div class="blog-img"><img src="{{ asset('storage/actualite/'.$post->couverture) }}"
                                                   alt="{{ (app()->getLocale() == 'fr') ? $post->titre : $post->titre_en }}"></div>
                        <div class="blog-content">
                            <div class="blog-meta"> <a href="#"><i class="fa-light fa-calendar-days"></i>05
                                    June, 2023</a> <a href="#"><i class="fa-light fa-book"></i>Business
                                    Analysis</a></div>
                            {!! (app()->getLocale() == 'fr') ? $post->description : $post->description_en !!}
                        </div>
                        <div class="share-links clearfix">
                            <div class="row justify-content-between">
                                <div class="col-md-auto"><span class="share-links-title">Tags:</span>
                                    <div class="tagcloud">
                                        @foreach($tagActus as $tage)
                                        <a href="{{ route('tagBlog',[app()->getLocale(),'slug' => base64url_encode($tage->idTag)]) }}">
                                            {{ (app()->getLocale() == 'fr') ? $tage->libelle : $tage->libelle_en }}</a>
                                        @endforeach
                                    </div>
                                </div>
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
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget_search">
                            <form class="search-form"><input type="text" placeholder="{{ (app()->getLocale() == 'fr') ? "Rechercher une actualité": "Search for news" }}..."> <button
                                    type="submit"><i class="far fa-search"></i></button></form>
                        </div>
                        <div class="widget widget_tag_cloud">
                            <h3 class="widget_title">{{ (app()->getLocale() == 'fr') ? "Tags populaires" : "Popular Tags" }}</h3>
                            <div class="tagcloud">
                                @foreach($tags as $tag)
                                    <a href="{{ route('tagBlog',[app()->getLocale(),'slug' => base64url_encode($tag->idTag)]) }}">
                                        {{ (app()->getLocale() == 'fr') ? $tag->libelle : $tag->libelle_en }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget">
                            <h3 class="widget_title">{{ (app()->getLocale() == 'fr') ? "Actualités récentes" : "Recent Posts" }}</h3>
                            <div class="recent-post-wrap">
                                @foreach($posts as $actu)
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="{{ route('detailBlog',[app()->getLocale(),'slug' => $actu->slug_fr]) }}">
                                            <img
                                                src="{{ asset('storage/actualite/'.$actu->couverture) }}"
                                                alt="{{ (app()->getLocale() == 'fr') ? $actu->titre : $actu->titre_en }}"></a></div>
                                    <div class="media-body">
                                        <h4 class="post-title">
                                            <a class="text-inherit" href="{{ route('detailBlog',[app()->getLocale(),'slug' => $actu->slug_fr]) }}">
                                                {{ (app()->getLocale() == 'fr') ? $actu->titre : $actu->titre_en }}
                                            </a></h4>
                                        <div class="recent-post-meta">
                                            <a href="{{ route('detailBlog',[app()->getLocale(),'slug' => $actu->slug_fr]) }}"><i
                                                    class="fal fa-calendar"></i> {{ (app()->getLocale() == 'fr') ? \Carbon\Carbon::parse($actu->updated_at)->format('d M Y'): \Carbon\Carbon::parse($actu->updated_at)->format('Y M d') }}</a></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="widget widget_banner" data-overlay="theme" data-opacity="9"
                             data-bg-src="{{ asset('front/assets/img/widget/widget-banner-bg.png') }}">
                            <div class="widget-banner">
                                <h4 class="title">Need Help? We Are Here To Help You</h4>
                                <div class="logo"><img src="{{ asset('front/assets/img/logo.svg') }}" alt="img"></div>
                                <h5 class="subtitle">You Get Online Courses</h5><a href="tel:+11156456825"
                                                                                   class="link">+256 214 203 215</a> <a href="contact.html"
                                                                                                                        class="th-btn style7">Contact Us Now <i class="far fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

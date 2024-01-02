<footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('front/assets/img/bg/footer-bg.png') }}">
    <div class="footer-top">
        <div class="container">
            <div class="footer-contact-wrap">
                <div class="footer-contact">
                    <div class="footer-contact_icon icon-btn"><i class="fal fa-phone"></i></div>
                    <div class="media-body">
                        <p class="footer-contact_text">{{ __("Appelez-nous") }} :</p><a href="tel:"
                                                                            class="footer-contact_link">+221 214 203 215</a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="footer-contact">
                    <div class="footer-contact_icon icon-btn"><i class="fal fa-envelope"></i></div>
                    <div class="media-body">
                        <p class="footer-contact_text">{{ __("Contactez-nous") }} :</p><a href="mailto:info@edura.com"
                                                                              class="footer-contact_link">info@epf.fr</a>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="footer-contact">
                    <div class="footer-contact_icon icon-btn"><i class="fal fa-location-dot"></i></div>
                    <div class="media-body">
                        <p class="footer-contact_text">{{ __("Notre localisation") }}:</p><a
                            href="https://www.google.com/maps" class="footer-contact_link">Sacré coeur 3 N&deg9369 <br> VDN Dakar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrap" >
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between alignCentre">
                    <div class="col-md-6 col-xxl-4 col-xl-4">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="{{ route('home',app()->getLocale()) }}">
                                        <img src="{{ asset('front/assets/img/logo/logo_color_h.png') }}" alt="Logo EPF" style="width: 35%;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-3 col-xl-3 alignDroite">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="th-social">
                                    <h6 class="title text-black">{{ __("Suivez-nous") }} :</h6><a
                                        href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a
                                        href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a
                                        href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a
                                        href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright-wrap">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text textColor">Copyright © 2023 <a href="index.html">EPF</a> All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-links">
                            <ul>
                                <li ><a href="#" class="textColor">Contact</a></li>
                                <li><a href="#" class="textColor">{{ __("Mentions légales") }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
        </path>
    </svg></div>

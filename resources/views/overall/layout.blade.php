<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('/vendor/foundation/foundation.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/normalize/normalize.css') }}">
        @yield('appHeader')

        <link rel="stylesheet" href="{{ asset('/css/main.min.css') }}">
    </head>
    <body>
        <header class="header">
            <div class="header_background"></div>
            <div class="header_login-block hide-for-small-only">
                <div class="header_login-block_inner wrapper">
                    <ul class="header_login-block_elements columns large-6 hide-for-medium-only">
                        <li class="home-delivery">Bis zu 70% günstiger *</li>
                        <li>Lokaltarif 0848 500 501</li>
                    </ul>

                    <div class="header_menu columns large-4 medium-6">
                        <div class="header_menu_account">
                            <a href="#" class="signin hide-for-small-only">Anmelden</a>
                        </div>

                        <div class="header_menu_languages">
                            <div class="language-switcher">
                                <button type="button" class="language-switcher__button flag-de">Deutsch</button>
                                <ul class="language-switcher__list">
                                    <li class="language-switcher__item switch-languages">
                                        <a href="#" class="language-switcher__flag flag-fr">Français</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sticky navigation_wrapper">
                <div class="navigation_sub-nav">
                    <ul class="sub-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Mode</a></li>
                        <li><a href="#">FOOD DELIVERY</a></li>
                        <li><a href="#">KOSMETIK</a></li>
                        <li><a href="#">MASKEN</a></li>
                        <li><a href="#">Home & Living</a></li>
                        <li><a href="#">Sport</a></li>
                        <li><a href="#">WINE & GOURMET</a></li>
                        <li><a href="#">KIDS</a></li>
                        <li><a href="#">Deine Stadt</a></li>
                        <li><a href="#">TRAVEL</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="off-canvas-wrap">
            <div class="inner-wrap">
                <div class="content">
                    @yield('appBody')
                </div>

                <footer class="footer clearfix">
                    <div class="wrapper">
                        <div class="row">
                            <div class="small-12 medium-3 columns">
                                <h5>Deine Stadt</h5>
                                <ul>
                                    <li><a href="#">Schönheit & Wellness</a></li>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Einzelhandel</a></li>
                                    <li><a href="#">medizinische</a></li>
                                    <li><a href="#">Reinigung & Service</a></li>
                                    <li><a href="#">Bildung</a></li>
                                    <li><a href="#">Sport & Fitness</a></li>
                                    <li><a href="#">Abenteuer und Freizeit</a></li>
                                </ul>
                            </div>
                            <div class="small-12 medium-3 columns">
                                <h5>TRAVEL</h5>
                                <ul>
                                    <li><a href="#">Ferien in den Bergen</a></li>
                                    <li><a href="#">Abenteuer Aufenthalt</a></li>
                                    <li><a href="#">Wellness & Spa</a></li>
                                    <li><a href="#">Stadtrundfahrt</a></li>
                                    <li><a href="#">Winterferien</a></li>
                                    <li><a href="#">kulinarische Reise</a></li>
                                    <li><a href="#">Strandurlaub</a></li>
                                </ul>
                            </div>
                            <div class="small-12 medium-3 columns">
                                <h5>Produkte</h5>
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Mode</a></li>
                                    <li><a href="#">FOOD DELIVERY</a></li>
                                    <li><a href="#">KOSMETIK</a></li>
                                    <li><a href="#">MASKEN</a></li>
                                    <li><a href="#">Home & Living</a></li>
                                    <li><a href="#">Sport</a></li>
                                    <li><a href="#">WINE & GOURMET</a></li>
                                    <li><a href="#">KIDS</a></li>
                                </ul>
                            </div>

                            <div class="small-12 medium-3 columns">
                                <div class="a-center apptodate">
                                    <h5>Bleib immer App-to-Date!</h5>
                                    <p>Jetzt die DeinDeal-App herunterladen und auch unterwegs nie wieder einen Deal verpassen!</p>
                                    <div class="columns small-6 medium-12 large-6">
                                        <a href="#" class="button button-appstore">Aus dem App Store herunterladen</a>
                                    </div>
                                    <div class="columns small-6 medium-12 large-6">
                                        <a href="#" class="button button-googleplay">Jetzt bei Google play</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="small-12 medium-3 columns">
                                <h5>Deindeal</h5>
                                <ul>
                                    <li><a href="#">Wie funktioniert DeinDeal?</a></li>
                                    <li><a href="#">Stellen</a></li>
                                </ul>
                            </div>


                            <div class="small-12 medium-3 columns">
                                <h5>Hilfe & Kontakt</h5>
                                <ul>
                                    <li><a href="#">Häufig gestellte Fragen</a></li>
                                    <li><a href="#">Partner & Zulieferer</a></li>
                                    <li class="footer-contact">
                                        <span class="contact-tel">0848 500 501</span>
                                        <span></span>
                                        <span>(Lokaltarif)</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="small-12 medium-3 columns"></div>


                            <div class="small-12 medium-3 columns a-center">
                                <div class="footer-social-icons">
                                    <h5>Folge DeinDeal</h5>
                                    <a href="#" class="dd-icon-facebook"></a>
                                </div>

                                <div class="footer-partner-area">
                                    <h5>Partner</h5>
                                    <p>Weitere Informationen über die Vorteile einer Partnerschaft finden Sie </p>
                                    <a href="#" class="button button-dark button-md">Partner werden</a>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <ul class="terms">
                                    <li><a href="https://www.deindeal.ch/de/terms-and-conditions" data-link-code="terms-and-conditions">Allgemeine Geschäftsbedingungen</a></li>
                                    <li><a href="https://www.deindeal.ch/de/privacy" data-link-code="privacy">Datenschutzbestimmungen</a></li>
                                    <li><a href="https://www.deindeal.ch/de/impressum" data-link-code="impressum">Impressum</a></li>
                                </ul>
                            </div>
                            <div class="small-12 medium-6 columns payment-container">
                                <span class="payment"></span>
                            </div>
                        </div>
                    </div>

                    <div class="footer-bottom">
                        <div class="copyright-container a-center">
                            <span class="copyright">©2021 Deindeal AG</span>
                        </div>
                    </div>
                </footer>
            </div>      
        </div>


        <script src="{{ asset('/vendor/vuejs/vue.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>


        @yield('appFooter')
    </body>
</html>

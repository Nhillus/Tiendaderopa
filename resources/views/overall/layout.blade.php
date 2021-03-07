<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/vendor/foundation/foundation.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/normalize/normalize.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/vue-agile/dist/VueAgile.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" /> 
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
        @yield('appHeader')

        <link rel="stylesheet" href="{{ asset('/css/main.min.css') }}">
    </head>
    <body>
        <header class="header" id="header">
            <div class="header_background">
                <div class="slider_carouselheader-title" id="carousel">
                    <agile :nav-buttons="false" :autoplay-speed="5000" :speed="2500" fade="fade" pause-on-hover="pause-on-hover" :dots="false" autoplay="autoplay">

                        <img class="slide" src="https://images.unsplash.com/photo-1509549649946-f1b6276d4f35?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE0NTg5fQ"/>

                        <img class="slide" src="https://images.unsplash.com/photo-1511469054436-c7dedf24c66b?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>

                        <img class="slide" src="https://images.unsplash.com/photo-1511135232973-c3ee80040060?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>

                        <img class="slide" src="https://images.unsplash.com/photo-1511231683436-44735d14c11c?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>

                        <img class="slide" src="https://images.unsplash.com/photo-1517677129300-07b130802f46?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1600&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjEyMDd9"/>
                    </agile>
                </div>
                <div class="banner_header"></div>
            </div>
            <div class="header_login-block hide-for-small-only" v-if="topHeader">
                <div class="header_login-block_inner wrapper">
                    <ul class="header_login-block_elements columns large-6 hide-for-medium-only">
                        @auth
                           {{Auth::user()->email}}
                        @else
                            Desconectado
                        @endauth
                        <li class="home-delivery">Bis zu 70% günstiger *</li>
                        <li>Lokaltarif 0848 500 501</li>
                    </ul>

                    <div class="header_menu columns large-4 medium-6">
                        <div class="header_menu_account">
                            @auth
                            <a href="{{ route('web.details') }}" class="signin hide-for-small-only">mein konto</a>

                            <a href="{{ url('/api/logout') }}" class="signin hide-for-small-only">Abmelden</a>
                            @else
                            <a href="javascript:void(0)" class="signin hide-for-small-only" id="new-customer" data-toggle="modal" >Anmelden</a>
                            @endauth
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

            <transition name="slide-fade">
                <section v-if="search" class="navigation_top-menu wrapper top-bar-section" id="search">
                    <button type="button" class="left-off-canvas-toggle show-for-small-only navigation_top-menu_button">
                        <span class="material-icons icon">menu</span>
                    </button>
                    <h1 class="header-title">
                        <a href="{{url('/')}}">
                            <img src="{{asset('img/lebuya/LebuyaLogo.png')}}"class="logo">
                        </a>
                    </h1>
                    <div class="navigation_top-menu_search-cart-block">
                        <div class="my-cart has-dropdown my-cart-header hide-for-small-only not-click"></div>
                        <div class="search-container">
                            <form action="#" class="form">
                                <input type="text" class="search_field" placeholder="Was suchst Du?">
                                <button class="search-button" type="submit">
                                    <span class="material-icons icon">search</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </section>
            </transition>

            <div class="sticky navigation_wrapper" id="navbar_wrapper">
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
        <script src="https://unpkg.com/vue-agile"></script>
        <script src="{{ asset('js/header.js') }}"></script>
        @yield('appFooter')
        @yield('scripts')
    <script>
        $(document).ready(function () {

        /* When click New customer button */
        $('#new-customer').click(function () {
        $('#crud-modal').modal('show');
        });

      });

        </script>

    </body>
</html>

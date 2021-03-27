@extends('overall.layout')
@section('appHeader')
<link rel="stylesheet" href="{{ asset('vendor/zoomy/zoomy.css') }}">
@endsection

@section('appBody')
    <div class="std">
        <div class="wrapper">
            <div class="row nomgsmall">
                <div class="small-12 columns nopadding-left">
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#">Startseite</a>
                        </li>
                        <li>
                            <a href="#">C-Secure</a>
                        </li>
                        <li>
                            <a href="#">Kartenetuis</a>
                        </li>
                        <li>
                            <a href="#">Startseite</a>
                        </li>
                        <li>
                            <strong>C-Secure Kartenhalter Alu-Etui - Schwarz</strong>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="sale-details product-details clearfix">
                <div class="sale-details_container row nomgsmall clearfix">
                    <div class="small-12 medium-7 columns nomarge content-left">
                        <div class="row">
                            <div class="columns small-12 nopadding-left">
                                <div class="my-carousel-wrapper" id="product-slider">
                                    <div class="slider" id="slider">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="small-12 medium-5 columns aside-right">
                        <div class="scroll-section">
                            <h2 class="sale-details_title"><strong>C-Secure Kartenhalter Alu-Etui -</strong> Schwarz</h2>

                            <div class="sale-details_form">
                                <div class="sale-details_header a-center">
                                    <p>
                                        <span> Angebot endet in 4 Tagen</span>
                                    </p>
                                </div>
                                <div class="price-box">
                                    <p class="my-price special-price">
                                        <span class="price-label">Lebuya.ch Preis</span>
                                        <span class="price">19,90 CHF</span>
                                    </p>
                                    <p class="my-instead-price old-price">
                                        <span class="price-label">anstatt:</span>
                                        <span class="price">29,90 CHF</span>
                                    </p>
                                    <span class="discount-percent">-33%</span>
                                </div>

                                <form action="#">
                                    <div>
                                        <div class="sale-details_sizes size-wrapper clearfix">
                                            <div class="columns small-12 nomarge">
                                                <select name="" class="dd-select">
                                                    <option value="1">Anz : 1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sale-details_content-submit">
                                        <button type="submit" class="button button-accent button-md button-expanded gtm-addtocart">
                                            In den Warenkorb
                                        </button>
                                    </div>
                                </form>

                                <div class="sale-details_shipping">
                                    <ul>
                                        <li>
                                            <span>Voraussichtlicher Versand: </span>
                                            <span>zwischen 24.02.2021 und 06.03.2021</span>
                                        </li>
                                        <li>
                                            <p class="free-shipping-reduce">
                                                <span class="teaser">
                                                    <strong>VERSANDKOSTEN: CHF 4.90</strong>
                                                </span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns medium-7 f-left nopadding-left description">
                        <div class="sale-details_description">
                            <h4 class="product-detail-title">Beschreibung</h4>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, ex nam aspernatur, excepturi minus cupiditate ipsa aperiam sint adipisci non, harum placeat itaque iure laboriosam sunt vitae tempore. Ipsa, nihil?</p>

                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse corrupti facere quidem, quis sapiente, vel unde obcaecati molestiae officia quia impedit assumenda harum iusto est nisi amet ipsa maiores facilis.</p>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga odit ipsa veritatis deserunt quisquam. Suscipit doloremque magni id ab quos optio architecto velit eum, eveniet esse temporibus iusto quasi corrupti!</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

@section('appFooter')
    <script src="{{ asset('vendor/zoomy/zoomy.js') }}"></script>

    <script>

        const app = new Vue({
            el: '#product-slider',
            data: {
                image: 'https://cosmos2.deindeal.ch/api/img?p=products/2021/2/AD49085A-2D1F-4259-8BAD-87DE8FD42BA8/8892623_1&st=11&v=1612511840',
                images: [
                    'https://cosmos2.deindeal.ch/api/img?p=products/2021/2/AD49085A-2D1F-4259-8BAD-87DE8FD42BA8/8892623_1&st=11&v=1612511840',
                    'https://cosmos2.deindeal.ch/api/img?p=products/2021/2/AD49085A-2D1F-4259-8BAD-87DE8FD42BA8/8892623_2&st=11&v=1612511840'
                ],
                backgroundOptions: {
                    position: 'center center',
                    size: 'contain',
                    repeat: false
                },
                urls: [
                    'https://source.unsplash.com/h0s58n-8R6w/600x350',
                    'https://source.unsplash.com/jQ2_DWnIX7Y/600x350',
                    'https://source.unsplash.com/u4gwRbr2_j0/600x350'
                ],
                options: {
                    //thumbLeft:true,
                    //thumbRight:true,
                    //thumbHide:true,
                    //width:300,
                    //height:500,
                }
            },
            methods: {
                changeImage(img){
                    this.image = img;
                },
                resizeContainer(container){
                    var zoom = window.$('.zoom');
                    if(window.$(window).outerWidth() <= 735){
                        container[0].style.setProperty('height', container.find('img').outerHeight()+'px', 'important');
                        zoom[0].style.setProperty('height', container.find('img').outerHeight()+'px', 'important');
                    }else{
                        container[0].style.setProperty('height', '541px', 'important');
                        zoom[0].style.setProperty('height', '541px', 'important');
                    }
                },
                resizeImageContainer(selector){
                    var container = window.$(selector);
                    var self = this;
                    window.$(window).resize(function(){
                        self.resizeContainer(container);
                    });
                }
            },
            mounted(){
                window.$('#slider').zoomy(this.images,this.options);
                this.resizeImageContainer('.slider .zoom-main');
                this.resizeContainer(window.$('.slider .zoom-main'));
            }
        })
    </script>
@endsection


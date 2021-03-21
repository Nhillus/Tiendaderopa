@extends('overall.layout')

@section('appHeader')
<style>
    .row {

    }
   img {
        object-fit: cover;
    }

    .button-cart{
        display: block;
        padding: 10px 10px
    }

    .price-container{
        display: flex;
        margin: 10px 10px;


    }

    .price-listing {
        align-content: center;
        text-align: center;
    }
    .img {
        margin: 0 15px;
    }

    .tittle {
        text-align: center;
    }
    .btn-lebuya  {
        width: 100%;
        max-width: 100%;
        color:#ffffff;
        background-color: #c01c3c;
        height: 40px;
        line-height: 35px;
        margin-bottom: 10px;
        font-size:14px;
    }
.btn-lebuya:hover {
    background-color:#d0021b;
}
.btn-lebuya:active {
    background-color:#d0021b;

}

.Button__add-to-cart, .Button__add-to-cart--loading, .Button__back-to-top, .Button__highlighted {
    background-color: #c01c3c;
    border: 1px solid #c01c3c;
    color: #fff;
    -webkit-transition: background-color .3s ease-out;
    -moz-transition: background-color .3s ease-out;
    transition: background-color .3s ease-out;
}

.Button__add-to-cart:hover {
    background-color: #fa103f;
    border: 1px solid #c01c3c;
    color: #fff;
}

</style>
@endsection

@section('appBody')
<div class="wrapper">
    <div class="row">
        <div class="small-12 columns nopadding-left">
            <ul class="breadcrumbs">
                <li class="channel">
                    <a href="">Startseite</a>
                </li>
                <li class="category377335">
                    <span>Woolrich</span>
                 </li>
            </ul>
        </div>
    </div>
</div>
    <div class="wrapper" id="AppProducts">
        <section class="listing which-ua timer-hidden ua-type-desktop" data-timer="countdown" data-max-days-for-display-sale-countdown="8">
            <div class="listing_header">
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <div class="listing_picture hide-for-small-only">
                                <img type="image" src="{{ asset( $promotion->image ) }}" alt="Woolrich_Fev21" width="554" height="232">
                        </div>
                                            </div>
                    <div class="small-12 medium-6 columns">
                        <h1 class="listing_title">
                            {{$promotion->title}}
                        </h1>
                        <p class="listing_description hide-for-small-only">
                            {{$promotion->description}}
                        </p>
                        <div class="listing_enddate">
                            <span data-timer-enddate="2021-12-31 23:59:00" data-timer-locale="de"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="small-12 medium-4 large-3 columns">
                    <div>
                        <div class="sidenav-container">
                            <div class="sidenav_header">
                                <div class="sidenav_title">
                                    <span><span data-filters-sizes="count-current">12 </span></span> Artikel
                                </div>
                            </div>
                            <aside class="listing_filters" data-listing="filter_size">
                            </aside>
                        </div>
                    </div>
                </div>
                    <div class="small-12 medium-8 large-9 columns">
                        <div class="listing_sizes-container">
                        </div>
                        <div class="listing-products product-listing clearfix" >
                            <div class="listing_sizes-containers">
                            </div>
                            <div class="PsProducts__wrapper">
                                <div class="ProductsList">
                                    <div class="ProductsList__list">
                                        <div style="height: 1433px; width: 827.5px;">
                                            <div style="height:11200.320598006643px;width:827.5px">
                                                <!---Empieza ---->
                                                    <div class="row">
                                                        {{-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA --}}
                                                        <template v-for="category in data">
                                                            <div v-for="product in category.products" id="product-16391610" class="ProductsList__wrapper" style="position: relative; left: 0px; top: 0px; height: 414.827px; width: 275.833px;">
                                                                <article class="OneProduct">
                                                                    <a class="Link" data-look="default" href="" id="link-16391610">
                                                                        <img class="OneProduct__image" src="https://todoparacafe.com/assets/corals/images/default_product_image.png" alt="">
                                                                    </a>
                                                                    <h4 class="OneProduct__title">
                                                                        <a class="Link" data-look="default" href="#" id="link-16391610">{% product.title %}</a>
                                                                    </h4>
                                                                    <footer class="OneProduct__footer">
                                                                        <span class="OneProduct__crossed-out-price">{% product.real_price %}</span>
                                                                        <span class="OneProduct__price">{% product.offer_price %}</span>
                                                                        <div class="OneProduct__add-to-cart-wrapper">
                                                                            <button class="Button__add-to-cart--icon" data-look="block disc" type="button"></button>
                                                                            <div class="OneProduct__quantity-selector">
                                                                                <p class="OneProduct__quantity-selector-label"></p>
                                                                                <!--<select autocomplete="off" class="Select" id="one-product-select-type-16391610" name="one-product-select-type-16391610">
                                                                                    <option class="Select__option" value="268109">41 EUR</option>
                                                                                    <option class="Select__option" value="268110">42 EUR</option>
                                                                                    <option class="Select__option" value="268111">43 EUR</option>
                                                                                    <option class="Select__option" value="268112">44 EUR</option>
                                                                                    <option class="Select__option" value="268113">45 EUR</option>
                                                                                    <option class="Select__option" value="268114">46 EUR</option>
                                                                                </select> -->
                                                                                <!--<select autocomplete="off" class="Select" id="one-product-select-quantity-16391610" name="one-product-select-quantity-16391610">
                                                                                    <option class="Select__option" value="1">1</option>
                                                                                    <option class="Select__option" value="2">2</option>
                                                                                    <option class="Select__option" value="3">3</option>
                                                                                    <option class="Select__option" value="4">4</option>
                                                                                    <option class="Select__option" value="5">5</option>
                                                                                    <option class="Select__option" value="6">6</option>
                                                                                    <option class="Select__option" value="7">7</option>
                                                                                    <option class="Select__option" value="8">8</option>
                                                                                    <option class="Select__option" value="9">9</option>
                                                                                    <option class="Select__option" value="10">10</option>
                                                                                    <option class="Select__option" value="11">11</option>
                                                                                    <option class="Select__option" value="12">12</option>
                                                                                </select> -->
                                                                                <form action="{{route('cart.add')}}" method="POST" >
                                                                                    <button  class="Button__add-to-cart" data-look="default" type="submit">
                                                                                        <span class="Button__label" >In den Warenkorb
                                                                                            @csrf
                                                                                            <input type="hidden" name="Product_id" :value="product.id">
                                                                                        </span>
                                                                                    </button>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </footer>
                                                                </article>
                                                            </div>
                                                        </template>
                                                        {{-- AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA --}}
                                                    </div>
                                                <!---Termina ---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('appFooter')
    <script>
        new Vue({
            el: '#AppProducts',
            delimiters: ['{%','%}'],
            data: {
                data: []
            },
            methods: {
                /*
                * Obtener Categorias con sus productos
                */
                getData() {
                    axios
                    .get(api_url + 'products/list/{{ $promotion->id }}')
                    .then(resp => {
                        this.data = resp.data;
                        console.log(this.data)
                    })
                    .catch(err => {
                        console.log(err);
                    })
                }
            },
            mounted(){
                // Traer datos
                this.getData();
            }
        })
    </script>
@endsection

@extends('overall.layout')



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
    <div class="wrapper">
        <section class="listing which-ua timer-hidden ua-type-desktop" data-timer="countdown" data-max-days-for-display-sale-countdown="8">
            <div class="listing_header">
                <div class="row">
                    <div class="small-12 medium-6 columns">
                        <div class="listing_picture hide-for-small-only">
                                <img type="image" src="{{'$Url'}}l" alt="Woolrich_Fev21" width="554" height="232">
                        </div>
                                            </div>
                    <div class="small-12 medium-6 columns">
                        <h1 class="listing_title">
                            Woolrich</h1>
                        <p class="listing_description hide-for-small-only">
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
                                    <span><span data-filters-sizes="count-current">Saldran la cantidad de articulos</span></span> Artikel            
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
                        <div class="listing-products">
                            <div class="product-page page-1">
                                <article class="sale  simple">
                                    <div class="sale-media media-303x320">
                                        <div class="slider-wrapper">
                                            <ul  class="slider">
                                                @foreach ($Products as $Product)
                                                <li >
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <hr>
                                                            <article>
                                                                <h1>{{$Product->title}}</h1>
                                                                    <br>
                                                                <br>
                                                            </article>
                                                        </div>
                                                    <hr>
                                                    <form action="{{route('api.securepay')}}"  method="post">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <input type="hidden" name="Objecto" value="{{$Product->id   }}"> 
                                                        <button>Pagar</button>
                                                    </form> 
                                                    <form action="{{route('web.payPaypal')}}" method="get" target="_top">
                                                        <input type="hidden" name="cmd" value="_s-xclick">
                                                        <input type="hidden" name="hosted_button_id" value="3CBNKNSR89VH6">
                                                        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                        </form>
                                                        
                                                @endforeach
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                     </div> 
                </div>
            </div>
        </section>
    </div>
@endsection

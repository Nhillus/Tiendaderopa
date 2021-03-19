@extends('overall.layout')


<style>
.material-icons-button {
    background-color:#ffffff;
}

.material-icons-button:hover {
    color: rgb(146, 0, 39);
    background-color:#ffffff;
}
.btn-lebuya
{
    width: 100%;
    max-width: 100%;
    color:#ffffff;
    background-color: #c01c3c;
    height: 40px;
    line-height: 35px;
    margin-bottom: 10px;
    font-size:14px;
}

.button-set  {
    float:right;
    width:480px;
    margin-right:15px;
}

.container-validate-button {
    width:280px;
}

#validate-discount {
    height:45px;

}

#derecha {
    left: 200px; 
}
/*---------------------------------Inicio Estilos carrito 2---------------------------------------------*/
.checkout-container .panel {
    background-color: transparent;
    margin-bottom: 0;
    margin-top: 20px;
}
.panel {
    border-style: solid;
    border-width: 1px;
    border-color: #d8d8d8;
    margin-bottom: 1.25rem;
    padding: 1.25rem;
    background: #f2f2f2;
    color: #333;
}
.checkout-container .checkout_title {
    font-weight: bold;
    font-size: 2rem;
    color: #2f2f2f;
}
.panel>:first-child {
    margin-top: 0;
}
.panel>:last-child {
    margin-bottom: 0;
}
input {
    line-height: normal;
}
.checkout-container .my-payment-choice-title, .checkout-container .my-other-payment-toggle {
    display: inline-block;
    margin-bottom: 1rem;
}
.checkout-container .my-other-payment-wrapper.active {
    max-height: 50rem;
}
.checkout-container .my-other-payment-wrapper {
    overflow: hidden;
    max-height: 0;
    -webkit-transition: .3s ease all;
    -moz-transition: .3s ease all;
    -o-transition: .3s ease all;
    -ms-transition: .3s ease all;
    transition: .3s ease all;
}
    ul#horizontal-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        text-decoration: none;
        list-style:none;
	}
    ul#horizontal-list li{
        padding: 0px 5px;
    }
 
    ul#horizontal-list li a {
        position: relative;
        display: inline-block;
        
    }

    ul#horizontal-list li.active a::after{
      background-color: transparent;
    }

    ul#horizontal-list li a::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 252, 252, 0.7);
    }

	ul#horizontal-list li a img {
        
        padding: 2px 2px;

    }
    .checkout-container .button-set {
        margin-top: 30px;
    }
    .checkout-container .button-set .button {
    margin: 0;
    }
    .button-expanded {
        display: block;
        width: 100%;
        max-width: 100%;
    }
    .button-accent {
        color: white;
        background-color: #C01C3C;
    }
    .button {
        font-size: 1.8rem;
        text-decoration: none;
        outline: none;
        height: auto;
        top: auto;
        width: 100%;
        font-family: 'Open Sans',arial,sans-serif;
        font-weight: 400;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        font-weight: normal;
        height: 50px;
        line-height: 50px;
        padding: 0 20px;
    }
    .select-container label, .textarea-container label, .input-container label {
    line-height: 40px;
    }
   
    label {
        font-size: 1.2rem;
    }
    label {
        color: #4d4d4d;
        cursor: pointer;
        display: block;
        font-size: 0.875rem;
        font-weight: normal;
        line-height: 1.5;
        margin-bottom: 0;
    }
    .select-container input, .textarea-container input, .input-container input {
    margin-bottom: 0;
    }
    input[type="checkbox"] {
        position: relative;
        margin-right: 5px;
        cursor: pointer;
        -webkit-appearance: none;
        width: 20px;
        height: 20px;
        display: inline-block;
        vertical-align: middle;
        outline: none;
        margin-bottom: 0;
    }
    input[type="file"], input[type="checkbox"], input[type="radio"], select {
    margin: 0 0 1rem 0;
    }
    input[type=checkbox], input[type=radio] {
        box-sizing: border-box;
        padding: 0;
    }
    input {
        line-height: normal;
    }
    button, input, optgroup, select, textarea {
        color: inherit;
        font: inherit;
        margin: 0;
    }
    .checkout-container .payment-form .row label i {
        display: inline-block;
        height: 15px;
        width: 15px;
        font-weight: bold;
        margin-left: 5px;
        color: white;
        text-align: center;
        font-style: italic;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
        line-height: 1.3;
        -webkit-transition: .6s ease all;
        -moz-transition: .6s ease all;
        -o-transition: .6s ease all;
        -ms-transition: .6s ease all;
        transition: .6s ease all;
        }
        .columns {
    padding-left: 10px;
    padding-right: 10px;
    }
    @media only screen and (min-width: 64.0625em) 
    {
        .column, .columns {
            position: relative;
            padding-left: 0.9375rem;
            padding-right: 0.9375rem;
            float: left;
        }
    }
    @media only screen and (min-width: 40.0625em)
    {
        .medium-9 {
            width: 75%;
        }
    }
    @media only screen and (min-width: 40.0625em){
        .column, .columns {
            position: relative;
            padding-left: 0.9375rem;
            padding-right: 0.9375rem;
            float: left;
        }
    }
    .small-12 {
        width: 100%;

    }
    #collum-agreement {
        margin-left: 5px;

    }
    .column, .columns {
        position: relative;
        padding-left: 0.9375rem;
        padding-right: 0.9375rem;
        float: left;
    }
    .column, .columns {
        padding-left: 0.9375rem;
        padding-right: 0.9375rem;
        width: 100%;
        float: left;
    }
    .my-checkbox-container {
        margin-bottom: 10px;
        line-height: 20px;
        height: 20px;
        display: block;
    }
    .checkbox-tarjeta {
        display: block;
        height: 20px
    }


    .columns {
    padding-left: 10px;
    padding-right: 10px;
    }

    @media only screen and (min-width: 64.0625em)
    {
        .column, .columns {
            position: relative;
            padding-left: 0.9375rem;
            padding-right: 0.9375rem;
            float: left;
        }
    }
    @media only screen and (min-width: 40.0625em)
    {
        .column, .columns {
            position: relative;
            padding-left: 0.9375rem;
            padding-right: 0.9375rem;
            float: left;
        }
    }
  

    .checkout-container .payment-form .row p {
    text-align: center;
    font-size: 1.8rem;
    margin: 10px 30px;
    }

    input[type="checkbox"] {
    position: relative;
    margin-right: 5px;
    cursor: pointer;
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    display: inline-block;
    vertical-align: middle;
    outline: none;
    margin-bottom: 0;
    }
    input[type="file"], input[type="checkbox"], input[type="radio"], select {
        margin: 0 0 1rem 0;
    }

    input[type=checkbox], input[type=radio] {
        box-sizing: border-box;
        padding: 0;
    }
    input {
        line-height: normal;
    }
    button, input, optgroup, select, textarea {
        color: inherit;
        font: inherit;
        margin: 0;
    }
    input[type="checkbox"]:before, input[type="checkbox"]:after {
        border-radius: 2px;
        position: absolute;
        top: 50%;
    }
    input[type="checkbox"]:before, input[type="checkbox"]:after {
    border-radius: 2px;
    position: absolute;
    top: 50%;
    }
    input[type="checkbox"]:before {
    content: '';
    background-color: white;
    left: 0;
    border: 1px solid #979797;
    height: 20px;
    width: 20px;
    margin-top: -10px;
    }
    input[type="checkbox"][data-invalid]:before {
    border-color: red;
    }
    input[type=checkbox], input[type=radio] {
    box-sizing: border-box;
    padding: 0;
    }
    input[type="file"], input[type="checkbox"], input[type="radio"], select {
    margin: 0 0 1rem 0;
    }
    input[type="checkbox"] {
    position: relative;
    margin-right: 5px;
    cursor: pointer;
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    display: inline-block;
    vertical-align: middle;
    outline: none;
    margin-bottom: 0;
    }
    .error input[type="checkbox"], .error input[type="radio"] {
    margin-bottom: 1rem;
    }
    input[type="checkbox"]:checked::after {
    font-family: 'mystore';
    content: "X";
    display: block;
    left: 0;
    color: #C01C3C;
    font-size: 20px;
    margin-top: -15px;
    margin-left: 3px;   
    }

    input[type="checkbox"]:before, input[type="checkbox"]:after {
        border-radius: 2px;
        position: absolute;
        top: 50%;
    }
    input[type="checkbox"]:before, input[type="checkbox"]:after {
    border-radius: 2px;
    position: absolute;
    top: 50%;
    }
    

/*----------------------------------------Termina-------------------------------------------------------*/
</style>
@section('appBody')
    <div class="checkout-container wrapper">
        <div class="checkout">
            <div class="steps">
                <div class="small-centered">
                    <ol class="steps-wrapper">
                        <li >
                            <span><a href="{{route('cart')}}">
                                <font style="vertical-align: inherit;">
                                    <font href="{{route('cart')}}" style="vertical-align: inherit;">Carrito y entrega</font>
                                </font>
                            </a></span>
                        </li>

                        <li class="current" >
                            <span>
                                <font  style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resumen y pago</font></font>
                            </span>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="cart-content">
                <div class="cart-column">
                    <div id="my-cart-selector" class="my-cart my-cart-selector clearfix">
                        <h2 class="checkout_title a-center">Carrito</h2>
                        <p class="checkout_expiration-time a-center"> Caduca en 1 minuto </p>
                        <div class="panel">  
                            <div class="cart-content__sale_header row">
                                <p class="sale_title columns medium-4 text-left">
                                    Mi orden
                                </p>
                            </div>
                            

                                <p class="sale_conditions columns text-left"></p>
                            @if ($Items)  
                                        
                            @foreach ($Items as $item) 
                                <p id="derecha"class="item-shipping columns medium-8 medium-text-right large-text-right">
                                    Envío estimado: {{($item->attributes[1])}} días
                                </p>

                            <div class="cart-content__items row">
                                <div class="row item nomarge">
                                    <div class="cart-content__item cart-content__item--46291847">
                                        <div class="columns small-3 medium-2">
                                            <img src="{{($item->attributes->first())}}" class="img-orders" width="500" height="300" alt="">
                                        </div>

                                        <div class="columns small-3 medium-5">
                                            <div class="product_name">
                                                <span>
                                                    <strong>{{($item->name)}}</strong>
                                                </span>
                                                <strong>-</strong>
                                            </div>
                                        </div>

                                        <div id="derecha" class="columns medium-2 hide-for-small-only">
                                            <div class="row">
                                                <select class="dd-select column medium-6 duplicate-select">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <div class="column medium-3">
                                                    <form action="{{route('cart.removeitem')}}" method="POST">  
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$item->id}}">
                                                        <button type="submit" class="material-icons-button" background-color:whitw>x</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="derecha" class="columns medium-3 hide-for-small-only price-box">
                                            <table border="0" cellpadding="0" cellspacing="0" class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Precio: </span>
                                                        </td>
                                                        <td class="price-box-accent">
                                                            <span class="price">
                                                                {{($item->getPriceWithConditions())}} CHF
                                                            </span>

                                                        </td>
                                                    </tr>

                                                    @if ($item->price != $item->getPriceWithConditions())
                                                        
                                                    <tr>
                                                        <td>
                                                            <span>En vez de: </span>
                                                        </td>
                                                        <td class="price-box-accent">
                                                            <span class="price">
                                                                {{($item->price)}} CHF
                                                            </span>

                                                        </td>
                                                    </tr>

                                                    @endif


                                                    <tr>
                                                        <td>
                                                            <span>Precio Total: </span>
                                                        </td>
                                                        <td class="price-box-accent">
                                                            <strong>
                                                                <span class="price">
                                                                    {{($item->getPriceWithConditions())}} CHF
                                                                </span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                        @endif
                            <div class="columns small-12 medium-6 nopadding-left">
                                <div class="panel">
                                    <p class="checkout_title">Entrega</p>
                                    <p class="checkout_subtitle">Elija una dirección de la lista a continuación</p>
                                    <label>Mis direcciones</label>
                                    <select class="address dd-select"></select>
                                </div>
                            </div>
                        
                            <div class="columns small-12 medium-6 nopadding-right">
                                <div  class="panel my-cart clearfix">
                                    <ul id="list-totals" class="list-totals">
                                        <li class="total row">
                                            <div class="small-8 columns">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Valor de los bienes</font>
                                                    </font>
                                                </p>
                                            </div>
                                            <div class="small-4 columns a-right">
                                                <p class="a-right total-price">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;color:red">{{($Subtotal)}} CHF</font>
                                                    </font></p>
                                            </div>
                                        </li>

                                        <li class="total row">
                                            <div class="small-8 columns">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Gastos de envío</font>
                                                    </font>
                                                </p>
                                            </div>
                                        <div class="small-4 columns a-right">
                                            @if ($Items)
                                            <p class="a-right"><font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit; ">{{($item->attributes[2])}} CHF</font>
                                            </font></p>
                                            @endif
                                        </div>
                                        </li>
        
                                        <li class="grand-total total row">
                                            <div class="small-8 columns">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit; color:red">Importe total </font>
                                                    </font>
                                                    <span>
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit; color:red">(IVA incluido)</font>
                                                        </font>
                                                    </span>
                                                </p>
                                            </div>
                                        <div class="small-4 columns">
                                            @if ($Items)
                                            <p class="my-price a-right">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit; color:red">
                                                        {{($Subtotal +$item->attributes[2] )}}     </font>
                                                    </font></p>
                                            @endif
                                        </div>

                                        <input type="hidden" name="is_quote_has_error" value="">

                                        </li>

                                        <li class="total-spared total nopadding row">
                                            <div class="small-8 columns">
                                                <p>
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Ahorras</font>
                                                    </font>
                                                </p>
                                            </div>
                                        <div class="small-4 columns a-right">
                                            <p>
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                    CHF        
                                                    </font>
                                                </font>
                                            </p>
                                        </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel my-payment clearfix" id="paymentForm">
                                    <p class="checkout_title">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">pagar</font>
                                        </font>
                                    </p>

                                    <form class="my-payment-form" method="get" action="{{route('web.payPaypal')}}" data-abide="" novalidate="novalidate">
                                        <input type="hidden" id="pmethod" name="payment[method]" value="datatranscw_visa" required="">
                                            <input type="hidden" id="alias_select" name="alias_select" value="">
                                                
                                                <a class="my-other-payment-toggle hidden" href="#1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usa un método de pago diferente</font></font></a>
                                        
                                        <div class="my-other-payment-wrapper clearfix active">
                                            <ul  id="horizontal-list">
                                                <li   id="#card-number">
                                                    <a href="#1" data-href="#payment-form-cb-2" data-card="datatranscw_mastercard" data-card-is-required="1" data-toggle="collapse" data-target="#payWithBank" class="is-cb my-payment-method active" id="card-number-2-mastercard">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_mastercard.png" alt="Tarjeta MasterCard">
                                                    </a>
                                                    <a href="#1" data-href="#payment-form-cb-2" data-card="datatranscw_visa" data-card-is-required="1" data-toggle="collapse" data-target="#payWithBank" class="is-cb my-payment-method active" id="card-number-2-visa">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_visa.png" alt="Visa">
                                                    </a>
                                                    <a href="#1" data-href="#payment-form-cb-2" data-card="datatranscw_americanexpress" data-card-is-required="1" data-toggle="collapse" data-target="#payWithBank" class="is-cb my-payment-method active" id="card-number-2-amex">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_americanexpress.png" alt="American Express">
                                                    </a>
                                                </li>
                                                <li  id="pf2">
                                                    <a href="#1" id="payment-form-pf2" data-href="#payment-form-pf2" data-card="datatranscw_postfinancecard" class="my-payment-method">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_postfinancecard.png" alt="Tarjeta postal financiera">
                                                    </a>
                                                    <a href="#1" id="payment-form-pf-22" data-href="#payment-form-pf-22" data-card="datatranscw_postfinanceefinance" class="my-payment-method">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_postfinanceefinance.png" alt="Post Finance Ecard">
                                                    </a>
                                                </li>
                                                <li id="pp2">
                                                    <a href="#1" id="my-payment-method--paypal" data-href="#payment-form-pp2" data-card="datatranscw_paypal" data-toggle="collapse" data-target="#payWithPaypal" aria-expanded="false" aria-controls="payWithPaypal" class="my-payment-method my-payment-method--paypal">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_paypal.png" alt="Paypal">
                                                    </a>
                                                </li>
                                                <li id="tw2">
                                                    <a href="#1" id="my-payment-method--twint" data-href="#payment-form-tw2" data-card="datatranscw_twint" class="my-payment-method my-payment-method--twint">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_twint.png" alt="Twint">
                                                    </a>
                                                </li>
                                                <li id="cb2">
                                                    <a href="#1" data-href="#payment-form-cb-2" data-card="datatranscw_diners" data-card-is-required="1" class="is-cb my-payment-method active" id="card-number-2-diners_club_international">
                                                        <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/payment/datatranscw_diners.png" alt="Diners Club">
                                                    </a>
                                                </li>
                                        </ul>

                                        </p>
                                        <div id="accordion">
                                            <label id="payWithBank" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                              
                                                    <div class="payment-form active" id="payment-form-cb-2">
                                                        <div class="input-container form-inline not-empty">
                                                            <div class="row">
                                                                <div class="small-12 medium-4 columns">
                                                                    <label for="card-number-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Número de tarjeta</font></font></label>
                                                                </div>
                                                                <div class="small-12 medium-8 columns a-left">
                                                                    <input type="text" name="card-number-2" id="card-number-2" class="required-card" autocomplete="off" required="">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="select-container form-inline not-empty">
                                                            <div class="row">
                                                                <div class="small-12 medium-5 columns">
                                                                    <label for="card-number-2-expire"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha de expiración:</font></font></label>
                                                                </div>

                                                                <div class="small-12 medium-4 columns error">
                                                                    <select name="card-number-2-expire" id="card-number-2-expire" class="dd-select required-card" data-placeholder="Mois" required="">
                                                                        <option value=""></option>
                                                                        <option value="01"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">01</font></font></option>
                                                                        <option value="02"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">02</font></font></option>
                                                                        <option value="03"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">03</font></font></option>
                                                                        <option value="04"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">04</font></font></option>
                                                                        <option value="05"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">05</font></font></option>
                                                                        <option value="06"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">06</font></font></option>
                                                                        <option value="07"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">07</font></font></option>
                                                                        <option value="08"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">08</font></font></option>
                                                                        <option value="09"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">09</font></font></option>
                                                                        <option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
                                                                        <option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></option>
                                                                        <option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12º</font></font></option>
                                                                                                    </select>
                                                                </div>

                                                                <div class="small-6 medium-3 columns end">
                                                                    <select name="card-number-2-expire-year" id="card-number-2-expire-year" class="dd-select required-card" data-placeholder="Année" required="">
                                                                        <option value=""></option>
                                                                        <option value="21"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2021</font></font></option>
                                                                        <option value="22"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2022</font></font></option>
                                                                        <option value="23"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2023</font></font></option>
                                                                        <option value="24"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2024</font></font></option>
                                                                        <option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2025</font></font></option>
                                                                        <option value="26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2026</font></font></option>
                                                                        <option value="27"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2027</font></font></option>
                                                                        <option value="28"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2028</font></font></option>
                                                                        <option value="29"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2029</font></font></option>
                                                                        <option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2030</font></font></option>
                                                                        <option value="31"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2031</font></font></option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="select-container form-inline not-empty">
                                                            <div class="row">
                                                                <div class="small-12 medium-4 columns">
                                                                    <label for="card-number-2-cds"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comprobar dígito</font></font></label>
                                                                </div>

                                                                <div class="small-12 medium-3 columns">
                                                                    <input type="text" name="card-number-2-cds" id="card-number-2-cds" class="required-card" autocomplete="off" required="">
                                                                </div>

                                                                <div class="small-12 medium-5 columns end hide-for-small-only">
                                                                    <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/cds.png" alt="">
                                                                </div>
                                                            </div>
                                                        </div>      
                                                    </div>
                                                </div>
                                            </label>
                                            <div id="payWithPaypal" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                           
                                                    <div class="row">
                                                        <div class="small-12 columns">
                                                            <p>Im nächsten Schritt werden Sie zu Paypal weitergeleitet.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="payWithBank" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                                                <div >
                                                    <label for="card-number-2-save" class="my-checkbox-container" >
                                                        <input type="checkbox" id="card-number-2-save" name="alias_active" class="checkbox-tarjeta">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Guardar esta tarjeta de pago</font>
                                                        </font>
                                                        <i data-tooltip="" data-selector="tooltip-kmdxcivh0" aria-describedby="tooltip-kmdxcivh0" title="">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">I</font>
                                                            </font>
                                                        </i>
                                                    </label>
                                                </div>
                                        </div>
                                        </div>

                                        
                                    </div>
                                        

                                        <div class="row">
                                            <div id="collum-agreement" class="small-12 medium-8 columns">
                                                <label for="cgv2" class="my-checkbox-container">
                                                    <input type="checkbox" id="cgv2" name="agreement" value="1" required="">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">
                                                            Acepto los términos del servicio. 
                                                        </font>
                                                        <font style="vertical-align: inherit;"></font>
                                                    </font>
                                                        (<a href="#1" data-reveal-id="terms-and-conditions-modal">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">Anuncios</font>
                                                                </font>
                                                            </a>
                                                        <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;"> )</font>
                                                    </font>
                                                </label>
                                            <div id="terms-and-conditions-modal" class="reveal-modal" data-reveal="" style="overflow-y: auto; max-height: 640px;">
                                        </div>    
                                            
                                            </div>
                                            <div class="small-12 medium-3 columns a-right">
                                                <img src="https://static.deindeal.ch/skin/frontend/mystore/outlet_md/images/verified-by-geotrust.png" alt="Verified by GeoTrust">
                                            </div>
                                        </div>
                                            @csrf
                                            @if ($Items)               
                                                @foreach($Items as $item) 
                                                    <input type="hidden"name="cartItems[]" value="{{ $item->id }}">
                                                @endforeach
                                            @endif  
                                            <input type="hidden" name="Subtotal" value="{{$Subtotal}}">
                                            <div class="button-set">
                                                <div class="validate-payment-container">
                                                    <button type="submit" class="button button-accent button-expanded">Bezahlung bestätigen</button>                                        </div>
                                                </div>
                                            </div>
                                    </form>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('appFooter')
    <script>
        var app = new Vue({
            el: '#address_area',
            delimiters: ['{%', '%}'],
            data: {
                billing_address: false
            },
            methods: {
                changeBillingAddr(){
                    this.billing_address = !this.billing_address;
                }
            },
            mounted() {}
        });
    </script>
    <script>
        $('#horizontal-list li').click(function(){
          $('#horizontal-list li').removeClass('active'); 
          $(this).addClass('active');
        })
    </script>
    
@endsection

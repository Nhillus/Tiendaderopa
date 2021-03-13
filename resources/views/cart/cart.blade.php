@extends('overall.layout')


<style>
.material-icons-button {
    background-color: aliceblue;
}

.material-icons-button:hover {
    background-color: rgb(39, 5, 14);
}





</style>
@section('appBody')
    <div class="checkout-container wrapper">
        <div class="checkout">
            <div class="steps">
                <div class="small-centered">
                    <ol class="steps-wrapper">
                        <li class="current">
                            <span>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Carrito y entrega</font></font>
                            </span>
                        </li>

                        <li>
                            <span>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Resumen y pago</font></font>
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

                                <p class="sale_conditions columns text-left"></p>
                            @if ($Items)                                
                            @foreach ($Items as $item) 
                                <p class="item-shipping columns medium-8 medium-text-right large-text-right">
                                    Envío estimado: {{($item->attributes[1])}} días
                                </p>
                            </div>

                            <div class="cart-content__items row">
                                <div class="row item nomarge">
                                    <div class="cart-content__item cart-content__item--46291847">
                                        <div class="columns small-3 medium-2">
                                            <img src="{{($item->attributes->first())}}" class="img-orders" width="500" height="300" alt="">
                                        </div>

                                        <div class="columns small-9 medium-5">
                                            <div class="product_name">
                                                <span>
                                                    <strong>{{($item->name)}}</strong>
                                                    
                                                </span>
                                                <strong>-</strong>
                                            </div>
                                        </div>

                                        <div class="columns medium-2 hide-for-small-only">
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

                                        <div class="columns medium-3 hide-for-small-only price-box">
                                            <table border="0" cellpadding="0" cellspacing="0" class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <span>Precio: </span>
                                                        </td>
                                                        <td class="price-box-accent">
                                                            <span class="price">
                                                                {{($item->price)}} CHF
                                                            </span>

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <span>Precio Total: </span>
                                                        </td>
                                                        <td class="price-box-accent">
                                                            <strong>
                                                                <span class="price">
                                                                    {{($item->price)}} CHF
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
                        </div>
                        @endforeach
                        @endif
                        <div class="row panel address-shipping-billing " id="address_area">
                            <div class="my-panel my-delivery small-12 medium-6 columns shipping customer-has-addresses">
                                <p class="checkout_title">Entrega</p>
                                <p class="checkout_subtitle">Elija una dirección de la lista a continuación</p>
                                <label>Mis direcciones</label>
                                <select class="address dd-select"></select>

                                <form class="address">
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="small-6 columns">
                                                <p class="checkout_subtitle">Mi dirección</p>
                                            </div>
                                            <div class="small-6 columns a-right">
                                                <label>* Campos requeridos</label>
                                            </div>
                                            <div class="small-12 columns">
                                                <p class="note">
                                                    Necesitamos la verificación de su dirección. Confirme o actualice la dirección a continuación
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline not-empty">
                                        <div class="row input-autocomplete">
                                            <div class="small-12 medium-12 columns">
                                                <input type="text" class="pac-target-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Calle
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Ciudad
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Código postal
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    País
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <select></select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-section">
                                        <div class="row">
                                            <div class="small-6 columns">
                                                <p class="checkout_subtitle"></p>
                                            </div>
                                            <div class="small-6 columns a-right">
                                                <label>* Campos requeridos</label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Apellido
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Nombre
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Empresa
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Dirección
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row button-set">
                                        <div class="small-6 columns">
                                            <a href="#" class="button button-dark button-md cancel-address">Cancelar</a>
                                        </div>
                                        <div class="small-6 a-right columns button-set-list">
                                            <a href="#" class="button button-accent button-md validate-address">
                                                Confirmar
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>


                            <div v-if="billing_address" class="my-panel my-delivery small-12 medium-6 columns shipping customer-has-addresses">
                                <p class="checkout_title">Entrega</p>
                                <p class="checkout_subtitle">Elija una dirección de la lista a continuación</p>
                                <label>Mis direcciones</label>
                                <select class="address dd-select"></select>

                                <form class="address">
                                    <div class="form-section">
                                        <div class="row">
                                            <div class="small-6 columns">
                                                <p class="checkout_subtitle">Mi dirección</p>
                                            </div>
                                            <div class="small-6 columns a-right">
                                                <label>* Campos requeridos</label>
                                            </div>
                                            <div class="small-12 columns">
                                                <p class="note">
                                                    Necesitamos la verificación de su dirección. Confirme o actualice la dirección a continuación
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline not-empty">
                                        <div class="row input-autocomplete">
                                            <div class="small-12 medium-12 columns">
                                                <input type="text" class="pac-target-input">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Calle
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Ciudad
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Código postal
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    País
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <select></select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-section">
                                        <div class="row">
                                            <div class="small-6 columns">
                                                <p class="checkout_subtitle"></p>
                                            </div>
                                            <div class="small-6 columns a-right">
                                                <label>* Campos requeridos</label>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Apellido
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Nombre
                                                    <span>*</span>
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Empresa
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="input-container form-inline form-address not-empty">
                                        <div class="row">
                                            <div class="small-12 medium-3 columns">
                                                <label>
                                                    Dirección
                                                </label>
                                            </div>

                                            <div class="small-12 medium-9 columns">
                                                <input type="text" required="" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row button-set">
                                        <div class="small-6 columns">
                                            <a href="#" class="button button-dark button-md cancel-address">Cancelar</a>
                                        </div>
                                        <div class="small-6 a-right columns button-set-list">
                                            <a href="#" class="button button-accent button-md validate-address">
                                                Confirmar
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
<!--------------------------------------------------------------------------------------------Inicia pago--------------------------------------------------->
                            <div class="row panel">
                                <div class="columns small-12 medium-7">
                <div class="my-discount" data-discount-block="">
                    <p class="checkout_title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Descuento</font></font></p>
                    <form action="https://www.deindeal.ch/de/checkout/discount/ajaxDiscountPost/" method="post" data-abide="ajax" class="discount" novalidate="novalidate">
                        <div class="my-discount-form" data-discount-form="">
                <input type="hidden" name="validate-order" class="validate_order" value="0">
                <div class="my-discount-code">
                    <div class="row">
                        <div class="columns small-12 medium-6">
                            <input data-url="https://www.deindeal.ch/de/checkout/discount/ajaxDiscountPost/" type="text" id="discount-code" name="discount-code" placeholder="Ingrese su código de promoción aquí" value="">
                            <span class="remove-discount hidden"></span>
                        </div>
                    </div>
                </div>
                </div>
                        <div class="container-validate-button">
                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input id="validate-discount" class="button button-accent button-xs" type="submit" value="Redimir"></font></font>
                        </div>
                    </form>
                </div>
                                    
                                    <div id="gift-advertisement-container" class="gift-advertisement-container">
                                                            </div>
                                </div>
                
                                <div class="columns small-12 medium-5">
                                    <div class=" total-order">
                                        <div id="my-totals" class="my-cart my-totals clearfix">
                                            <ul id="list-totals" class="list-totals">
                
                <li class="total row">
                    <div class="small-8 columns">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Valor de los bienes</font></font></p>
                    </div>
                    <div class="small-4 columns a-right">
                        <p class="a-right total-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{($Subtotal)}} CHF</font></font></p>
                    </div>
                </li>
                
                <li class="total row">
                            <div class="small-8 columns">
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gastos de envío</font></font></p>
                        </div>
                        <div class="small-4 columns a-right">
                            @if ($Items)
                            <p class="a-right"><font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{($item->attributes[2])}} CHF</font>
                            </font></p>
                            @endif
                        </div>
                    </li>
                                
                <li class="grand-total total row">
                    <div class="small-8 columns">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Importe total </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">(IVA incluido)</font></font></span></p>
                    </div>
                    <div class="small-4 columns">
                        @if ($Items)
                        <p class="my-price a-right"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            {{($Subtotal +$item->attributes[2] )}}     </font></font></p>
                        @endif
                    </div>
                
                        <input type="hidden" name="is_quote_has_error" value="">
                </li>
                
                <li class="total-spared total nopadding row">
                    <div class="small-8 columns">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ahorras</font></font></p>
                    </div>
                    <div class="small-4 columns a-right">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                             CHF        </font></font></p>
                    </div>
                </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="small-12 medium-5 columns nopadding-right">
        <form action="{{route('web.payPaypal')}}" method="GET" target="_top">
            @csrf
            @if ($Items)               
            @foreach($Items as $item) 
                <input type="hidden"name="cartItems[]" value="{{ $item->id }}">
            @endforeach
            @endif

            <input type="hidden" name="Subtotal" value="{{$Subtotal}}">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
        </form>
        <div class="button-set payment-link a-right">
            <div class="validate-step1">
            <a href="#" class="button button-accent button-expanded"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                    confirmar pedido        
                </font></font>
            </a>
                </div>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------Termina pago-------------------------------------------------->
                            <div class="button-set small-12 columns my-panel my-billing">
                                <form class="same-billing">
                                    <div class="row">
                                        <div class="small-12 columns">
                                            <label class="my-checkbox-container" @click="changeBillingAddr()">
                                                <span class="material-icons">
                                                    {% !billing_address ? 'check_box_outline_blank' : 'check_box' %}
                                                </span>
                                                {{-- <input type="checkbox"> --}}
                                                <span>La dirección de facturación y la dirección de entrega coinciden</span>
                                            </label>
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
@endsection

@extends('overall.layout')

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

                                <p class="item-shipping columns medium-8 medium-text-right large-text-right">
                                    Envío estimado: esperado en 3 a 6 días
                                </p>
                            </div>

                            <div class="cart-content__items row">
                                <div class="row item nomarge">
                                    <div class="cart-content__item cart-content__item--46291847">
                                        <div class="columns small-3 medium-2">
                                            <img src="https://cosmos2.deindeal.ch/api/img?p=products/2021/2/35CED947-95A2-4E17-816D-BDBAF5C38C33/8905284_1&st=11&v=1612778660" alt="">
                                        </div>

                                        <div class="columns small-9 medium-5">
                                            <div class="product_name">
                                                <span>
                                                    <strong>T-Shirt Seile -</strong>
                                                    Schwarz
                                                </span>
                                                <strong>-</strong>
                                                L
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
                                                    <a href="#" class="delete-btn button button-ghost button-icon my-icon-close button-delete">
                                                        <span class="material-icons">clear</span>
                                                    </a>
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
                                                                60.00 CHF
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
                                                                    60.00 CHF
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

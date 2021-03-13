
<!DOCTYPE html>
<html lang="en">
<style>
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

body {
    background: #fff;
    font-family: Open Sans,arial,sans-serif;
    font-size: 1.4rem;
    font-weight: 400;
    line-height: 1.5;
    margin: 0;
    padding: 0;
}   

.MyAccount {
    padding-bottom: 20px;
    padding-top: 20px;
}
.Deals, .ErrorPage, .Food, .Footer, .MyAccount, .Product, .PsProducts, .Sales, .Search {
    background: #fff;
    overflow-x: hidden;
    position: relative;
    transition: -webkit-transform .5s ease;
    -moz-transition: transform .5s ease,-moz-transform .5s ease;
    transition: transform .5s ease;
    transition: transform .5s ease,-webkit-transform .5s ease,-moz-transform .5s ease;
    z-index: 0;
}

blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}

.MyAccount__breadcrumbs {
    margin-bottom: 20px;
    padding-left: 10px;
}
.Contact, .Deals__breadcrumb, .Deals__cross-sell, .Deals__infos, .FavoriteCityPrompt, .Food .FreeShippingInfo, .Food__cities, .Food__cms-download-apps, .Food__cms-free-delivery, .Food__cms-restaurants, .FoodFilters__wrapper, .FoodTracking, .Footer__wrapper, .MyAccount__breadcrumbs, .MyAccount__wrapper, .MyGifts, .MyOrders, .MyProfile, .Product__breadcrumb, .Product__cross-sell, .Product__infos, .PsProduct__breadcrumb, .PsProducts__header, .PsProducts__wrapper, .Sales .FreeShippingInfo, .SalesFilter, .SalesList, .Search__filters--gender, .Search__filters--type, .Search__infos, .Search__no-empty, .Search__products-wrapper, .SearchAddress {
    margin-left: auto;
    margin-right: auto;
    max-width: 1130px;
    width: 100%;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, nav, section, summary {
    display: block;
}
.MyAccount__breadcrumbs {
    margin-bottom: 20px;
    padding-left: 10px;
}
.Breadcrumb {
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    list-style: none;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}

blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}
.Breadcrumb__item, .Breadcrumb__item--active {
    color: #000;
    font-size: 1.1rem;
    line-height: 1.5;
    text-decoration: none;
}

[data-look~=inline].Link, [data-look~=inline].Link__bag, [data-look~=inline].Link__breadcrumb, [data-look~=inline].Link__button, [data-look~=inline].Link__button-small, [data-look~=inline].Link__category-filtering--1, [data-look~=inline].Link__category-filtering--2, [data-look~=inline].Link__channel-menu, [data-look~=inline].Link__channel-menu--active, [data-look~=inline].Link__details, [data-look~=inline].Link__edit, [data-look~=inline].Link__facebook, [data-look~=inline].Link__filter-type, [data-look~=inline].Link__gender--female, [data-look~=inline].Link__gender--male, [data-look~=inline].Link__header-menu, [data-look~=inline].Link__header-sub-menu, [data-look~=inline].Link__instagram, [data-look~=inline].Link__lang-menu--de, [data-look~=inline].Link__lang-menu--en, [data-look~=inline].Link__lang-menu--fr, [data-look~=inline].Link__lang-menu--it, [data-look~=inline].Link__my-account, [data-look~=inline].Link__print, [data-look~=inline].Link__return, [data-look~=inline].Link__subchannel, [data-look~=inline].Link__twitter {
    display: -webkit-inline-flex;
    display: -moz-inline-box;
    display: inline-flex;
}

.Breadcrumb__item, .Breadcrumb__item--active {
    color: #000;
    font-size: 1.1rem;
    line-height: 1.5;
    text-decoration: none;
}
.Breadcrumb__item--active {
    font-weight: 600;
}
.Breadcrumb__item, .Breadcrumb__item--active {
    color: #000;
    font-size: 1.1rem;
    line-height: 1.5;
    text-decoration: none;
}


.MyAccount__wrapper {
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-flex-direction: row;
    -moz-box-orient: horizontal;
    -moz-box-direction: normal;
    flex-direction: row;
    padding-left: 10px;
    padding-right: 10px;
}

.Contact, .Deals__breadcrumb, .Deals__cross-sell, .Deals__infos, .FavoriteCityPrompt, .Food .FreeShippingInfo, .Food__cities, .Food__cms-download-apps, .Food__cms-free-delivery, .Food__cms-restaurants, .FoodFilters__wrapper, .FoodTracking, .Footer__wrapper, .MyAccount__breadcrumbs, .MyAccount__wrapper, .MyGifts, .MyOrders, .MyProfile, .Product__breadcrumb, .Product__cross-sell, .Product__infos, .PsProduct__breadcrumb, .PsProducts__header, .PsProducts__wrapper, .Sales .FreeShippingInfo, .SalesFilter, .SalesList, .Search__filters--gender, .Search__filters--type, .Search__infos, .Search__no-empty, .Search__products-wrapper, .SearchAddress {
    margin-left: auto;
    margin-right: auto;
    max-width: 1130px;
    width: 100%;
}

.MyAccount__menu {
    width: 25%;
}

.MyAccount__menu-title {
    color: #555;
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.4;
    margin-bottom: 20px;
}

.MyAccountMenu__stack {
    list-style: none;
}

.MyAccountMenu__stack-item.active .Link {
    color: #c01c3c;
}

.MyAccountMenu__stack-item .Link {
    display: inline-block;
    padding-bottom: 8px;
    padding-top: 8px;
}
.MyAccountMenu__stack-item .Button__as-link {
    font-size: inherit;
    padding: 0;
    text-decoration: none;
    width: auto;
}
.Button__as-link[data-look=block], .Button__as-link[data-look=default] {
    font-size: 1.2rem;
    width: 100%;
}

.MyProfile {
    margin-bottom: 20px;
}
.Contact, .Deals__breadcrumb, .Deals__cross-sell, .Deals__infos, .FavoriteCityPrompt, .Food .FreeShippingInfo, .Food__cities, .Food__cms-download-apps, .Food__cms-free-delivery, .Food__cms-restaurants, .FoodFilters__wrapper, .FoodTracking, .Footer__wrapper, .MyAccount__breadcrumbs, .MyAccount__wrapper, .MyGifts, .MyOrders, .MyProfile, .Product__breadcrumb, .Product__cross-sell, .Product__infos, .PsProduct__breadcrumb, .PsProducts__header, .PsProducts__wrapper, .Sales .FreeShippingInfo, .SalesFilter, .SalesList, .Search__filters--gender, .Search__filters--type, .Search__infos, .Search__no-empty, .Search__products-wrapper, .SearchAddress {
    margin-left: auto;
    margin-right: auto;
    max-width: 1130px;
    width: 100%;
}

.Contact__title, .MyAddress__sub-title, .MyAddress__title, .MyGifts__title, .MyOrders__title, .MyProfile__title, .ReturnDetails__title, .ReturnList__title, .ReturnRequest__title {
    color: #555;
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.4;
    margin-bottom: 20px;
}

.MyProfile__content {
    width: 60%;
}

.Contact__form-element, .MyAddress__form-element, .MyProfile__form-element {
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
}

.Contact__form-element>*, .MyAddress__form-element>*, .MyProfile__form-element>* {
    -webkit-flex-grow: 1;
    -moz-box-flex: 1;
    flex-grow: 1;
    margin-bottom: 20px;
}

.CheckboxesDropdown__label, .Input__label, .Input__label--checkbox, .Input__label--password, .Input__label--radio, .Select__label, .Textarea__label {
    cursor: pointer;
}

.CheckboxesDropdown__label, .Input__label, .Input__label--password, .Select__label, .Textarea__label {
    color: #4d4d4d;
    display: block;
    font-size: 1.2rem;
    line-height: 1;
    padding: 5px 0;
}

.Select {
    height: 40px;
    width: 100%;
}
.Select, .Select--small {
    border: 1px solid #ccc;
}

.Select__option {
    color: #2f2f2f;
    font-size: 1.4rem;
}
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

option {
    font-weight: normal;
    display: block;
    white-space: pre;
    min-height: 1.2em;
    padding: 0px 2px 1px;
}

.Contact__form-element>*, .MyAddress__form-element>*, .MyProfile__form-element>* {
    -webkit-flex-grow: 1;
    -moz-box-flex: 1;
    flex-grow: 1;
    margin-bottom: 20px;
}
.Input__wrapper, .Input__wrapper--password {
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    flex-direction: column;
    margin-bottom: 15px;
}
.Input__wrapper, .Input__wrapper--checkbox, .Input__wrapper--password, .Input__wrapper--radio, .Textarea__wrapper {
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    position: relative;
}

blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}

.Contact__form-element, .MyAddress__form-element, .MyProfile__form-element {
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.MyAccount__content {
    width: -moz-calc(.75 * 100%);
    width: calc(.75 * 100%);
}

.hide-me[aria-expanded="true"] {display: none;}

/*---------------------------------------------------------------- Zona de ordenes --------------------------------------------------------------------------*/
div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
    margin: 0;
    padding: 0;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
blockquote, dd, div, dl, dt, form, h1, h2, h3, h4, h5, h6, li, ol, p, pre, td, th, ul {
    margin: 0;
    padding: 0;
}
*, ::after, ::before {
    box-sizing: border-box;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

*, :after, :before {
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
div {
    display: block;
}
element.style {
    vertical-align: inherit;
}

.MyOrders__filters {
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    background-color: #efefef;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    justify-content: space-between;
    margin-bottom: 20px;
    margin-top: 20px;
    padding: 20px;
}

.MyOrders__filters-sale-type {
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-flex-flow: wrap;
    flex-flow: wrap;
    -webkit-flex-grow: 1;
    -moz-box-flex: 1;
    flex-grow: 1;
    -webkit-justify-content: space-around;
    justify-content: space-around;
}
@media only screen and (max-width: 1024px) {
    .MyOrders__filters {
        -webkit-flex-direction: column;
        -moz-box-orient: vertical;
        -moz-box-direction: normal;
        flex-direction: column;
    }
}
.MyOrders__filters {
    -webkit-align-items: center;
    -moz-box-align: center;
    align-items: center;
    background-color: #efefef;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-justify-content: space-between;
    -moz-box-pack: justify;
    justify-content: space-between;
    margin-bottom: 20px;
    margin-top: 20px;
    padding: 20px;
}
.MyGifts__table-row, .MyOrders__table-row, .ReturnDetails__table-row, .ReturnList__table-row, .ReturnRequest__table-row {
    border-top: 1px solid #d8d8d8;
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
    padding-bottom: 15px;
    padding-top: 15px;
    position: relative;
}

/*------------------------------------------------------------------------------------------------------------------------------------------------------------*/
</style>
@if(Auth::user())
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details</title>
</head>
<body>
    @extends('overall.layout')
        @section('appBody')
            <div class="MyAccount">
                <aside class="MyAccount__breadcrumbs">
                    <ul class="Breadcrumb">
                        <li class="Breadcrumb__item">
                            <a class="Link__breadcrumb" data-look="inline" href="https://www.deindeal.ch/de/">Trends</a>
                        </li>
                         <li class="Breadcrumb__item">
                                <a class="Link__breadcrumb" data-look="inline" href="/de/customer/account/edit">Mein Konto</a>
                         </li>
                        <li class="Breadcrumb__item--active">Mein Kundenprofil</li>
                    </ul>
                </aside>
                    <div class="MyAccount__wrapper">
                        <div class="MyAccount__menu">
                            <div class="MyAccount__menu-title">Mein Konto</div>
                            <div class="MyAccountMenu stack">
                        <ul class="MyAccountMenu__stack">
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/micuenta" id="link-header-sub-menu-customer-edit-account">Mein Kundenprofil</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/customer/address" id="link-header-sub-menu-customer-address">Meine Adresse</a>
                            </li>
                            <li class="MyAccountMenu__stack-item active">
                                <a class="Link" data-look="default" href="/orders" id="link-header-sub-menu-order-history">Meine Bestellungen</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/awrma/customer_rma/list" id="link-header-sub-menu-customer_rma-list">Meine Rücksendungen</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/gift" id="link-header-sub-menu-gift">Mein Guthaben</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/contact" id="link-header-sub-menu-contact">Kontakt</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/newsletter/manage" id="link-header-sub-menu-manage-newsletter">Newsletter</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/newsletter/manage" id="link-header-sub-menu-manage-newsletter">Abmelden</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="MyAccount__content">
                    <div class="MyOrders">
                        <div class="MyOrders__title">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Mis ordenes</font>
                            </font>
                        </div>
                        <div class="MyOrders__headline">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Aquí puede gestionar sus pedidos y devoluciones</font>
                            </font>
                        </div>
                        <div class="MyOrders__filters"><div class="MyOrders__filters-order-type">
                            <select autocomplete="off" class="Select" id="my-orders-filter-order-type" name="my-orders-filter-order-type">
                                <option selected="" class="Select__option" value="orders">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ver mis ordenes</font>
                                    </font>
                                </option>
                                <option class="Select__option" value="archivedOrders">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ver mis pedidos archivados</font>
                                    </font>
                                </option>
                                <option class="Select__option" value="archivedCoupons">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Ver mis cupones archivados</font>
                                    </font>
                                </option>
                            </select>
                        </div>
                        <div class="MyOrders__filters-sale-type">
                            <div class="Input__wrapper--checkbox">
                                <input type="checkbox" autocomplete="off" class="Input__checkbox" id="my-orders-filter-sale-type-ps-dotd" name="my-orders-filter-sale-type-ps-dotd">
                                <label for="my-orders-filter-sale-type-ps-dotd" class="Input__label--checkbox">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Productos</font>
                                    </font>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="MyOrders__content">
                        <div class="MyOrders__table"><div class="MyOrders__table-head-row">
                            <div class="MyOrders__table-cell-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">venta</font>
                                </font>
                            </div>
                            <div class="MyOrders__table-cell-details">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Fecha, monto y número de la factura.</font>
                                </font>
                            </div>
                            <div class="MyOrders__table-cell-status">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">estado</font>
                                </font>
                            </div>
                            <div class="MyOrders__table-cell-shipping">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Fecha Estimada de Embarque</font>
                                </font>
                            </div>
                            <div class="MyOrders__table-cell-actions">
                                </div>
                            </div>
                            @foreach ($Products as $Product)
                            <div class="MyOrders__table-row">
                                
                                <div class="MyOrders__table-cell-name"> 
                                    <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$Product->title}}</font>
                                </font>
                            </div>
                            <div class="MyOrders__table-cell-details">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">{{$Product->Fecha}} </font>
                                </font>
                                <br>
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$Product->offer_price}} </font>
                            </font>
                            <br>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">AF264B75F79C</font>
                            </font>
                        </div>
                        <div class="MyOrders__table-cell-status">
                            <div class="MyOrders__table-order-status">
                                <div class="OrderStatus merchandise_shipped_totally">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Enviado completamente</font>
                                    </font>
                                </div>
                            </div>
                            <div class="MyOrders__tracking-link">
                                <a class="Link" data-look="underlined block" href="https://www.post.ch/swisspost-tracking?formattedParcelCodes=996001899102401584" id="link-tracking-link-996001899102401584" target="_blank">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">Rastrea tu envío</font>
                                    </font>
                                </a>
                            </div>
                        </div>
                        <div class="MyOrders__table-cell-shipping">
                            <div class="MyOrders__table-shipping-label">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Fecha estimada de envío </font>
                            </font>
                            <!-- -->
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    :</font>
                                </font>
                            </div>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$Product->Fecha}} </font>
                            </font>
                            <!-- -->
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">- </font>
                            </font>
                            <!-- -->
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">{{$Product->FechaFinal}}</font>
                            </font>
                        </div>
                        <div class="MyOrders__table-cell-actions">
                            <div class="Button__tooltip-wrapper">
                                <button class="Button__print" data-look="inline icon" id="print-order-invoice-5543652" type="button">
                                    </button>
                                    <div id="tooltip-print-order-invoice-5543652" class="Tooltip__wrapper bottom-left">
                                        <span class="Tooltip bottom-left" role="tooltip"><font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Imprime la factura</font>
                                        </font>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        @endsection  
</body>
@elseif(Auth::guest())  
    <script>window.location = "/error403";</script>
@endif
</html>
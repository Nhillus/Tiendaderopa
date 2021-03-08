
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
                    <div class="MyAccount__wrapper"><div class="MyAccount__menu"><div class="MyAccount__menu-title">Mein Konto</div><div class="MyAccountMenu stack">
                        <ul class="MyAccountMenu__stack"><li class="MyAccountMenu__stack-item active"><a class="Link" data-look="default" href="/de/customer/account/edit" id="link-header-sub-menu-customer-edit-account">Mein Kundenprofil</a></li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/customer/address" id="link-header-sub-menu-customer-address">Meine Adresse</a>
                            </li>
                            <li class="MyAccountMenu__stack-item">
                                <a class="Link" data-look="default" href="/de/sales/order/history" id="link-header-sub-menu-order-history">Meine Bestellungen</a>
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
                    <div class="MyProfile">
                        <div class="MyProfile__title">Mein Kundenprofil</div>
                        <div class="MyProfile__content">
                            <form class="MyProfile__form" id="update-profile-form" method="post" action="{{route('web.details.update')}}"><div class="MyProfile__form-element">
                                @method('PATCH')
                                {{csrf_field()}}
                                <div class="Select__wrapper">
                                    <label for="user-prefix" class="Select__label mandatory">Anrede</label>
                                    <select autocomplete="off" class="Select" id="user-prefix" name="user_prefix" required="">
                                        <option selected="" class="Select__option" value="">{{$UserDetail->saludo}}
                                            </option>
                                            <option class="Select__option" value="Mr">Hr.</option>
                                            <option class="Select__option" value="Mrs">Fr.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="MyProfile__form-element"><div class="Input__wrapper">
                                    <label for="user-first-name" class="Input__label mandatory">Vorname</label>
                                    <input type="text" autocomplete="off" class="Input" id="user-first-name" name="user_first_name" required="" value="{{$UserDetail->primer_nombre}}"></div>
                                </div>
                                <div class="MyProfile__form-element">
                                    <div class="Input__wrapper">
                                        <label for="user-last-name" class="Input__label mandatory">Nachname</label>
                                        <input type="text" autocomplete="off" class="Input" id="user-last-name" name="user_last_name" required="" value="{{$UserDetail->primer_apellido}}">
                                    </div>
                                </div>
                                <div class="MyProfile__form-element">
                                    <div class="Input__wrapper">
                                        <label for="user-email" class="Input__label mandatory">E-Mail</label>
                                        <input type="email" autocomplete="off" class="Input" id="user-email" name="user_email" required="" value="{{$UserDetail->correo_eletronico}}">
                                    </div>
                                </div>
                                <div class="MyProfile__form-element">
                                    <div class="Select__wrapper"><label for="user-language" class="Select__label">Sprache</label>
                                        <select autocomplete="off" class="Select" id="user-language" name="user_language">
                                            <option selected="" class="Select__option" value="de">{{$UserDetail->idioma}}</option>
                                            <option class="Select__option" value="fr">Français</option>
                                        </select></div>
                                    </div>
                                    <div class="MyProfile__form-element">
                                        <div class="Select__wrapper">
                                            <label for="user-favorite-city" class="Select__label mandatory">Meine Lieblingsstadt</label>
                                            <select autocomplete="off" class="Select" id="user-favorite-city" name="user_favorite_city" required="">
                                                <option selected="" class="Select__option" value="">Wähle deine Lieblingsstadt</option>
                                                <option class="Select__option" value="zurich">Zürich</option>
                                                <option class="Select__option" value="basel">Basel</option>
                                                <option class="Select__option" value="geneve">Genf</option>
                                                <option class="Select__option" value="luzern_zug">Luzern / Zug</option>
                                                <option class="Select__option" value="st_gallen">St. Gallen</option>
                                                <option class="Select__option" value="bern">Bern</option>
                                                <option class="Select__option" value="lausanne">Lausanne</option>
                                                <option class="Select__option" value="winterthur">Winterthur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="MyProfile__form-element">
                                        <button class="Button" data-look="default" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"id="changePasswordToggle" type="button">
                                            <span class="Button__label" id="label-changePasswordToggle">Passwort ändern</span>
                                        </button>
                                    </div>
                                    
                                      <div class="collapse" id="collapseExample">
                                        <div class="well">
                                            <div class="MyProfile__title">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Cambiar la contraseña</font>
                                                </font>
                                            </div>
                                            <div class="Input__wrapper--password">
                                                <label for="user-current-password" class="Input__label--password ">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Contraseña actual</font>
                                                    </font>
                                                </label>
                                                <div class="Input__password-container">
                                                    <input autocomplete="new-password" class="Input__password" id="user-current-password" name="user-current-password" required="" type="password" value="">
                                                    <button class="Button__eye" data-look="default" type="button">
                                                        <span class="ripple"></span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="Input__wrapper--password">
                                                <label for="user-new-password" class="Input__label--password ">
                                                    <font style="vertical-align: inherit;">
                                                        <font style="vertical-align: inherit;">Nueva contraseña</font>
                                                    </font>
                                                </label>
                                                <div class="Input__password-container">
                                                    <input autocomplete="new-password" class="Input__password" id="user-new-password" name="user-new-password" required="" type="password" value="">
                                                    <button class="Button__eye" data-look="default" type="button">
                                                        <span class="ripple">
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="Input__wrapper--password">
                                                    <label for="user-new-password-verification" class="Input__label--password">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">Confirme la nueva contraseña</font>
                                                        </font>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Input__password-container">
                                                <input autocomplete="new-password" class="Input__password" id="user-new-password-verification" name="user-new-password-verification" required="" type="password" value="">
                                                <button class="Button__eye" data-look="default" type="button">
                                                    <span class="ripple">
                                                        </span>
                                                    </button>
                                                </div>
                                            </div>
                                        <div class="MyProfile__form-element">
                                            <button class="Button__highlighted MyProfile__submit" data-look="default" type="submit">
                                                <span class="Button__label">Änderungen übernehmen</span>
                                            </button>
                                        </div>
                                       
                                </form>
                            @if (Auth::Check() && Auth::user()->rol_id==1)
                                    <button  class="Button__highlighted MyProfile__submit" >
                                            <a href="{{route('web.panel')}}" class="Button__label" text-decoration:none >Panel</a>
                                    </button>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    @else 
        <script>window.location = "/error404";</script>
    @endif
</body>
</html>
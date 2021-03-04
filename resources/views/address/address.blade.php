
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
/*---------------Zona de dirección-------------------------------------------------*/
.MyAddress__title{
    color: #555;
    font-size: 1.8rem;
    font-weight: 300;
    line-height: 1.4;
    margin-bottom: 20px;
}
.InputLocation {
    border-radius: 0;
    outline: none;
    padding-left: 40px;
    padding-right: 40px;
    position: relative;
}

.InputLocation__wrapper {
    position: relative;
}
.MyAddress__geolocation {
    margin-bottom: 20px;
}
.Button__label {
    text-decoration: underline;
}
form {
    display: block;
    margin-top: 0em;
}
.MyAddress__form-element { 
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
}
[data-look~=big].Button {
    border-radius: 3px;
    font-size: 1.4rem;
    height: 50px;
    max-width: 240px;
    width: 100%;
}
[data-look~=block].Button {
    display: -webkit-flex;
    display: -moz-box;
    display: flex;
}


/*---------------Zona de dirección-------------------------------------------------*/


</style>
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
                        <li class="Breadcrumb__item--active">Mein Address</li>
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
                    <div class="AddNewAddress">
                        <div class="MyAddress__title">Adresse hinzufügen</div>
                        <div class="MyAddress__geolocation">
                            <div class="InputLocation__wrapper">
                                <input class="InputLocation" placeholder="Adresse hier eingeben" type="text" value="">
                               <!-- <button class="Button__geolocation-icon" data-look="icon" type="button"></button> -->
                                <div id="tooltip-input-location-help" class="Tooltip__wrapper top-right">
                                    <span class="Tooltip--food-help top-right" role="tooltip"></span> <!---aqui va el tooltip---->
                                </div>
                                <div id="tooltip-input-location-address-error" class="Tooltip__wrapper top-right">
                                    <span class="Tooltip--food-address-error top-right" role="tooltip"></span>
                                </div>
                            </div>
                        <div class="MyAddress__geolocation-information">Du findest deine Adresse nicht? Du kannst sie 
                            <span class="Button__label" id="label-my-address-manual-mode">manuell eingeben.</span>
                        </div>
                        <div class="modal">
                            <form autocomplete="on" class="MyAddress__form" id="update-profile-form" method="post">
                                <div class="MyAddress__form-main">
                                    <div class="MyAddress__form-element">
                                        <div class="Input__wrapper">
                                            <label for="user-street1" class="Input__label mandatory">Postanschrift</label>
                                            <input autocomplete="off" class="Input" id="user-street1" name="user-street1" required="" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="MyAddress__form-element">
                                        <div class="Input__wrapper">
                                            <label for="user-city" class="Input__label mandatory">Stadt</label>
                                            <input autocomplete="off" class="Input" id="user-city" name="user-city" required="" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="MyAddress__form-element">
                                        <div class="Input__wrapper">
                                            <label for="user-postcode" class="Input__label mandatory">Postleitzahl</label>
                                            <input autocomplete="off" class="Input" id="user-postcode" name="user-postcode" required="" type="text" value="">
                                        </div>
                                    </div>
                                    <div class="MyAddress__form-element">
                                        <div class="Input__wrapper"><label for="user-country" class="Input__label mandatory disabled">Land</label>
                                            <input autocomplete="off" class="Input disabled" disabled="" id="user-country" name="user-country" required="" type="text" value="Schweiz">
                                        </div>
                                    </div>
                                </div>
                                <div class="MyAddress__form-extra"><div class="MyAddress__sub-title">Zusätzliche Informationen</div><div class="MyAddress__form-element">
                                    <div class="Select__wrapper">
                                        <label for="user-prefix" class="Select__label mandatory">Anrede</label>
                                        <select autocomplete="off" class="Select" id="user-prefix" name="user-prefix" required="">
                                            <option class="Select__option" value="Mr">Hr.</option>
                                            <option class="Select__option" value="Mrs">Fr.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="MyAddress__form-element">
                                    <div class="Input__wrapper">
                                        <label for="user-last-name" class="Input__label mandatory">Nachname</label>
                                        <input autocomplete="off" class="Input" id="user-last-name" name="user-last-name" required="" type="text" value="A">
                                    </div>
                                </div>
                                <div class="MyAddress__form-element">
                                    <div class="Input__wrapper"><label for="user-first-name" class="Input__label mandatory">Vorname</label>
                                        <input autocomplete="off" class="Input" id="user-first-name" name="user-first-name" required="" type="text" value="Xav">
                                    </div>
                                </div>
                                <div class="MyAddress__form-element">
                                    <div class="Input__wrapper">
                                        <label for="user-company" class="Input__label">Unternehmen</label>
                                        <input autocomplete="off" class="Input" id="user-company" name="user-company" type="text" value="">
                                    </div>
                                </div>
                                <div class="MyAddress__form-element">
                                    <div class="InputPhone">
                                        <div class="CountryList__wrapper with-label">
                                            <button class="CountryList__open-dropdown-button" id="country-list-user-telephone-selected" type="button">
                                                <i class="CountryList__flag flag--ch"></i>
                                            </button>
                                            <ul class="CountryList" id="country-list-user-telephone">
                                                </ul>
                                            </div>
                                            <div class="Input__wrapper">
                                                <label for="input-user-telephone" class="Input__label">Telefon</label>
                                                <input autocomplete="tel" class="Input" id="input-user-telephone" name="input-user-telephone" placeholder="078 123 45 67" type="tel" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="MyAddress__form-element">
                                        <div class="Input__wrapper">
                                            <label for="user-street2" class="Input__label">Adresszusatz</label>
                                            <input autocomplete="off" class="Input" id="user-street2" name="user-street2" type="text" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="MyAddress__form-element">
                                    <div class="Input__wrapper--checkbox">
                                        <input autocomplete="off" class="Input__checkbox" id="user-default-address" name="user-default-address" type="checkbox" checked="">
                                        <label for="user-default-address" class="Input__label--checkbox">Als Standard-Adresse verwenden</label>
                                    </div>
                                </div>
                                <div class="MyAddress__form-element">
                                    <button class="Button" data-look="block big" id="account-address-cancel-button" type="button">
                                        <span class="Button__label" id="label-account-address-cancel-button">Abbrechen</span>
                                    </button>
                                    <button class="Button__highlighted AddressForm__submit" data-look="block big" type="submit">
                                        <span class="Button__label">Änderungen übernehmen</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                </div>
                    <form autocomplete="on" class="MyAddress__form" id="update-profile-form" method="post">
                        <div class="MyAddress__form-element">
                            <button class="Button" data-look="block big" id="account-address-cancel-button" type="button">
                                <span class="Button__label" id="label-account-address-cancel-button">Abbrechen</span>
                            </button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        @endsection  
</body>
</html>

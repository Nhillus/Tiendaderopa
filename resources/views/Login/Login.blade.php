<style>
    .button-xs {
        width: 100%;
        max-width: 240px;
        font-size: 1.2rem;
        height: 30px;
        line-height: 30px;
    }
    .button-facebook {
        background-color: #3B5998;
        text-decoration:none;
    }
    .button-google{
        background-color:#dd4b39;
    }
    .button-facebook, .button-google {
        margin: 5px;
    }
    .button-facebook, .button-twitter, .button-google, .button-instagram {
        vertical-align: bottom;
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
        height: 40px;
        line-height: 50px;
        padding: 0 20px;
    }
    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    div {
        display: block;
    }
    div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
        margin: 0;
        padding: 0;
    }
    .row {
        max-width: 100%;
        flex-wrap: nowrap;
    }
    .row {
        margin: 0 auto;
       
        width: 100%;
    }
    .reveal-modal .column, .reveal-modal .columns {
        min-width: 0;
    }
    .columns {
        padding-left: 5px;
        padding-right: 5px;
    }
    .column, .columns {
        position: relative;
        float: left;
        width:34%;
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
    .btn-lebuya:hover {
        background-color:#d0021b;
    }
    .btn-lebuya:active {
        background-color:#d0021b;
    }
    .btn-fake-lebuya
    {
        width: 100%;
        max-width: 100%;
        color:#c1203d;
        background-color: #ffffff;
        height: 40px;
        line-height: 35px;
        border: 1px solid #c1203d;
    }
    .btn-fake-lebuya:hover {
        background-color:#d0021b;
    }
    .container-form {
        display:grid;
        margin: 0px 35px;
    }
    #login
    {   
        border-right-color: #d3d3d3;
        border-right-style: solid;
        border-right-width: 1px; 
        height: 535px;
    }
    #register
    {
        height:535px;
    }
    .Select {
        display: flex;
        max-width:100%;
        margin: 0 auto;
    }
    .select-container, .textarea-container, .input-container {
        padding-bottom: 20px;
        position: relative;
    }
    .select-container, .textarea-container, .input-container {
        padding-bottom: 20px;
        position: relative;
        padding: 0px 10px;
        text-align-last:center;
        padding-right: 29px;
    }
    .select-fake, select.dd-select {
        height: 40px;
        background-color: white;
        font-size: 1.4rem;
        padding: 0 40px 0 10px;
        background-repeat: no-repeat;
        background-size: 20px;
        background-position: right 10px center;
        top: auto;
        margin: 0;
        outline: none;
        overflow: hidden;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        
    }
    
    .panel_connection .hide_register .cityregister {
        border: 1px solid #D4D4D4;
        background-color: #F8F8F8;
        margin-bottom: 20px;
        padding: 5px 15px ;
        }
    .offer {
         align: left;  
    }
    .panel_connection .hide_register .offer {
        font-size: 10px;
        font-weight: 600;
    }
    .row .row {
        max-width: 100%;
        width: 100%;
    }
    .small-4 {
        margin: 0px -25px;
    }
    .panel_connection .hide_register .small-4 {
        width: auto;
    }
    .panel_connection .hide_register .small-4 {
        width: auto;
    }
    .reveal-modal .column, .reveal-modal .columns {
        min-width: 0;
    }
    .panel_connection .hide_register .radio-container {
        padding-top: 10px;
    }
    .radio-container {
        height: 40px;
    }
    .panel_connection .hide_register .radio-container label {
        vertical-align: top;
        margin-right: 0px;
    }
    span {
        font-size:14px;
    }
    .panel_connection .hide_register .radio-container label span {
        margin-left: 0px;
        vertical-align: top;
        text-decoration:none;
    }
    .row .small-12 span:hover{
        text-decoration:none;
    }
    .social-buttons-container_description
    {
        margin:10px;
        font-size: 13px;
    }
    .panel_connection .hide_login .social-buttons-container_description {
        padding-top: 20px;
        text-align: center;
        font-size: 12px;
    }
    .radio-container label {
        display: inline-block;
        margin-right:1px;
    }
    label.inline {
        margin: 1rem 0 1rem 0;
        padding: 0.5625rem 0;
    }
    label {
        font-size: 1.2rem;
    }
    .radio-container label>input {
        height: 13px;
        width: 15px;
    }
    input[type="radio"] {
        size:20px;
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
    .resetpassword-container{
        text-align: center;
        margin: 15px 0px;
        
        
    }
    .Other{
        text-decoration: underline;
        -webkit-transition: text-shadow 0.2s linear;
        -moz-transition: text-shadow 0.2s linear;
        -ms-transition: text-shadow 0.2s linear;
        -o-transition: text-shadow 0.2s linear;
        transition: text-shadow 0.2s linear;
        font-size:12px;
        
    }
    .Other:hover{
         text-shadow: 0 0 1px #000000;
        
    }
    .form-check{
        border-bottom-color: #d3d3d3;
        border-bottom-style: solid;
        border-bottom-width: 1px; 
        
    }
    #ciudades
    {
     padding:0px 10px; 
     
    }
    .reveal-modal .column, .reveal-modal .columns {
        min-width: 0;
    }
    .a-center {
        text-align: center !important;
    }
    .panel_connection .hide_login .social-buttons-container {
        border-top: 1px solid #D8D8D8;
        margin-top: 20px;
    }
    .small-12 {
        width: 100%;
    }
    .column.medium-centered:last-child, .columns.medium-centered:last-child {
        float: none;
    }
    .button-xs {
        width: 100%;
        max-width: 240px;
        font-size: 1.2rem;
        height: 30px;
        line-height: 30px;
        outline: none;
    }
    #facebookbutton
    {
        background-color: #3B5998;
        border-radius:7%;
        margin-right:10px;  
    }
    #facebookbutton:hover
    {
        background-color:#2d4373; 
    }
    #googlebutton{
        background-color: #DD4B39;
        border-radius:5%;
    }
    #googlebutton:hover
    {
     background-color: #c23321;   
    }
    .button-facebook {
        
        width:100%;
        color: #f8fafc;
        text-decoration:none;
    }
    .button-facebook, .button-twitter, .button-google, .button-instagram {
        vertical-align: bottom;
        
    }
    form .row .row .column, form .row .row .columns {
        padding: 0 0.5rem;
    }
    .reveal-modal .column, .reveal-modal .columns {
        min-width: 0;
    }
    .button-xs {
        width: 100%;
        max-width: 240px;
        font-size: 1.2rem;
        height: 30px;
        line-height: 30px;
    }
    .button-xs:hover {
        text-decoration:none;
    }
    .button-google {
        width:100%;
        color: #f8fafc;
        text-decoration:none;
        
    }
    .button-facebook, .button-twitter, .button-google, .button-instagram {
        vertical-align: bottom;
    }
    /*----------------------zona de recuperar contraseña------------------------ */
    element.style {
        display: block;
    }
    .panel h1, .panel h2, .panel h3, .panel h4, .panel h5, .panel h6, .panel p, .panel li, .panel dl {
        color: #333;
    }
    div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
        margin: 0;
        padding: 0;
    }
    form {
        margin: 0 0 1rem;
    }
    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    form {
        display: block;
        margin-top: 0em;
    }
    input {
        line-height: normal;
    }
    button, input, optgroup, select, textarea {
        color: inherit;
        font: inherit;
        margin: 0;
    }
    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    input[type="hidden" i] {
        display: none;
        appearance: initial;
        background-color: initial;
        cursor: default;
        padding: initial;
        border: initial;
    }
    input {
        -webkit-writing-mode: horizontal-tb !important;
        text-rendering: auto;
        color: -internal-light-dark(black, white);
        letter-spacing: normal;
        word-spacing: normal;
        text-transform: none;
        text-indent: 0px;
        text-shadow: none;
        display: inline-block;
        text-align: start;
        appearance: textfield;
        background-color: -internal-light-dark(rgb(255, 255, 255), rgb(59, 59, 59));
        -webkit-rtl-ordering: logical;
        cursor: text;
        margin: 0em;
        font: 400 13.3333px Arial;
        padding: 1px 2px;
        border-width: 2px;
        border-style: inset;
        border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
        border-image: initial;
    }
    .select-container, .textarea-container, .input-container {
        padding-bottom: 20px;
        position: relative;
    }
    div {
        display: block;
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
    .select-container input, .textarea-container input, .input-container input {
        margin-bottom: 0;
    }
    input[type='tel'], input[type='password'], input[type='email'], input[type='text'] {
        border: 1px solid #C7C7C7;
        color: #2F2F2F;
        height: 40px;
        line-height: 40px;
        font-size: 1.4rem;
        box-shadow: none;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        width:105%;
    }
    .row .row {
        margin: 0 -0.9375rem;
        max-width: none;
        width: auto;
    }
    .row {
        max-width: none;
    }
    .row {
        margin: 10 auto;
        max-width: 100rem;
        width: 100%;
    }
    div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
        margin: 0;
        padding: 0;
    }
    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    div {
        display: block;
    }
    element.style {
        width: 256px;
        height: 60px;
        position: fixed;
        visibility: hidden;
    }
    div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
        margin: 0;
        padding: 0;
    }
    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    div {
        display: block;
    }
    iframe[Attributes Style] {
        width: 256px;
        height: 60px;
        border-top-width: 0px;
        border-right-width: 0px;
        border-bottom-width: 0px;
        border-left-width: 0px;
    }
    iframe {
        border-width: 2px;
        border-style: inset;
        border-color: initial;
        border-image: initial;
    }
    #inside-button-google
    {
     color: #dd4b39;
    }
    
    
    #inside-button-facebook
    {
      background-color: #f8fafc;   
    }
    .button:hover {
        background-color:#d0021b;
    }
    .label-asterico
    {
        color:#df0000;
        font-size:15px;
    }
    @media only screen and (max-width: 60em)
    {
        .row{ 
            display:block;
        }
        #login{
            height:auto;
        }
    }
    .video_container_mujer {
        margin-top:95px;
        margin-left:4px;
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%;
    }
    .video_container_willkommen {
        margin-top:95px;
        margin-left:4px;
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%;
    }
    .Register__fieldset {
        background-color: #f8f8f8;
        border: 1px solid #d4d4d4;
        margin-bottom: 20px;
        padding: 5px 15px;
    }
    .Register__fieldset {
        align-content:center;
    }
    .Register__fieldset-label {
        display:block;
        position:relative;
        font-size: 1.2rem;
        font-weight: 600;
        margin-bottom: 15px;
        max-width:50%;
    }
    .Register__fieldset .Select {
        margin-bottom: 20px;
    }
    .Select, .Select--small {
        border: 1px solid #ccc;
    }
    @media only screen and (min-width: 1025px)
        {
        .Select, .Select--sales-filter, .Select--small {
            background-position: right -40px bottom -40px;
            background-size: 70px;
        }
    }
    
    .Select, .Select--sales-filter, .Select--small {
        background-image: url(data:image/svg+xml;charset=utf8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20xmlns%3Axlink%3D%22http%3A%2F%2Fwww.w3.org%2F1999%2Fxlink%22%20width%3D%2232%22%20height%3D%2232%22%20viewBox%3D%220%200%20100%20100%22%20preserveAspectRatio%3D%22xMidYMid%22%3E%3Cpath%20fill%3D%22%232f2f2f%22%20d%3D%22M14.96%2C21.35l-8.94-8.94c-0.56-0.56-0.56-1.46%2C0-2.02c0.56-0.56%2C1.46-0.56%2C2.02%2C0L16%2C18.34l7.95-7.95c0.56-0.56%2C1.46-0.56%2C2.02%2C0c0.56%2C0.56%2C0.56%2C1.46%2C0%2C2.02l-8.16%2C8.16l-1.23%2C1.22c-0.32%2C0.32-0.85%2C0.32-1.18%2C0L14.96%2C21.35z%22%20%2F%3E%3C%2Fsvg%3E);
        background-repeat: no-repeat;
        border-radius: 3px;
        padding: 0 40px 0 10px;
    }
    .Select, .Select--food-filter, .Select--sales-filter, .Select--small {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-color: #fff;
        font-family: inherit;
        font-size: 1.4rem;
        line-height: normal;
        margin: 0;
        outline: none;
        overflow: hidden;
        top: auto;
    }
    .Select__option {
        color: #2f2f2f;
        font-size: 1.4rem;
    }
    .Register__fieldset-inputs {
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
    }
    .Input__wrapper--checkbox, .Input__wrapper--radio {
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .Input__wrapper, .Input__wrapper--checkbox, .Input__wrapper--password, .Input__wrapper--radio, .Textarea__wrapper {
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        position: relative;
    }
    .Input__radio {
        margin: 0 5px 0 0;
    }
    .Input__radio, .Input__radio--food-filter, .Input__radio--food-popular-filter, .Input__radio--product {
        background: #fff;
        border: 0;
        cursor: pointer;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        outline: none;
        position: relative;
    }
    .Input, .Input__checkbox, .Input__password, .Input__radio, .Input__radio--food-filter, .Input__radio--food-popular-filter, .Input__radio--product, .InputLocation, .Textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        font-family: Open Sans,arial,sans-serif;
    }
    *, :after, :before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    input[type="radio" i] {
        background-color: initial;
        cursor: default;
        appearance: auto;
        box-sizing: border-box;
        margin: 3px 3px 0px 5px;
        padding: initial;
        border: initial;
    }
    .Input__wrapper--radio:first-of-type .Input__radio+.Input__label--radio {
        margin-right: 20px;
    }
    .Input__label--checkbox, .Input__label--radio {
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        display: -webkit-inline-flex;
        display: -moz-inline-box;
        display: inline-flex;
    }
    .Input__wrapper--checkbox, .Input__wrapper--radio {
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
    }
    .Input__wrapper, .Input__wrapper--checkbox, .Input__wrapper--password, .Input__wrapper--radio, .Textarea__wrapper {
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        position: relative;
    }
    .Input__radio {
        margin: 0 5px 0 0;
    }
    .Input__radio, .Input__radio--food-filter, .Input__radio--food-popular-filter, .Input__radio--product {
        background: #fff;
        border: 0;
        cursor: pointer;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        outline: none;
        position: relative;
    }
    .Input, .Input__checkbox, .Input__password, .Input__radio, .Input__radio--food-filter, .Input__radio--food-popular-filter, .Input__radio--product, .InputLocation, .Textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        font-family: Open Sans,arial,sans-serif;
    }
    .Input__label--checkbox, .Input__label--radio {
        -webkit-align-items: center;
        -moz-box-align: center;
        align-items: center;
        display: -webkit-inline-flex;
        display: -moz-inline-box;
        display: inline-flex;
    }
    /*-----------------------------------------------------------------Zona de recuperar contraseña----------------------------------------------------------------------------------------*/
    .box-subhead {
        margin: 0px 35px;
    }
    .form-submit-container {
        display:block;
        text-align:center;
    
    }
    .input-container {
        margin: 0 auto;
        width: 88%;
    }
    .video_container_lebugreen {
        margin-top:85px;
        margin-left:10px;
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 56.25%;
        
    }
    /*-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
    /**---------------------------------------------------------------zona de videos en el login ------------------------------------------------------------------------------------------ */
    iframe {
        border: 1px solid black;
    }
    .responsive-iframe {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
    }
    /**----------------------------------------------------------------------Termina ------------------------------------------------------------------------------------------ */
    @media only screen and (max-width: 961px)
        {
        .video_container_willkommen {
            margin-top:5px;
            margin-left:0px;
        }
        
    }
</style>
@extends('overall.layout')
@section('appBody')
    <template>
        <form>
            <div id="#AppLogin" class="pannel pannel_connection">
                <div class="row">
                    <div id="login" class="colums small-12 small-centered medium-8">
                        <div class="container-form">
                            <div class="mb-3">
                                <h2 class="panel_conection__title">Bereits Lebuya-Mitglied? </h2>
                                <label v-if="showLogin" for="email" class="form-label">Deine E-Mail Addresse</label>  <label v-if="showLogin" for="email" class="label-asterico">*</label>
                                <input v-if="showLogin" type="email" class="form-control" v-model="login.email" id="exampleInputEmail" aria-describedby="emailHelp" >
                            </div>
                            <div class="mb-3">
                                <label v-if="showLogin" for="exampleInputPassword1" class="form-label">Passwort</label> <label v-if="showLogin" for="email" class="label-asterico">*</label>    
                                <input v-if="showLogin" type="password" class="form-control" v-model="login.password" id="exampleInputPassword">
                            </div>
                            <button v-if="showLogin" type="button" class="btn btn-lebuya"@click.prevent="loginUser()">Anmelden</button>
                            <button v-if="showRegister" class="btn btn-fake-lebuya" @click.prevent="visualizarLogin()">Anmelden </button>
                            <div class="video_container_willkommen" v-if="showRegister">     
                                <div  class="row"  >
                                    <iframe class="responsive-iframe" width="358" height="220" src="https://www.youtube.com/embed/Ddh8gmFp1tY?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>    
                            </div>
                            <div class="mb-3 form-check">
                                <div v-if="showLogin" class="resetpassword-container">
                                    <label @click.prevent="visualizarOlvidoContraseña()"class="Other" >Passwort vergessen?</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 medium-centered columns a-center">
                                    <div v-if="showLogin" class="social-buttons-container">
                                        <p class="social-buttons-container_description">
                                            <span>Oder Anmeldung via</span>
                                        </p>
                                        <div class="row">
                                                <a @click.prevent="socialLogin('facebook')" id="button-fb600c585ad5465" class="button button-xs button-facebook" href="#1" data-role="connect-fb" >
                                                        Facebook                    
                                                </a>
                                            
                                                <a  class="button button-xs button-google" href="#1" data-role="connect-google" >
                                                
                                                        Google   
                                
                                                </a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
            
                        <div id="container-forgotPassword" class="hide" style="display: block;" v-if="showForgot">
                            <div class="box-subhead">
                                <p>Um Dein Passwort zurückzusetzen, gib bitte nachfolgend die E-Mail-Adresse Deines My-store.ch Kontos an und wir senden Dir einen Link, um das Passwort zu ändern.</p>
                            </div>
        
                            <form  method="post" id="form-customer-forgot-password6028adc54aac9" data-abide="ajax" novalidate="novalidate">
                                <input name="form_key" type="hidden" value="zEnIhZZjjg1m5sme">
                                <div class="input-container empty">
                                    <label class="inline label-required">Bitte gib Deine E-Mail-Adresse ein</label>
                                    <input type="email" name="email_address" required=""v-model="emailForgot.email">
                                    <small class="error">Bitte geben Sie eine E-Mail-Adresse ein.</small>
                                </div>
                                <div class="form-submit-container row">
                                                    <div id="recaptcha_forgot_password" class="g-recaptcha" data-sitekey="6LdW2GUUAAAAAK9cq7gJolpFGFXGRKViuEo3_Kue" data-callback="callbackUniqueId6028adc54aacb" data-size="invisible"><div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;"><div class="grecaptcha-logo"><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdW2GUUAAAAAK9cq7gJolpFGFXGRKViuEo3_Kue&amp;co=aHR0cHM6Ly93d3cuZGVpbmRlYWwuY2g6NDQz&amp;hl=en&amp;v=2Mfykwl2mlvyQZQ3PEgoH710&amp;size=invisible&amp;cb=8vtrwagpo61k" width="256" height="60" role="presentation" name="a-w8z8b129nyy3" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-2" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                                                <div class="columns small-12 ">
                                        <button type="submit" data-button="initmdp" class="button button-accent button-md" @click.prevent="forgotPassword()">Zurücksetzen</button>
                                    </div>
                                    <div class="columns small-12 ">
                                        <a href="#" id="showLogin" class="button button-md button-dark" @click.prevent="visualizarOlvidoContraseña()">
                                            Abbrechen                </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="registro" class="colums small-12 small-centered medium-6">
                        <div class="container-form">
                            <div class="mb-3">
                                <h2  class="panel_conection__title">Neu Bei Lebuya? </h2>
                                <label v-if="showRegister" for="exampleInputEmail1" class="form-label">Deine E-Mail Addresse</label> <label v-if="showRegister" for="email" class="label-asterico">*</label>
                                <input v-if="showRegister" type="email" class="form-control" id="exampleInputEmail1" v-model="form.email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label v-if="showRegister" for="exampleInputPassword1" class="form-label">Passwort</label> <label v-if="showRegister" for="email" class="label-asterico">*</label>
                                <input v-if="showRegister" type="password" class="form-control" v-model="form.password" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                            <div class="Register__fieldset" v-if="showRegister"  >
                                <span class="Register__fieldset-label" v-if="showRegister" >Personalisiere Dein Angebot</span>
                                <select autocomplete="off" class="Select" id="register-city" name="register-city" v-if="showRegister">
                                    <option class="Select__option" value="default">Wähle deine Lieblingsstadt</option>
                                    <option class="Select__option" value="zurich">Zürich</option>
                                    <option class="Select__option" value="basel">Basel</option>
                                    <option class="Select__option" value="geneve">Genf</option>
                                    <option class="Select__option" value="luzern_zug">Luzern / Zug</option>
                                    <option class="Select__option" value="st_gallen">St. Gallen</option>
                                    <option class="Select__option" value="bern">Bern</option>
                                    <option class="Select__option" value="lausanne">Lausanne</option>
                                    <option class="Select__option" value="winterthur">Winterthur</option>
                                </select>
                                    <div class="Register__fieldset-inputs" v-if="showRegister">
                                        <div class="Input__wrapper--radio">
                                            <input class="Input__radio" id="gender-man" name="register[gender]" type="radio" value="male">
                                            <label for="gender-man" class="Input__label--radio">
                                                <span class="Input__label-content">Mann</span>
                                            </label>
                                        </div>
                                        <div class="Input__wrapper--radio">
                                            <input class="Input__radio" id="gender-woman" name="register[gender]" type="radio" value="female">
                                            <label for="gender-woman" class="Input__label--radio">
                                                <span class="Input__label-content">Frau</span>
                                            </label>
                                        </div>
                                    </div>
                            </div>
                            </div>
                                <button v-if="showRegister" type="button" class="btn btn-lebuya" @click.prevent="saveForm()">Registrieren</button>
                                <button v-if="showLogin" class="btn btn-fake-lebuya" @click.prevent="visualizarRegistro()">Registrieren </button>
                                <button v-if="showForgot" class="btn btn-fake-lebuya" @click.prevent="visualizarOlvidoContraseñaRegistro()">Registrieren </button>
                        <div class="video_container_mujer" v-if="showLogin" >
                            <div class="row">
                                <iframe class="responsive-iframe" width="358" height="220" src="https://www.youtube.com/embed/WXflWhWYetg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>                        
                            <div class="row">
                                <div class="small-12 medium-centered columns a-center">
                                    <div v-if="showRegister" class="social-buttons-container">
                                        <p class="social-buttons-container_description">
                                            <span>Oder Anmeldung via</span>
                                        </p>
                                        <div class="row">
                                                <a @click.prevent="socialLogin('facebook')" id="button-fb600c585ad5465" class="button button-xs button-facebook" href="#1" data-role="connect-fb" >
                                                        Facebook                    
                                                </a>
                                            
                                                <a  class="button button-xs button-google" href="#1" data-role="connect-google" >
                                            
                                                        Google   
                                
                                                </a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center" class="video_container_lebugreen">
                                <div  class="row" v-if="showForgot" >
                                    <iframe class="responsive-iframe"  width="358" height="220" src="https://www.youtube.com/embed/mOP6Sf-4_pE?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </template> 

@endsection
    <script>
        new Vue({
            el: '#AppLogin',
            delimiters: ['{%','%}'],
            data()  
            {
                return{
                        showLogin:true,
                        showRegister:false,
                        showForgot:false,
                        form:{
                                email: '',
                                password: ''
                        },
                        errors: [],
                        isProcessing: false,
                        login:
                                {
                                email: '',
                                password: ''   
                                },
                        emailForgot:
                        {
                            email: '',
                        }
                }
            },
            methods: {
                /*
                * Obtener Categorias con sus productos
                */
                visualizarLogin(event)
                {
                this.showLogin=!this.showLogin, 
                this.showRegister=!this.showRegister
                },
                visualizarRegistro(event)
                {
                    this.showLogin=!this.showLogin, 
                    this.showRegister=!this.showRegister
                },
                visualizarOlvidoContraseña(event)
                {   
                    this.showLogin=!this.showLogin, 
                    this.showForgot=!this.showForgot
                },
                visualizarOlvidoContraseñaRegistro(event)
                {   
                    this.showForgot=!this.showForgot
                    this.showRegister=!this.showRegister
                },        
                loginUser()
                {
                axios.post('/login',this.login).then(() =>{
                    //muestra un aviso de error de inicio 
                    window.location.href = '/'
                }).catch((error) =>{
                    this.errors = error.response.data.errors;   
                })
                },
                forgotPassword()
                {
                axios.post('/api/forgot-password',this.emailForgot).then(() =>{
                //  this.$router.push({name: "Dashboard"}); esto debe ser cambiado a routes de laravel mediante otro post a una ruta en web
                //window.location.href = '/';
                console.log(emailForgot);
                }).catch((error) =>{
                    this.errors = error.response.data.errors;   
                })
                },
                saveForm(){
                    axios.post('/api/register', this.form).then(() =>{
                        console.log('saved');
                    window.location.href = '/'
                    }).catch((error) =>{
                        this.errors = error.response.data.errors;
                    })
                },
                loginFacebook()
                {
                //escribir codigo de facebook o llamada
                },
                socialLogin(provider){
                    this.isProcessing = true;
                    this.error = {};
                    console.log("Entre a socialLogin");
                    axios.post('/api/social/{provider}') 
                        .then((response) => {
                        if(response.data.error){
                            this.error = err.response.data.error;
                            console.log("Entre a response error");
                        } else if(response.data.redirectUrl){
                            window.location.href = response.data.redirectUrl
                            console.log("Entre a response ");
                        }
                        })
                        .catch((err) => {
                            if(err.response.data.error){
                                this.error = err.response.data.error;
                                console.log("Entre en catch error ");
                            }
                            console.log("Segundo if ");
                            this.isProcessing = false;
                        });
                    this.isProcessing = false;
                }
            },
            mounted(){
                // Traer datos
                this.getData();
            }
        })
    </script>
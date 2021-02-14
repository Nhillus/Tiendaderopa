@extends('overall.layout')
<style>

.off-canvas-wrap {
    background: white;
}
.off-canvas-wrap {
    -webkit-backface-visibility: hidden;
    position: relative;
    width: 100%;
    overflow: hidden;
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
.content-reset {
    width: 100%;
    max-width: 530px;
    margin: 0 auto;
    text-align: center;
}
form {
    margin: 0 0 1rem;
}
}
form {
    display: block;
    margin-top: 0em;
}

.content-reset h3, .content-reset p {
    margin-top: 30px;
    margin-bottom: 20px;
    color: #2f2f2f;
    font-family: 'Open Sans',arial,sans-serif;
    font-weight: 600;
}

p {
    font-size: 1.4rem;
}
h1, h2, h3, h4, h5, p, body {
    color: #2F2F2F;
}
p {
    font-family: inherit;
    font-size: 1rem;
    font-weight: normal;
    line-height: 1.6;
    margin-bottom: 1.25rem;
    text-rendering: optimizeLegibility;
}
.content-reset .fieldset {
    margin-top: 40px;
}
.content-reset ul {
    list-style: none;
}

ul {
    margin: 0;
    padding: 0;
}
ul {
    margin-left: 1.1rem;
}
ul, ol, dl {
    font-family: inherit;
    font-size: 1rem;
    line-height: 1.6;
    list-style-position: outside;
    margin-bottom: 1.25rem;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
.content-reset .buttons-set button {
    color: white;
    background-color: #c01c3c;
    width: 220px;
    margin-top: 30px;
}





</style>
@section('appBody')


<div class="off-canvas-wrap" data-offcanvas="">
    <div class="inner-wrap">
        <div class="content">
            <div class="content-reset">
                <div class="page-title">
                    <h3>Hallo, Mr </h3>
                </div>
                <p>
                    Um Ihr Passwort zurückzusetzen, füllen Sie bitte die folgenden Felder aus:    </p>
                <form method="post" action="{{route('api.reset-password')}}"  id="form-validate">
                    <input type="hidden" name='token' value="{{ $token }}">

                    
                    {{csrf_field()}}
                    <div class="fieldset">
                        <ul class="form-list">
                            <li class="fields">
                                <div class="field">
                                    <div class="input-box">
                                        <input type="password" placeholder="Neues Passwort" class="input-text required-entry validate-password " show="false" name="password" id="password" required="">
                                        <span toggle="#password-field" class="eyeone toggle-password button-psswd ripple"></span>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="input-box">
                                        <input type="password" placeholder="Bitte bestätigen Sie das neue Passwort" class="input-text required-entry validate-cpassword " show="false" name="password_confirmation" id="password_confirmation" required="">
                                        <span class="eyetwo ripple"></span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                <div class="buttons-set">
            <button type="submit" title="Rücksetzen" class="button"><span><span>Rücksetzen</span></span></button>
        </div>
    </form>
</div>
@endsection
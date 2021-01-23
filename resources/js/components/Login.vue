<style>
element.style {
}
div {
    display: block;
}
div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, p, blockquote, th, td {
    margin: 0;
    padding: 0;
}
.row {
    max-width: none;
    flex-wrap: nowrap;
}
.row {
    margin: 0 auto;
    max-width: 62.5rem;
    width: 100%;
}
.row:before, .row:after {
    content: " ";
    display: table;
}
.row:after {
    clear: both;
}
.row:before, .row:after {
    content: " ";
    display: table;
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

}
.container-form {
    padding: 0 40px;
    display:grid;
    
}

#login
{   
    border-right-color: #d3d3d3;
    border-right-style: solid;
    border-right-width: 1px; 
    height: 495px;
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

.select-fake, select.dd-select, select {
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
    max-width: 50%;
}

.panel_connection .hide_register .cityregister {
    border: 1px solid #D4D4D4;
    background-color: #F8F8F8;
    margin-bottom: 20px;
    padding: 5px 15px ;
    
    }

.panel_connection .hide_register .offer {
    font-size: 10px;
    font-weight: 600;
}

.row .row {
    margin: 0 -0.9375rem;
    max-width: none;
    width: auto;
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
.panel_connection .hide_register .radio-container label span {
    margin-left: 0px;
    vertical-align: top;
}
.radio-container label {
    display: inline-block;
    margin-right:1px;
}
label.inline {
    margin: 0 0 1rem 0;
    padding: 0.5625rem 0;
}
label {
    font-size: 1.2rem;
}
.radio-container label>input {
    height: 20px;
    width: 20px;
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









#ciudades
{
 padding:0px 10px; 
 
}





</style>

<template>
<form>
    <div class="pannel pannel_connection">
        <div class="row">
            <div id="login" class="colums small-12 small-centered medium-6">
                <div class="container-form">
                    <div class="mb-3">
                        <h2 class="panel_conection__title">Bereits Lebuya-Mitglied? </h2>
                        <label for="exampleInputEmail1" class="form-label">Deine E-Mail Addresse</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Passwort</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <label class="Other" >passwort vergessen?</label>
                    </div>
                    <button type="button" class="btn btn-lebuya" >Anmelden</button>
            </div>
            </div>        
            <div id="registro" class="colums small-12 small-centered medium-6">
                    <div class="container-form">
                        <div class="mb-3">
                            <h2 class="panel_conection__title">Neu Bei Deindeal? </h2>
                            <label for="exampleInputEmail1" class="form-label">Deine E-Mail Addresse</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Passwort</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                       
                        <div class="cityregister ">
                            <div class="select-container not-empty ">
                                <p class="offer">
                                        Personalisiere Dein Angebot            
                                </p>
                                <select id="ciudades" name="my_deals_default_region" title="Ihre Region" class="register-cityselect validate-select required-entry chosen" >
                                    <option id="city_disabled" value>Wähle deine Lieblingsstadt</option>
                                    <option value="basel">Basel</option>
                                    <option value="bern">Bern</option>
                                    <option value="geneve">Genf</option>
                                     <option value="lausane">Lausanne</option>
                                    <option value="luzern_zug">Luzern / Zug</option>
                                    <option value="st_gallen">St. Gallen</option>
                                     <option value="winterthur">Winterthur</option>
                                    <option value="zurich">Zürich</option>
                                </select>
                                <div class="row">
                                    <div class="columns small-4">
                                        <div class="radio-container">
                                            <label class="inline">
                                                <input type="radio" name="gender" value="21749">
                                                <span>Mann</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="columns small-4 end">
                                        <div class="radio-container">
                                            <label class="inline">
                                                <input type="radio" name="gender" value="21750">
                                                <span>Frau</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        <button type="button" class="btn btn-lebuya"  >Registrieren</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
      

     
</template>
<script>
export default {
    data(){
        return{
            form:{
                email: '',
                password: ''
            },
            errors: []
        }
    },
    methods:{
         loginUser(){
             axios.post('/api/login', this.form).then(() =>{
                 this.$router.push({ name: "Dashboard"}); 
             }).catch((error) =>{
         this.errors = error.response.data.errors;
            })
         }
    }
}
</script>
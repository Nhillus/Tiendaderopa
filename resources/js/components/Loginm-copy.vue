

<template>
<form>
    <div class="pannel pannel_connection">
        <div class="row">
            <div id="login" class="colums small-12 small-centered medium-6">
                <div class="container-form">
                    <div class="mb-3">
                        <h2 class="panel_conection__title">Bereits Lebuya-Mitglied? </h2>
                        <label for="email" class="form-label">Deine E-Mail Addresse</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Passwort</label>
                        <input type="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <button type="button" class="btn btn-lebuya" >Anmelden</button>
                      <div class="mb-3 form-check">
                          <div class="resetpassword-container">
                            <label class="Other" >passwort vergessen?</label>
                        </div>
                    </div>
            <div class="row">
                <div class="small-12 medium-centered columns a-center">
                    <div class="social-buttons-container">
                        <p class="social-buttons-container_description">
                            <span>Oder Anmeldung via</span>
                        </p>
                        <div class="row">
                            <div id="facebookbutton" class="small-12 medium-6 columns">
                                <a id="button-fb600c585ad5465" class="button button-xs button-facebook" href="#1" data-role="connect-fb" data-options="{&quot;appId&quot;:&quot;114118805282255&quot;,&quot;successUrl&quot;:&quot;https:\/\/www.deindeal.ch\/de\/customer\/account\/sociallogin\/&quot;,&quot;locale&quot;:&quot;de_DE&quot;,&quot;scopeComplement&quot;:&quot;&quot;}">
                                    <span>
                                        Facebook                    
                                    </span>
                                </a>
                            </div>
                            <div id="googlebutton" class="small-12 medium-6 columns">
                                <a id="button-google600c585ad5466" class="button button-xs button-google" href="#1" data-role="connect-google" data-options="{&quot;clientId&quot;:&quot;949885915158-9s6aruuf433upfbe5e6cnp9ma5raukhd.apps.googleusercontent.com&quot;,&quot;successUrl&quot;:&quot;https:\/\/www.deindeal.ch\/de\/customer\/account\/sociallogin\/&quot;}">
                                    <span>
                                        Google                    
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>       
            <div id="registro" class="colums small-12 small-centered medium-6">
                    <div class="container-form">
                        <div class="mb-3">
                            <h2 class="panel_conection__title">Neu Bei Lebuya? </h2>
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
                    <div class="row">
                        <div class="small-12 medium-centered columns a-center">
                            <div class="social-buttons-container">
                                <p class="social-buttons-container_description">
                                    <span>Oder Anmeldung via</span>
                                </p>
                                <div class="row">
                                    <div id="facebookbutton" class="small-12 medium-6 columns">
                                        <a id="button-fb600c585ad5465" class="button button-xs button-facebook" href="#1" data-role="connect-fb" data-options="{&quot;appId&quot;:&quot;114118805282255&quot;,&quot;successUrl&quot;:&quot;https:\/\/www.deindeal.ch\/de\/customer\/account\/sociallogin\/&quot;,&quot;locale&quot;:&quot;de_DE&quot;,&quot;scopeComplement&quot;:&quot;&quot;}">
                                            <span>
                                                Facebook                    
                                            </span>
                                        </a>
                                    </div>
                                    <div id="googlebutton" class="small-12 medium-6 columns">
                                        <a id="button-google600c585ad5466" class="button button-xs button-google" href="#1" data-role="connect-google" data-options="{&quot;clientId&quot;:&quot;949885915158-9s6aruuf433upfbe5e6cnp9ma5raukhd.apps.googleusercontent.com&quot;,&quot;successUrl&quot;:&quot;https:\/\/www.deindeal.ch\/de\/customer\/account\/sociallogin\/&quot;}">
                                            <span>
                                                Google                    
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
            <div id="app">
            <button @click="showText = !showText">Clickeame maldito </button>
            <div class="textbox" v-if="showText">
            lorem ipsum dolor  en esta mierda 
            </div>
    </div>

    </div>
</form>
   

 
</template>

<script>
export default {
    data1: () => 
    {
        return{
            showText:true
        }
    }
}
</script>
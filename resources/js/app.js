//import User from '../js/store/user ' 

require('./bootstrap');



window.Vue = require('vue');

//import store from './store/index.js'

Vue.component('login-component', require('./components/prueba.vue').default); 



const app = new Vue({
    el: '#app',
  
    
});

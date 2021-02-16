

require('./bootstrap');



window.Vue = require('vue');

//import store from './store/index.js'

Vue.component('login-component', require('./components/prueba.vue').default); 
Vue.component('dashboard-component', require('./components/Dashboard.vue').default); 



const app = new Vue({
    el: '#app',
<<<<<<< HEAD

=======
  
    
>>>>>>> Merge Entre Productos y Nhillus( Login, register, details user, aut, social)
});

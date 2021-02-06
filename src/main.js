import Vue from 'vue'
import axios from 'axios'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import router from './router'
import 'bootstrap'; 
import 'bootstrap/dist/css/bootstrap.min.css'
import header from './views/components/Header'
import store from './store/index.js'

Vue.config.productionTip = false

new Vue({
  vuetify,
  router,
  axios,
  header,
  store,
  render: h => h(App)
}).$mount('#app')

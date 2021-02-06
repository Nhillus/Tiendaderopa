/*
    Imports Vue and Vuex   index es igual a store por tener dos caminos diferentes
*/
import Vue from 'vue'
import Vuex from 'vuex'
/*
    Initializes Vuex on Vue.
*/
Vue.use( Vuex )
/*
  Exports our data store.
*/

/*
    Imports all of the modules used in the application to build the data store.
*/
import user from './user'
export default new Vuex.Store({
    state: {

    },
    mutations: {

    },
    actions: {

    },
    modules: {
    user
    }
}); 
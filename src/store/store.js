import Vue from "vue";
import Vuex from "vuex";
import { mutations } from "./mutations";
import { actions } from "./actions";

Vue.use(Vuex);

// Globalización
export const store = new Vuex.Store({
  state: {
    /**
     * Backend API
     */
    api: "http://localhost:9000/",

    /**
     * Estado inicial de sesión
     */
    status: "",

    /**
     * Token con informaciónd e sesión del usuario
     */
    token: localStorage.getItem("token") || null,

    /**
     * Información del usuario
     */
    user: {}
  },
  mutations,
  actions,
  getters: {
    isLoggedIn: state => !!state.token,
    authStatus: state => state.status,
    user: state => state.user
  }
});

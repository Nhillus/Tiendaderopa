//import { router } from "../main";
//import axios from "axios";

export const mutations = {
  /**
   * Estado de la solicitud de autorización, cargando
   * 
   * @param {*} state 
   */
  auth_request(state) {
    state.status = "loading";
  },

  /**
   * Estado de la solicitud de autorización, aprobado
   * @param {*} state 
   * @param {*} token 
   * @param {*} user 
   */
  auth_success(state, data) {
    state.status = "success";
    state.token = data.token;
    state.user = data.user;
  },

  /**
   * Error de autenticación
   * 
   * @param {*} state 
   */
  auth_error(state) {
    state.status = "error";
  },

  /**
   * Limpia las variables de estado de sesión
   * 
   * @param {*} state 
   */
  logout(state) {
    state.status = "";
    state.token = null;
  }
};

//import { router } from "../main";
import axios from "axios";

export const actions = {
  
  /**
   * Obtiene información del usuario conectado
   * 
   * @param {*} param0 
   * @param {*} formData 
   */
  getOwnerUser({ commit, state }) {
    return new Promise((resolve, reject) => {
      commit("auth_request");
      axios
      .get(state.api + "user")
      .then((resp) => {
        const user = resp.data;
        console.log()
        if('[]' == user) {
          commit("auth_error");
          localStorage.removeItem("token");
          reject('error');
        }
        else {
          commit("auth_success", { token : state.token, user });  
        }
      });
    });
  },

  /**
   * Inicia sesión y sincroniza con el backend
   * 
   * @param {*} param0 
   * @param {*} formData 
   */
  login({ commit, state }, formData) {
    return new Promise((resolve, reject) => {
      commit("auth_request");
      axios
      .post(state.api + "user/login", formData, {
          headers: {
            "Content-Type": "multipart/form-data"
          }
      })
      .then(resp => {
        const success = resp.data.success
        const token = resp.data.token;
        const user = resp.data.user;

        if(success) {
          localStorage.setItem("token", token);
          axios.defaults.headers.common["Authorization"] = token;
          commit("auth_success", { token, user });
          resolve(resp);
        }
        else {
          throw "auth_error"
        }
      })
      .catch(err => {
        commit("auth_error");
        localStorage.removeItem("token");
        reject(err);
      })
    });
  },
  
  /**
   * Registra un nuevo usuario en el backend e inicia sesión automáticamente
   * 
   * @param {*} param0 
   * @param {*} formData 
   */
  register({ commit, state }, formData) {
    return new Promise((resolve, reject) => {
      commit("auth_request");
      axios
      .post(state.api + "user/register", formData, {
          headers: {
            "Content-Type": "multipart/form-data"
          }
      })
      .then(resp => {
        const success = resp.data.success
        const token = resp.data.token;
        const user = resp.data.user;
        if(success) {
          localStorage.setItem("token", token);
          axios.defaults.headers.common["Authorization"] = token;
          commit("auth_success", { token, user });
          resolve(resp);
        }
        else {
          throw "auth_error"
        }
      })
      .catch(err => {
        commit("auth_error", err);
        localStorage.removeItem("token");
        reject(err);
      })
    });
  },

  /**
   * Acciona la recuperación de contraseña perdida
   * 
   * @param {*} param0 
   * @param {*} formData 
   */
  lostpass({ state }, formData) {
    return new Promise((resolve, reject) => {
      axios
      .post(state.api + "user/restore", formData, {
          headers: {
            "Content-Type": "multipart/form-data"
          }
      })
      .then(resp => {
        //const success = resp.data.success
        const message = resp.data.message;
        alert(message)
      })
      .catch(err => {
        reject(err);
      })
    });
  },

  /**
   * 
   * @param {*} param0 
   */
  restore({ state }, password_token) {
    return new Promise((resolve, reject) => {
      var formData = new FormData();
      formData.append("lostpass_token", password_token);

      axios
      .post(state.api + "user/restore", formData, {
          headers: {
            "Content-Type": "multipart/form-data"
          }
      })
      .then(resp => {
        const success = resp.data.success
        const message = resp.data.message;
        resolve({
          success,
          message
        });
      })
      .catch(err => {
        reject(err);
      })
    });
  },

  /**
   * Cierra sesión y elimina el token localStorage
   * 
   * @param {*} param0 
   */
  logout({ commit }) {
    return new Promise(resolve => {
      commit("logout");
      localStorage.removeItem("token");
      delete axios.defaults.headers.common["Authorization"];
      resolve();
    });
  }
};

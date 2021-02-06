import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
//moduels

 
Vue.use(Vuex)
const state = 
{
    isLoggedIn: false,
    userDetails:{}
};

const mutations = 
{
    setLoggedIn(state, payload) {
         state.isLoggedIn = payload;

    }
};

const actions = 
{
    loginUser(ctx, payload) {
        return new Promise((resolve,reject) => {
            axios
            .post('http://localhost:8000/api/login',payload)
            .then((response) =>{
                localStorage.setItem('token',response.data);
                ctx.commit('setLoggedIn', true);
                console.log('Login Success');
                resolve(response);
                //this.loginSnack.show =true;
               //this.$router.push({name: "Dashboard"});
            })
            .catch((error) =>{
                //this.errors = error.response.data.errors;
                reject(error)
                //this.loginSnack.show = true
                //this.loginSnack.text = 'Login Failed'   
            })
        }) 
    },
    logoutUser(ctx) {
        return new Promise((resolve) => {
                localStorage.removeItem('token'),
                ctx.commit('setLoggedIn',false);
                resolve(true);
        })
    },
    setLogginState(ctx) {
        return new Promise((resolve) => {
            if (localStorage.getItem('token')){
            ctx.commit('setLoggedIn',true)
            resolve(true)
            }
            else {
            ctx.commit('setLoggedIn',false)
            resolve(false)
            }
        });


    }
    
};

const getters = 
{
    loggedIn(state) {
        return state.isLoggedIn



    }


};

export default 
{
    namespaced: true,
    state,
    mutations,
    actions,
    getters,
    modules: {

    }


}
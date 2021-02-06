
<style lang="scss">
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

#nav {
  padding: 30px;

  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
</style>



<template>
  <div id="app">
    <div id="nav">
      <Header/>
    </div>
    <router-view/>
    <div>
      <v-btn small @click="logout" v-if="loggedIn">
        Logout
      </v-btn>
    </div>
    
  </div> 

</template>

<script>

import {mapGetters,mapActions} from 'vuex'
export default {
  name:'App',
  data: () => ({
  }),
  created() {
    this.checkUserState();
  },
  computed: {
    ...mapGetters({
      loggedIn: 'user/loggedIn'
    })
   
 },
  methods: {
    ...mapActions({
      logoutUser:'user/logoutUser',
      checkUserState: 'user/setLogginState'
    }),
    logout() {
        this.logoutUser().then(() => {
          this.$router.push({name: 'Login'})  
        })
        
    }
  },
}
</script>





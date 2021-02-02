<template>
  <div>
    <Header></Header>
    <router-view></router-view>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import Header from './components/overall/Header.vue'

export default {
  name: "App",
  computed: Object.assign(mapGetters(['isLoggedIn']), {}),
  components: {
    Header
  },
  mounted() {
    if(this.isLoggedIn) {
      this.$store.dispatch('getOwnerUser').catch(() => {
        this.$store.dispatch('logout');
        this.$router.push('/login');
      });
    }
  }
};
</script>

<style lang="scss"></style>

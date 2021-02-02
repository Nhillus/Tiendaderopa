<template>
  <div>
    <h1>The user is logged, private section</h1>
    <button @click="logout">Logout</button>
  </div>
</template>

<script>
export default {
  name: "Secure",
  methods: {
    logout() {
      this.$store
        .dispatch("logout")
        .then(() => this.$router.push("/login"))
        .catch(err => console.log(err));
    }
  }
};
</script>

<style lang="scss" scoped></style>

<template>
  <div>
    <form class="login" @submit.prevent="login" id="loginform">
      <h1>Sign in</h1>
      <label>Email</label>
      <input required name="email" type="email" placeholder="Name" />
      <label>Password</label>
      <input
        required
        name="password"
        type="password"
        placeholder="Password"
      />
      <hr />
      <button type="submit">Login</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {};
  },
  methods: {
    login() {
      let myForm = document.getElementById("loginform");
      let formData = new FormData(myForm);

      this.$store
        .dispatch("login", formData)
        .then(() => this.$router.push("/"))
        .catch(err => console.log(err));
    }
  }
};
</script>

<style lang="scss" scoped></style>

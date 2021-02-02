<template>
  <div>
    <h4>Register</h4>
    <form @submit.prevent="register" id="registerform">
      <label for="name">Name</label>
      <div>
        <input id="name" type="text" required autofocus />
      </div>

      <label for="email">E-Mail Address</label>
      <div>
        <input id="email" type="email" required />
      </div>

      <label for="password">Password</label>
      <div>
        <input id="password" type="password" required />
      </div>

      <label for="password-confirm">Confirm Password</label>
      <div>
        <input
          id="password-confirm"
          type="password"
          required
        />
      </div>

      <div>
        <button type="submit">Register</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "Register",
  data() {
    return {};
  },
  methods: {
    register() {
      let myForm = document.getElementById("registerform");
      let formData = new FormData(myForm);
      
      this.$store
        .dispatch("register", formData)
        .then(() => this.$router.push("/"))
        .catch(err => console.log(err));
    }
  }
};
</script>

<style lang="scss" scoped></style>

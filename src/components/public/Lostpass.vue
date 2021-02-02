<template>
  <div>
    <form class="lostpass" @submit.prevent="lostpass" id="lostpass">
      <h1>Lostpass</h1>
      <label>Email</label>
      <input required name="email" type="email" placeholder="Name" />
      <hr />
      <button type="submit">Restore</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "Lostpass",
  data() {
    return {};
  },
  methods: {
    lostpass() {
      let myForm = document.getElementById("lostpass");
      let formData = new FormData(myForm);

      this.$store.dispatch("lostpass", formData);
    }
  }
};
</script>

<style lang="scss" scoped></style>

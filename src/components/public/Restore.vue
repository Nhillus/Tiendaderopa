<template>
  <div>
      <p>{{ message }}</p>
  </div>
</template>

<script>
export default {
    name : 'Restore',
    data() {
        return {
            message : 'Verificando el enlace...'
        };
    },
    mounted() {
        let password_token = this.$route.query.token;
       if(password_token) {
            this.$store
            .dispatch("restore", password_token)
            .then((response) => {
                this.message = response.message;

                if(response.success) {
                   setTimeout(() => {
                       this.$router.push("/login")
                    }, 3000);
                }
                
            })
            .catch(err => console.log(err));
        }
        else {
            this.$router.push("/")
        }   
    }
}
</script>

<style lang="scss" scoped>

</style>
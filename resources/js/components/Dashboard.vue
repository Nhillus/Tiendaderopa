<style>

.subnav
{
 display: inline-block;
 margin-top:-30px;
}





</style>

<template>
    <div class="subnav" >
        Dashboard 
        <div class="subnav"   v-if="user">
        Name: {{user.name}} 
        Email: {{user.email}}
        <button @click.prevent="logout">Logout</button>
        </div>
    </div>
</template>
<script>
export default {
    data(){
        return{
            user: null
        }
    },
    methods:{
        logout(){
            axios.post('/api/logout').then(()=>{
                this.$router.push({ name: "Home"})
            })
        }
    },
    mounted(){
        axios.get('/api/user').then((res)=>{
            this.user = res.data
        })
    }
}
</script>
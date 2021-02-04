<template>
   <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>Lista de Usuarios</h2>
                <table class="table text-center"><!--Creamos una tabla que mostrará todas las tareas-->
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in arrayUsers" :key="user.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                                <td v-text="user.name"></td>
                                <td v-text="user.email"></td>
                                <td v-text="user.id_rol"></td>
                                <td>
                                    <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                    <button class="btn" @click="loadFieldsUpdate(user)">Modificar</button>
                                    <!--Botón que borra la tarea que seleccionemos-->
                                    <button class="btn" @click="deleteUser(user)">Borrar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="col-md-6">
                <div class="form-group"><!-- Formulario para la creación o modificación de nuestras tareas-->
                    <label>Nombre</label>
                    <input v-model="name" type="text" class="form-control">

                    <label>Email</label>
                    <input v-model="email" type="text" class="form-control">

                    <select  v-model="id_rol" v-on:change="sortBy()" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Roles </option>
                        <option value="1">AdminG</option>
                        <option value="2">Admin</option>
                        <option value="4">trabajador de servicio</option>
                        <option value="5">trabajador de envios</option>
                        <option value="6">usuario de compra</option>
                    </select>
                </div>
                <div class="container-buttons">
                    <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                    <button v-if="update == 0" @click.prevent="saveUsers()" class="btn btn-success">Registrar</button>
                    <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click.prevent="updateUsers()" class="btn btn-warning">Actualizar</button>
                    <!-- Botón que limpia el formulario y inicializa la variable a 0, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click.prevent="clearFields()" class="btn">Atrás</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                name:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                email:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                password:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                id_rol:"",
                update:0, /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/
                arrayUsers:[], //Este array contendrá las tareas de nuestra bd
            }
        },
        methods:{
            sortBy: function(sortKey) {
                console.log(sortKey);
                },
            getUsers(){
                let me =this;
                let url = '/api/usuarios' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayUsers = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            saveUsers(){
                let me =this;
                let url = '/api/usuarios/guardar' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'name':this.name,
                    'email':this.email,
                    'password':this.password,
                }).then(function (response) {
                    me.getTasks();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });   

            },
            updateUsers(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
                let me = this;
                axios.put('/api/usuarios/actualizar/',{
                    'id':this.update,
                    'name':this.name,
                    'email':this.email,
                    'id_rol':this.id_rol,
                }).then(function (response) {
                   me.getUsers();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                   me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            loadFieldsUpdate(data){ //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
                this.update = data.id
                let me =this;
                let url = '/api/usuarios/buscar?id='+this.update;
                axios.get(url).then(function (response) {
                    me.name= response.data.name;
                    me.email= response.data.email;
                    me.password= response.data.password;

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                }); 
            },
            deleteUser(data){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
                let me =this;
                let user_id = data.id
                if (confirm('¿Seguro que deseas borrar esta tarea?')) {
                    axios.delete('/api/usuarios/borrar/'+user_id
                    ).then(function (response) {
                        me.getTasks();
                    })
                    .catch(function (error) {
                        console.log(error);
                    }); 
                }
            },
            clearFields(){/*Limpia los campos e inicializa la variable update a 0*/
                this.name = "";
                this.email = "";
                this.password = "";
                this.update = 0;
            }
        },
        mounted() {
           this.getUsers();
        }
    }
</script>
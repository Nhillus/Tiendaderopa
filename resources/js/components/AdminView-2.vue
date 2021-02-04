<template>
   <div class="container container-task">
        <div class="row">
            <div class="col-md-6">
                <h2>Lista de Productos</h2>
                <table class="table text-center"><!--Creamos una tabla que mostrará todas las tareas-->
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="products in arrayProducts" :key="products.id"> <!--Recorremos el array y cargamos nuestra tabla-->
                                <td v-text="products.name"></td>
                                <td v-text="products.description"></td>
                                <td v-text="products.category"></td>
                                <td>
                                    <!--Botón modificar, que carga los datos del formulario con la tarea seleccionada-->
                                    <button class="btn" @click="loadFieldsUpdate(products)">Modificar</button>
                                    <!--Botón que borra la tarea que seleccionemos-->
                                    <button class="btn" @click="deleteProduct(products)">Borrar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
            <div class="col-md-6">
                <div class="form-group"><!-- Formulario para la creación o modificación de nuestras tareas-->
                    <label>Nombre</label>
                    <input v-model="name" type="text" class="form-control">

                    <label>Descripción</label>
                    <input v-model="description" type="text" class="form-control">

                    <label>Categoría</label>
                    <input v-model="category" type="text" class="form-control">
                </div>
                <div class="container-buttons">
                    <!-- Botón que añade los datos del formulario, solo se muestra si la variable update es igual a 0-->
                    <button v-if="update == 0" @click.prevent="saveProducts()" class="btn btn-success">Registrar</button>
                    <!-- Botón que modifica la tarea que anteriormente hemos seleccionado, solo se muestra si la variable update es diferente a 0-->
                    <button v-if="update != 0" @click.prevent="updateProducts()" class="btn btn-warning">Actualizar</button>
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
                description:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                category:"", //Esta variable, mediante v-model esta relacionada con el input del formulario
                update:0, /*Esta variable contrarolará cuando es una nueva tarea o una modificación, si es 0 significará que no hemos seleccionado
                          ninguna tarea, pero si es diferente de 0 entonces tendrá el id de la tarea y no mostrará el boton guardar sino el modificar*/
                arrayProducts:[], //Este array contendrá las tareas de nuestra bd
            }
        },
        methods:{
            getProducts(){
                let me =this;
                let url = '/api/productos' //Ruta que hemos creado para que nos devuelva todas las tareas
                axios.get(url).then(function (response) {
                    //creamos un array y guardamos el contenido que nos devuelve el response
                    me.arrayProducts = response.data;
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                });
            },
            saveProducts(){
                let me =this;
                let url = '/api/productos/guardar' //Ruta que hemos creado para enviar una tarea y guardarla
                axios.post(url,{ //estas variables son las que enviaremos para que crear la tarea
                    'name':this.name,
                    'description':this.description,
                    'category':this.category,
                }).then(function (response) {
                    me.getProducts();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                    me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });   

            },
            updateProducts(){/*Esta funcion, es igual que la anterior, solo que tambien envia la variable update que contiene el id de la
                tarea que queremos modificar*/
                let me = this;
                axios.put('/api/productos/actualizar',{
                    'id':this.update,
                    'name':this.name,
                    'description':this.description,
                    'category':this.category,
                }).then(function (response) {
                   me.getProducts();//llamamos al metodo getTask(); para que refresque nuestro array y muestro los nuevos datos
                   me.clearFields();//Limpiamos los campos e inicializamos la variable update a 0
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            loadFieldsUpdate(data){ //Esta función rellena los campos y la variable update, con la tarea que queremos modificar
                this.update = data.id
                let me =this;
                let url = '/api/productos/buscar?id='+this.update;
                axios.get(url).then(function (response) {
                    me.name= response.data.name;
                    me.description= response.data.description;
                    me.category= response.data.category;

                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                }); 
            },
            deleteProduct(data){//Esta nos abrirá un alert de javascript y si aceptamos borrará la tarea que hemos elegido
                let me =this;
                let product_id = data.id
                if (confirm('¿Seguro que deseas borrar esta tarea?')) {
                    axios.delete('/api/productos/borrar/'+product_id
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
                this.description = "";
                this.category = "";
                this.update = 0;
            }
        },
        mounted() {
           this.getProducts();
        }
    }
</script>
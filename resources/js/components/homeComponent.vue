<template>
    <div>
        <nav class="panel column is-offset-2 is-8">
            <div class="panel-heading is-size-4">
                <p class="is-inline-block">
                    Vuejs Phonebook
                </p>
                <span class="icon" v-if="animate">
                    <i class="fa fa-cog fa-spin"></i>
                </span>
                <button class="button is-primary is-pulled-right" @click="openModal" >
                    Agregar Contacto
                </button>
            </div>
            <div class="panel-block">
                <p class="control has-icons-left">
                    <input class="input is-small" type="text" placeholder="search">
                    <span class="icon is-small is-left">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </span>
                </p>
            </div>
            <a class="panel-block" v-for="(item, key) in listPhone" :key="key">

                <span class="column is-9">{{item.name}}</span>
                <span class="panel-icon column is-1">
                    <i class="has-text-danger fa fa-trash" aria-hidden="true" @click="openDelete(key,item.id)"></i>
                </span>

                <span class="panel-icon column is-1">
                    <i class="has-text-info fa fa-edit" aria-hidden="true" @click="openUpdate(key)" ></i>
                </span>

                <span class="panel-icon column is-1">
                    <i class="has-text-primary fa fa-eye" aria-hidden="true" @click="openShow(key)" ></i>
                </span>
            </a>

            <div class="panel-block">

            </div>
        </nav>
        <!-- para pasar parametros entre padre a hijo se usan prop -->
        <add-phone :openmodal='addActive' @closeRequest="close"></add-phone>
        <show-phone :openmodal='showActive' @closeRequest="close" ></show-phone>
        <update-phone :openmodal='updateActive' @closeRequest="closeUpdate"></update-phone>
    </div>
</template>
<script>
    // const Add = require('./addComponent.vue');
    const AddPhone = Vue.component('add-phone', require('./CRUD/addComponent.vue').default);
    const ShowPhone = Vue.component('show-phone', require('./CRUD/showComponent.vue').default);
    const updatePhone = Vue.component('update-phone', require('./CRUD/editComponent.vue').default);

    export default {
            // components:{
            //     'AddTemp': Add,
            // }
            data() {
                return {
                    addActive : '',
                    showActive :'',
                    updateActive :'',
                    animate:false,
                    errors:{},
                    listPhone:{},
                }
            },
            mounted() {
                 axios.post('/getData').then((response) => this.listPhone = response.data)
                    .catch((error) => this.errors = error.response.data.errors);
            },
            methods: {
                openModal(){
                    this.addActive = 'is-active';
                },
                close(){
                    this.addActive = '';
                    this.showActive = '';
                    this.updateActive = '';
                },
                closeUpdate(){
                    axios.post('/getData').then((response) => this.listPhone = response.data)
                    .catch((error) => this.errors = error.response.data.errors);
                    
                    this.addActive = '';
                    this.showActive = '';
                    this.updateActive = '';
                },
                openShow(key){
                    this.showActive = 'is-active';
                    this.$children[1].listShow = this.listPhone[key];
                },
                openUpdate(key){
                    this.updateActive = 'is-active';
                    this.$children[2].list = this.listPhone[key];
                    this.$children[2].keychild = key;
                    // this.listPhone.splice(key,1);
                },
                openDelete(key,id){

                    if (confirm("Estas seguro de eliminar al contacto")) {
                        this.animate = !this.animate;
                        axios.delete(`/phonebook/${id}`)
                        .then((response) => {this.listPhone.splice(key,1);
                        this.animate = !this.animate;})
                        .catch((error) => this.errors = error.response.data.errors);
                    }
                    
                }
            },
    }

</script>

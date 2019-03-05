<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">    
                <p class="modal-card-title">Agregar un nuevo contacto</p>
                <button class="delete" aria-label="close" @click="closeModal"></button>
            </header>
            <section class="modal-card-body">
                <!-- Content ... -->
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success">Agregar</button>
                <button class="button is-danger" @click="closeModal">Cancelar</button>
            </footer>
        </div>
    </div>
</template>

<script>

export default {
    // const AddPhone = Vue.component('add-phone', require('./components/addComponent.vue').default);
    props:['openmodal'],
    methods: {
        closeModal(){
            this.$emit('closeRequest');
        }
    },

}
</script>

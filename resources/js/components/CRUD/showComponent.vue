<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Datos del usuario {{listShow.name}} </p>
                <button class="delete" aria-label="close" @click="closeModal"></button>
            </header>
            <section class="modal-card-body">
                <!-- name ... -->
                <li class="panel-block">
                    <label class="column is-4"> <strong>Nombre:</strong> </label>
                    {{listShow.name}}
                </li>

                <!-- campo telefono -->
                <li class="panel-block">
                    <label class="column is-4"> <strong>Numero telefonico:</strong></label>
                    {{listShow.phone}}

                </li>

                <!-- campo email -->
                <li class="panel-block">
                    <label class="column is-4 has-primary"><strong>Correo electronico:</strong></label>
                    {{listShow.email}}

                </li>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-danger" @click="closeModal">Cancelar</button>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['openmodal'],
        data() {
            return {
                listShow: '',
            }
        },
        methods: {
            closeModal() {
                this.$emit('closeRequest');
            },
        },
    }

</script>

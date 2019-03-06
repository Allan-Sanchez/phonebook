<template>
    <div class="modal" :class="openmodal">
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Actualizar un contacto</p>
                <button class="delete" aria-label="close" @click="closeModal"></button>
            </header>
            <section class="modal-card-body">
                <!-- name ... -->
                <div class="field">
                    <label class="label">Nombre</label>
                    <p class="control has-icons-left">
                        <input class="input is-rounded" :class="{'is-danger': errors.name}" name="name" type="text"
                            placeholder="Ingresa el nombre" v-model="list.name">
                        <span class="icon is-small is-left">
                            <i class="fa fa-user"></i>
                        </span>
                    </p>
                    <small v-if="errors.name" class="has-text-danger">{{errors.name[0]}}</small>
                </div>

                <!-- campo telefono -->
                <div class="field">
                    <label class="label">Numero Telefonico</label>
                    <p class="control has-icons-left">
                        <input class="input is-rounded" :class="{'is-danger': errors.phone}" name="phone" type="number"
                            placeholder="Ingresa el numero telefonico" v-model="list.phone">
                        <span class="icon is-small is-left">
                            <i class="fa fa-phone"></i>
                        </span>
                    </p>
                    <small v-if="errors.phone" class="has-text-danger">{{errors.phone[0]}}</small>
                </div>


                <!-- campo email -->
                <div class="field">
                    <label class="label">Correo electronico</label>
                    <p class="control has-icons-left">
                        <input class="input is-rounded" :class="{'is-danger': errors.email}" name="email" type="email"
                            placeholder="Ingresa el correo electronico" v-model="list.email">
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </p>
                    <small v-if="errors.email" class="has-text-danger">{{errors.email[0]}}</small>
                </div>
            </section>
            <footer class="modal-card-foot">
                <button class="button is-success" @click="updatePhone">Actualizar</button>
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
                list: {},
                keychild:'',
                errors: {}
            }
        },
        methods: {
            closeModal() {
                this.$emit('closeRequest');
            },
            clearModal() {
                this.$data.list.name = '';
                this.$data.list.phone = '';
                this.$data.list.email = '';
                this.closeModal();
            },
            updatePhone() {
                // console.log(this.$parent.listPhone.splice(this.$data.keychild,1,response.data));
                

                axios.patch(`/phonebook/${this.list.id}`, this.$data.list)
                    .then((response) => {
                        this.$parent.listPhone.splice(this.$data.keychild,1,response.data)
                        this.clearModal()})
                    .catch((error) => this.errors = error.response.data.errors);

            }
        },

    }

</script>

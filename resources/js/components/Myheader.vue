<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="https://bulma.io/images/bulma-logo.png" alt="PHONEBOOK" width="112" height="28">
            </a>
        </div>
        <div class="navbar-menu is-active">
            <div class="navbar-start">
                <router-link to="/home" class="navbar-item">Inicio</router-link>
                <router-link to="/about" class="navbar-item">Acerca de</router-link>
            </div>
        </div>
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <span class="icon"><i class="fa fa-github fa-7x"></i></span>
                        <span>My Github</span>
                    </a>
                    <a class="button is-primary">
                        <span class="icon"><i class="fa fa-facebook-official" aria-hidden="true"></i></span>
                        <span>My Facebook</span>
                    </a>
                </div>
            </div>
        </div>

    </nav>
</template>

<script>
    export default {
        // mounted() {
        //     console.log('Component mounted.')
        // }
    }

</script>

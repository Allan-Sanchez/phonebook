<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="https://bulma.io/images/bulma-logo.png" alt="PHONEBOOK" width="112" height="28">
            </a>
        </div>
        <div class="navbar-menu is-active">
            <router-link to="/home" class="navbar-item">Inicio</router-link>
            <router-link to="/about" class="navbar-item">Acerca de</router-link>

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

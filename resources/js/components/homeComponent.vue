<template>
    <nav class="panel column is-offset-2 is-8">
        <div class="panel-heading is-size-4">
            <p class="is-inline-block">
                Vuejs Phonebook
            </p>
            <button class="button is-primary is-pulled-right">
                reset all filters
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
        <a class="panel-block">
            <span class="column is-9">bulma</span>
            <span class="panel-icon column is-1">
                <i class="has-text-danger fa fa-trash" aria-hidden="true"></i>
            </span>

            <span class="panel-icon column is-1">
                <i class="has-text-info fa fa-edit" aria-hidden="true"></i>
            </span>

            <span class="panel-icon column is-1">
                <i class="has-text-primary fa fa-eye" aria-hidden="true"></i>
            </span>
        </a>

        <div class="panel-block">

        </div>
    </nav>
</template>
<script>
    export default {

    }

</script>

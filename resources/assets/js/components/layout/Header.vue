<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <router-link class="navbar-brand" to="/">My Vue App</router-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            </div>
            <div class="row align-items-center">
                <div class="col-md-4">
                    Dashboard
                </div>

                <div class="col-md-4">
                    <img src="../../../images/logo-ninweb.png">
                </div>

                <div class="col-md-4">
                    Menu
                </div>
            </div>
        </div>
    </nav>
</template>


<script>
    export default {
        name: 'app-header'
    }
</script>

<style lang="sass" scoped>

</style>

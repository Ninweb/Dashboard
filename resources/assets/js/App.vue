<template>
  <div id="main">

    <div class="content">
      <router-view></router-view>
    </div>
    
  </div>
</template>

<script>
  import LoginComponent from './components/Login.vue'

  export default {
    name: 'main-app',

    components: {
      LoginComponent
    }
  }
</script>

<style>

</style>
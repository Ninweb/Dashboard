<template>
  <div id="dashboard">
    <Header/>

    <div class="content">
      <router-view></router-view>
    </div>
    
  </div>
</template>

<script>
  import Header from './layout/Header.vue'
  import AdminComponent from './admin/Admin.vue'
  import UserComponent from './user/User.vue'

  export default {
    name: 'dashboard-view',

    components: {
      Header,
      AdminComponent,
      UserComponent
    }
  }
</script>

<style>
  #dashboard {
    background: #fff;
  }
</style>
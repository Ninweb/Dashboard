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
  import LoginComponent from '../Login'

  export default {
    name: 'dashboard-view',
    active: '',

    components: {
      Header,
      AdminComponent,
      UserComponent,
      LoginComponent
    },

    methods: {
      validate() {
        
      }
    }
  }
</script>

<style>
  #dashboard {
    /* background: #fff; */
  }
</style>
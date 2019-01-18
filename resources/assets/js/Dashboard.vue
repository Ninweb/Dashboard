<template>
  <div id="dashboard">
    <Header/>

    <div class="content">
      <router-view></router-view>
    </div>
    
  </div>
</template>

<script>
  import Header from './components/dashboard/layout/Header.vue'
  import AdminComponent from './components/dashboard/admin/Admin.vue'
  import UserComponent from './components/dashboard/user/User.vue'
  // import LoginComponent from '../Login'

  export default {
    name: 'dashboard-view',
    active: '',

    components: {
      Header,
      AdminComponent,
      UserComponent,
      // LoginComponent
    },

    methods: {
      validate() {
        
      }
    }
  }
</script>

<style>
</style>
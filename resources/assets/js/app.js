
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import Axios from 'axios'
import routes from './components/routes'
import StoreData from './store'

// import AppComponent from './App.vue'
// import LoginComponent from './components/Login.vue'
import DashboardComponent from './Dashboard.vue'

// registrando los modulos
Vue.use(VueRouter)
Vue.use(Vuex)

const store = new Vuex.Store(StoreData)

// Vue.component('app-component', require());

const router = new VueRouter({mode: 'history', routes})

const app = new Vue({
  el: '#dashboardVista',
  router,
  store,
  render: h => h(DashboardComponent)
});

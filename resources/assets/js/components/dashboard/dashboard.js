require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import Axios from 'axios'
import {routes} from './routes'
import StoreData from './store'
import MainApp from './App.vue'

import DashboardComponent from './Dashboard.vue'

// registrando los modulos
Vue.use(VueRouter)
Vue.use(Vuex)

const store = new Vuex.Store(StoreData)

// Vue.component('app-component', require('./components/App.vue'));

const router = new VueRouter({mode: 'history', routes})

const app = new Vue({
  el: '#dashboardVista',
  router,
  store,
  components: {
    DashboardComponent,
  },
  render: h => h(DashboardComponent)
});
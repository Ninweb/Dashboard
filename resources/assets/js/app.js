
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import Vuex from 'vuex'
import Axios from 'axios'
import {routes} from './routes'
import StoreData from './store'
import MainApp from './components/App.vue'
import LoginComponent from './components/Login.vue'

// window.Vue = require('vue');
// window.VueRouter = require('vue-router').default
// window.VueAxios = require('vue-axios').default
// window.Axios = require('axios').default

// let AppLayout = require("./components/App.vue")

// registrando los modulos
Vue.use(VueRouter)
Vue.use(Vuex)

const store = new Vuex.Store(StoreData)

// Vue.component('app-component', require('./components/App.vue'));

const router = new VueRouter({mode: 'history', routes})

const app = new Vue({
  el: '#app',
  router,
  store,
  components: {
    MainApp,
    LoginComponent
  }
});

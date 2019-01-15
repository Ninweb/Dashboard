
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.VueRouter = require('vue-router').default
window.VueAxios = require('vue-axios').default
window.Axios = require('axios').default

let AppLayout = require("./components/App.vue")

// registrando los modulos
Vue.use(VueRouter, VueAxios, axios)

Vue.component('app-component', require('./components/App.vue'));

const router = new VueRouter({mode: 'history', routes: routes})

new Vue(
  Vue.util.extend(
    {router},
    AppLayout
  )
).$mount('#app')

// const app = new Vue({
//   el: '#app'
// });


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('my-header', require('./components/Myheader.vue').default);
Vue.component('my-footer', require('./components/footerComponet.vue').default);


const home = Vue.component('my-home', require('./components/homeComponent.vue').default);
const about = Vue.component('my-about', require('./components/aboutComponent.vue').default);

// const home = require('./components/homeComponent.vue');
// const about = require('./components/aboutComponent.vue');

const routes = [
    { path: '/home', component: home },
    { path: '/about', component: about }
  ]

  const router = new VueRouter({
      mode:'history',
    routes // short for `routes: routes`
  })

const app = new Vue({
    el: '#app',
    router
});


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

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('addemp', require('./components/addemp.vue'));
Vue.component('showemp', require('./components/showemp.vue'));
Vue.component('visite', require('./components/visite.vue'));
Vue.component('visitenew', require('./components/visitenew.vue'));
Vue.component('showByEmp', require('./components/showByEmp.vue'));
Vue.component('stats', require('./components/stats.vue'));

const app = new Vue({
    el: '#app'
});


require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import 'vue-awesome/icons'
import Icon from 'vue-awesome/components/Icon'
Vue.component('v-icon', Icon)


import {routes} from './routes';

 const router = new VueRouter({
    routes,
    mode:'history'
})


const app = new Vue({
    el: '#app',
    router
});

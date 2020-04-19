require('./bootstrap');

window.Vue = require('vue');

import SuiVue from 'semantic-ui-vue';

Vue.use(SuiVue);

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import App from './App.vue';

import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import ErrorComponent from './components/ErrorComponent.vue';

const routes = [
    {
        name: 'home',
        path: '/',
        component: HomeComponent
    },
    {
        path: '/404',
        name: '404',
        component: ErrorComponent
    },
    {
        path: '*',
        redirect: '/404'
    }
];

const router = new VueRouter({ mode: 'history', routes: routes })
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');


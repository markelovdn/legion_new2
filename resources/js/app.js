require('./bootstrap');

import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter)

import App from './components/App';
import Home from './components/Home';
import Athletes from './components/Athletes/Athletes';

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/athletes',
            name: 'athletes',
            components: {Athletes: Athletes}
        }

    ]
})

const app = new Vue({
    el: '#app',
    components: {App},
    router
});

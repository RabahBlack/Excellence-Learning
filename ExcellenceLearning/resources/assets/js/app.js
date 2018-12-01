

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

import router from './router.js';
import iView from 'iview';
import locale from 'iview/dist/locale/en-US';
import 'iview/dist/styles/iview.css';
import axios from 'axios'
import VueAxios from 'vue-axios'
import vuefaker from 'vue-faker';
Vue.use(VueAxios, axios)
Vue.use(VueRouter);
Vue.use(iView,{locale});
Vue.use(vuefaker);


import App from './App.vue';

const app = new Vue({
    el: '#app'
    , router,
    components: {
        App
    }
});

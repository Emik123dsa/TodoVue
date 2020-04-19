window.Vue = require('vue'); 

import VueRouter from 'vue-router';
Vue.use(VueRouter);


import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);
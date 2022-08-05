/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import VueAxios from 'vue-axios';
import axios from 'axios';
import Multiselect from 'vue-multiselect';
import * as echarts from 'echarts/core';

require('./bootstrap');

window.Vue = require('vue').default;
Vue.use(VueAxios, axios, Multiselect, echarts);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */



// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//Vue.component('home', require('./components/Home.vue').default);
Vue.component('NavHead', require('./components/NavBar.vue').default);
Vue.component('upload-datatable', require('./components/LogDataTable.vue').default);
Vue.component('vue-datatable', require('./components/DataTable.vue').default);
Vue.component('vue-dropdown', require('./components/StationDropdown.vue').default);
Vue.component('multiselect-demo', require('./components/MultiSelect.vue').default);
Vue.component('echarts-demo', require('./components/EchartsDemo.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',

});

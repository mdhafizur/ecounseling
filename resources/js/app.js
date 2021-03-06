require('./bootstrap');


global.moment = require('moment');

require('tempusdominus-bootstrap-4');

import 'moment-timezone';

// import 'fullcalendar';
import 'moment-timezone';
import StarRating from 'vue-star-rating'

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

window.Vue = require('vue');
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))



// Vue.component('review-form', require('./components/ReviewForm.vue'));
Vue.component('star-rating', StarRating);

const app = new Vue({
    el: '#app'
});







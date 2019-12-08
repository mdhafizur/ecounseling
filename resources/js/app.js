require('./bootstrap');



window.Vue = require('vue');
const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

const app = new Vue({
    el: '#app'
});



global.moment = require('moment');
require('tempusdominus-bootstrap-4');
import 'fullcalendar';
import 'moment-timezone';



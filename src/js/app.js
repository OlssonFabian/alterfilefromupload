require('./bootstrap');
window.Vue = require('vue');
import Vuetify from 'vuetify';
import FileAlterApp from '../FileAlterApp.vue';
Vue.use(Vuetify);
import 'vuetify/dist/vuetify.min.css'
Vue.component('FileAlterApp', { /* ... */ })
const vuetify = new Vuetify();

new Vue({
    vuetify,
    FileAlterApp,
    render: h => h(FileAlterApp)
  }).$mount('#app')

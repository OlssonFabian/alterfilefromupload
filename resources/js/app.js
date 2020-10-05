require('./bootstrap');

window.Vue = require('vue');

import App from './components/App.vue';
Vue.component('app', require('./components/App.vue').default);

const app = new Vue({
  el: '#app',
  components: {
    App
  },
  render: h => h(App)
});

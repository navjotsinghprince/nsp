import Vue from 'vue';
import App from './views/frontend/App.vue';
import VueRouter from "vue-router";
import router from "./router/index";
// import router from '~/router';
import './quasar';

Vue.config.productionTip = false
Vue.use(VueRouter);



// const app = new Vue({
//   el: "#app",
//   router,
//   // store,
//   ...App
// });


new Vue({
  router,
  components: {App},
  render: h => h(App),
}).$mount('#app')
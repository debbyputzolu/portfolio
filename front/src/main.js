import Vue from 'vue'
import App from './App.vue'
//import './assets/sass/main.scss'
import router from './plugins/router.js'
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App),
}).$mount('#app')
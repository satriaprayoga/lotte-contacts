import Vue from 'vue'
import VueRouter from 'vue-router'
import VeeValidate from 'vee-validate'
import App from './App.vue'
import ContactForm from './components/ContactForm.vue'
import 'bootstrap/dist/css/bootstrap.css'

Vue.use(VueRouter)
Vue.use(VeeValidate);
Vue.config.productionTip = false


const router=new VueRouter({
  routes:[
    {path:'/', name:'home',component:ContactForm}
  ]
})

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

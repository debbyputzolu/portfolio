import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from '../views/Home.vue'
import About from '../views/About.vue'
Vue.use(VueRouter)


const routes = [
    {
      path: '/', // URL configuration to match
      name: 'home', // road name
      component: Home // component to call
    },
    {
      path: '/about', // URL configuration to match
      name: 'about', // road name
      component: About // component to call
    },
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
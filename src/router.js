import Vue from 'vue'
import Router from 'vue-router'
import Home from './views/Home.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  base: process.env.BASE_URL,
  routes: [
    {
      path: '/',
      name: 'shop',
      component: Home
    },
    {
      path: '/sellout',
      name: 'SellOut',
      component: () => import('./views/SellOut.vue')
    },
    {
      path: '/basket',
      name: 'basket',
      component: () => import('./views/Basket.vue')
    },
    {
      path: '/profile',
      name: 'profile',
      component: () => import('./views/Profile.vue')
    },
    {
      path: '/news',
      name: 'news',
      component: () => import('./views/News.vue')
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('./views/About.vue')
    },
    {
      path: '/partners',
      name: 'partners',
      component: () => import('./views/Partners.vue')
    },
  ]
})

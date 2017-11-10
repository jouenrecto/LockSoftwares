import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

function load (component) {
  return require(`@/${component}.vue`);
}

export default new VueRouter({
  activeClass: 'is-active',
  mode: 'hash',
  routes: [
      {
        path: '/',
        name: 'index',
        component: load('Index')
      },
      {
        path: '/contact',
        name: 'contact',
        component: load('Contact')
      },
      {
        path: '/about',
        name: 'about',
        component: load('About')
      }
  ]
})
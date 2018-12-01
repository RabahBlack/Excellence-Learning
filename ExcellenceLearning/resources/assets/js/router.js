import Vue from 'vue'
import Router from 'vue-router'

import ListEns from './components/ListEns.vue'
import FormEns from './components/FormEns.vue'
import LoginForm from './components/LoginForm.vue'
Vue.use(Router)

export default new Router({
  routes: [
    {
        path: '/login',
        name: 'LoginForm',
        component: LoginForm,
        isActive:false
      },
    {
      path: '/formens',
      name: 'FormEns',
      component: FormEns,
      isActive:false
    },
    {
        path: '/listens',
        name: 'ListEns',
        component: ListEns,
        isActive:true
      }
  ]
})

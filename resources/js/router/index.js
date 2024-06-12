import { createWebHistory, createRouter } from 'vue-router'

import Users from '../views/Users.vue'
import UsersCreate from '../views/UsersCreate.vue'
import UsersDetails from '../views/UsersDetails.vue'
import Register from '../views/Register.vue'
import Login from '../views/Login.vue'

const routes = [
  { path: '/', redirect: '/users' },
  { path: '/users', component: Users },
  { path: '/users/create', component: UsersCreate },
  { path: '/users/:id', component: UsersDetails },
  { path: '/register', component: Register },
  { path: '/login', component: Login },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router

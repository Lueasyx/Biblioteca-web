import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import DevolucaoView from "../views/DevolucaoView.vue";
import CadastroView from "@/views/CadastroView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/devolucao',
      name: 'devolucao',
      component: DevolucaoView
    },
    {
      path: '/cadastro',
      name: 'cadastro',
      component: CadastroView
    },
    {
      path: '/emprestimo/:livroId?',
      name: 'emprestimo',
      component: () => import('../views/EmprestimoView.vue')
    },
    {
      path: '/login',
      name: 'login',
      component: () => import('../views/LoginView.vue')
    }
  ]
})

export default router

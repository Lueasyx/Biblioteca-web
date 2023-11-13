<script setup>
import { RouterLink, RouterView } from 'vue-router'
import boxIconElement from "boxicons/src/box-icon-element";
import HomeView from "@/views/HomeView.vue";
</script>

<template>
  <header class="header" style="background: #005BAA;">
    <div class="header__container">
      <router-link to="/" class="header__logo">Virtuateca</router-link>

      <div class="btn-group">
        <router-link to="/login" class="btn btn-primary">Login</router-link>
      </div>
      <div class="header__toggle">
        <i class='bx bx-menu' id="header-toggle"></i>
      </div>
    </div>
  </header>

  <!--========== NAV ==========-->
  <div class="nav" id="navbar">
    <nav class="nav__container">
      <div>
        <div class="nav__list">
          <div class="nav__items">
            <h3 class="nav__subtitle">Menu</h3>
            <router-link to="/" class="nav__link">
              <i class='bx bx-library nav__icon'></i>
              <span class="nav__name">Biblioteca</span>
            </router-link>
            <router-link to="" class="nav__link">
              <i class='bx bx-bookmark-heart nav__icon'></i>
              <span class="nav__name">Lista de desejos</span>
            </router-link>
            <router-link to="" class="nav__link">
              <i class='bx bx-message-rounded nav__icon'></i>
              <span class="nav__name">Chat</span>
            </router-link>
          </div>


          <div class="nav__items">
            <h3 class="nav__subtitle">Profile</h3>
            <div class="nav__dropdown">
              <router-link to="" class="nav__link">
                <i class='bx bx-user nav__icon'></i>
                <span class="nav__name">Profile</span>
                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
              </router-link>
              <div class="nav__dropdown-collapse">
                <div class="nav__dropdown-content">
                  <router-link to="#" class="nav__dropdown-item">Meus emprestimos</router-link>
                  <router-link to="/emprestimo" class="nav__dropdown-item">Fazer emprestimo</router-link>
                  <router-link to="/devolucao" class="nav__dropdown-item">Devolução e multas</router-link>
                </div>
              </div>
            </div>
            <router-link to="/cadastro" class="nav__link">
              <i class='bx bx-list-plus nav__icon'></i>
              <span class="nav__name">Cadastrar livro</span>
            </router-link>
          </div>
        </div>
      </div>

      <a href="#" class="nav__link nav__logout">
        <i class='bx bx-log-out nav__icon'></i>
        <span class="nav__name">sair</span>
      </a>
    </nav>
  </div>
  <router-view></router-view>
</template>

<style>

</style>

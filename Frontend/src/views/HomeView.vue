<template>
  <main class="Home">
    <div class="search">
      <div class="input-group mb-3 d-flex justify-content-end">
        <input id="searchbar" @keydown="search()" @click.enter="search()" class="form-control" style="width: 20rem;flex: none !important;" placeholder="Pesquisar" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" @click="search()" id="button-addon2">
          <i class="bx bx-search" style="font-weight: 900; "></i>
        </button>
      </div>
    </div>

    <div class="container">
      <div class="row align-items-start" id="livros">
        <bookcards v-for="livro in Livros" :key="livro.id" :livro="livro" />
      </div>
    </div>
  </main>
</template>

<script>
/* import axios from 'axios'; */
import bookcards from '@/components/Bookcards.vue';
import axios from 'axios';

export default {
  components: {bookcards},
  data() {
    return {
      Livros: [],

    };
  },
  methods: {
    getLivros() {
      axios.get('/livro').then((res) => {
        this.Livros = res.data.data;
      })
    },
    search() {
      let input = document.getElementById('searchbar').value
      input = input.toLowerCase();
      let Livro = document.getElementsByName('livro');
      console.log(Livro);

      for (let i = 0; i < Livro.length; i++) {
        console.log(i, Livro[i])
        if (!Livro[i].innerHTML.toLowerCase().includes(input)) {
          Livro[i].style.display = "none";
        } else {
          Livro[i].style.display = "list-item";
          Livro[i].style.listStyle = "none";
        }
      }
    },
  },
  mounted() {
    this.getLivros();

  }
};
</script>
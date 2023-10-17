<template>
  <main class="Home">
    <div class="search">
      <div class="input-group mb-3 d-flex justify-content-end">
        <input id="searchbar" onkeydown="search()" class="form-control" style="width: 20rem; flex: none !important;" placeholder="Pesquisar" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" onclick="search()" id="button-addon2">
          <i class="bx bx-search" style="font-weight: 900; "></i>
        </button>
      </div>
    </div>

    <div class="container">
      <div class="row align-items-start" id="livros">
        <bookcards />
      </div>
    </div>
  </main>
</template>

<script>
import axios from 'axios';
import bookcards from '@/components/Bookcards.vue'

export default {
  components: {bookcards},
  data() {
    return {

    };
  },
  methods: {

  },
  mounted() {

  },
  watch: {

  }
};
</script>
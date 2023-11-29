<template>
  <div class="col-4" :id="livro.Titulo" name="livro">
    <div class="card mb-3" style="max-width: 540px; height: 250px;">
      <div class="card-body d-flex flex-column justify-content-around">
        <div>
          <h5 class="card-title">{{ livro.Titulo }}</h5>
          <p class="card-text">Autor: {{ livro.Autor }}<br> ISBN: {{ livro.isbn }}<br> {{ livro.Edicao }}º edição</p>
          <p class="card-text"><small class="text-muted">Quantidade em estoque: {{ livro.Estoque }}</small></p>
        </div>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <router-link class="btn btn-primary" :to="{name: 'emprestimo', params: {livroId: livro.id}}">Alugar</router-link>
          <i class="bx bx-heart nav__icon" ref="Like-btn" @click.="Like" style="margin-left: 5rem; font-size: 1.5rem; color: #FF0000FF"></i>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      
    };
  },
  props: {
    livro: Object
  },
  methods: {
    Like() {
      const like = this.$refs["Like-btn"];

      if (like.className === 'bx bxs-heart nav__icon') {
        like.className = 'bx bx-heart nav__icon';
      } else if (this.$refs["Like-btn"].className === 'bx bx-heart nav__icon') {
        like.className = 'bx bxs-heart nav__icon';
        like.style.color = '#FF0000FF';
      }
    }
  },
  mounted() {

  },
  watch: {

  }
}

</script>

<style>
.like-off{
  color: rgba(88, 85, 94, 0.97);
}

.like {
  color: red;
}

</style>

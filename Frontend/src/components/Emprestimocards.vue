<template>
  <li class="livro" style="display: none" :value="livro.id">
    <div class="card w-100">
      <div class=" card-body d-flex align-items-center">
        <input type="checkbox" class="form-check-input" @click="recebeData(livro.id)"
          :value="livro.id" id="seleciona" style="margin-right: 1rem;">
        <div id="card_livro">
          <h5 class="card-title">{{ livro.Titulo }}</h5>
          <p class="card-text">De {{ livro.Autor }}</p>
          <p class="card-text">{{ livro.Estoque }} Em estoque</p>
        </div>
      </div>
    </div>
  </li>
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
    recebeData(livroId) {

      const checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
      valores = [];

      valores.push(livroId);

      checkboxes.forEach((checkbox) => {
          valores.push(checkbox.value);
      });

      axios.post(BASEURL + "/emprestimo/livrosSelecionados", valores).then(res => {
          const container = document.querySelectorAll('#livros_selecionados');
          const selecionados = res.data;


          container.innerHTML = '';

          selecionados.forEach(item => {
              const list = `<li class="list-group-item">${item[0].nome} <br> <p>cod. ${item[0].isbn}</p></li>`

              container.innerHTML += list;
          })

      })

      verificarLivro(valores);
      return (valores)
    },

  },
  mounted() {

  },
  watch: {

  }
}
</script>
<style></style>
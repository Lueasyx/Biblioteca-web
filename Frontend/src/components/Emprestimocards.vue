<template><!--style="display: none"-->
  <li class="livro" style="display: none" :value="Livro.id">
    <div class="card w-100">
      <div class=" card-body d-flex align-items-center">
        <input type="checkbox" class="form-check-input" @change="this.recebeData(this.value)" :value="Livro.id" id="seleciona"
        name="dataLivros[]" style="margin-right: 1rem;">
        <div id="card_livro">
          <h5 class="card-title">{{ Livro.Titulo }}</h5>
          <p class="card-text">De {{ Livro.Autor }}</p>
          <p class="card-text">{{ Livro.Estoque }} Em estoque</p>
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
    Livro: Object,
    recebeData: Function
  },
  methods: {
    // recebeData(livroId) {
    //
    //   const checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
    //   console.log(checkboxes)
    //   this.valores = [];
    //
    //   this.valores.push(livroId);
    //
    //   checkboxes.forEach((checkbox) => {
    //     this.valores.push(checkbox.value);
    //   });
    //
    //   console.log(this.valores)
    //
    //   // axios.post(BASEURL + "/emprestimo/livrosSelecionados", valores).then(res => {
    //   //   const container = document.querySelectorAll('#livros_selecionados');
    //   //   const selecionados = res.data;
    //   //
    //   //
    //   //   container.innerHTML = '';
    //   //
    //   //   selecionados.forEach(item => {
    //   //     const list = `<li class="list-group-item">${item[0].nome} <br> <p>cod. ${item[0].isbn}</p></li>`
    //   //
    //   //     container.innerHTML += list;
    //   //   })
    //   //
    //   // })
    //
    //   // verificarLivro(valores);
    //   // return (valores)
    // }
  },
  mounted() {
    // console.log(this.recebeData)
  },
  watch: {

  }
}
</script>
<style></style>
<template>
  <main class="emprestimo">
    <div class="search">
      <div class="input-group mb-3 d-flex justify-content-center">
        <input id="searchbar" @keyup="search(this)" class="form-control" style="width: 55rem;" placeholder="Pesquisar" aria-describedby="button-addon2">
        <button class="btn btn-outline-primary" type="button" @click="search()" id="button-addon2">
          <i class="bx bx-search" style="font-weight: 900; "></i>
        </button>
      </div>
    </div>
    <ol id="livros" style="list-style-type: none; padding-left: 0rem;">
      <emprestimocards :recebeData="recebeData" v-for="livro in Livros" :key="livro.id" :Livro="livro"/>
    </ol>
    <div id="formula" style="background-color: #ffffff; border-radius: 1em;  opacity: 0.5;pointer-events: none;">
      <form style="padding: 1rem 1rem 0 1rem;">
        <div class="card" style="width: 100%;">
          <div class="card-header" style="display: flex; justify-content: center;">
            Livros Selecionados
          </div>
          <ul id="livros_selecionados" class="list-group list-group-flush">
            
          </ul>
        </div>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="ra" class="form-label">R.A</label>
          <input inputmode="numeric" type="text" class="form-control" id="ra">
        </div>
        <div class="mb-3 d-flex justify-content-around">
          <div class="mb-3 col-3">
            <label class="form-check-label" for="retirada">data de retirada</label>
            <br>
            <input style="width: 100%;" type="date" id="retirada">
          </div>
          <div class="mb-3 col-3">
            <label class="form-check-label" for="devolucao">data de devolução</label>
            <br>
            <input style="width: 100%;" type="date" id="devolucao">
          </div>
        </div>
      </form>
      <div class="d-flex justify-content-center">
        <button type="submit" style="margin: 0 1rem 1rem 0;" onclick="emprestimo()" class="btn btn-primary">Alugar</button>
      </div>
    </div>
  </main>
</template>
<script>
import emprestimocards from '@/components/Emprestimocards.vue';
import axios from 'axios';
export default {
  components: {emprestimocards},
  data() {
    return {
      Livros: [],
      valores: [],
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
      let x = document.getElementsByClassName('livro');

      for (let i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
          x[i].style.display = "none";
        } else if (input == "") {
          x[i].style.display = "none";
        } else {
          x[i].style.display = "list-item";
        }
      }
    },
    recebeData(livroId) {
      const checkboxes = document.querySelectorAll('input[type=checkbox]:checked');
      // console.log(checkboxes)



      checkboxes.forEach((checkbox) => {
        this.valores.push(checkbox._value);
      });

      if (livroId) {
        this.valores.push(livroId);
      }

      console.log(this.valores)

      axios.get(`/livro/${this.valores}`).then(res => {
        console.log(res.data)
      //   // const container = document.querySelectorAll('#livros_selecionados');
      //   // const selecionados = res.data;
      //   //
      //   //
      //   // container.innerHTML = '';
      //   //
      //   // selecionados.forEach(item => {
      //   //   const list = `<li class="list-group-item">${item[0].nome} <br> <p>cod. ${item[0].isbn}</p></li>`
      //   //
      //   //   container.innerHTML += list;
      //   // })
      })

      // verificarLivro(valores);
      // return (valores)
    },
  },
  mounted() {
    this.getLivros();
    this.recebeData(parseInt(this.$route.params.livroId));
  },
  watch: {

  }
}

</script>

<style>
</style>

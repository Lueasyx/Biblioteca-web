<template>
  <div class="container-lg">
    <div class="mb-3">
      <label for="titulo" class="form-label">Titulo do livro</label>
      <input type="text" class="form-control" id="titulo" v-model="dadosAlt.Titulo" placeholder="o sol é para todos">
    </div>
    <div class="mb-3">
      <label for="isbn" class="form-label">ISBN</label>
      <input type="text" class="form-control" id="isbn" v-model="dadosAlt.isbn" placeholder="Ex. 9846513546986">
    </div>
    <div class="mb-3">
      <label for="edicao" class="form-label">Edição</label>
      <input type="text" class="form-control" id="edicao" v-model="dadosAlt.Edicao" placeholder="coloque apenas o número" aria-label="Recipient's username" aria-describedby="basic-addon2">
    </div>
    <div class="mb-3">
      <label for="estoque" class="form-label">Estoque</label>
      <br>
      <select class="form-select" v-model="dadosAlt.Estoque" id="estoque">
        <option value="0">--Selecione uma Quantidade--</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="autor" class="form-label">Autor</label>
      <select class="form-select" @change="verificarAutor()" list="autor" id="autor" v-model="dadosAlt.Autor">
        <option :value="null">--Selecione um autor--</option>
        <option value="0">--Não achei meu autor--</option>
        <option v-for="autor in autores" :key='autor.id' :value="autor.id">{{ autor.Nome }}</option>
      </select>
    </div>
    <div class="d-flex  justify-content-end ">
      <input type="button" id="cadastrar" class="btn btn-success" @click="cadLivro()" value="Cadastrar" :disabled="this.desat == false">
      <input type="button" class="btn btn-danger" value="Cancelar">
    </div>
    <div class="mb-3">
      <label for="nome" class="form-label">Cadastrar Autor</label>
      <div class="input-group mb-3">
        <input autocomplete="off" type="text" class="form-control" id="nome" placeholder="Stephen King" v-model="impAutor" :disabled="this.desat == true">
        <input type="button" id="cadastrarAutor" class="btn btn-success" @click="cadAutor()" value="Cadastrar autor" :disabled="this.desat == true">
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      autores: [],
      desat: true,
      dadosAlt: {
        isbn: null,
        Titulo: null,
        Edicao: null,
        Estoque: 0,
        Autor: null,
      },
      impAutor: null,
    };
  },
  methods: {
    getAutores() {
      axios.get('/autor').then((res) => {
        this.autores = res.data.data;
      });
    },
    verificarAutor() {
      if (this.dadosAlt.Autor == 0) {
        this.desat = false;
      } else {
        this.desat = true;
      }
    },
    cadLivro() {
      axios.post('/livro', this.dadosAlt).then((res) => {
        alert(res.data.msg);
      })
    },
    cadAutor() {
      axios.post('/autor', {Nome: this.impAutor}).then((res) => {
        alert(res.data.msg);
        this.getAutores;
      })
    }

  },
  mounted() {
    this.getAutores();
  },
  watch: {

  }
}

</script>

<style scoped>

</style>
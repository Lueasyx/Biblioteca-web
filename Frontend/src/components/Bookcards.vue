<template>
  <div class="col-4" id="${item.titulo}" name="livro">
    <div class="card mb-3" style="max-width: 540px;">
      <div class="card-body">
        <h5 class="card-title">${item.titulo}</h5>
        <p class="card-text">Autor: ${item.autor}<br> ISBN: ${item.isbn}<br> ${item.edicao}º edição</p>
        <p class="card-text"><small class="text-muted">Quantidade em estoque: ${item.estoque}</small></p>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <button value="${item.id}" class="btn btn-primary" onclick="sendParam(value)" type="button">Alugar</button>
          <i class="bx bx-heart nav__icon" id="like" style="margin-left: 5rem; font-size: 1.5rem;"></i>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

</script>

<style scoped>

</style>

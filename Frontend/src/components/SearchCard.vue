<script setup>
defineProps({

})
</script>

<template>
  <li class="livro" style="display: none" value="${item.id}">
    <div class="card w-100">
      <div class=" card-body d-flex align-items-center">
        <input type="checkbox" class="form-check-input" onclick="" name="dataLivros[]" value="${item.id}" id="seleciona" style="margin-right: 1rem;">
        <div id="card_livro">
          <h5 class="card-title">${item.titulo}</h5>
          <p class="card-text">De ${item.autor}</p>
          <p class="card-text">${item.estoque} Em estoque</p>
        </div>
      </div>
    </div>
  </li>
</template>

<style scoped>

</style>

<template>
  <header class="header">
    <div class="navbar">
      <div class="container">
        <div class="navbar__wrap">
          <menu-component />
        </div>
      </div>
    </div>
  </header>
</template>

<script>
import MenuComponent from "./MenuComponent.vue";

export default {
  components: {
    MenuComponent
  }
};
</script>

<style>
</style>
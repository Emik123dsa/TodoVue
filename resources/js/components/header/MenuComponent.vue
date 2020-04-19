<template>
  <div class="navbar__wrap-menu menu-navbar">
    <div class="navbar__wrap-header navbar__menu">
      <nav class="navbar__menu-nav">
        <ul class="navbar__menu-li">
          <li v-for="(item,i) in navbar" :key="i" class="navbar__menu-list">
            <router-link v-bind:to="{path: `${item.path}`}" class="navbar__menu-link">{{ item.name }}</router-link>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      navbar: [
        {
          name: "Home",
          path: "/"
        },
        {
          name: "Create",
          path: "/create"
        },
        {
          name: "Lists",
          path: "/lists"
        }
      ]
    };
  }
};
</script>

<style>
</style>
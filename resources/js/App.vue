<template>
  <div>
      <sui-segment>
          asd
      </sui-segment>
        <Header />
    <transition name="fade-disabled">
      <router-view />
     
    </transition>
  </div>
</template>

<script>
import Header from "./components/header/HeaderComponent.vue";

export default {
  components: {
    Header
  }
};
</script>

<style lang="scss" scoped>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}

.fade-enter,
.fade-leave-active {
  opacity: 0;
}
</style>
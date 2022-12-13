<script>
import MainHeader from "./components/Main/MainHeader.vue";
import MainFooter from "./components/Main/MainFooter.vue";
import MainMessengers from "./components/Main/MainMessengers.vue";

export default {
  components: {
    MainHeader,
    MainFooter,
    MainMessengers,
  },
};
</script>

<template>
  <MainHeader></MainHeader>
  <RouterView />
  <MainFooter></MainFooter>

  <MainMessengers></MainMessengers>
</template>

<style lang="scss">
@import "@/assets/styles/base.scss";
@import "@/assets/styles/fonts.scss";
</style>

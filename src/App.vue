<script>
import MainHeader from "./components/MainHeader.vue";
import MainFooter from "./components/MainFooter.vue";

export default {
  components: {
    MainHeader,
    MainFooter,
  },
};
</script>

<template>
  <MainHeader></MainHeader>
  <div class="div_background">
    <p class="p__text">Hello!</p>
  </div>
  <h1>world</h1>

  <h2>champion</h2>
  <MainFooter></MainFooter>
</template>

<style lang="scss">
@import "@/assets/styles/fonts.scss";
@import "@/assets/styles/variables.scss";

h2 {
  color: $bg-color1;
}
</style>

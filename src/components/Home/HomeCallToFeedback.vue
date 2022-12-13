<script>
import IconCart from "../Icons/IconCart.vue";

export default {
  components: {
    IconCart,
  },
};
</script>

<template>
  <section id="call-to-feedback" class="call-to-feedback">
    <div class="container">
      <div class="call-to-feedback__wrapper">
        <a
          href="https://www.wildberries.ru/catalog/51641873/detail.aspx"
          class="call-to-feedback__btn-cart"
          target="_blank"
        >
          <IconCart class="call-to-feedback__btn-cart-img" />
          <p class="call-to-feedback__btn-cart-text">Купить на Wildberries</p>
        </a>
        <a href="#feedback" class="call-to-feedback__btn">
          <p class="call-to-feedback__btn-text">Написать нам</p>
        </a>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/call-to-feedback.scss";
</style>

<script>
import IconCart from "../Icons/IconCart.vue";
import NewOrder from "@/components/Popups/NewOrder.vue";

export default {
  components: {
    IconCart,
    NewOrder,
  },
  data() {
    return {
      showNewOrder: false,
    };
  },
};
</script>

<template>
  <section id="certificate" class="certificate">
    <div class="container">
      <img
        class="certificate__image"
        src="../../assets/img/certificate/certificate.jpg"
      />
      <h2 class="certificate__title">СЕРТИФИКАТ СООТВЕТСТВИЯ</h2>
      <p class="certificate__description">
        Для «Фитостерол форте» получено свидетельство государственной
        регистрации. Продается в аптеках. Рекомендуется врачами.
      </p>
      <div class="certificate__buttons">
        <a href="#" class="certificate__btn-cart" @click="showNewOrder = true">
          <IconCart class="certificate__btn-cart-img" />
          <p class="certificate__btn-cart-text">Купить</p>
        </a>
        <a href="#feedback" class="certificate__btn">
          <p class="certificate__btn-text">Написать нам</p>
        </a>
      </div>
    </div>
  </section>

  <Teleport to="body">
    <NewOrder :show="showNewOrder" @close="showNewOrder = false">
      <template #new-order></template>
    </NewOrder>
  </Teleport>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/certificate.scss";
</style>

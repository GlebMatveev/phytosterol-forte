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
  <section id="top" class="top">
    <div class="container">
      <div class="top__wrapper">
        <div class="top__left">
          <p class="top__subtitle">Биологически активная добавка</p>
          <div class="top__text-block">
            <h1 class="top__title">
              <span class="top__title top__title_colored">Фитостерол</span>
              форте
            </h1>
            <div class="top__label">
              <p class="top__text-bg">30 капсул</p>
              <p class="top__text-sm">325 мг</p>
            </div>
          </div>
          <a href="#" class="top__button" @click="showNewOrder = true">
            <IconCart class="top__button-img" />
            <p class="top__button-text">Купить</p>
          </a>
        </div>
        <div class="top__right">
          <img src="../../assets/img/top/top.jpg" alt="" class="top__image" />
        </div>
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
@import "@/assets/styles/Home/top.scss";
</style>

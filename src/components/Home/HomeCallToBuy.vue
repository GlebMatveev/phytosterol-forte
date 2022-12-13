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
  <section id="call-to-buy" class="call-to-buy">
    <div class="container">
      <div class="call-to-buy__wrapper">
        <p class="call-to-buy__title">ЗАКАЖИТЕ ФИТОСТЕРОЛ ФОРТЕ ПРЯМО СЕЙЧАС</p>
        <a href="#" class="call-to-buy__button" @click="showNewOrder = true">
          <IconCart class="call-to-buy__button-img" />
          <p class="call-to-buy__button-text">Купить</p>
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
@import "@/assets/styles/Home/call-to-buy.scss";
</style>

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
  <section id="prices" class="prices">
    <div class="container prices__container">
      <h2 class="prices__title">СТОИМОСТЬ ФИТОСТЕРОЛ ФОРТЕ</h2>
      <p class="prices__description">Выберите наиболее подходящую скидку</p>
      <div class="prices__cards">
        <div class="prices__card">
          <div class="prices__topbar prices__topbar_gray">
            <p class="prices__topbar-text"></p>
          </div>
          <p class="prices__card-title">1 упаковка</p>
          <p class="prices__card-subtitle">Phytosterol forte</p>
          <img
            src="../../assets/img/prices/one-bottle.jpg"
            alt="Bottles"
            class="prices__card-image"
          />
          <div class="prices__card-price-block">
            <p class="prices__card-price">900 ₽</p>
            <p class="prices__card-price-text"></p>
          </div>
          <p class="prices__card-sum">за упаковку</p>
          <p class="prices__card-economy"><br /></p>
          <a href="#" class="prices__btn-gray" @click="showNewOrder = true">
            <IconCart class="prices__btn-gray-img" />
            <p class="prices__btn-gray-text">Купить</p>
          </a>
        </div>

        <div class="prices__card">
          <div class="prices__topbar prices__topbar_black">
            <p class="prices__topbar-text">ПОПУЛЯРНЫЙ ВЫБОР</p>
          </div>
          <p class="prices__card-title">2 упаковки</p>
          <p class="prices__card-subtitle">Phytosterol forte</p>
          <img
            src="../../assets/img/prices/two-bottles.jpg"
            alt="Bottles"
            class="prices__card-image"
          />
          <div class="prices__card-price-block">
            <p class="prices__card-price">800 ₽</p>
            <p class="prices__card-price-text">за<br />1 уп.</p>
          </div>
          <p class="prices__card-sum">сумма 1600 ₽</p>
          <p class="prices__card-economy">экономия 200 ₽</p>
          <a href="#" class="prices__btn-black" @click="showNewOrder = true">
            <IconCart class="prices__btn-black-img" />
            <p class="prices__btn-black-text">Купить</p>
          </a>
        </div>

        <div class="prices__card">
          <div class="prices__topbar prices__topbar_red">
            <p class="prices__topbar-text">ЛУЧШИЙ ВЫБОР</p>
          </div>
          <p class="prices__card-title">3 упаковки</p>
          <p class="prices__card-subtitle">Phytosterol forte</p>
          <img
            src="../../assets/img/prices/three-bottles.jpg"
            alt="Bottles"
            class="prices__card-image"
          />
          <div class="prices__card-price-block">
            <p class="prices__card-price">700 ₽</p>
            <p class="prices__card-price-text">за<br />1 уп.</p>
          </div>
          <p class="prices__card-sum">сумма 2100 ₽</p>
          <p class="prices__card-economy">экономия 600 ₽</p>
          <a href="#" class="prices__btn-red" @click="showNewOrder = true">
            <IconCart class="prices__btn-red-img" />
            <p class="prices__btn-red-text">Купить</p>
          </a>
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
@import "@/assets/styles/Home/prices.scss";
</style>

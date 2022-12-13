<script>
import NewOrder from "@/components/Popups/NewOrder.vue";

export default {
  components: {
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
  <header id="header" class="header">
    <div class="container">
      <div class="header__wrapper">
        <a href="index.html" class="header__logo-link">
          <img
            src="../../assets/img/logo.png"
            alt="Miafarm logo"
            class="header__logo-image"
          />
        </a>
        <ul class="header__menu">
          <li class="header__menu-item">
            <a href="#features" class="header__menu-link">О продукте</a>
          </li>
          <li class="header__menu-item">
            <a href="#advantages" class="header__menu-link">Преимущества</a>
          </li>
          <li class="header__menu-item">
            <a href="#prices" class="header__menu-link">Цены</a>
          </li>
          <li class="header__menu-item">
            <a href="#faq" class="header__menu-link">Вопрос-ответ</a>
          </li>
          <li class="header__menu-item">
            <a href="#reviews" class="header__menu-link">Отзывы</a>
          </li>
          <li class="header__menu-item">
            <a href="#certificate" class="header__menu-link">Сертификат</a>
          </li>
          <li class="header__menu-item">
            <a
              href="#"
              class="header__menu-link header__menu-link_red"
              @click="showNewOrder = true"
              >Купить</a
            >
          </li>
        </ul>
      </div>
    </div>
  </header>

  <Teleport to="body">
    <NewOrder :show="showNewOrder" @close="showNewOrder = false">
      <template #new-order></template>
    </NewOrder>
  </Teleport>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Main/header.scss";
</style>

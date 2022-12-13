<script>
import IconProstate from "../Icons/IconProstate.vue";
import IconPower from "../Icons/IconPower.vue";
import IconLibido from "../Icons/IconLibido.vue";
import IconPain from "../Icons/IconPain.vue";
import IconToilet from "../Icons/IconToilet.vue";
import IconImmunity from "../Icons/IconImmunity.vue";
import IconActivity from "../Icons/IconActivity.vue";

export default {
  components: {
    IconProstate,
    IconPower,
    IconLibido,
    IconPain,
    IconToilet,
    IconImmunity,
    IconActivity,
  },
};
</script>

<template>
  <section id="features" class="features">
    <div class="container">
      <h2 class="features__title">ФИТОСТЕРОЛ ФОРТЕ ДЛЯ ЗДОРОВЬЯ ПРОСТАТЫ</h2>
      <div class="features__wrapper">
        <ul class="features__list">
          <li
            class="features__list-item animate__animated animate__fadeInRight animate__delay-1s"
          >
            <div class="features__list-circle">
              <IconProstate />
            </div>
            <p class="features__list-text">
              лечит и предотвращает острый и хронический простатит и аденому
              предстательной железы
            </p>
          </li>
          <li class="features__list-item">
            <div class="features__list-circle">
              <IconPower />
            </div>
            <p class="features__list-text">повышает уровень тестостерона</p>
          </li>
          <li class="features__list-item">
            <div class="features__list-circle">
              <IconLibido />
            </div>
            <p class="features__list-text">повышает либидо</p>
          </li>
          <li class="features__list-item">
            <div class="features__list-circle">
              <IconPain />
            </div>
            <p class="features__list-text">
              уменьшает неприятные ощущения внизу живота
            </p>
          </li>
          <li class="features__list-item">
            <div class="features__list-circle">
              <IconToilet />
            </div>
            <p class="features__list-text">уменьшает позывы к мочеиспусканию</p>
          </li>
          <li class="features__list-item">
            <div class="features__list-circle">
              <IconImmunity />
            </div>
            <p class="features__list-text">повышает иммунитет</p>
          </li>
          <li class="features__list-item">
            <div class="features__list-circle">
              <IconActivity />
            </div>
            <p class="features__list-text">
              подходит для людей с разным уровнем физической активности
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/features.scss";
</style>

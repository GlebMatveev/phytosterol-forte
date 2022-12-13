<script>
import IconSecurity from "../Icons/IconSecurity.vue";
import IconCapsule from "../Icons/IconCapsule.vue";
import IconIngredients from "../Icons/IconIngredients.vue";
import IconLowCost from "../Icons/IconLowCost.vue";
import IconPill from "../Icons/IconPill.vue";
import IconCertificate from "../Icons/IconCertificate.vue";

export default {
  components: {
    IconSecurity,
    IconCapsule,
    IconIngredients,
    IconLowCost,
    IconPill,
    IconCertificate,
  },
};
</script>

<template>
  <section id="advantages" class="advantages">
    <div class="container">
      <div class="advantages__title-block">
        <p class="advantages__title-spirit">Phytosterol forte</p>
        <h2 class="advantages__title">ПРЕИМУЩЕСТВА</h2>
        <p class="advantages__subtitle">Phytosterol forte</p>
      </div>
      <div class="advantages__card-block">
        <div class="advantages__card">
          <IconCapsule class="advantages__card-icon" />
          <h3 class="advantages__card-title">КОМПЛЕКСНЫЙ СОСТАВ</h3>
          <p class="advantages__card-text">
            Помимо основного действующего вещества, экстракта плодов пальмы
            Сабаль, в составе средства содержится суточная потребность
            микроэлемента цинк.
          </p>
        </div>

        <div class="advantages__card">
          <IconSecurity class="advantages__card-icon" />
          <h3 class="advantages__card-title">ВЫСОКИЙ УРОВЕНЬ БЕЗОПАСНОСТИ</h3>
          <p class="advantages__card-text">
            Совместим с другими препаратами. Не вызывает привыкания и
            зависимости. Отсутствуют побочные эффекты. Можно принимать
            длительное время.
          </p>
        </div>

        <div class="advantages__card">
          <IconIngredients class="advantages__card-icon" />
          <h3 class="advantages__card-title">НАТУРАЛЬНЫЕ ИНГРЕДИЕНТЫ</h3>
          <p class="advantages__card-text">
            Капсула из натурального говяжьего желатина, не содержит красителей.
            Экстракт плодов пальмы сабаль. Экстракт коры пиджеума. Цитрат цинка.
          </p>
        </div>

        <div class="advantages__card">
          <IconLowCost class="advantages__card-icon" />
          <h3 class="advantages__card-title">НЕВЫСОКАЯ СТОИМОСТЬ</h3>
          <p class="advantages__card-text">
            Благодаря комплексному составу препарата, целых три действующих
            вещества в одном продукте, один препарат заменяет три. При покупке
            онлайн - стоимость ниже!
          </p>
        </div>

        <div class="advantages__card">
          <IconPill class="advantages__card-icon" />
          <h3 class="advantages__card-title">УДОБСТВО ПРИЕМА</h3>
          <p class="advantages__card-text">
            Приём по 1 капсуле в день. Упаковки хватает на целый месяц.
          </p>
        </div>

        <div class="advantages__card">
          <IconCertificate class="advantages__card-icon" />
          <h3 class="advantages__card-title">СЕРТИФИЦИРОВАННЫЙ ПРЕПАРАТ</h3>
          <p class="advantages__card-text">
            Имеется сертификат государственной регистрации. Продается в аптеках.
            Рекомендуется врачами.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/advantages.scss";
</style>

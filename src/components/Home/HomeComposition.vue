<script>
import IconPalm from "../Icons/IconPalm.vue";
import IconLeaf from "../Icons/IconLeaf.vue";
import IconZinc from "../Icons/IconZinc.vue";

export default {
  components: {
    IconPalm,
    IconLeaf,
    IconZinc,
  },
};
</script>

<template>
  <section id="composition" class="composition">
    <div class="container">
      <div class="composition__wrapper">
        <div class="composition__left-side">
          <h2 class="composition__title">СОСТАВ ПРОДУКТА</h2>
          <img
            src="../../assets/img/composition/composition.jpg"
            alt="Composition"
            class="composition__left-image"
          />
        </div>
        <div class="composition__right-side">
          <div class="composition__items">
            <div class="composition__item">
              <div class="composition__icon-background">
                <IconPalm class="composition__item-icon" />
              </div>
              <div class="composition__item-block">
                <h3 class="composition__item-title">
                  Экстракт плодов пальмы сабаль
                </h3>
                <p class="composition__item-text">
                  Применяется для нормализации функций предстательной железы,
                  профилактики и терапии простатита и лечения заболеваний
                  мочеполовой системы.
                </p>
              </div>
            </div>
            <div class="composition__item">
              <div class="composition__icon-background">
                <IconLeaf class="composition__item-icon" />
              </div>
              <div class="composition__item-block">
                <h3 class="composition__item-title">Экстракт коры пиджеума</h3>
                <p class="composition__item-text">
                  Снижает системное воспаление, подавляет симптоматику
                  доброкачественной гиперплазии предстательной железы,
                  простатита, патологий мочевыводящих путей и почек. Повышает
                  либидо.
                </p>
              </div>
            </div>
            <div class="composition__item">
              <div class="composition__icon-background">
                <IconZinc class="composition__item-icon" />
              </div>
              <div class="composition__item-block">
                <h3 class="composition__item-title">Цитрат цинка</h3>
                <p class="composition__item-text">
                  Стимулирует повышение уровня тестостерона. Являясь
                  биологическим компонентом, цинк присутствует во многих
                  органах, тканях и клеточных структурах организма. Максимальная
                  концентрация вещества приходится на простату.
                </p>
              </div>
            </div>
          </div>
          <img
            src="../../assets/img/composition/bottle.png"
            alt="Bottle"
            class="composition__right-image"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/composition.scss";
</style>

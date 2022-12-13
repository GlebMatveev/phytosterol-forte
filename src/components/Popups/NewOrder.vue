<script>
export default {
  props: {
    show: Boolean,
  },
  emits: ["close"],
  data() {
    return {
      value: "2100",
      checked: true,
    };
  },
};
</script>

<template>
  <Transition name="modal">
    <div v-if="show" class="modal__mask">
      <div class="modal__wrapper">
        <div class="modal__container">
          <div class="modal__close" @click="$emit('close')">✕</div>
          <div class="modal__text-block">
            <h2 class="modal__title">Оформление заказа</h2>
            <form action="php/payment.php" method="post" class="modal__form">
              <h3 class="modal__subtitle">ВЫБОР ТОВАРА</h3>
              <div class="form__product">
                <input
                  id="radio-1"
                  v-model="value"
                  class="form__product-radio"
                  type="radio"
                  name="value"
                  value="900"
                />
                <label class="form__product-label" for="radio-1">
                  <p class="form__product-name">Фитостерол форте</p>
                  <p class="form__product-count">1 упаковка</p>
                  <p class="form__product-sum">900 рублей</p>
                  <p class="form__product-discount"></p>
                </label>
              </div>
              <div class="form__product">
                <input
                  id="radio-2"
                  v-model="value"
                  class="form__product-radio"
                  type="radio"
                  name="value"
                  value="1600"
                />
                <label class="form__product-label" for="radio-2">
                  <p class="form__product-name">Фитостерол форте</p>
                  <p class="form__product-count">2 упаковки</p>
                  <p class="form__product-sum">1600 рублей</p>
                  <p class="form__product-discount">экономия 200 ₽</p>
                </label>
              </div>
              <div class="form__product">
                <input
                  id="radio-3"
                  v-model="value"
                  class="form__product-radio"
                  type="radio"
                  name="value"
                  value="2100"
                  checked
                />
                <label class="form__product-label" for="radio-3">
                  <p class="form__product-name">Фитостерол форте</p>
                  <p class="form__product-count">3 упаковки</p>
                  <p class="form__product-sum">2100 рублей</p>
                  <p class="form__product-discount">экономия 600 ₽</p>
                </label>
              </div>

              <h3 class="modal__subtitle">АДРЕС ДОСТАВКИ</h3>
              <p class="modal__text">
                Внимание! Доставка в радиусе 300 км от города Казани бесплатная.
                Сумму доставки в остальные города рассчитает оператор и уточнит
                при обратном звонке.
              </p>
              <div class="form__input-row">
                <input
                  placeholder="ФИО"
                  name="fio"
                  type="text"
                  class="form__input"
                  required
                />
                <input
                  placeholder="Номер телефона"
                  name="phone"
                  type="tel"
                  class="form__input"
                  required
                />
              </div>
              <div class="form__input-row">
                <input
                  placeholder="Город"
                  name="city"
                  type="text"
                  class="form__input"
                  required
                />
                <input
                  placeholder="Индекс"
                  name="zipcode"
                  type="text"
                  class="form__input"
                  required
                />
              </div>

              <input
                placeholder="Адрес"
                name="address"
                type="text"
                class="form__input"
                required
              />

              <div class="form__text-block">
                <h3 class="form__text-subtitle">ИТОГО</h3>
                <div class="form__text-right">
                  <p class="form__text-right-label">Сумма заказа:</p>
                  <p class="form__text-right-sum">{{ value }} рублей</p>
                </div>
              </div>

              <div class="form__button-wrapper">
                <button class="form__button" type="submit">Оплатить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Popups/new-order.scss";
</style>

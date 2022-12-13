<script>
export default {
  props: {
    show: Boolean,
  },
  emits: ["close"],
};
</script>

<template>
  <Transition name="modal">
    <div v-if="show" class="modal__mask">
      <div class="modal__wrapper">
        <div class="modal__container">
          <div class="modal__close" @click="$emit('close')">✕</div>
          <div class="modal__text-block">
            <h2 class="modal__title">Юридическая информация</h2>
            <p class="modal__text">
              Общество с ограниченной ответственностью «МИАФАРМ»<br />
              420088, г. Казань, ул. Зур Урам, дом 9А кв 8<br />
              тел. 89276752120<br />
              ОГРН 1211600043247<br />
              ИНН 1660364581<br />
              КПП 166001001<br />
              БИК 042202824<br />
              к/с 30101810200000000824<br />
              р/с 40702810929160002865 в АО «АЛЬФА-Банк»
            </p>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Popups/legal-data.scss";
</style>

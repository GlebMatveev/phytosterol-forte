<script>
import IconWhatsApp from "../Icons/IconWhatsApp.vue";
import IconTelegram from "../Icons/IconTelegram.vue";
import IconPhone from "../Icons/IconPhone.vue";

export default {
  components: {
    IconWhatsApp,
    IconTelegram,
    IconPhone,
  },
};
</script>

<template>
  <div class="messengers">
    <a href="https://wa.me/+79276752120" class="messengers__link">
      <IconWhatsApp />
    </a>
    <a href="https://t.me/+79276752120" class="messengers__link">
      <IconTelegram />
    </a>
    <a href="tel:+79276752120" class="messengers__link">
      <IconPhone />
    </a>
  </div>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Main/messengers.scss";
</style>

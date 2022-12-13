<script>
import LegalData from "@/components/Popups/LegalData.vue";
import PrivacyPolicy from "@/components/Popups/PrivacyPolicy.vue";

export default {
  components: {
    LegalData,
    PrivacyPolicy,
  },
  data() {
    return {
      showLegalData: false,
      showPrivacyPolicy: false,
    };
  },
};
</script>

<template>
  <footer id="footer" class="footer">
    <div class="container">
      <div class="footer__wrapper">
        <div class="footer__left-side">
          <div class="footer__company-block">
            <img
              src="../../assets/img/logo.png"
              alt="Logo"
              class="footer__logo"
            />
            <p class="footer__company-title">ООО «МИАФАРМ»</p>
          </div>
          <p class="footer__address">
            420088, Россия, Республика Татарстан, г. Казань, ул. ЗурУрам, д.9А
          </p>
        </div>

        <div class="footer__right-side">
          <a class="footer__contact" href="tel:+79276752120"
            >+7 (927) 675-21-20</a
          >
          <a class="footer__contact" href="mailto:miapharmkzn@mail.ru"
            >miapharmkzn@mail.ru</a
          >
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="footer__bottom-wrapper">
          <a href="" class="footer__bottom-copyright"
            >2022 © Codekeepers - разработка сайтов и приложений</a
          >
          <div class="footer__bottom-links">
            <a class="footer__bottom-link" @click="showLegalData = true"
              >Юридическая информация</a
            >
            <a class="footer__bottom-link" @click="showPrivacyPolicy = true"
              >Политика конфиденциальности</a
            >
          </div>
        </div>
      </div>
    </div>

    <Teleport to="body">
      <LegalData :show="showLegalData" @close="showLegalData = false">
        <template #legal-data></template>
      </LegalData>
    </Teleport>

    <Teleport to="body">
      <PrivacyPolicy
        :show="showPrivacyPolicy"
        @close="showPrivacyPolicy = false"
      >
        <template #privacy-policy></template>
      </PrivacyPolicy>
    </Teleport>
  </footer>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Main/footer.scss";
</style>

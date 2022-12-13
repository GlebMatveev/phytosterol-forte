<script>
import IconQuote from "../Icons/IconQuote.vue";
import IconPlus from "../Icons/IconPlus.vue";

export default {
  components: {
    IconQuote,
    IconPlus,
  },

  data() {
    return {
      itemActive: false,

      faqItems: [
        {
          question: "С какого возраста можно принимать препарат?",
          answer: "Препарат можно принимать с 18 лет.",
          activity: false,
        },
        {
          question:
            "Можно ли принимать капсулы во время планирования беременности?",
          answer:
            "Цинк необходим для сперматогенеза, так как входит в состав мужских гормонов, в том числе тестостерона. Без этого микроэлемента невозможно правильное формирование хвоста и наружной мембраны сперматозоида. Приём цинка способствует увеличению количества сперматозоидов, улучшению их подвижности, повышению способности к оплодотворению. \n\nНеблагоприятная экологическая обстановка, постоянный стресс, курение, злоупотребление алкоголем приводят к тому, что потребность в цинке в организме возрастает. \n\nЕжедневно мужчине нужно 15 мг цинка, но потребность в этом микроэлементе увеличивается у мужчин, которые страдают от проблем со здоровьем мочеполовой системы (простатит, пиелонефрит, орхит). При планировании беременности препараты с цинком (как и другие витамины и минералы) следует начинать принимать за 3 месяца до предполагаемого зачатия. Это связано с тем, что на созревание сперматозоидов необходимо от 72 до 90 дней.",
          activity: false,
        },
        {
          question:
            "Аденома простаты, простатит и рак простаты - это одно и то же?",
          answer:
            "Нет, это три разных заболевания: разрастание железы, её воспаление и злокачественная опухоль.",
          activity: false,
        },
        {
          question: "Означает ли аденома простаты неизбежную операцию?",
          answer:
            "Нет, это далеко не всегда так. Есть и медикаментозное лечение ДГПЖ, иногда достаточно наблюдения.",
          activity: false,
        },
        {
          question: "Можно ли предотвратить возникновение аденомы?",
          answer:
            "Можно уменьшить вероятность её появления. Что для этого нужно делать? \nПравильно питаться. Лишний вес и злоупотребление острыми приправами, пряностями, консервами и копченостями могут повысить риск развития ДГПЖ. \nОтказаться от вредных привычек. Курение и регулярное употребление алкоголя могут спровоцировать развитие ДГПЖ. \nБольше двигаться. Малоподвижный образ жизни – ещё один фактор риска для развития ДГПЖ.",
          activity: false,
        },
        {
          question: "Какой метод лечения аденомы самый эффективный?",
          answer:
            "Не бывает единого метода лечения на все случаи. Иначе бы не существовало два десятка различных способов справиться с болезнью. Каждый раз выбирается метод, исходя из того, какая медицинская ситуация наблюдается врачом.",
          activity: false,
        },
      ],
    };
  },

  methods: {
    changeFaqItemsActivity() {},
  },
};
</script>

<template>
  <section id="faq" class="faq">
    <div class="container">
      <h2 class="faq__title">ОТВЕТЫ НА ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
      <div class="faq__items">
        <div
          v-for="(item, index) in faqItems"
          :key="`${index}-${item}`"
          class="faq__item"
        >
          <transition name="fade">
            <div
              class="faq__item-header"
              :class="{ 'faq__item-header_radius': item.activity }"
              @click="
                item.activity == true
                  ? (item.activity = false)
                  : (item.activity = true)
              "
            >
              <IconPlus class="faq__item-button"></IconPlus>
              <h3 class="faq__item-question">{{ item.question }}</h3>
            </div>
          </transition>
          <transition name="fade">
            <div v-if="item.activity" class="faq__item-body">
              <p class="faq__item-answer">{{ item.answer }}</p>
              <IconQuote class="faq__item-icon"></IconQuote>
            </div>
          </transition>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/faq.scss";

.fade-enter-active {
  animation: fadeInDown 0.2s ease;
}
.fade-leave-active {
  animation: fadeInUp 0.2s ease;
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 1;
    // transform: translateY(0);
  }
  100% {
    opacity: 0;
    // transform: translateY(-10px);
  }
}
</style>

<script>
import IconStarFilled from "../Icons/IconStarFilled.vue";

export default {
  components: {
    IconStarFilled,
  },
};
</script>

<template>
  <section id="reviews" class="reviews">
    <div class="container reviews__container">
      <h2 class="reviews__title">ОТЗЫВЫ ПОКУПАТЕЛЕЙ</h2>
      <div class="reviews__cards">
        <div class="reviews__card">
          <div class="reviews__rating">
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
          </div>
          <p class="reviews__text">
            Данный препарат назначил уролог при мочекаменной болезни, купил в
            аптеке намного дороже, пропил месяц, результат отличный, нашел его
            по приятной цене на вайлдбериз, купил на второй месяц здесь, всем
            рекомендую
          </p>
          <a
            class="reviews__name"
            href="https://www.wildberries.ru/catalog/51641873/feedbacks?imtId=38394504&size=97440306"
            target="_blank"
            >Руслан</a
          >
          <p class="reviews__date">22 февраля 2022, 16:41</p>
        </div>
        <div class="reviews__card">
          <div class="reviews__rating">
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
          </div>
          <p class="reviews__text">
            Спасибо за такой действенный препарат! Да ещё и по такой хорошей
            цене;) теперь буду покупать только тут.
          </p>
          <a
            class="reviews__name"
            href="https://www.wildberries.ru/catalog/51641873/feedbacks?imtId=38394504&size=97440306"
            target="_blank"
            >Артём</a
          >
          <p class="reviews__date">19 апреля 2022, 19:55</p>
        </div>
        <div class="reviews__card">
          <div class="reviews__rating">
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
            <IconStarFilled class="reviews__star-filled" />
          </div>
          <p class="reviews__text">
            Всё отлично, товаром доволен, продавца рекомендую
          </p>
          <a
            class="reviews__name"
            href="https://www.wildberries.ru/catalog/51641873/feedbacks?imtId=38394504&size=97440306"
            target="_blank"
            >Игорь</a
          >
          <p class="reviews__date">06 июня 2022, 12:45</p>
        </div>
      </div>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/reviews.scss";
</style>

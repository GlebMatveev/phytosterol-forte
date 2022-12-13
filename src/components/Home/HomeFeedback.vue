<script></script>

<template>
  <section id="feedback" class="feedback">
    <div class="container">
      <h2 class="feedback__title">СВЯЖИТЕСЬ С НАМИ</h2>
      <p class="feedback__description">
        По вопросам сотрудничества или если остались вопросы
      </p>
      <form action="php/form.php" method="post" class="feedback__form">
        <div class="feedback__form-row">
          <input
            placeholder="Ваше имя"
            name="name"
            type="text"
            class="feedback__input"
            required
          />
          <input
            placeholder="Email"
            name="email"
            type="email"
            class="feedback__input"
            required
          />
        </div>
        <div class="feedback__form-row">
          <input
            placeholder="Номер телефона"
            name="phone"
            type="tel"
            class="feedback__input"
            required
          />
          <select id="select" name="select" class="feedback__select">
            <option>Вопрос о продукте</option>
            <option>Сотрудничество</option>
          </select>
        </div>
        <div class="feedback__form-row">
          <textarea
            placeholder="Текст обращения..."
            name="text"
            class="feedback__textarea"
            required
          ></textarea>
        </div>
        <button class="feedback__button" type="submit">
          Отправить сообщение
        </button>
      </form>
    </div>
  </section>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Home/feedback.scss";
</style>

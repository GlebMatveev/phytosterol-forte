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
            <h2 class="modal__title">Политика конфиденциальности</h2>
            <div class="modal__text">
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >1. Общие положения</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >Настоящая политика обработки персональных данных составлена в
                  соответствии с требованиями Федерального закона от 27.07.2006.
                  №152-ФЗ &laquo;О персональных данных&raquo; (далее - Закон о
                  персональных данных) и определяет порядок обработки
                  персональных данных и меры по обеспечению безопасности
                  персональных данных, предпринимаемые
                  <span style="background: #fcf8e3"
                    >ООО &quot;МИАФАРМ&quot;</span
                  >
                  (далее &ndash; Оператор).</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >1.1. Оператор ставит своей важнейшей целью и условием
                  осуществления своей деятельности соблюдение прав и свобод
                  человека и гражданина при обработке его персональных данных, в
                  том числе защиты прав на неприкосновенность частной жизни,
                  личную и семейную тайну.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >1.2. Настоящая политика Оператора в отношении обработки
                  персональных данных (далее &ndash; Политика) применяется ко
                  всей информации, которую Оператор может получить о посетителях
                  веб-сайта
                  <span style="background: #fcf8e3"
                    >https://phytosterol-forte.ru/</span
                  >.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2. Основные понятия, используемые в Политике</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.1. Автоматизированная обработка персональных данных &ndash;
                  обработка персональных данных с помощью средств вычислительной
                  техники.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.2. Блокирование персональных данных &ndash; временное
                  прекращение обработки персональных данных (за исключением
                  случаев, если обработка необходима для уточнения персональных
                  данных).</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.3. Веб-сайт &ndash; совокупность графических и
                  информационных материалов, а также программ для ЭВМ и баз
                  данных, обеспечивающих их доступность в сети интернет по
                  сетевому адресу
                  <span style="background: #fcf8e3"
                    >https://phytosterol-forte.ru/</span
                  >.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.4. Информационная система персональных данных &mdash;
                  совокупность содержащихся в базах данных персональных данных,
                  и обеспечивающих их обработку информационных технологий и
                  технических средств.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.5. Обезличивание персональных данных &mdash; действия, в
                  результате которых невозможно определить без использования
                  дополнительной информации принадлежность персональных данных
                  конкретному Пользователю или иному субъекту персональных
                  данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.6. Обработка персональных данных &ndash; любое действие
                  (операция) или совокупность действий (операций), совершаемых с
                  использованием средств автоматизации или без использования
                  таких средств с персональными данными, включая сбор, запись,
                  систематизацию, накопление, хранение, уточнение (обновление,
                  изменение), извлечение, использование, передачу
                  (распространение, предоставление, доступ), обезличивание,
                  блокирование, удаление, уничтожение персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.7. Оператор &ndash; государственный орган, муниципальный
                  орган, юридическое или физическое лицо, самостоятельно или
                  совместно с другими лицами организующие и (или) осуществляющие
                  обработку персональных данных, а также определяющие цели
                  обработки персональных данных, состав персональных данных,
                  подлежащих обработке, действия (операции), совершаемые с
                  персональными данными.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.8. Персональные данные &ndash; любая информация,
                  относящаяся прямо или косвенно к определенному или
                  определяемому Пользователю веб-сайта
                  <span style="background: #fcf8e3"
                    >https://phytosterol-forte.ru/</span
                  >.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.9. Персональные данные, разрешенные субъектом персональных
                  данных для распространения, - персональные данные, доступ
                  неограниченного круга лиц к которым предоставлен субъектом
                  персональных данных путем дачи согласия на обработку
                  персональных данных, разрешенных субъектом персональных данных
                  для распространения в порядке, предусмотренном Законом о
                  персональных данных (далее - персональные данные, разрешенные
                  для распространения).</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.10. Пользователь &ndash; любой посетитель веб-сайта
                  <span style="background: #fcf8e3"
                    >https://phytosterol-forte.ru/</span
                  >.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.11. Предоставление персональных данных &ndash; действия,
                  направленные на раскрытие персональных данных определенному
                  лицу или определенному кругу лиц.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.12. Распространение персональных данных &ndash; любые
                  действия, направленные на раскрытие персональных данных
                  неопределенному кругу лиц (передача персональных данных) или
                  на ознакомление с персональными данными неограниченного круга
                  лиц, в том числе обнародование персональных данных в средствах
                  массовой информации, размещение в
                  информационно-телекоммуникационных сетях или предоставление
                  доступа к персональным данным каким-либо иным способом.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.13. Трансграничная передача персональных данных &ndash;
                  передача персональных данных на территорию иностранного
                  государства органу власти иностранного государства,
                  иностранному физическому или иностранному юридическому
                  лицу.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >2.14. Уничтожение персональных данных &ndash; любые действия,
                  в результате которых персональные данные уничтожаются
                  безвозвратно с невозможностью дальнейшего восстановления
                  содержания персональных данных в информационной системе
                  персональных данных и (или) уничтожаются материальные носители
                  персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >3. Основные права и обязанности Оператора</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >3.1. Оператор имеет право:</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; получать от субъекта персональных данных достоверные
                  информацию и/или документы, содержащие персональные
                  данные;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; в случае отзыва субъектом персональных данных
                  согласия на обработку персональных данных Оператор вправе
                  продолжить обработку персональных данных без согласия субъекта
                  персональных данных при наличии оснований, указанных в Законе
                  о персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; самостоятельно определять состав и перечень мер,
                  необходимых и достаточных для обеспечения выполнения
                  обязанностей, предусмотренных Законом о персональных данных и
                  принятыми в соответствии с ним нормативными правовыми актами,
                  если иное не предусмотрено Законом о персональных данных или
                  другими федеральными законами.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >3.2. Оператор обязан:</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; предоставлять субъекту персональных данных по его
                  просьбе информацию, касающуюся обработки его персональных
                  данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; организовывать обработку персональных данных в
                  порядке, установленном действующим законодательством РФ;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; отвечать на обращения и запросы субъектов
                  персональных данных и их законных представителей в
                  соответствии с требованиями Закона о персональных
                  данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; сообщать в уполномоченный орган по защите прав
                  субъектов персональных данных по запросу этого органа
                  необходимую информацию в течение 30 дней с даты получения
                  такого запроса;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; публиковать или иным образом обеспечивать
                  неограниченный доступ к настоящей Политике в отношении
                  обработки персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; принимать правовые, организационные и технические
                  меры для защиты персональных данных от неправомерного или
                  случайного доступа к ним, уничтожения, изменения,
                  блокирования, копирования, предоставления, распространения
                  персональных данных, а также от иных неправомерных действий в
                  отношении персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; прекратить передачу (распространение, предоставление,
                  доступ) персональных данных, прекратить обработку и уничтожить
                  персональные данные в порядке и случаях, предусмотренных
                  Законом о персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; исполнять иные обязанности, предусмотренные Законом о
                  персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >4. Основные права и обязанности субъектов персональных
                  данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >4.1. Субъекты персональных данных имеют право:</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; получать информацию, касающуюся обработки его
                  персональных данных, за исключением случаев, предусмотренных
                  федеральными законами. Сведения предоставляются субъекту
                  персональных данных Оператором в доступной форме, и в них не
                  должны содержаться персональные данные, относящиеся к другим
                  субъектам персональных данных, за исключением случаев, когда
                  имеются законные основания для раскрытия таких персональных
                  данных. Перечень информации и порядок ее получения установлен
                  Законом о персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; требовать от оператора уточнения его персональных
                  данных, их блокирования или уничтожения в случае, если
                  персональные данные являются неполными, устаревшими,
                  неточными, незаконно полученными или не являются необходимыми
                  для заявленной цели обработки, а также принимать
                  предусмотренные законом меры по защите своих прав;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; выдвигать условие предварительного согласия при
                  обработке персональных данных в целях продвижения на рынке
                  товаров, работ и услуг;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; на отзыв согласия на обработку персональных
                  данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; обжаловать в уполномоченный орган по защите прав
                  субъектов персональных данных или в судебном порядке
                  неправомерные действия или бездействие Оператора при обработке
                  его персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; на осуществление иных прав, предусмотренных
                  законодательством РФ.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >4.2. Субъекты персональных данных обязаны:</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; предоставлять Оператору достоверные данные о
                  себе;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; сообщать Оператору об уточнении (обновлении,
                  изменении) своих персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >4.3. Лица, передавшие Оператору недостоверные сведения о
                  себе, либо сведения о другом субъекте персональных данных без
                  согласия последнего, несут ответственность в соответствии с
                  законодательством РФ.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5. Оператор может обрабатывать следующие персональные данные
                  Пользователя</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.1.&nbsp;Фамилия, имя, отчество.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.2.&nbsp;Электронный адрес.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.3.&nbsp;Номера телефонов.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.4. Также на сайте происходит сбор и обработка обезличенных
                  данных о посетителях (в т.ч. файлов &laquo;cookie&raquo;) с
                  помощью сервисов интернет-статистики (Яндекс Метрика и Гугл
                  Аналитика и других).</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.5. Вышеперечисленные данные далее по тексту Политики
                  объединены общим понятием Персональные данные.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.6. Обработка специальных категорий персональных данных,
                  касающихся расовой, национальной принадлежности, политических
                  взглядов, религиозных или философских убеждений, интимной
                  жизни, Оператором не осуществляется.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.7. Обработка персональных данных, разрешенных для
                  распространения, из числа специальных категорий персональных
                  данных, указанных в ч. 1 ст. 10 Закона о персональных данных,
                  допускается, если соблюдаются запреты и условия,
                  предусмотренные ст. 10.1 Закона о персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.8. Согласие Пользователя на обработку персональных данных,
                  разрешенных для распространения, оформляется отдельно от
                  других согласий на обработку его персональных данных. При этом
                  соблюдаются условия, предусмотренные, в частности, ст. 10.1
                  Закона о персональных данных. Требования к содержанию такого
                  согласия устанавливаются уполномоченным органом по защите прав
                  субъектов персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.8.1 Согласие на обработку персональных данных, разрешенных
                  для распространения, Пользователь предоставляет Оператору
                  непосредственно.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.8.2 Оператор обязан в срок не позднее трех рабочих дней с
                  момента получения указанного согласия Пользователя
                  опубликовать информацию об условиях обработки, о наличии
                  запретов и условий на обработку неограниченным кругом лиц
                  персональных данных, разрешенных для распространения.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.8.3 Передача (распространение, предоставление, доступ)
                  персональных данных, разрешенных субъектом персональных данных
                  для распространения, должна быть прекращена в любое время по
                  требованию субъекта персональных данных. Данное требование
                  должно включать в себя фамилию, имя, отчество (при наличии),
                  контактную информацию (номер телефона, адрес электронной почты
                  или почтовый адрес) субъекта персональных данных, а также
                  перечень персональных данных, обработка которых подлежит
                  прекращению. Указанные в данном требовании персональные данные
                  могут обрабатываться только Оператором, которому оно
                  направлено.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >5.8.4 Согласие на обработку персональных данных, разрешенных
                  для распространения, прекращает свое действие с момента
                  поступления Оператору требования, указанного в п. 5.8.3
                  настоящей Политики в отношении обработки персональных
                  данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6. Принципы обработки персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.1. Обработка персональных данных осуществляется на законной
                  и справедливой основе.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.2. Обработка персональных данных ограничивается достижением
                  конкретных, заранее определенных и законных целей. Не
                  допускается обработка персональных данных, несовместимая с
                  целями сбора персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.3. Не допускается объединение баз данных, содержащих
                  персональные данные, обработка которых осуществляется в целях,
                  несовместимых между собой.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.4. Обработке подлежат только персональные данные, которые
                  отвечают целям их обработки.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.5. Содержание и объем обрабатываемых персональных данных
                  соответствуют заявленным целям обработки. Не допускается
                  избыточность обрабатываемых персональных данных по отношению к
                  заявленным целям их обработки.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.6. При обработке персональных данных обеспечивается
                  точность персональных данных, их достаточность, а в
                  необходимых случаях и актуальность по отношению к целям
                  обработки персональных данных. Оператор принимает необходимые
                  меры и/или обеспечивает их принятие по удалению или уточнению
                  неполных или неточных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >6.7. Хранение персональных данных осуществляется в форме,
                  позволяющей определить субъекта персональных данных, не
                  дольше, чем этого требуют цели обработки персональных данных,
                  если срок хранения персональных данных не установлен
                  федеральным законом, договором, стороной которого,
                  выгодоприобретателем или поручителем по которому является
                  субъект персональных данных. Обрабатываемые персональные
                  данные уничтожаются либо обезличиваются по достижении целей
                  обработки или в случае утраты необходимости в достижении этих
                  целей, если иное не предусмотрено федеральным законом.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >7. Цели обработки персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >7.1. Цель обработки персональных данных Пользователя:</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash;&nbsp;информирование Пользователя посредством отправки
                  электронных писем.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >7.2. Также Оператор имеет право направлять Пользователю
                  уведомления о новых продуктах и услугах, специальных
                  предложениях и различных событиях. Пользователь всегда может
                  отказаться от получения информационных сообщений, направив
                  Оператору письмо на адрес электронной почты
                  <span style="background: #fcf8e3">miapharmkzn@mail.ru</span> с
                  пометкой &laquo;Отказ от уведомлений о новых продуктах и
                  услугах и специальных предложениях&raquo;.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >7.3. Обезличенные данные Пользователей, собираемые с помощью
                  сервисов интернет-статистики, служат для сбора информации о
                  действиях Пользователей на сайте, улучшения качества сайта и
                  его содержания.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >8. Правовые основания обработки персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >8.1. Правовыми основаниями обработки персональных данных
                  Оператором являются:</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash;&nbsp;Федеральный закон &quot;Об информации,
                  информационных технологиях и о защите информации&quot; от
                  27.07.2006 N 149-ФЗ;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; федеральные законы, иные нормативно-правовые акты в
                  сфере защиты персональных данных;</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >&ndash; согласия Пользователей на обработку их персональных
                  данных, на обработку персональных данных, разрешенных для
                  распространения.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >8.2. Оператор обрабатывает персональные данные Пользователя
                  только в случае их заполнения и/или отправки Пользователем
                  самостоятельно через специальные формы, расположенные на сайте
                  <span style="background: #fcf8e3"
                    >https://phytosterol-forte.ru/</span
                  >
                  или направленные Оператору посредством электронной почты.
                  Заполняя соответствующие формы и/или отправляя свои
                  персональные данные Оператору, Пользователь выражает свое
                  согласие с данной Политикой.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >8.3. Оператор обрабатывает обезличенные данные о Пользователе
                  в случае, если это разрешено в настройках браузера
                  Пользователя (включено сохранение файлов &laquo;cookie&raquo;
                  и использование технологии JavaScript).</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >8.4. Субъект персональных данных самостоятельно принимает
                  решение о предоставлении его персональных данных и дает
                  согласие свободно, своей волей и в своем интересе.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9. Условия обработки персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.1. Обработка персональных данных осуществляется с согласия
                  субъекта персональных данных на обработку его персональных
                  данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.2. Обработка персональных данных необходима для достижения
                  целей, предусмотренных международным договором Российской
                  Федерации или законом, для осуществления возложенных
                  законодательством Российской Федерации на оператора функций,
                  полномочий и обязанностей.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.3. Обработка персональных данных необходима для
                  осуществления правосудия, исполнения судебного акта, акта
                  другого органа или должностного лица, подлежащих исполнению в
                  соответствии с законодательством Российской Федерации об
                  исполнительном производстве.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.4. Обработка персональных данных необходима для исполнения
                  договора, стороной которого либо выгодоприобретателем или
                  поручителем по которому является субъект персональных данных,
                  а также для заключения договора по инициативе субъекта
                  персональных данных или договора, по которому субъект
                  персональных данных будет являться выгодоприобретателем или
                  поручителем.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.5. Обработка персональных данных необходима для
                  осуществления прав и законных интересов оператора или третьих
                  лиц либо для достижения общественно значимых целей при
                  условии, что при этом не нарушаются права и свободы субъекта
                  персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.6. Осуществляется обработка персональных данных, доступ
                  неограниченного круга лиц к которым предоставлен субъектом
                  персональных данных либо по его просьбе (далее &ndash;
                  общедоступные персональные данные).</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >9.7. Осуществляется обработка персональных данных, подлежащих
                  опубликованию или обязательному раскрытию в соответствии с
                  федеральным законом.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10. Порядок сбора, хранения, передачи и других видов
                  обработки персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >Безопасность персональных данных, которые обрабатываются
                  Оператором, обеспечивается путем реализации правовых,
                  организационных и технических мер, необходимых для выполнения
                  в полном объеме требований действующего законодательства в
                  области защиты персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.1. Оператор обеспечивает сохранность персональных данных и
                  принимает все возможные меры, исключающие доступ к
                  персональным данным неуполномоченных лиц.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.2. Персональные данные Пользователя никогда, ни при каких
                  условиях не будут переданы третьим лицам, за исключением
                  случаев, связанных с исполнением действующего законодательства
                  либо в случае, если субъектом персональных данных дано
                  согласие Оператору на передачу данных третьему лицу для
                  исполнения обязательств по гражданско-правовому
                  договору.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.3. В случае выявления неточностей в персональных данных,
                  Пользователь может актуализировать их самостоятельно, путем
                  направления Оператору уведомление на адрес электронной почты
                  Оператора
                  <span style="background: #fcf8e3">miapharmkzn@mail.ru</span> с
                  пометкой &laquo;Актуализация персональных данных&raquo;.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.4. Срок обработки персональных данных определяется
                  достижением целей, для которых были собраны персональные
                  данные, если иной срок не предусмотрен договором или
                  действующим законодательством.<br />
                  Пользователь может в любой момент отозвать свое согласие на
                  обработку персональных данных, направив Оператору уведомление
                  посредством электронной почты на электронный адрес Оператора
                  <span style="background: #fcf8e3">miapharmkzn@mail.ru</span> с
                  пометкой &laquo;Отзыв согласия на обработку персональных
                  данных&raquo;.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.5. Вся информация, которая собирается сторонними
                  сервисами, в том числе платежными системами, средствами связи
                  и другими поставщиками услуг, хранится и обрабатывается
                  указанными лицами (Операторами) в соответствии с их
                  Пользовательским соглашением и Политикой конфиденциальности.
                  Субъект персональных данных и/или Пользователь обязан
                  самостоятельно своевременно ознакомиться с указанными
                  документами. Оператор не несет ответственность за действия
                  третьих лиц, в том числе указанных в настоящем пункте
                  поставщиков услуг.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.6. Установленные субъектом персональных данных запреты на
                  передачу (кроме предоставления доступа), а также на обработку
                  или условия обработки (кроме получения доступа) персональных
                  данных, разрешенных для распространения, не действуют в
                  случаях обработки персональных данных в государственных,
                  общественных и иных публичных интересах, определенных
                  законодательством РФ.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.7. Оператор при обработке персональных данных обеспечивает
                  конфиденциальность персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.8. Оператор осуществляет хранение персональных данных в
                  форме, позволяющей определить субъекта персональных данных, не
                  дольше, чем этого требуют цели обработки персональных данных,
                  если срок хранения персональных данных не установлен
                  федеральным законом, договором, стороной которого,
                  выгодоприобретателем или поручителем по которому является
                  субъект персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >10.9. Условием прекращения обработки персональных данных
                  может являться достижение целей обработки персональных данных,
                  истечение срока действия согласия субъекта персональных данных
                  или отзыв согласия субъектом персональных данных, а также
                  выявление неправомерной обработки персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >11. Перечень действий, производимых Оператором с полученными
                  персональными данными</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >11.1. Оператор осуществляет сбор, запись, систематизацию,
                  накопление, хранение, уточнение (обновление, изменение),
                  извлечение, использование, передачу (распространение,
                  предоставление, доступ), обезличивание, блокирование, удаление
                  и уничтожение персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >11.2. Оператор осуществляет автоматизированную обработку
                  персональных данных с получением и/или передачей полученной
                  информации по информационно-телекоммуникационным сетям или без
                  таковой.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >12. Трансграничная передача персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >12.1. Оператор до начала осуществления трансграничной
                  передачи персональных данных обязан убедиться в том, что
                  иностранным государством, на территорию которого
                  предполагается осуществлять передачу персональных данных,
                  обеспечивается надежная защита прав субъектов персональных
                  данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >12.2. Трансграничная передача персональных данных на
                  территории иностранных государств, не отвечающих вышеуказанным
                  требованиям, может осуществляться только в случае наличия
                  согласия в письменной форме субъекта персональных данных на
                  трансграничную передачу его персональных данных и/или
                  исполнения договора, стороной которого является субъект
                  персональных данных.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >13. Конфиденциальность персональных данных</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >Оператор и иные лица, получившие доступ к персональным
                  данным, обязаны не раскрывать третьим лицам и не
                  распространять персональные данные без согласия субъекта
                  персональных данных, если иное не предусмотрено федеральным
                  законом.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 18pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 20px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >14. Заключительные положения</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >14.1. Пользователь может получить любые разъяснения по
                  интересующим вопросам, касающимся обработки его персональных
                  данных, обратившись к Оператору с помощью электронной почты
                  <span style="background: #fcf8e3">miapharmkzn@mail.ru</span
                  >.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 0cm;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >14.2. В данном документе будут отражены любые изменения
                  политики обработки персональных данных Оператором. Политика
                  действует бессрочно до замены ее новой версией.</span
                >
              </p>
              <p
                style="
                  margin-top: 0cm;
                  margin-right: 0cm;
                  margin-bottom: 8pt;
                  margin-left: 0cm;
                  line-height: normal;
                  font-size: 15px;
                  font-family: 'Calibri', sans-serif;
                  background: #fefefe;
                "
              >
                <span
                  style="
                    font-size: 16px;
                    font-family: 'Arial', sans-serif;
                    color: #212529;
                  "
                  >14.3. Актуальная версия Политики в свободном доступе
                  расположена в сети Интернет по адресу
                  <span style="background: #fcf8e3"
                    >https://phytosterol-forte.ru/</span
                  >.</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </Transition>
</template>

<style lang="scss" scoped>
@import "@/assets/styles/Popups/privacy-policy.scss";
</style>

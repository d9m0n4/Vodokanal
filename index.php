<?php

get_header(); ?>

<main>
      <section class="first__screen" style="background-image: url('<?php bloginfo('template_url');?>/assets/images/main/1.webp')">
        <div class="first__screen-content container">
          <div class="first__screen-title">
            <h1>Крупнейшее предприятие на территории Яранского района</h1>
          </div>
        </div>
      </section>

      <section class="company__info">
        <div class="container">
          <h2 class="company__info-title title">МУП Водоканал города Яранск</h2>
          <div class="company__info-content box">
            <p>МУП «Водоканал» образован 29.08.2006 г. путем разделения МУП «Визит» на 2 организации: МУП «Водоканал» и МУП «Вулкан».</p>
                   <p>МУП «Водоканал» осуществляет деятельность по водоснабжению и водоотведению на территории Яранского городского поселения и 9 сельских поселений Яранского района.</p>
                   <p>Также осуществляет деятельность по сбору, транспортированию и размещению отходов на полигоне ТКО, предоставляет услуги по помывке в городской бане, в рамках заключенных договоров с Администрацией ЯГП осуществляет деятельность по содержанию и расчистке дорог.</p>
                   <p>В качестве источника водоснабжения используются артезианские скважины, на территории ЯГП – 15 скважин, на территории сельских поселений – 29 скважин. Глубина скважин составляет от 62 до 140 м.</p>
                   <p>На территории г. Яранска действует насосная стация 2 подъема с накопительными резервуарами вместимостью 1000 м3.</p>
                   <p>Ежесуточно потребителям подается около 1600 м3 питьевой воды.</p>
                   <p>Общее число абонентов…, в том числе - …. юридических лиц.</p>
                   <p>Протяженность водопроводных сетей – 204,549 км, сетей канализации – 56,033 км.</p>
                   <p>На обслуживании МУП «Водоканал» имеются очистные сооружения канализации г. Яранска, м. Опытное Поле и м. Знаменка производительностью 6900, 200, 200 м3/сутки соответственно.</p>
          </div>

          <div class="company__info-cards row">
            <div class="company__info-cards__item box">
              <img src="images/icons/waterIcon.svg" class="item__icon image" alt="2" />
              <p class="item__title">Протяженность водопроводных сетей</p>
              <span class="item__subtitle">Суммарной протяженностью: 201,549 км</span>
            </div>

            <div class="company__info-cards__item box">
              <img src="images/icons/TubeIcon.svg" class="item__icon image" alt="2" />
              <p class="item__title">Протяженность канализационных сетей</p>
              <span class="item__subtitle">Суммарной протяженностью: 56,033 км</span>
            </div>

            <div class="company__info-cards__item box">
              <img src="images/icons/waterIcon.svg" class="item__icon image" alt="2" />
              <p class="item__title">Городская канализационная сеть</p>
              <span class="item__subtitle">Суммарной протяженностью: 43,2 км</span>
            </div>
          </div>
        </div>
      </section>

      <section class="services">
        <div class="container">
          <div class="services__wrapper row">
            <div class="services__row row">
              <div data-services="payments" class="services__row-item box">
                <img src="images/icons/payments.svg" alt="" draggable="false" class="item__icon" />
                <p class="item__title">Способы оплаты квитанций</p>
              </div>
              <div data-services="works" class="services__row-item box">
                <img src="images/icons/works.svg" alt="" draggable="false" class="item__icon" />
                <p class="item__title">Отключение водоснабжения</p>
              </div>
              <div class="services__row-item tr services__row-item--full box">
                <p class="item__title">Передача показаний индивидуальных приборов учета</p>
                <span class="item__subtitle">Показания принимаются с 01 по 25 число каждого месяца</span>
                <button data-services="readings" data-control="control" class="button">
                  Передать показания
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="news">
        <div class="container">
          <h2 class="news__title title">Последние новости</h2>
          <div class="news__row ">
            <a href="_news.html" class="news__row-item box">
              <img src="images/main/1.webp" alt="" class="item__image image" />
              <div class="item__body">
                <p class="news__item-text"
                  >Городская баня возобновляет работу с 18 августа в прежнем режиме</p
                >
              </div>
              <span class="item__date">20 февраля 2023</span>
            </a>
            <a href="_news.html" class="news__row-item box">
              <img src="images/main/1.webp" alt="" class="item__image image" />
              <div class="item__body">
                <p class="news__item-text"
                  >Городская баня возобновляет работу с 18 августа в прежнем режиме</p
                >
              </div>
              <span class="item__date">20 февраля 2023</span>
            </a>
            <a href="_news.html" class="news__row-item box">
              <img src="images/main/1.webp" alt="" class="item__image image" />
              <div class="item__body">
                <p class="news__item-text"
                  >Городская баня возобновляет работу с 18 августа в прежнем режиме</p
                >
              </div>
              <span class="item__date">20 февраля 2023</span>
            </a>
          </div>
          <div class="news__more">
            <a href="news.html" class="button">Все новости</a>
          </div>
        </div>
      </section>
    </main>

<?php
	get_footer();
?>

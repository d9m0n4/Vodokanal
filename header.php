<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />
    <!-- <base href="/"> -->

    <title>Муп Водоканал</title>
    <meta name="description" content="Оффициальный сайт МУП Водоканал г. Яранск" />

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />

    <link rel="icon" href="images/favicon.png" />
    <!--	<meta property="og:image" content="images/preview.jpg">-->

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="header">
      <div class="header__top">
        <div class="header__top-links container">
          <a href="https://yandex.ru/maps/org/103389193980" target="_blank">г. Яранск ул. Кирова д. 36</a>
          <a href="tel:+7 (800) 123 45 56">8 (800) 123 45 56</a>
        </div>
      </div>
      <div class="header__main">
        <div class="header__main-body container">
          <a href="index.html" class="header__main-logo">
            <img src="images/icons/logo.svg" alt="logo" class="logo image" />
          </a>
          <nav class="header__main-navigation">
            <ul class="header__navigation-list">
              <li class="header__navigation-list__item">
                <a class="nav__link">О предприятии</a>
                <ul class="navigation__sub-menu box">
                  <li><a href="about.html" class="nav__link">История</a></li>
                  <li><a href="details.html" class="nav__link">Реквизиты</a></li>
                  <li><a href="#" class="nav__link">Вакансии</a></li>
                </ul>
              </li>
              <li class="header__navigation-list__item">
                <a href="news.html" class="nav__link">Новости</a>
              </li>
              <li class="header__navigation-list__item">
                <a class="nav__link">Абонентам</a>
                <ul class="navigation__sub-menu box">
                  <li><a href="tarif.html" class="nav__link">Тарифы</a></li>
                  <li><a href="standards.html" class="nav__link">Нормативы</a></li>
                  <li><a href="services.html" class="nav__link">Услуги</a></li>
                  <li><a href="quality.html" class="nav__link">Показатели качества</a></li>
                  <li><a href="connect.html" class="nav__link">Подключение к сетям</a></li>
                </ul>
              </li>
              <li class="header__navigation-list__item">
                <a href="" class="nav__link">Документы</a>
              </li>
              <li class="header__navigation-list__item">
                <a href="contacts.html" class="nav__link">Контакты</a>
              </li>
            </ul>
          </nav>

          <div class="mobile__navigation-button">
            <button class="mobile__burger">
              <span></span>
            </button>
          </div>
          <nav class="mobile__navigation"></nav>
        </div>
      </div>
    </header>
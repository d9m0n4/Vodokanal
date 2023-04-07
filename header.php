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
          <a href="/" class="header__main-logo">
            <img src="<?php bloginfo('template_url');?>/assets/images/icons/logo.svg" alt="logo" class="logo image" />
          </a>
          <?php
            get_template_part( 'templates_parts/header/header-nav' );
          ?>
        </div>
      </div>
    </header>
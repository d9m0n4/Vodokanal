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
                <p>МУП «Водоканал» осуществляет деятельность по водоснабжению и водоотведению на территории Яранского городского поселения и 9 сельских поселений Яранского района.</p>
                <p>В качестве источника водоснабжения используются артезианские скважины, на территории Яранского Городского Поселения – 15 скважин, на территории сельских поселений – 29 скважин. Глубина скважин составляет от 62 до 140 м.</p>
                <p>На территории г. Яранска действует насосная стация 2 подъема с накопительными резервуарами вместимостью 1000 м3.</p>
                <p>Ежесуточно потребителям подается около 1600 м3 питьевой воды.</p>
                <p>Протяженность водопроводных сетей – 204,549 км, сетей канализации – 56,033 км.</p>
                <p>На обслуживании МУП «Водоканал» имеются очистные сооружения канализации г. Яранска, м. Опытное Поле и м. Знаменка производительностью 6900, 200, 200 м3/сутки соответственно.</p>
          </div>

          <div class="company__info-cards row">
            <div class="company__info-cards__item box">
              <img src="<?php bloginfo('template_url');?>/assets/images/icons/waters.svg" class="item__icon image" alt="2" />
              <p class="item__title">Сети водоснабжения</p>
              <span class="item__subtitle">Суммарной протяженностью: 201,549 км</span>
            </div>

              <div class="company__info-cards__item box">
                  <img src="<?php bloginfo('template_url');?>/assets/images/icons/waters.svg" class="item__icon image" alt="2" />
                  <p class="item__title">Питьевой воды ежесуточно</p>
                  <span class="item__subtitle">Около 1600 м3</span>
              </div>

            <div class="company__info-cards__item box">
              <img src="<?php bloginfo('template_url');?>/assets/images/icons/pipes.svg" class="item__icon image" alt="2" />
              <p class="item__title">Сети канализации</p>
              <span class="item__subtitle">Суммарной протяженностью: 56,033 км</span>
            </div>


          </div>
        </div>
      </section>

      <section class="services">
        <div class="container">
          <div class="services__wrapper row">
            <div class="services__row row">
              <div data-services="payments" class="services__row-item box">
                <img src="<?php bloginfo('template_url');?>/assets/images/icons/payments.svg" alt="" draggable="false" class="item__icon" />
                <p class="item__title">Способы оплаты квитанций</p>
              </div>
              <div data-services="works" class="services__row-item box">
                <img src="<?php bloginfo('template_url');?>/assets/images/icons/works.svg" alt="" draggable="false" class="item__icon" />
                <p class="item__title">Отключение водоснабжения</p>
              </div>
              <div class="services__row-item tr services__row-item--full box">
                <p class="<?php bloginfo('template_url');?>/assets/item__title">Передача показаний индивидуальных приборов учета</p>
                <span class="item__subtitle">Показания принимаются с 01 по 25 число каждого месяца</span>
                <button data-services="readings" data-control="control" class="button">
                  Передать показания
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section>
        <div class="container">
            <div class="box">
                <script src='https://pos.gosuslugi.ru/bin/script.min.js'></script>
                <style>
                    #js-show-iframe-wrapper{position:relative;display:flex;align-items:center;justify-content:center;width:100%;min-width:293px;max-width:100%;background:linear-gradient(138.4deg,#38bafe 26.49%,#2d73bc 79.45%);color:#fff;cursor:pointer}#js-show-iframe-wrapper .pos-banner-fluid *{box-sizing:border-box}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{display:block;width:240px;min-height:56px;font-size:18px;line-height:24px;cursor:pointer;background:#0d4cd3;color:#fff;border:none;border-radius:8px;outline:0}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#1d5deb}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus{background:#2a63ad}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active{background:#2a63ad}@-webkit-keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@keyframes fadeInFromNone{0%{display:none;opacity:0}1%{display:block;opacity:0}100%{display:block;opacity:1}}@font-face{font-family:LatoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWeb;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:LatoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Lato/fonts/Lato-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebLight;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Light.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:RobotoWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Roboto/Roboto-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebRegular;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Regular.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:ScadaWebBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff2) format("woff2"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Scada/Scada-Bold.ttf) format("truetype");font-style:normal;font-weight:400}@font-face{font-family:Geometria;src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot);src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.eot?#iefix) format("embedded-opentype"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:Geometria-ExtraBold;src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot);src:url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.eot?#iefix) format("embedded-opentype"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.woff) format("woff"),url(https://pos.gosuslugi.ru/bin/fonts/Geometria/Geometria-ExtraBold.ttf) format("truetype");font-weight:900;font-style:normal}
                </style>

                <style>
                    #js-show-iframe-wrapper{background:var(--accent)}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2{width:100%;min-height:52px;background:#fff;color:#0b1f33;font-size:16px;font-family:LatoWeb,sans-serif;font-weight:400;padding:0;line-height:1.2}#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:active,#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:focus,#js-show-iframe-wrapper .pos-banner-fluid .pos-banner-btn_2:hover{background:#e4ecfd}#js-show-iframe-wrapper .bf-35{position:relative;display:grid;grid-template-columns:var(--pos-banner-fluid-35__grid-template-columns);grid-template-rows:var(--pos-banner-fluid-35__grid-template-rows);width:100%;max-width:var(--pos-banner-fluid-35__max-width);box-sizing:border-box;grid-auto-flow:row dense}#js-show-iframe-wrapper .bf-35__decor{background:var(--pos-banner-fluid-35__bg-url) var(--pos-banner-fluid-35__bg-url-position) no-repeat;background-size:cover;background-color:#f8efec;position:relative}#js-show-iframe-wrapper .bf-35__content{display:flex;flex-direction:column;padding:var(--pos-banner-fluid-35__content-padding);grid-row:var(--pos-banner-fluid-35__content-grid-row);justify-content:center}#js-show-iframe-wrapper .bf-35__description{display:flex;flex-direction:column;margin:var(--pos-banner-fluid-35__description-margin)}#js-show-iframe-wrapper .bf-35__text{margin:var(--pos-banner-fluid-35__text-margin);font-size:var(--pos-banner-fluid-35__text-font-size);line-height:1.4;font-family:LatoWeb,sans-serif;font-weight:700;color:#0b1f33}#js-show-iframe-wrapper .bf-35__text_small{font-size:var(--pos-banner-fluid-35__text-small-font-size);font-weight:400;margin:0}#js-show-iframe-wrapper .bf-35__bottom-wrap{display:flex;flex-direction:row;align-items:center}#js-show-iframe-wrapper .bf-35__logo-wrap{position:absolute;top:var(--pos-banner-fluid-35__logo-wrap-top);left:0;padding:var(--pos-banner-fluid-35__logo-wrap-padding);background:#fff;border-radius:0 0 8px 0}#js-show-iframe-wrapper .bf-35__logo{width:var(--pos-banner-fluid-35__logo-width);margin-left:1px}#js-show-iframe-wrapper .bf-35__slogan{font-family:LatoWeb,sans-serif;font-weight:700;font-size:var(--pos-banner-fluid-35__slogan-font-size);line-height:1.2;color:#005ca9}#js-show-iframe-wrapper .bf-35__btn-wrap{width:100%;max-width:var(--pos-banner-fluid-35__button-wrap-max-width)}
                </style >
                <div id='js-show-iframe-wrapper'>
                    <div class='pos-banner-fluid bf-35'>

                        <div class='bf-35__decor'>
                            <div class='bf-35__logo-wrap'>
                                <img
                                        class='bf-35__logo'
                                        src='https://pos.gosuslugi.ru/bin/banner-fluid/gosuslugi-logo-blue.svg'
                                        alt='Госуслуги'
                                />
                                <div class='bf-35__slogan'>Решаем вместе</div >
                            </div >
                        </div >
                        <div class='bf-35__content'>
                            <div class='bf-35__description'>
          <span class='bf-35__text'>
            Не убран мусор, яма на дороге, не горит фонарь?
          </span >
                                <span class='bf-35__text bf-35__text_small'>
            Столкнулись с проблемой&nbsp;— сообщите о ней!
          </span >
                            </div >

                            <div class='bf-35__bottom-wrap'>
                                <div class='bf-35__btn-wrap'>
                                    <!-- pos-banner-btn_2 не удалять; другие классы не добавлять -->
                                    <button
                                            class='pos-banner-btn_2'
                                            type='button'
                                    >Написать о проблеме
                                    </button >
                                </div >
                            </div>
                        </div >

                    </div >
                </div >
                <script>

                    (function(){
                        "use strict";function ownKeys(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var o=Object.getOwnPropertySymbols(e);if(t)o=o.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable});n.push.apply(n,o)}return n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};if(t%2)ownKeys(Object(n),true).forEach(function(t){_defineProperty(e,t,n[t])});else if(Object.getOwnPropertyDescriptors)Object.defineProperties(e,Object.getOwnPropertyDescriptors(n));else ownKeys(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}function _defineProperty(e,t,n){if(t in e)Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true});else e[t]=n;return e}var POS_PREFIX_35="--pos-banner-fluid-35__",posOptionsInitialBanner35={background:"#50b3ff","grid-template-columns":"100%","grid-template-rows":"264px auto","max-width":"100%","text-font-size":"20px","text-small-font-size":"14px","text-margin":"0 0 12px 0","description-margin":"0 0 24px 0","button-wrap-max-width":"100%","bg-url":"url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35.svg')","bg-url-position":"right bottom","content-padding":"26px 24px 20px","content-grid-row":"0","logo-wrap-padding":"16px 12px 12px","logo-width":"65px","logo-wrap-top":"0","slogan-font-size":"12px"},setStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_35;Object.keys(e).forEach(function(o){t.style.setProperty(n+o,e[o])})},removeStyles=function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:POS_PREFIX_35;Object.keys(e).forEach(function(e){t.style.removeProperty(n+e)})};function changePosBannerOnResize(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner35),n=document.getElementById("js-show-iframe-wrapper"),o=n?n.offsetWidth:document.body.offsetWidth;if(o>340)t["button-wrap-max-width"]="209px";if(o>360)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35-2.svg')",t["bg-url-position"]="calc(100% + 135px) bottom";if(o>482)t["text-font-size"]="23px",t["text-small-font-size"]="18px",t["bg-url-position"]="center bottom";if(o>568)t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35.svg')",t["bg-url-position"]="calc(100% + 35px) bottom",t["text-font-size"]="24px",t["text-small-font-size"]="14px",t["grid-template-columns"]="1fr 292px",t["grid-template-rows"]="100%",t["content-grid-row"]="1",t["content-padding"]="48px 24px";if(o>783)t["grid-template-columns"]="1fr 390px",t["bg-url"]="url('https://pos.gosuslugi.ru/bin/banner-fluid/35/banner-fluid-bg-35-2.svg')",t["bg-url-position"]="calc(100% + 144px) bottom",t["text-small-font-size"]="18px",t["content-padding"]="30px 24px";if(o>820)t["grid-template-columns"]="1fr 420px";if(o>918)t["bg-url-position"]="calc(100% + 100px) bottom";if(o>1098)t["bg-url-position"]="center bottom",t["grid-template-columns"]="1fr 557px",t["text-font-size"]="32px",t["content-padding"]="34px 50px",t["logo-width"]="78px",t["slogan-font-size"]="15px",t["logo-wrap-padding"]="20px 16px 16px";if(o>1422)t["max-width"]="1422px",t["grid-template-columns"]="1fr 720px",t.background="linear-gradient(90deg, #50b3ff 50%, #E0ECFE 50%)";setStyles(t,e)}changePosBannerOnResize(),window.addEventListener("resize",changePosBannerOnResize),window.onunload=function(){var e=document.documentElement,t=_objectSpread({},posOptionsInitialBanner35);window.removeEventListener("resize",changePosBannerOnResize),removeStyles(t,e)};
                    })()
                </script>
                <script>Widget("https://pos.gosuslugi.ru/form", 372595)</script>
            </div>
        </div>
    </section>

    <?php
        if (get_posts()) {
            ?>
        <section class="news">
        <div class="container">
        <h2 class="news__title title">Последние новости</h2>
          <div class="news__row ">

        <?php
              $my_posts = get_posts( array(
                'numberposts' => 5,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => '',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              global $post;

              foreach( $my_posts as $post ){
                setup_postdata( $post );

                ?>
                <a href="_news.html" class="news__row-item box">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="news" class="item__image image" />
              <div class="item__body">
                <p class="news__item-text"><?php the_title()?></p
                >
              </div>
              <span class="item__date"><?php echo date('d.m.Y'); ?></span>
            </a>

            <?php
              }

              wp_reset_postdata();
            ?>
          </div>
          <div class="news__more">
            <a href="news.html" class="button">Все новости</a>
          </div>
        </div>
      </section>
    <?php
        }
      ?>
    </main>

<?php
	get_footer();
?>

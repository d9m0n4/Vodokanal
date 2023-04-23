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
              <img src="<?php bloginfo('template_url');?>/assets/images/icons/waterIcon.svg" class="item__icon image" alt="2" />
              <p class="item__title">Сети водоснабжения</p>
              <span class="item__subtitle">Суммарной протяженностью: 201,549 км</span>
            </div>

              <div class="company__info-cards__item box">
                  <img src="<?php bloginfo('template_url');?>/assets/images/icons/waterIcon.svg" class="item__icon image" alt="2" />
                  <p class="item__title">Среднесуточный подъем воды</p>
                  <span class="item__subtitle">Суммарной протяженностью: 43,2 км</span>
              </div>

            <div class="company__info-cards__item box">
              <img src="<?php bloginfo('template_url');?>/assets/images/icons/TubeIcon.svg" class="item__icon image" alt="2" />
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

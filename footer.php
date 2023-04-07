<footer>
      <div class="footer__main">
        <div class="container">
          <div class="footer__row row">
            <div class="footer__nav row">
              <div class="footer__nav-item">
                <div class="footer__heading">
                  <a href="#" class="footer__nav-link">О предприятии</a>
                </div>
                <div class="footer__heading">
                  <a href="#" class="footer__nav-link">Документы</a>
                </div>
                <div class="footer__heading">
                  <a href="/news.html" class="footer__nav-link">Новости</a>
                </div>
              </div>

              <div class="footer__nav-item">
                <div class="footer__heading">Контакты</div>
                <ul class="footer__nav-list">
                  <li>
                    <span>Директор</span>
                    <a href="#" class="footer__nav-link">8 (83367) 2-14-84 </a>
                  </li>
                  <li>
                    <span>Диспетчер</span>
                    <a href="#" class="footer__nav-link">8 (83367) 2-14-63 </a>
                  </li>

                  <li>
                    <span>Касса</span>
                    <a href="#" class="footer__nav-link">8 (83367) 2-22-46 </a>
                  </li>


                </ul>
              </div>

              <div class="footer__nav-item">
                <div class="footer__heading">Абонентам</div>
                <ul class="footer__nav-list">
                  <li><a href="tarif.html" class="footer__nav-link">Тарифы</a></li>
                  <li><a href="standards.html" class="footer__nav-link">Нормативы</a></li>
                  <li><a href="services.html" class="footer__nav-link">Услуги</a></li>
                  <li><a href="quality.html" class="footer__nav-link">Показатели качества</a></li>
                  <li><a href="connect.html" class="footer__nav-link">Подключение к сетям</a></li>
                </ul>
              </div>

              <div class="footer__nav-item">
                <div class="footer__logo">
                  <img src="<?php bloginfo('template_url');?>/assets/images/icons/logoL.svg" class="logo image" alt="" />
                </div>
                <div class="footer__social">
                  <a href="#">
                    <i class="footer__social-icon">
                      <img src="<?php bloginfo('template_url');?>/assets/images/icons/tgIcon.svg" class="image" alt="" />
                    </i>
                  </a>
                  <a href="#">
                    <i class="footer__social-icon">
                      <img src="<?php bloginfo('template_url');?>/assets/images/icons/vkIcon.svg" class="image" alt="" />
                    </i>
                  </a>
                  <a href="#">
                    <i class="footer__social-icon">
                      <img src="<?php bloginfo('template_url');?>/assets/images/icons/mailIcon.svg" class="image" alt="" />
                    </i>
                  </a>
                </div>
                <div class="footer__info-item">
                  <span>г. Яранск ул. Кирова, 36</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__bottom">
        <span>2023 © МУП Водоканал г. Яранск</span>
      </div>
    </footer>

    <div class="modal">
      <div class="modal__overlay">
        <div data-box="payments" class="modal__content-item box">
          <div class="item__body">
            <button class="close__btn">+</button>
            <h2 class="item__title">Уважаемые Абоненты!</h2>
            <div class="item__content">
              <p>
                На данный момент квитанции за водоснабжение и водоотведение Вы можете оплатить одним
                из следующих способов:
              </p>
              <ul class="item__content-list">
                <li>Касса по адресу г. Яранск ул. Кирова 36</li>
                <li>Банк Сбер онлайн</li>
                <li>Банк ВТБ</li>
                <li>Банк Хлынов</li>
                <li>Банк Россельхоз</li>
              </ul>
            </div>
          </div>
        </div>

        <div data-box="works" class="modal__content-item box">
          <div class="item__body">
            <button class="close__btn">+</button>
            <h2 class="item__title">Уважаемые Абоненты!</h2>
            <p>На данный момент работ на сетях водоснабжения не проводится</p>
          </div>
        </div>

        <div data-box="readings" class="modal__content-item box">
          <div class="item__body">
            <button class="close__btn">+</button>
            <h2 class="item__title">Передача показаний</h2>
            <form class="page__form">
              <div class="form__group">
                <label>
                  <input type="text" class="form__group-input input" placeholder="ФИО" />
                </label>
                <label>
                  <input type="text" class="form__group-input input" placeholder="Лицевой счет" />
                </label>
              </div>
              <div class="form__group">
                <label>
                  <input
                    type="text"
                    class="form__group-input input"
                    placeholder="Показания прибора учета"
                  />
                </label>
              </div>
              <div class="form__group">
                <label>
                  <input
                    type="text"
                    class="form__group-input input"
                    placeholder="Показания второго прибора учета"
                  />
                </label>
              </div>
              <div class="form__group">
                <label>
                  <input type="checkbox" checked class="form__group-input checkbox" />
                  <span class="form__group-check">
                    <span class="form__group-agreement">
                      Я принимаю согласие на обработку <a href="">персональных данных</a>
                    </span>
                  </span>
                </label>
              </div>
              <div class="form__group">
                <button class="form__group-button button">Передать показания</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php wp_footer(); 
      
    ?>
  </body>
</html>
window.addEventListener('DOMContentLoaded', function () {
  // const mapInit = () => {
  //     const map = new ymaps.Map('ymap', {
  //         center: [],
  //         zoom: 15
  //     })
  // }
  // ymaps.ready(mapInit)

  const vacansiesRoot = document.querySelector('#vacancies')

  setTimeout(() => {
    const header = document.querySelector('.header');
    const headerHeight = header.getBoundingClientRect().height;
    document.querySelector(':root').style.setProperty('--header-height', `${headerHeight}px`);
  }, 500);

  const fetchVacancies = async (url) => {
    try {
      const data = await fetch(url)
      const result = await data.json()
      if (data && result.status == 200) {
        return result
      } else {
        throw new Error(result)
      }
    } catch (e) {
      return e
    }
  }

  const renderVacancies = (root) => {
    const url = 'https://opendata.trudvsem.ru/api/v1/vacancies/company/inn/4339008240'
    if (root) {
      fetchVacancies(url).then((data) => {
        if (data.results && !Object.keys(data.results).length) {
          const errorMsg =  `<div><p>Актуальных вакансий нет!</p></div>`
          root.insertAdjacentHTML('afterbegin', errorMsg)
        } else {
          data.results.vacancies.forEach(({vacancy}) => {
            const node = `
          <div class="page__accordion">
            <div data-accordion="title" class="page__accordion-title">
                  ${vacancy['job-name']}
                </div>
                <div data-accordion="content" class="page__accordion-content vacancies">
                    <div class="vacancy__title">Должностные обязанности</div>
                    <div class="vacancy__descr">${vacancy.duty}</div>

                    <div class="vacancy__title">График работы</div>
                    <div class="vacancy__descr">${vacancy.schedule}</div>

                    <div class="vacancy__title">Телефон</div>
                    <div class="vacancy__descr">${vacancy.company.phone}</div>

                    <div class="vacancy__title">Зарплата</div>
                    <div class="vacancy__descr">${vacancy.salary}</div>

                    <div class="vacancy__descr"><a href="${vacancy['vac_url']}" class="button">Подробнее</a></div>
                </div>
          </div>
        `
            root.insertAdjacentHTML('afterbegin', node)
          })
          toggleAccordion('.page__accordion', '.page__accordion-title', 'active');
        }
      }).catch(e => {
        console.error(e)
        const errorMsg =  `<div><p>Не удалось получить данные, попробуйте позже!</p></div>`
        root.insertAdjacentHTML('afterbegin', errorMsg)
      })
    }
  }
  renderVacancies(vacansiesRoot)


  const toggleAccordion = (selector, control, activeClass) => {
    const accordions = document.querySelectorAll(selector);
    if (accordions.length > 0) {
      accordions[0].classList.add(activeClass);
      accordions.forEach((acc) => {
        acc.addEventListener('click', (e) => {
          const currentAccordion = e.currentTarget;
          if (e.target.closest(control)) {
            currentAccordion.classList.toggle(activeClass);
          }
        });
      });
    }
  };
  toggleAccordion('.page__accordion', '.page__accordion-title', 'active');

  const mobileMenu = (burger, navContainer, mainMenu) => {
    const burgerBtn = document.querySelector(burger);
    const mobileNavContainer = document.querySelector(navContainer);
    const menuListCopy = document.querySelector(mainMenu).cloneNode(true);

    const toggleMenu = (e) => {
      const target = e.currentTarget;
      mobileNavContainer.appendChild(menuListCopy);
      document.body.classList.toggle('scroll--off');
      target.classList.toggle('active');
      mobileNavContainer.classList.toggle('open');
    };

    burgerBtn.addEventListener('click', toggleMenu);
  };
  mobileMenu('.mobile__burger', '.mobile__navigation', '.header__navigation-list');

  class Modal {
    constructor(controlBtn, options) {
      this.options = options;
      this.controlBtn = controlBtn;
      this.modalContent = null;
      this.setup();
      this.events();
    }

    setup() {
      this.btns = document.querySelectorAll(`[${this.controlBtn}]`);
      this.modal = document.querySelector('.modal');
    }

    modalOpen(modalContent) {
      modalContent.classList.add('active');
      this.modal.classList.add('active');
    }

    events() {
      this.btns.forEach((el) => {
        el.addEventListener('click', (e) => {
          const currentBtn = e.currentTarget;
          const currentPath = currentBtn.getAttribute('data-services');
          this.modalContent = document.querySelector(`[data-box='${currentPath}']`);
          this.modalOpen(this.modalContent);
        });
      });

      if (this.modal) {
        this.modal.addEventListener('click', (e) => {
          const target = e.target;
          if (target.closest('.close__btn') || e.target.classList.contains('modal__overlay')) {
            this.modalClose();
          }
        });
      }

      window.addEventListener('keydown', (e) => {
        if (this.isModalOpened && e.key === 'Escape') {
          this.modalClose();
        }
      });
    }

    modalClose() {
      this.modal.classList.remove('active');
      this.modalContent.classList.remove('active');
    }

    get isModalOpened() {
      return this.modal.classList.contains('active');
    }
  }
  const modal = new Modal('data-services');
});


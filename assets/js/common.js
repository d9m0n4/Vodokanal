window.addEventListener('DOMContentLoaded', function () {
  // const mapInit = () => {
  //     const map = new ymaps.Map('ymap', {
  //         center: [],
  //         zoom: 15
  //     })
  // }
  // ymaps.ready(mapInit)
  const mainForm = document.querySelector('.page__form');
  const checkbox = mainForm.querySelector('#permission');

  async function fetchVacancies() {
    const response =  await fetch('http://opendata.trudvsem.ru/api/v1/vacancies/company/inn/4339008240')
    return await response.json()
  }

  function renderVacancies () {
    const root = document.getElementById('vacancies')
    fetchVacancies().then(({results}) => {
      results.vacancies.forEach(vacancy => {
        const el = `
          <div class="page__accordion active">
              <div data-accordion="title" class="page__accordion-title">${vacancy.vacancy['job-name']}</div>
               <div data-accordion="content" class="page__accordion-content">
                 <table class="table">
                   <tr>
                     <td class="td table__label">Должностные обязанности</td>
                       <td class="td">${vacancy.vacancy.duty}</td>
                    </tr>
                    <tr>
                        <td class="td table__label">График</td>
                        <td class="td">${vacancy.vacancy.schedule}</td>
                    </tr>
                    <tr>
                        <td class="td table__label">Занятость</td>
                        <td class="td">${vacancy.vacancy.employment}</td>
                    </tr>
                    <tr>
                        <td class="td table__label">Зарплата</td>
                        <td class="td">${vacancy.vacancy.salary} р.</td>
                    </tr>
                    </table>
                </div>
            </div>
        `
        root.insertAdjacentHTML('afterbegin', el)
      })
    }).catch(e => {
      console.log(e)
    })
  }
  renderVacancies()

  function serializeForm(formNode) {
    const { elements } = formNode;
    const formData = new FormData();

    Array.from(elements)
      .filter((e) => !!e.name)
      .forEach((element) => {
        const { name, value } = element;
        formData.append(name, value);
      });

    return formData;
  }

  const sendData = async (data) => {
    return await fetch('/', {
      method: 'POST',
      headers: { 'Content-Type': 'multipart/form-data' },
      body: data,
    });
  };

  const formHandler = async (event) => {
    event.preventDefault();
    const data = serializeForm(event.target);
    const res = await sendData(data);
    console.log(res);
  };

  if (mainForm) {
    mainForm.addEventListener('submit', formHandler);
  }

  setTimeout(() => {
    const header = document.querySelector('.header');
    const headerHeight = header.getBoundingClientRect().height;
    document.querySelector(':root').style.setProperty('--header-height', `${headerHeight}px`);
  }, 500);

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

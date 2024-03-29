window.addEventListener('DOMContentLoaded', function () {
  // const mapInit = () => {
  //     const map = new ymaps.Map('ymap', {
  //         center: [],
  //         zoom: 15
  //     })
  // }
  // ymaps.ready(mapInit)
  const mainForm = document.querySelector('.page__form')

  if (mainForm) {
    mainForm.addEventListener('submit', (e) => {
      e.preventDefault()
      console.log(e);
    })
  }

  setTimeout(() => {
    const header = document.querySelector('.header');
    const headerHeight = header.getBoundingClientRect().height;
    document.querySelector(':root').style.setProperty('--header-height', `${headerHeight}px`);
  }, 500)


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
      const burgerBtn = document.querySelector(burger)
      const mobileNavContainer = document.querySelector(navContainer)
      const menuListCopy = document.querySelector(mainMenu).cloneNode(true)

      const toggleMenu = (e) => {
        const target = e.currentTarget
        mobileNavContainer.appendChild(menuListCopy)
        document.body.classList.toggle('scroll--off');
        target.classList.toggle('active');
        mobileNavContainer.classList.toggle('open');
      }

      burgerBtn.addEventListener('click', toggleMenu)

  }
  mobileMenu('.mobile__burger', '.mobile__navigation', '.header__navigation-list')




  class Modal {
    constructor(controlBtn, options) {
      this.options = options
      this.controlBtn = controlBtn
      this.modalContent = null
      this.setup()
      this.events()
    }

    setup() {
      this.btns = document.querySelectorAll(`[${this.controlBtn}]`)
      this.modal = document.querySelector('.modal')
    }

    modalOpen(modalContent) {
      modalContent.classList.add('active')
      this.modal.classList.add('active')
    }

    events() {
      this.btns.forEach(el => {
        el.addEventListener('click', (e) => {
          const currentBtn = e.currentTarget
          const currentPath = currentBtn.getAttribute('data-services');
          this.modalContent = document.querySelector(`[data-box='${currentPath}']`)
          this.modalOpen(this.modalContent)
        })
      })

      if (this.modal) {
        this.modal.addEventListener('click', (e) => {
          const target = e.target
          if (target.closest('.close__btn') || e.target.classList.contains('modal__overlay') ) {
            this.modalClose()
          }
        })
      }

      window.addEventListener('keydown', (e) => {
        if (this.isModalOpened && e.key === 'Escape') {
            this.modalClose()
        }
      })
    }

    modalClose() {
      this.modal.classList.remove('active')
      this.modalContent.classList.remove('active')
    }

    get isModalOpened() {
      return this.modal.classList.contains('active')
    }

  }
  const modal = new Modal('data-services')
});


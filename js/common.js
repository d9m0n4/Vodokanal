window.addEventListener('DOMContentLoaded', function () {
  // const mapInit = () => {
  //     const map = new ymaps.Map('ymap', {
  //         center: [],
  //         zoom: 15
  //     })
  // }
  // ymaps.ready(mapInit)

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
});

// const elements = document.querySelectorAll('.services__row-item')
// const de = document.querySelectorAll('.item__description')
//
// elements.forEach(element => {
//     function toggleClassName(e) {
//         let elem = e.currentTarget
//         elements.forEach(d => d.classList.remove('opened'))
//         elem.classList.toggle('opened')
//
//     }
//     element.addEventListener('click', toggleClassName)
// })

// const header = document.querySelector('.header__main')
//
// window.addEventListener('scroll', function() {
//     // console.log(header.getBoundingClientRect().top)
//     console.log(window.scrollY > header.getBoundingClientRect().top)
//     // if(window.scrollY > header.getBoundingClientRect().top) {
//     //     header.classList.add('header__fixed')
//     // } else {
//     //     header.classList.remove('header__fixed')
//     // }
// })

const scrollToTopOfElement = (el, elementContainer) => {
  if (el.parentNode.getBoundingClientRect().top < 0) {
    elementContainer.scrollIntoView({ block: 'start' });
  }
};

const serviceItems = document.querySelectorAll('.services__row-item');

serviceItems.forEach((item) => {
  if (item.hasAttribute('data-target')) {
    item.addEventListener('click', (e) => {
      const itemDataPath = item.getAttribute('data-target');
      const modal = document.querySelector('.modal');
      modal.classList.add('active');

      showContent(itemDataPath, modal);
    });
  }
});

function showContent(path, modal) {
  if (path) {
    modal.classList.add('active');
    // const wrapper = document.querySelector('.services')
    document.querySelectorAll(`[data-box]`).forEach((i) => i.classList.remove('active'));
    const currentContent = document.querySelector(`[data-box=${path}]`);
    currentContent.classList.add('active');
    closeContent(currentContent, modal);
    // scrollToTopOfElement(currentContent, wrapper)
  }
}

function closeContent(s, modal) {
  s.querySelector('.close__btn').addEventListener('click', (e) => {
    modal.classList.remove('active');
    s.classList.remove('active');
  });
}

const showModal = (control) => {
  const controlButtons = document.querySelectorAll(`[${control}]`);
  const modal = document.querySelector('.modal');
  controlButtons.forEach((c) => {
    c.addEventListener('click', (e) => {
      const currentTargetPath = e.currentTarget.getAttribute('data-target');
      showContent(currentTargetPath, modal);
    });
  });
};

showModal('data-control');

class ServicesInfo {
  constructor(selector, options) {
    this.selector = selector;
    this.options = options;
  }

  init() {
    console.log(this);
  }

  log() {
    console.log(this.selector);
  }
}

const si = new ServicesInfo('.services__wrapper');

const mobileNav = document.querySelector('.mobile__navigation');
const burgerBtn = document.querySelector('.mobile__burger');
const menu = document.querySelector('.header__navigation-list').cloneNode(1);

const header = document.querySelector('.header');
const headerHeight = header.offsetHeight;
document.querySelector(':root').style.setProperty('--header-height', `${headerHeight}px`);

burgerBtn.addEventListener('click', (e) => {
  const target = e.currentTarget;
  mobileNav.appendChild(menu);
  mobileNav.style.height = header.scrollHeight;
  document.body.classList.toggle('scroll--off');
  target.classList.toggle('active');
  mobileNav.classList.toggle('open');
});

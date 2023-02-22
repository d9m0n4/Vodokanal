window.addEventListener('DOMContentLoaded', function () {

})

const elements = document.querySelectorAll('.services__row-item')
const de = document.querySelectorAll('.item__description')

elements.forEach(element => {
    function toggleClassName(e) {
        let elem = e.currentTarget
        elements.forEach(d => d.classList.remove('opened'))
        elem.classList.toggle('opened')

    }
    element.addEventListener('click', toggleClassName)
})

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


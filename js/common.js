window.addEventListener('DOMContentLoaded', function () {

})

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


const serviceItems = document.querySelectorAll('.services__row-item')

serviceItems.forEach(item => {
    if (item.hasAttribute('data-target')) {
        item.addEventListener('click', () => {
            const itemDataPath = item.getAttribute('data-target')
            showContent(itemDataPath)
        })
    }
})

function showContent (path)  {
    if (path) {
        document.querySelectorAll(`[data-box=${path}]`).forEach(i => i.classList.remove('active'))
        const currentContent = document.querySelector(`[data-box=${path}]`)
        currentContent.classList.add('active')
        closeContent(currentContent)
    }
}

function closeContent(s) {
    s.querySelector('.close__btn').addEventListener('click', (e) => {
        s.classList.remove('active')
    })
}

class ServicesInfo {
    constructor(selector, options) {
        this.selector = selector
        this.options = options
    }

    init() {
        console.log(this)
    }

    log() {
        console.log(this.selector)
    }
}

const si = new ServicesInfo('.services__wrapper')

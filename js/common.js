window.addEventListener('DOMContentLoaded', function () {

})

const elements = document.querySelectorAll('.services__row-item')
const descr = document.querySelectorAll('.item__description')

elements.forEach(element => {
    function toggleClassName(e) {
        e.stopPropagation()
       let elem = e.target.matches('.item__description')
        console.log(elem)
    }
    element.addEventListener('click', toggleClassName)
})
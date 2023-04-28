window.addEventListener('DOMContentLoaded', function () {
    const mainForm = document.querySelector('.page__form');
    const checkbox = mainForm.querySelector('#permission');
    const submitBtn = mainForm.querySelector('#submit__btn')
    const messagesBlock = document.querySelector('.item__message')
    const formModal = document.querySelector('#form-modal')

    function checkForm() {
        submitBtn.disabled = !this.checked
    }

    checkbox.addEventListener('change', checkForm)

    function onSuccess() {
        const message = `<p>Показания успешно переданы!</p>`
        formModal.insertAdjacentHTML('beforeend', message)
    }

    function serializeForm(formNode) {
        const data = new FormData(formNode)
        return data;
    }

    async function sendData  (data)  {
        return await fetch('wp-content/themes/vodokanal/sendForm.php', {
            method: 'POST',
            body: data,
        });
    }
    async function formHandler (event)  {
        try {
            event.preventDefault();
            const data = serializeForm(event.target);
            submitBtn.disabled = true
            const res = await sendData(data);
            console.log(res)
        } catch (e) {
            console.log(e)
        } finally {
            this.reset()
            submitBtn.disabled = false
        }
    }

    if (new Date(Date.now()).getDate() > 29) {
        mainForm.remove()
        const message = `<p>Показания передаются с 1 по 25 число каждого месяца!</p>`
        formModal.insertAdjacentHTML('beforeend', message)
    }

    if (mainForm) {
        mainForm.addEventListener('submit', formHandler);
    }
}
)


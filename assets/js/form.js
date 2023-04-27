window.addEventListener('DOMContentLoaded', function () {
    const mainForm = document.querySelector('.page__form');
    const checkbox = mainForm.querySelector('#permission');
    const submitBtn = mainForm.querySelector('#submit__btn')
    const messagesBlock = document.querySelector('.item__message')
    const mTitle = messagesBlock.querySelector('.item__message-title')
    const mSubTitle = messagesBlock.querySelector('.item__message-subtitle')

    function checkForm() {
        submitBtn.disabled = !this.checked
    }

    checkbox.addEventListener('change', checkForm)

    function onSuccess() {
        console.log(123)
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

        } catch (e) {
            console.log(e)
        } finally {
            this.reset()
            submitBtn.disabled = false
        }
    }

    if (new Date(Date.now()).getDate() > 25) {
        mainForm.remove()
        messagesBlock.style = 'display: flex'
    }

    if (mainForm) {
        mainForm.addEventListener('submit', formHandler);
    }
}
)


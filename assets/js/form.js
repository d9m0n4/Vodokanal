window.addEventListener('DOMContentLoaded', function () {
    const mainForm = document.querySelector('.page__form');
    const checkbox = mainForm.querySelector('#permission');
    const submitBtn = mainForm.querySelector('#submit__btn')

    function checkForm() {
        submitBtn.disabled = !this.checked
    }

    checkbox.addEventListener('change', checkForm)

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
            console.log(data)
            submitBtn.disabled = true
            const res = await sendData(data);
            console.log(res);

        } catch (e) {
            console.log(e)
        } finally {
            this.reset()
            submitBtn.disabled = false
        }
    }

    if (mainForm) {
        mainForm.addEventListener('submit', formHandler);
    }
}
)


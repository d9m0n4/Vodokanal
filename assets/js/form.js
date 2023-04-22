window.addEventListener('DOMContentLoaded', function () {
    const mainForm = document.querySelector('.page__form');
    const checkbox = mainForm.querySelector('#permission');
    const submitBtn = mainForm.querySelector('#submit__btn')

    function checkForm() {
        submitBtn.disabled = !this.checked
    }

    checkbox.addEventListener('change', checkForm)

    function serializeForm(formNode) {
        const {elements} = formNode;
        const formData = new FormData();

        Array.from(elements)
            .filter((e) => !!e.name)
            .forEach((element) => {
                const {name, value} = element;
                formData.append(name, value);
            });

        return formData;
    }

    async function sendData  (data)  {
        return await fetch('/', {
            method: 'POST',
            headers: {'Content-Type': 'multipart/form-data'},
            body: data,
        });
    }

    async function formHandler (event)  {
        event.preventDefault();
        const data = serializeForm(event.target);
        submitBtn.disabled = true
        const res = await sendData(data);
        console.log(res);
        this.reset()
        submitBtn.disabled = false
    }

    if (mainForm) {
        mainForm.addEventListener('submit', formHandler);
    }
}
)


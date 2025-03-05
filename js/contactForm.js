export default function contactForm() {
    'use strict';

    const $form = document.getElementById('contacto_form_id');
    const $submitButton = $form.querySelector('button[type="submit"]');

    $submitButton.disabled = true;

    const submitStatusChecker = () => {
        $submitButton.disabled = !$form.checkValidity();
    };

    const formResetter = () => {
        $form.reset();
        submitStatusChecker();
    };

    const formLocker = (state) => {
        Array.from($form.elements).forEach((element) => {
            element.disabled = state;
        });
    };

    $form.addEventListener('input', function () {
        submitStatusChecker();
    });

    $form.addEventListener('submit', async function (event) {
        event.preventDefault();
        event.stopPropagation();

        if (!$form.checkValidity()) {
            $form.reportValidity();
            return;
        }

        const body = {};

        body.nombre = $form.nombre.value;
        body.email = $form.email.value;
        body.consulta = $form.consulta.value;

        formLocker(true);
        const response = await send('consulta.php', JSON.stringify(body));

        if (!response.ok) {
            setTimeout(() => {
                alert('Ha ocurrido un error. Intentelo nuevamente');
            }, 200);
        } else {
            const json = await response.json();

            if (!json.success) {
                const errors = json.errors;
                errors.forEach((obj, index) => {
                    setTimeout(() => {
                        alert(obj.message);
                    }, index * 100);
                });
            } else {
                setTimeout(() => {
                    alert(json.message);
                    formResetter();
                }, 500);
            }
        }
        formLocker(false);
    });

    async function send(endpoint, body) {
        return await fetch(endpoint, {
            method: 'post',
            mode: 'same-origin',
            cache: 'no-cache',
            redirect: 'follow',
            headers: {
                'Content-Type': 'application/json; charset=utf-8',
            },
            body: body,
        });
    }
}

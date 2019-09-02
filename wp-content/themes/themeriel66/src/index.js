import './scss/style.scss';

(function() {

    const themeUrl = 'http://localhost:3000/wp-content/themes/themeriel66';

    const errorBubble = 'callback__error-field';
    const errorTextbox = 'callback__textbox_error';
    const correctTextbox = 'callback__textbox_correct';

    const callbackName = 'callback_name';
    const callbackPhone = 'callback_phone';
    const callbackSubmit = 'js-callback-submit';

    const name = document.querySelector(`input[name="${callbackName}"]`);
    const phone = document.querySelector(`input[name="${callbackPhone}"]`);
    const fields = [name, phone];

    const showError = (item, errorText) => {
        let errorField = item.parentNode.querySelector(`.${errorBubble}`);
        if (!errorField) {
            errorField = document.createElement('div');
            errorField.classList.add(errorBubble);
        }
        errorField.innerText = errorText;
        item.parentNode.appendChild(errorField);
        item.classList.remove(correctTextbox);
        item.classList.add(errorTextbox);
    };

    const removeError = (item) => {
        const errorField = item.parentNode.querySelector(`.${errorBubble}`);
        if (errorField !== null) {
            errorField.remove();
        }
        item.classList.remove(errorTextbox);
    };

    const validate = (item) => {
        const error = ((item) => {
            if (item.getAttribute('name') === callbackName && item.value.length < 2) {
                return 'Имя должно быть больше 2-х символов';
            }
            if (item.getAttribute('name') === callbackPhone) {
                if (!item.value.replace(/\s/g, '').match(/\+79\d{9}/g)) {
                    return 'Введите верный номер телефона';
                }
            }
            return false;
        })(item);

        if (error) {  // no valid
            showError(item, error);
            return false;
        }

        // valid field
        removeError(item);
        item.classList.add(correctTextbox);
        return true;
    };
    
    async function submit(e) {
        e.preventDefault();

        let formData = new FormData();
        formData.append('name', name.value);
        formData.append('phone', phone.value);

        const url = themeUrl + '/handlers/callback.php';
        const res = await fetch(url, { method: 'post', body: formData });
        const body = await res.json();
        console.log(body);
    }

    fields.forEach((item) => {

        if (item.getAttribute('name') === callbackPhone) {
            $(item).mask("+7 000 000 00 00");  // @TODO: заменить на реализацию на Vanilla JS

            item.addEventListener('focus', () => {
                item.setAttribute('placeholder', '+7 XXX XXX XX XX');
                item.value = item.value.replace(/^(\+7)(\d{3})(\d{3})(\d{2})/g, '$1 $2 $3 $4 ');
            });

            item.addEventListener('blur', () => { 
                item.setAttribute('placeholder', 'Телефон'); 
                item.value = item.value.replace(/\s/g, '');
            });

        }

        item.addEventListener('focus', removeError.bind(null, item));
        item.addEventListener('blur', validate.bind(null, item));
        
    });

    document.querySelector(`.${callbackSubmit}`).addEventListener('click', (e) => {
        e.preventDefault();

        let isValid = true;
        fields.forEach(field => {
            if (!validate(field)) {
                isValid = false;
            }
        });

        if (isValid) submit(e);

    });

})();




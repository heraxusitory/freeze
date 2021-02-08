// checker method
const checkQuestionForm = () => {
    let questionField = $('#question');
    let phoneField = $('#phone');
    let nameField = $('#name');

    return errorListener([questionField, phoneField, nameField], true);
}

// event
const checkQuestionFormOnInput = () => {
    let questionField = $('#question');
    let phoneField = $('#phone');
    let nameField = $('#name');

    return errorListener([questionField, phoneField, nameField]);
}

// Listener method
const errorListener = (fields, checker = false) => {
    let box;
    let withoutErrors = true;
    fields.forEach(($item, index)=>{
        if ($item.val().trim().length) {
            box = $item.closest('.form-group');
            let errorBox = box.find('.error-report');
            errorBox.text('');
            errorBox.hide();
        }
        if (!$item.val().trim().length && checker) {
            box = $item.closest('.form-group');
            let errorBox = box.find('.error-report');
            errorBox.text('Поле является обязательным');
            errorBox.show();
            withoutErrors = false;
        }
    });

    return withoutErrors;
}


const submitQuestion = (event) => {
    let form = $(event.currentTarget);
    if (checkQuestionForm()) {
        $.ajax({
            method: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
            dataType: 'json',
            success(data) {
                $('#modal-application').modal('hide');
                if (data.status === 'ok') {
                    showTooltipModal('Ваша заявка успешно принята, ожидайте обратной связи!');
                }
                if (data.status === 'error') {
                    showTooltipModal('Приносим извенения, сервис временно недоступен :(', true);
                }
            },
            error(error) {
                console.log(error);
            }
        });
    }
    return false;
}

const showTooltipModal = (text, error = false) => {
    let container = $('#alert-box');
    let classProp = 'success';
    if (error === true) {
        classProp = 'danger';
    }
    let template = `
        <div class="alert alert-${classProp}">
            ${text}
        </div>`;
    container.html(template);
    container.show(1000);
    setTimeout(() => {
        container.hide(2000)
    }, 4*1000);
}

$(document).ready(() => {
    let modalW = $('#modal-application');
    modalW.on('input', '#questionForm textarea#question', checkQuestionFormOnInput);
    modalW.on('input', '#questionForm input#phone', checkQuestionFormOnInput);
    modalW.on('input', '#questionForm input#name', checkQuestionFormOnInput);
    modalW.on('submit', '#questionForm', submitQuestion);
});

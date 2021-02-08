// checker method
const checkQuestionForm = () => {
    let questionField = $('#question');
    let phoneField = $('#phone');

    return errorListener([questionField, phoneField], true);
}

// event
const checkQuestionFormOnInput = () => {
    let questionField = $('#question');
    let phoneField = $('#phone');

    return errorListener([questionField, phoneField]);
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
                console.log('tttttt123123');
                $('#modal-application').modal('hide');
            },
            error(error) {
                console.log(error);
            }
        });
    }
    return false;
}

$(document).ready(() => {
    let modalW = $('#modal-application');
    modalW.on('input', '#questionForm textarea#question', checkQuestionFormOnInput);
    modalW.on('input', '#questionForm input#phone', checkQuestionFormOnInput);
    modalW.on('submit', '#questionForm', submitQuestion);
});

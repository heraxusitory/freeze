//Отправка формы на контроллер
const submitRequest = (event) => {
    let form = $(event.currentTarget);
    $.ajax({
        url: form.attr('action'),
        method: "POST",
        data: form.serialize(),
        dataType: "json",
        success: (data) => {
            //Рендерим форму
            let modalBody = $('.modal-body');
            modalBody.html(data.body);
            if (data.result) {
                //скрываем модалку и удаля
                $('#modal-application').modal('hide');
                showTooltipModal('Ваша заявка успешно принята, ожидайте обратной связи!');
            } else {
                modalBody.find('input[type=tel]').mask("+7(999)-999-99-99", {placeholder: "+7(___)-___-__-__"})
            }
        },
        error: (error) => {
            console.log('error', error)
        }

    });
    return false;
}

$(document).ready(() => {
    $('#modal-application').on('submit', '#requestForm', submitRequest);
});

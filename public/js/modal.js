$(document).ready(function () {

    //При закрытии модалки удаляется содержимое тайтла, удаляется форма из DOM
    $('#modal-application').on('hidden.bs.modal', function () {
        let modal =  $(this);
       modal.find('form').remove()
        modal.find('.modal-title').text('')
    })

    //Отправка формы на контроллер
    $('.modal-body').on('submit', 'form', function () {
        let form = $(this)
        $.ajax({
            url: form.attr('action'),
            method: "POST",
            data: form.serialize(),
            dataType: "json",
            success: (data) => {
                //Рендерим форму
                let modalBody =  $('.modal-body');
                modalBody.html(data.body);
                if (data.result) {
                    //скрываем модалку и удаля
                    $('#modal-application').modal('hide');
                } else {
                    modalBody.find('input[type=tel]').mask("+7(999)-999-99-99", {placeholder: "+7(___)-___-__-__"})
                }
            },
            error: (error) => {
                console.log('error', error)
            }

        });
        return false;
    })

    //Навешивание сабмита на форму в модальном окне
    $('.modal-content').on('click', '.send-form', function () {
        $('.modal-body').find('form').submit();
    })

    //Рендеринг формы в модальное окно, рендеринг тайтла,
    $('.application').click(function () {
        let form = $(this);
        let modalBody = $('.modal-body');
        let modalTitle = $('.modal-title');
        $.ajax({
            url: form.attr('data-url'),
            method: "GET",
            data: "",
            beforeSend: () => {
                modalBody.html(
                    "<div class='spinner-border text-success' role='status'> <span class='sr-only'>Loading...</span> </div>"
                )
            },
            dataType: "json",
            success: (data) => {
                modalBody.html(data.form);
                modalTitle.text(data.title)
                form.find('.modal-title').text(form.title)
                modalBody.find('input[type=tel]').mask("+7(999)-999-99-99", {placeholder: "+7(___)-___-__-__"})
            },
            complete: () => {
            },
            error: (error) => {
                console.log(error)

            }
        })
    })
})

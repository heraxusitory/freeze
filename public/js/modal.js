$(document).ready(function () {

    //При закрытии модалки удаляется содержимое тайтла, удаляется форма из DOM
    $('#modal-application').on('hidden.bs.modal', function () {
        let modal = $(this);
        modal.find('form').remove()
        modal.find('.modal-title').text('')
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
                modalBody.find('#rating').rateYo({
                    rating: 1,
                    fullStar: true,
                    multiColor: true,
                    spacing: "5px",
                    onSet: function (rating, rateYoInstance) {
                        modalBody.find('input[name=rating]').attr('value', rating)
                    }
                });
            },
            complete: () => {
            },
            error: (error) => {
                console.log(error)

            }
        })
    })
})

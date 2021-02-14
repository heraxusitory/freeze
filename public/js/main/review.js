const submitReview = (event) => {
    let form = $(event.currentTarget);
    $.ajax({
        url: form.attr('action'),
        method: form.attr('method'),
        data: form.serialize(),
        dataType: "json",
        success: (data) => {
            //Рендерим форму
            let modalBody =  $('.modal-body');
            modalBody.html(data.body);
            if (data.result) {
                //скрываем модалку и удаля
                $('#modal-application').modal('hide');
                showTooltipModal('Спасибо за отзыв!');
            } else {
                modalBody.find('input[type=tel]').mask("+7(999)-999-99-99", {placeholder: "+7(___)-___-__-__"})
                modalBody.find('#rating').rateYo({
                    rating:  modalBody.find('input[name=rating]').val(),
                    fullStar: true,
                    multiColor: true,
                    spacing: "5px",
                    onSet: function(rating, rateYoInstance) {
                        modalBody.find('input[name=rating]').attr('value',rating)
                    }
                });
            }
        },
        error: (error) => {
            console.log('error', error)
        }

    });
    return false;
}

$(document).ready(() => {
    $('#modal-application').on('submit', '#reviewForm', submitReview);
});

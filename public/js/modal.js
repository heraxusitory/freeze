$(document).ready(function () {

    $('.modal-body').on('click', '#phoneNumber', function() {
        console.log($(this))
        $(this).mask("+7(999)-999-99-99", {placeholder: "+7(___)-___-__-__"})
    })

    $('.modal-body').on('submit', '#formID', function () {
        let form = $(this)
        $.ajax({
            url: form.attr('action'),
            method: "POST",
            data: form.serialize(),
            dataType: "json",
            success: (data) => {
                console.log('success', data)
                $('.modal-body').html(data.body);
                if(data.result) {
                    $('#modal-application').modal('hide');
                    $('.modal-body').find(form).remove()
                }
            },
            error: (error) => {
                console.log('error', error)
            }

        });
        return false;
    })

    $('.modal-content').on('click', '#sendForm', function () {
        console.log($(this))
        $('.modal-body').find('form').submit();
    })

    $('.application').click(function () {
        let form = $(this);
        $.ajax({
            url: form.attr('data-url'),
            method: "GET",
            data: "",
            beforeSend: () => {
                $('.modal-body').html(
                    "<div class='spinner-border text-success' role='status'> <span class='sr-only'>Loading...</span> </div>"
                )
            },
            dataType: "json",
            success: (data) => {
                $('.modal-body').html(data.form);
                console.log(data)
            },
            complete: () => {
            },
            error: (error) => {
                console.log(error)

            }
        })
    })


})

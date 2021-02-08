$(document).ready(function () {

    $('.modal-body').on('submit', '#formID', function () {
        let form = $(this)
        $.ajax({
            url: form.attr('action'),
            method: "POST",
            data: form.serialize(),
            dataType: "json",
            success: (data) => {
                console.log('success', data)
                $('#modal-application').modal('hide');
            },
            error: (error) => {
                console.log('error', error)
            }

        });
        return false;
    })

    $('.modal-content').on('click', '#sendForm', function () {
        console.log($(this))
        $('.modal-body').find('#formID').submit();
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
                consolr.log(error)
            }
        })
    })
})

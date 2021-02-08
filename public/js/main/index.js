const blurHeader = (event) => {
    let headerMedia = $('#mediaHeader');
    if (window.scrollY > 5) {
        headerMedia.addClass('blured')
    }
    if (window.scrollY <= 10) {
        if (headerMedia.hasClass('blured')) {
            headerMedia.removeClass('blured')
        }
    }
}





$(document).ready(() => {

    $('body').on('wheel', blurHeader);

    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});

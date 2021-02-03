const blurHeader = (event) => {
    console.log('window.scrollY', window.scrollY);
    let headerMedia = $('#mediaHeader');
    if (window.scrollY > 20) {
        headerMedia.addClass('blured')
    }
    if (window.scrollY <= 20) {
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

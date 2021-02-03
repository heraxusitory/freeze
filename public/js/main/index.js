const blurHeader = (event) => {
    console.log('window.scrollY', window.scrollY);
    let headerMedia = $('#mediaHeader');
    if (window.scrollY > 10) {
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
});

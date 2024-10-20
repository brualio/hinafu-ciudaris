

document.addEventListener("DOMContentLoaded", () => {
    document.addEventListener( 'wpcf7mailsent', function( event ) {

        if ( '91' == event.detail.contactFormId || '362' == event.detail.contactFormId || '1173' == event.detail.contactFormId || '1435' == event.detail.contactFormId) { 
                window.open(document.querySelector('.atencionclienteurl').dataset.url,'_blank')      
        }

        else if ('2531' == event.detail.contactFormId || '2532' == event.detail.contactFormId) {
            MessageOlvidastePortal.classList.remove('popUp-g__active')
        }
        }, false );
})



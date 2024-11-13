const swiper = new Swiper('.esdevenimentsSlider', {
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: true,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        bulletAriaLabel: 'Ir a la diapositiva {{index}}'
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    a11y: {
        prevSlideMessage: 'Diapositiva anterior',
        nextSlideMessage: 'Siguiente diapositiva',
        firstSlideMessage: 'Primera diapositiva',
        lastSlideMessage: 'Última diapositiva',
        paginationBulletMessage: 'Ir a la diapositiva {{index}}'
    }
});

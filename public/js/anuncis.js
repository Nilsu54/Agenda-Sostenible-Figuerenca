
const swiper = new Swiper('.anuncisSlider', {
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

$("#saveAnunci").click(function(e){
    e.preventDefault();
    var formData = new FormData();

    formData.append("titol", $("#titol").val());
    formData.append("descripcio", $("#descripcio").val());
    formData.append("categoria", $("#categoria").val());

    $.ajax({
        url: 'index.php?r=addAnunci',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            alert('Anunci creat correctament');
        },
    });
});

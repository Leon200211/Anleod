$(function() {

    /* Slider */
    $("[data-slider]").slick({
        cssEase: 'linear',
        speed: 500,
        infinite: true,
        fade: false,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    // $('[data-slider]').slick({
    //     dots: true,
    //     infinite: true,
    //     speed: 500,
    //
    //     cssEase: 'linear',
    //
    //     fade: false
    // });

});

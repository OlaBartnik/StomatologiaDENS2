function slider() {

    $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows: false,
        pauseOnFocus: false,
        pauseOnHover: false

    });

    $('.autoplay').on('touchstart', e => {
        $('.autoplay').slick('slickPlay');
    });





};

export default slider;
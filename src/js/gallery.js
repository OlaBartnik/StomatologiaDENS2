function gallery() {

    $.fancybox.defaults.thumbs.autoStart = true;

    $().fancybox({
        selector: '.gallery .slick-slide:not(.slick-cloned)',
        backFocus: false,


    });

    $(".gallery").slick({
        slidesToShow: 3,
        infinite: true,
        dots: false,
        arrows: false
    });

    $(document).on('click', '.slick-cloned', function (e) {
        var $slides = $(this)
            .parent()
            .children('.slick-slide:not(.slick-cloned)');

        $slides
            .eq(($(this).attr("data-slick-index") || 0) % $slides.length)
            .trigger("click.fb-start", {
                $trigger: $(this)
            });

        return false;
    });








}





export default gallery;
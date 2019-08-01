$(document).ready(function () {
    $('.partners__slider').slick({
        infinite: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: "unslick"
            }
        ]
    });
});


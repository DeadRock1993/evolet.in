$('.dscr').click(function () {
    if ($(this).hasClass('open')) {
        $(this).toggleClass('open');
    } else {
        $('.dscr').removeClass('open');
        $(this).toggleClass('open');
    }
});


$('.slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: true,
    autoplay: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                arrows: false
            }
        }
    ]
});

$('.partners__slider').slick({
    infinite: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    dots: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: false,
                dots: false,
                slidesToShow: 3
            }
        }
    ]
});


$('.products_slider').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    dots: false,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                arrows: true,
                slidesToShow: 3
            }
        }
    ]
});

$('.news_list').slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    dots: false,
    responsive: [
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                arrows: true
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                arrows: true
            }
        },
        {
            breakpoint: 570,
            settings: {
                slidesToShow: 1,
                arrows: true
            }
        },
    ]
});
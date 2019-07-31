function initSpriteSpin(jsonPictures)
{
    let pictures = JSON.parse(jsonPictures);

    $("#mySpriteSpin").spritespin({
        // path to the source images.
        source: pictures,
        width   : 480,  // width in pixels of the window/frame
        height  : 327,  // height in pixels of the window/frame
        animate: false,
    });
}

function toggle_popup(event) {
    $('#popup').toggleClass('visible');
}

$('#popup').click(function(e) {
    if (this === e.target) $('#popup').removeClass('visible');
});


window.onload = function() {
    var slider = document.getElementsByClassName('tabs')[0];
    resizeSlide(slider, 0);
};

//навигация по слайдеру
$('.tabs__nav').click(function(e) {
    var target = e ? e.target : event.srcElement;
    while ( target != this && target.nodeName.toLowerCase() != "button"  ) {
        target = target.parentNode;
    }
    if ( target == this ) { return; }
    //index выбранного слайда
    var index = 0;
    while ( (target = target.previousSibling) ) {
        if ( target.nodeType === 1 ) {
            index++;
        }
    }
    //Если этот слайд не активен, активируем его и скрываем тот , что бы активен
    if (!e.target.classList.contains('active')) {
        var select_slider = e.target.parentNode.parentNode;
        hideSlide(select_slider);
        showSlide(select_slider, index);
    }

});

//Стрелки влево/впарво
$('.slider_arrow').click(function(e) {
    var slider = e.target.parentNode.parentNode;
    if (e.target.classList.contains('slider_arrow-left')) previousSlide(slider);
    if (e.target.classList.contains('slider_arrow-right')) nextSlide(slider);
});



function resizeSlide(slider,index) {
    // // подгоняем высоту слайдера по содержимому
    if (slider.getElementsByClassName('tabs')[0]) {
        var wrap = slider.getElementsByClassName('tabs')[0]
    } else {
        var wrap = slider
    }
    if (wrap.getElementsByClassName('tabs_sections__section')[index]) {
        var height = wrap.getElementsByClassName('tabs_sections__section')[index].clientHeight + 50;
        $(wrap).animate({height: height}, 200);
    }
}



//скрываем активный слайд
function hideSlide(slider) {
    //index активного салйда, который нужно закрыть
    var active_slide_index;
    var slider_btns = slider.getElementsByClassName('tabs__nav')[0].getElementsByClassName('tabs_btn');
    for (var i = 0; i < slider_btns.length; i++) {
        if (slider_btns[i].classList.contains('active')) active_slide_index = i;
    }
    slider_btns[active_slide_index].classList.remove('active');
    slider.getElementsByClassName('tabs__wrap')[0].children[active_slide_index].classList.remove('active');
    //Возвращаем index скрытого слайда
    return active_slide_index;
}


//показываем слайдер по индексу
function showSlide(slider, index) {

    // // подгоняем высоту слайдера по содержимому
    resizeSlide(slider,index)

    var slider_btns = slider.getElementsByClassName('tabs__nav')[0].getElementsByClassName('tabs_btn');
    slider_btns[index].classList.add('active');
    slider.getElementsByClassName('tabs__wrap')[0].children[index].classList.add('active');
}

function nextSlide(slider) {
    var slider_btns = slider.getElementsByClassName('tabs__nav')[0].getElementsByClassName('tabs_btn');
    var index = hideSlide(slider) + 1;
    if (index === slider_btns.length) index = 0;
    showSlide(slider, index);
}

function previousSlide(slider) {
    var slider_btns = slider.getElementsByClassName('tabs__nav')[0].getElementsByClassName('tabs_btn');
    var index = hideSlide(slider) - 1;
    if (index < 0) index = slider_btns.length - 1;
    showSlide(slider, index);
}

$('.galery').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false
});

function initSlider() {
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
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    slidesToShow: 1
                }
            }
        ]
    });
}
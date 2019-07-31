$('#select').click(function () {
    $(this).toggleClass('visible');
});
$('.select__item').click(function (e) {
    $('#value').html($(this).attr('data-name'));
})

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

function catalogFilter(input) {
    this.url = input;
    this.container = document.getElementById('ajax_container');
}

catalogFilter.prototype.setUrl = function(url) {
    this.url.value = url;
}

catalogFilter.prototype.loadList = function() {

    let _this = this;

    $.ajax({
        url: this.url.value + '?show_all=Y&ajax_request=Y' + ((document.documentElement.clientWidth < 768) ? '&show_mode=slider' : ''),
        method: 'GET',
        dataType: 'html',
        success: function(html) {
            if(document.documentElement.clientWidth >= 768) {
                $('.products').addClass('grid');
            }
            $('#btn_show_all_products').hide();
            _this.container.innerHTML = html;
            if(document.documentElement.clientWidth < 768) initSlider();
        }
    });

}
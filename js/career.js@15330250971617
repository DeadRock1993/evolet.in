$('#select').click(function () {
    $(this).toggleClass('visible');
});

$('.select__item').click(function (e) {
    $('#value').html($(this)[0].innerText);
})

function toggle_popup(event, prof) {
    $('#popup').toggleClass('visible');
    if (prof) {
        $('#CAREER_modal').find('[name=form_text_18]').val(prof);
    } else {
        $('#CAREER_modal').find('[name=form_text_18]').val('');
    }
    if ($('#popup').hasClass('visible')) {
        // $('html, body').css('overflowY', 'hidden');
    } else {
        // $('html, body').css('overflowY', 'auto');
    }
}

$('#popup').click(function(e) {
    if (this === e.target) $('#popup').removeClass('visible');
    $('html, body').css('overflowY', 'auto');
});

function careerFilter(container)
{
    this.country = false;
    this.name = false;
    this.container = container;
}

careerFilter.prototype.onSelect = function(node) {
    if(node) {
        this.country = node.getAttribute('data-country-id');
        this.name = node.getAttribute('data-country-pp-name');
    }
    console.log(this);
}

careerFilter.prototype.loadList = function() {
    if(this.country && this.name) {

        let _this = this;

        $.ajax({
            url: '/career/?ajax_request=Y&countryId=' + this.country + '&countryName=' + this.name,
            method: 'GET',
            dataType: 'html',
            success: function(html) {
                _this.container.innerHTML = html;
            }
        });

    }
}

let oCareerFilter = new careerFilter(document.getElementById('ajax-list-container'));
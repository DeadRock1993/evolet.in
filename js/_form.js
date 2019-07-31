function commonForm(form, params) {
    this.form = form;
    this.params = params;
    this.fields = {};
    this.action = '/ajax/add_form_result.php';
    this.errors = [];
    this.state = 'ready';

    var _this = this,
        inputs = this.form.querySelectorAll('input');

    for(var i = 0; i < inputs.length; i++) {
        this.fields[inputs[i].getAttribute('data-code')] = inputs[i];
    }

    if(this.fields.phone) {
        this.fields.phone.addEventListener('input', function(e) {
            this.value = this.value.replace(/[A-zА-я]/g, '');
        });
    }

    this.form.addEventListener('submit', function(e) {
        e.preventDefault();
        _this.submit();
    });

    $('.file_input').change(function() {

        var wrap = $(this).parents('.file_select');
        var filename = $(this).val();
        if (filename) {
            if (filename.substring(3,11) == 'fakepath') {
                filename = filename.substring(12);
            }

            $(wrap).find(".file_name").html(filename);
            $(wrap).find(".file_wheight").html(Math.round(this.files[0].size/1024) + "Kb");

            $(wrap).find(".file_label").addClass('selected');
        }
    });
}

commonForm.prototype.submit = function() {
    this.validate();

    if(this.errors.length == 0) {
        this._sendToServer();
    } else {
        this.showErrors();
    }
}

commonForm.prototype.validate = function() {
    this.errors = [];
    this.hideErrors();

    for(var field in this.fields) {

        switch(this.fields[field].getAttribute('data-code')) {
            case 'phone':
                /*let digitsOnly = this.fields[field].value.replace(new RegExp(/\D/, 'g'), '');
                if(digitsOnly.length < 11 || digitsOnly.length > 12) {
                    this.errors.push(this.fields[field].getAttribute('data-code'));
                }*/
                break;
            case 'name':
                if(this.fields[field].value.length < 1) {
                    this.errors.push(this.fields[field].getAttribute('data-code'));
                }
                break;
            case 'email':
                if(!this.fields[field].value.match(/.*@.*\..*/)) {
                    this.errors.push(this.fields[field].getAttribute('data-code'));
                }
        }
    }
}

commonForm.prototype.showErrors = function() {
    for(var i = 0; i < this.errors.length; i++) {
        this.fields[this.errors[i]].classList.add('error');
    }
}

commonForm.prototype.hideErrors = function() {
    var errorsViewColl = this.form.querySelectorAll('.error');

    for(var i = 0; i < errorsViewColl.length; i++) {
        errorsViewColl[i].classList.remove('error');
    }
}

commonForm.prototype.showSuccess = function() {
    this.setSubmitedState();
}

commonForm.prototype._sendToServer = function() {
    var data = new FormData(this.form), _this = this;

    for(var param in this.params) {
        data.set(param, this.params.param);
    }

    $.ajax({
        url: this.action,
        method: 'POST',
        data: data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(json) {
            if(json.IS_SUCCESS) {
                _this.showSuccess();
            } else if(!json.IS_SUCCESS) {
                for(var i = 0; i < json.FIELD_ERRORS.length; i++) {
                    _this.errors.push(json.FIELD_ERRORS[i].FIELD);
                }
                _this.showErrors();
            }
        }
    });
}

commonForm.prototype.setSubmitedState = function() {

    if(this.state == 'submited') return;

    this.state = 'submited';

    let form = this.form.querySelector('.form'),
        buttons = this.form.querySelector('.buttons');

    if (buttons) {
        buttons.classList.add('submited');
    }
    form.classList.add('submited');
}

commonForm.prototype.setReadyState = function(text) {

    if(this.state == 'ready') return;

    this.state = 'ready';

    let form = this.form.querySelector('.form'),
        buttons = this.form.querySelector('.buttons');

    if (buttons) {
        buttons.classList.remove('submited');
        if(text) {
            $(buttons).find(".file_name").html(text);
            $(buttons).find(".file_label").removeClass('selected');
        }
    }

    form.classList.remove('submited');
}
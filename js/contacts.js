var map, marker;
function initMap() {
    var uluru;
    if(oContactsPage) {
        uluru = {lat: oContactsPage.lat, lng: oContactsPage.lng}
    } else {
        uluru = {lat: 55.763812, lng: 37.405896};
    }
    map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: uluru,
        disableDefaultUI: true,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_TOP
        }
    });
    marker = new google.maps.Marker({
        position: uluru,
        map: map
    });
}


function moveBus(lat,lng) {
    if(marker) {
        marker.setPosition( new google.maps.LatLng(lat, lng));
        map.panTo( new google.maps.LatLng(lat, lng));
    }
};


function zoom_map() {
    $('#map').toggleClass('big');
    $('.btn_zoom_map').toggleClass('zoom');
    if ($('#map').hasClass('big')) {
        $('.btn_zoom_map').text('Уменьшить карту');
    } else {
        $('.btn_zoom_map').text('Увеличить карту');
    }
}

function contactsPage(leftCode, rightCode, defaultCode) {
    this.data = document.getElementById('office-data');
    this.left = document.getElementById('contact-left');
    this.right = document.getElementById('contact-right');
    this.current = [];
    this.lat = 0;
    this.lng = 0;
    this.defaultCode = defaultCode;

    let _this = this;

    this.setLeft(leftCode);
    this.setRight(rightCode);
    if(rightCode != '') {
        this.activate(rightCode);
    } else {
        this.activate(leftCode);
    }

}

contactsPage.prototype.setLeft = function(code) {
    if(code.length != 2)
        return;
    let node = this.data.querySelector('#' + code);
    this.left.innerHTML = node.outerHTML;
    this.setCurrent();
}

contactsPage.prototype.setRight = function(code) {
    if(code.length != 2)
        return;
    let node = this.data.querySelector('#' + code);
    this.right.innerHTML = node.outerHTML;
    this.setCurrent();
}

contactsPage.prototype.activate = function(code) {
    let index = this.current.indexOf(code), coords = '';

    switch(index) {
        case -1:
            this.setRight(code);
            if(this.right.firstElementChild)
                this.right.firstElementChild.classList.add('active');
            if(this.left.firstElementChild)
                this.left.firstElementChild.classList.remove('active');
            coords = this.right.firstElementChild.getAttribute('data-coords');
            break;
        case 0:
            if(this.right.firstElementChild)
                this.right.firstElementChild.classList.remove('active');
            if(this.left.firstElementChild)
                this.left.firstElementChild.classList.add('active');
            coords = this.left.firstElementChild.getAttribute('data-coords');
            break;
        case 1:
            if(this.left.firstElementChild)
                this.left.firstElementChild.classList.remove('active');
            if(this.right.firstElementChild)
                this.right.firstElementChild.classList.add('active');
            coords = this.right.firstElementChild.getAttribute('data-coords');
    }

    if(coords != '') {
        coords = coords.split(',', 2);
        this.lat = Number(coords[0]);
        this.lng = Number(coords[1]);
        this.moveMarker();
    }
}

contactsPage.prototype.moveMarker = function() {
    moveBus(this.lat, this.lng);
}

contactsPage.prototype.setCurrent = function() {
    this.current = [
        (this.left.firstElementChild) ? this.left.firstElementChild.id : '',
        (this.right.firstElementChild) ? this.right.firstElementChild.id : ''
    ]
}
function interactiveMap(points, svg) {
    this.points = points;
    this.svg = svg;
    this.layer = svg.querySelector('#Layer_2');

    this.markTitle = document.getElementById('mark_title');
    this.markTitleName = this.markTitle.querySelector('#mark_title_name');

    this.mapPos = $(this.svg).position();

    let ns = 'http://www.w3.org/2000/svg';
    let _this = this;

    for(let i = 0; i < this.points.length; i++)
    {
        let circle = document.createElementNS(ns, 'circle');

        circle.setAttributeNS(null, "cx", this.points[i].x);
        circle.setAttributeNS(null, "cy", this.points[i].y);
        circle.setAttributeNS(null, "r", 2.062);
        circle.setAttributeNS(null, "fill", "#D3D80E");
        circle.setAttributeNS(null, "title", this.points[i].desc);
        circle.setAttributeNS(null, "country", this.points[i].country.toLowerCase());
        circle.setAttributeNS(null, "class", "map_mark");

        circle.addEventListener('click', function() {
            oContactsPage.activate(this.getAttribute('country'));
        });

        circle.addEventListener('mouseover', function() {

            let pos = $(this).position();

            _this.markTitle.style.top = pos.top - _this.mapPos.top - 35 + 'px';
            _this.markTitle.style.left = pos.left - _this.mapPos.left + 4 + 'px';

            _this.markTitle.classList.add('hover');
            _this.markTitleName.innerText = this.getAttribute('title');

            this.setAttribute('fill', '#000');

        });

        circle.addEventListener('mouseout', function() {

            _this.markTitle.classList.remove('hover');
            this.setAttribute('fill', '#D3D80E');

        });

        this.layer.appendChild(circle);
    }
}
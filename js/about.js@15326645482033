var time_line = document.getElementById('time_line');
var time_line_content = document.getElementById('time_line_content');
var marks = document.getElementsByClassName('mark');

(function($){
    $(window).on("load",function(){
        $("#time_line").mCustomScrollbar(
            {callbacks:{
                whileScrolling:function(){
                    var r = time_line_content.clientHeight - time_line.clientHeight;
                    var p = this.mcs.topPct;

                    for (let index = 0; index < marks.length; index++) {
                        const element = marks[index];
                        var y_element =   parseFloat(element.offsetTop) - (r*(p/100));
                        var visible_xone = time_line.clientHeight/1.5;
                        var text = element.getElementsByClassName('text')[0];
                        if (y_element < visible_xone) $(text).css('opacity', '0.61');
                        else {
                            var pr = time_line.clientHeight - visible_xone;
                            var prd = y_element - visible_xone;
                            var prdt = pr/prd;
                            $(text).css('opacity', (prdt/10)*0.61);
                        }
                    }
                    time_line.style.backgroundPositionY = p + "%";
                    // $(time_line).animate({'background-position-y': p+'%'}, 100, 'linear');
                }
            }}
        );

    });
})(jQuery);

for (let index = 0; index < marks.length; index++) {
    const element = marks[index];
    var y_element =   parseFloat(element.offsetTop);
    var visible_xone = time_line.clientHeight/1.5;
    var text = element.getElementsByClassName('text')[0];
    if (y_element < visible_xone) $(text).css('opacity', '0.61');
    else {
        var pr = time_line.clientHeight - visible_xone;
        var prd = y_element - visible_xone;
        var prdt = pr/prd;
        $(text).css('opacity', (prdt/10)*0.61);
    }
}
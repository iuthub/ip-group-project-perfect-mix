$(document).ready(function(){
    /* Prevent Default Events */
    function pde(e) {
        if (e.preventDefault)
            e.preventDefault();
        else
            e.returnValue = false;
    }
    /* WOW */
    var wow = new WOW();
    wow.init();
});

$(window).resize(function(){
    try {
        var width = $('.foods .card .card-img-top').css('width');
        $('.foods .card .card-img-top').css({'height': width});
    } catch (error) {}
});
try {
    $('.section-cuisine .cuisine .overlay').each(function(){
        $(this).mouseover(function(){
            $(this).css({
                'opacity': '1',
            })
        });
    });
    $('.section-cuisine .cuisine .overlay').each(function () {
        $(this).mouseout(function () {
            $(this).css({
                'opacity': '0',
            })
        });
    });
} catch (error) {}



$('.alertbox').fadeOut(3000);




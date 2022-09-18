$(document).ready(function(){
    var barraAltura = $('.navegacion-tamplate').innerHeight();
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if(scroll > barraAltura){
            $('.navegacion-tamplate').addClass('put-top');
            $('body').css({'margin-top': barraAltura+'px'});
        }else{
            $('.navegacion-tamplate').removeClass('put-top');
            $('body').css({'margin-top': '0px'});
        }
    });
});
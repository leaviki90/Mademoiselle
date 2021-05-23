$(document).ready(function(){
    
    
    // animation start
    function animation() {
        var windowHight = $(window).height();
        var scroll = $(window).scrollTop();
        $('.animation').each(function () {
            var pozicija = $(this).offset().top;
            var animacija = $(this).attr('data-animation');
            var delay = $(this).attr('data-delay');
            if (pozicija < scroll + windowHight - 50) {
                $(this).css('animation-delay', delay);
                $(this).addClass(animacija);
            }
        });

    }



    animation();

    $(window).scroll(function () {
        animation();
    });
// animation end


    
    if($('.professional-slider').length > 0){
         $(".professional-slider").owlCarousel({
             items: 1,
             autoplay: true,
             loop: true,
             dots: false
         });
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});
    
    
    
    
    
    
    
    
    
    
    
    
    
    



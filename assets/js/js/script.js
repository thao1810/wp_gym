jQuery(document).ready(function($) {
    $('.client-carousel').owlCarousel({
        center: true,
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            }
        }
    })
});



jQuery(document).ready(function($) {
    $('.nav-tabs nav-item').click(function(){
        $(this).css("color", "#dd2f31");
        }, function(){

      });
});
jQuery(document).ready(function($) {
    $('.tabcontent').click(function(){
        $(this).css("display", "flex");
        
    });
});



$(document).ready(function () {
   
    function serviceSluxResponsive(x) {
        if (x.matches){
            // $('#myCarousel').carousel({
            // interval: 3000
            // });
            $('.fdi-Carousel .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                if (next.next().length > 0) {
                    next.next().children(':first-child').clone().appendTo($(this));
                }
                else {
                    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                }
            });
            
        }
        else {
            // $('#myCarousel').carousel({
            // interval: 3000
            // });
            $('.fdi-Carousel .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                // next.children(':first-child').clone().appendTo($(this));
            });
            
        }
    }
    var x = window.matchMedia("(min-width: 768px)")
    serviceSluxResponsive(x) // Call listener function at run time
    x.addListener(serviceSluxResponsive) // Attach listener function on state changes

    
});



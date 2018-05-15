$(document).ready(function () {
	function feedbackSluxResponsive(y) {
        if (y.matches){
            // $('#myCarousel').carousel({
            // interval: 3000
            // });
            $('.fdi-Carousel2 .item').each(function () {
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
            $('.fdi-Carousel2 .item').each(function () {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                // next.children(':first-child').clone().appendTo($(this));
            });
            
        }
    }
    var y = window.matchMedia("(min-width: 768px)")
    feedbackSluxResponsive(y) // Call listener function at run time
    y.addListener(feedbackSluxResponsive)
});
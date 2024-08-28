// start counter section
$(document).ready(function() {
    function isInViewport(element) {
        var elementTop = $(element).offset().top;
        var elementBottom = elementTop + $(element).outerHeight();
        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    }

    
    function countUp(element) {
        var countTo = $(element).attr('data-count');
        var countNum = 0;

        var interval = setInterval(function() {
            if (countNum < countTo) {
                countNum++;
                $(element).text(countNum);
            } else {
                clearInterval(interval);
            }
        }, 30); 
    }

    $(window).on('scroll', function() {
        $('.statistic-counter').each(function() {
            if (isInViewport(this) && $(this).text() == '0') { 
                countUp(this);
            }
        });
    });

    $(window).on('scroll', function() {
        $('.statistic-counter').each(function() {
            if (!isInViewport(this)) { 
                $(this).text('0');
            }
        });
    });
});
// end counter section

// start testmonials slider
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        rtl: true,
        autoplay: true,
        dots:true,
        autoplayTimeout: 4000,
        autoplaySpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 2 
            },
            1200: {
                items: 3 
            }
        },
        autoplayHoverPause: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        smartSpeed: 900,
        slideTransition: 'ease-in-out',
        dots: true,
        dotsEach: 1
    });
});

// end testmonials slider
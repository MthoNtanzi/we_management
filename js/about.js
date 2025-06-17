// Initialize partner carousel
$(document).ready(function () {
    $('.partner-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    });

    // Add animation to stats on scroll
    $('.stat-item').each(function () {
        $(this).appear(function () {
            $(this).addClass('animated fadeInUp');
        }, { accY: -100 });
    });
});
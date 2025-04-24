jQuery(document).ready(function($) {
    $('#homepage-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 600,
        dots: true,
        dotsContainer: '.custom-dots-container'
    });
});

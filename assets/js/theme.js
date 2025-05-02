jQuery(document).ready(function($) {
    console.log('hello there');
    $('#homeslider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        dots: true,
        dotsContainer: '.custom-dots-container'
    });
    // review-active
    $('.slide-one-item').owlCarousel({
        loop:true,
        margin:0,
        items:1,
        autoplay:true,
        navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
        nav:true,
        dots:false,
        autoplayHoverPause: true,
        autoplaySpeed: 800,
        responsive:{
            0:{
                items:1,
                nav:false,
            },
            767:{
                items:1,
                nav:false,
            },
            992:{
                items:1
            }
        }
      });
      $('.event-slider').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        nav: true,
        dots: true,
        animateOut: 'fadeOut'
      });
});

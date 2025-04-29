jQuery(document).ready(function($) {
    console.log('hello there');
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
});

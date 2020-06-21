 jQuery(document).ready(function($) {
            $('.run').counterUp({
                delay: 1,
                time: 1000
            })



$('.hasan').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    autoplayTimeout:3000,
    navText:['<span><i class="fas fa-angle-left"></i></span>','<span><i class="fas fa-angle-right"></i></span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
  });

 $('.client_car').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    autoplayTimeout:3000,
    navText:['<span><i class="fas fa-angle-left"></i></span>','<span><i class="fas fa-angle-right"></i></span>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

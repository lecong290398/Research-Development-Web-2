$(document).ready(function () {
     /*$('.owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            autoplay:true,
            autoplayTimeout:6500,
            smartSpeed:1200,
            autoHeight: true,
            //navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        });*/
       /* $('.owl-carousel1').slick({
        autoplaySpeed: 3000,
        autoplay: true,
        dots: true,
        
    });*/
    $('.owl-carousel1').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 2,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});
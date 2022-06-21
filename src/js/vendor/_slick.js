// Initialise slider
$('.slider').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  lazyLoad: 'ondemand',
  adaptiveHeight: true,
  nextArrow: '<button class="carousel-control-next" type="button"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>',
  prevArrow: '<button class="carousel-control-prev" type="button"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>',
})

$('.carousel > div').addClass('slick-carousel') // Add class to similar cars
$('.carousel_aside > div').addClass('slick-carousel_aside') // Add class to carousels used as aside

// Add class to similar cars
$('.slick-carousel').slick({
  dots: true,
  speed: 300,
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  mobileFirst: true,
  lazyLoad: 'ondemand',
  nextArrow: '<button class="carousel-control-next" type="button"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>',
  prevArrow: '<button class="carousel-control-prev" type="button"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button>',
  responsive: [
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5,
        dots: true
      }
    }
  ]
})

$('.slick-carousel_aside').slick({
  dots: true,
  arrows: false,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  lazyLoad: 'ondemand',
  adaptiveHeight: true,
})

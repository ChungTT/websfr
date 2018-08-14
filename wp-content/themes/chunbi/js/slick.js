$(document).ready(function($) {
  $('#our-clients .slider').slick({
  		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		// autoplay: true,
  // 	autoplaySpeed: 2000,
    arrows: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          arrows: false,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          arrows: false,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          infinite: true,
          dots: true
        }
      }
  ]
  });
  $('.masthead .slider-header').slick({
  		infinite: true,
  		slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: true,
  		arrows: false,
  		// autoplay: true,
  		// autoplaySpeed: 2000,
  });
})


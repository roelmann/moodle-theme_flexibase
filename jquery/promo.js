$(document).ready(function(){
  $('.promocarousel').slick({
    dots: true,
    arrows: false,
    infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4,
        infinite: true,
	arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
	dots: false
      }
    }
  ]
});
});


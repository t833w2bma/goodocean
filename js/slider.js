jQuery(function ($) {
$(function () {
  $('.js-slider').slick({
    fade: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1500,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
  });

  $('.js-slider').on('touchmove', function (event, slick, currentSlide, nextSlide) {
    $('.slider').slick('slickPlay');
  });
});
});

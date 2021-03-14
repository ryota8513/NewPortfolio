$(function(){
$('.slider').slick({
  slidesToShow: 3,
  dots:true,
  swipe:true,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  infinite:true
  // appendArrows: $('.slider-content'),
  // prevArrow: '<div class="slider-arrow slider-prev fa fa-angle-left"></div>',
  // nextArrow: '<div class="slider-arrow slider-next fa fa-angle-right"></div>',
  
});
});
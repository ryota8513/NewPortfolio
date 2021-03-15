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

$(function(){
   var password='#js-password';
   var passcheck='#js-passcheck';
   $(passcheck).change(function(){
     if($(this).prop('checked')){
       $(password).attr('type','text');
     }else{
       $(password).attr('type','password');
     }
   });
});
